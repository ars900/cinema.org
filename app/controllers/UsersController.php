<?php
	class UsersController extends Controller{
		public $data = [];
		public $empty_keys = [];
		
		
		public function registration(){
            foreach($_POST as $key => $value){
				if(empty($value)){
					array_push($this->empty_keys,$key);
				}

				$this->data[$key] = $this->model('users')->cleanPosts($value);
			}
			// Empty Fields Not Exists			
			if(count($this->empty_keys) == 0){
				// password length
				if(strlen($this->data['password']) >= 6){
					
					$num = $this->model('users')->select()->where('email','=',$this->data['email'])->execute()->rowCount();

					// Email Not Exists
					if($num == 0){
						$res = $this->model('users')->insert($this->data);
						if($res){
							set_session('reg_success',"Thank's!, You Are Registrated");
						}
					}
						else{
							$error = new ErrorController();
							$error->render_error('reg_email',"Email already exists");
							
							set_session('reg_form_values',$this->data);
						}
					
				}else{
					$error = new ErrorController();
					$error->render_error('reg_pass_length','Minimum password length is 6.');
					set_session('reg_form_values',$this->data);
				}
				
			}else{
                set_session('empty_keys',$this->empty_keys);
				set_session('reg_form_values',$this->data);
            }
					
			redirect('index');
        }
				
		public function login(){

            if(empty($_POST['log_email']) || empty($_POST['log_pass'])){
				$error = new ErrorController();
				$error->render_error('empty_fields','All Fields are required');
                redirect('index');
			}
				else{

					$num = $this->model('users')->select()
                                                        ->where('email','=',$_POST['log_email'])
                                                        ->where('password','=',md5($_POST['log_pass']))
                                                        ->execute()
                                                        ->rowCount();
					if($num == 0){
						$error = new ErrorController();
						$error->render_error('wrong_login','Wrong email or password');
                        redirect('index');
					}
						else{
							$fetch = $this->model('users')->select()
                                                                ->where('email','=',$_POST['log_email'])
                                                                ->where('password','=',md5($_POST['log_pass']))
                                                                ->execute()
                                                                ->fetch();

							set_session('user',$fetch);

                            if(isset($_POST['remember'])){
                                setcookie('email', $fetch['email'], time() + (86400 * 30),"/"); // 86400 = 1 day
                                setcookie('password', $fetch['password'], time() + (86400 * 30),"/"); // 86400 = 1 day
                            }

                            redirect('home');
                        }
				}
		}
		
		public function logout(){
            remove_session('user');

            if(isset($_COOKIE['email']) && (isset($_COOKIE['password']))){
                setcookie('email', 'x', time() - (86400 * 30),"/"); // 86400 = 1 day
                setcookie('password', 'y', time() - (86400 * 30),"/"); // 86400 = 1 day
            }

            redirect('index');
		}
	}
?>