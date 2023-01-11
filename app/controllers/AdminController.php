<?php
	class AdminController extends Controller{
		public $data = [];
        public $empty_keys = [];

        public function index(){
            $this -> view('admin/index');
        }

        public function home(){
            $main_all = $this->model('films')->select()
                                                    ->execute()
                                                    ->fetchAll();

            $this -> view('admin/home',$main_all);
        }

        function login(){
            if($_POST['username'] == '' || $_POST['pass'] == ''){
                echo 'Fill in empty fields';
                exit;
            }

            $fetch = $this->model('admin')->select()
                                                ->where('username','=',$_POST['username'])
                                                ->where('password','=',$_POST['pass'])
                                                ->execute()
                                                ->fetch();

            if($fetch == null){
                echo 'Wrong username or password';
            }
                else{
                    set_session('admin',$fetch);
                }

        }

        function logout(){
            remove_session('admin');
            redirect('admin/index');
            //$this -> view('admin/index',...);
        }

        function search(){
            $fetch = $this->model('films')->select()
                                                ->where('film_name',' LIKE ','%'.$_POST['name'].'%')
                                                ->execute()
                                                ->fetchAll();

            if(count($fetch) == 0){
                echo 0;
            }
                else{
                    echo json_encode($fetch);
                }
        }


        public function for_edit() {
            $edit_data = $this->model('films')->select()
                                                    ->where('id','=',$_POST['id'])
                                                    ->execute()
                                                    ->fetch();

            $edit_data['URLROOT'] = URLROOT;
            echo json_encode($edit_data);
        }

        /*  Preparing for the upgrade process!  */
        public function film_edit (){

            foreach ($_POST as $key => $value) {
               /*  Placing empty and full values in separate arrays!  */
                if($value == '' || $value == 'Year of film production' || $value == 'Production countries' || $value == 'Select genres'){
                    array_push($this->empty_keys,$key);
                }

                    else{
                        $this->data[$key] = $this->model('films')->cleanPosts($value);
                    }
            }


            /*  Request and selection of values for the modal window!  */
            $old_data = $this->model('films')->select()
                                                    ->where('id', '=',  $this->data['film_id'])
                                                    ->execute()
                                                    ->fetch();

            /*  We will select the main pictures for display in the modal window!  */
            $this->data['film_img'] = $old_data['film_img'];
            $this->data['film_video'] = $old_data['film_video'];
            set_session('edit_values',$this->data);

            if(!empty($this->empty_keys)){
                set_session('edit_empty_keys',$this->empty_keys);
            }

            else{
                if($_FILES['film_img']['name'] != ''){
                    $path = 'public/admin/main/films/';
                    $upload_img = file_upload_img($_FILES['film_img']['tmp_name'], $_FILES['film_img']['name'], $path);
                    $this->data['film_img'] = $upload_img['data'];
                    /*  Deleting a picture in the films folder if a new picture is selected!  modal*/
                    unlink('public/admin/main/films/' . $old_data['film_img']);
                }

                if($_FILES['film_video']['name'] != ''){
                    $path = 'public/admin/main/videos/';
                    $upload_video = file_upload_video($_FILES['film_video']['tmp_name'], $_FILES['film_video']['name'], $path);
                    $this->data['film_video'] = $upload_video['data'];
                    /*  Deleting a video in the videos folder if a new video is selected!  modal*/
                    unlink('public/admin/main/videos/' . $old_data['film_video']);
                }

                foreach ($this->data as $key => $value) {
                    $res = $this->model('films')->update()
                                                        ->set($key, '=', $value)
                                                        ->where('id', '=', $old_data['id'])
                                                        ->execute();

                }

                if($res == true){
                    $update_success = '<span text-success>Update completed successfully!</span>';
                    set_session('update_success',$update_success);
                }
            }

            //$this -> view('admin/home',...);
            redirect('admin/home');
        }



        public function check_before_adding(){
           if(($_FILES)['film_img']['name'] == '') {
                $this->data['film_img'] = '';
                array_push($this->empty_keys, 'film_img');
           }
                else{
                    if(strpos($_FILES['film_img']['type'],'video') == 'integer'){
                        $error_img = 'Error image type';
                        set_session('error_img',$error_img);
                    }
                        else{
                            $path = 'public/admin/main/films/';
                            $upload_img = file_upload_img($_FILES['film_img']['tmp_name'],$_FILES['film_img']['name'],$path);
                            $this->data['film_img'] = $upload_img['data'];
                        }
                }

           if($_FILES['film_video']['name'] == ''){
                $this->data['film_video'] = '';
                array_push($this->empty_keys,'film_video');
           }
                else{
                    if(strpos($_FILES['film_video']['type'],'image') == 'integer'){
                        $error_video = 'Error video type';
                        set_session('error_video',$error_video);
                    }
                        else{
                            $path = 'public/admin/main/videos/';
                            $upload_video = file_upload_video($_FILES['film_video']['tmp_name'],$_FILES['film_video']['name'],$path);
                            $this->data['film_video'] = $upload_video['data'];
                        }
                }


                    foreach($_POST as $key => $value){
                        if(empty($value) || ($value == 'Year of film production' || $value == 'Production countries' || $value == 'Select genres')){
                            array_push($this->empty_keys,$key);
                        }
                        $this->data[$key] = $this->model('films')->cleanPosts($value);
                   }

                if(count($this->empty_keys) > 0){
                    if(isset($upload_img['data'])){
                        unlink('public/admin/main/films/' . $upload_img['data']);
                    }
                    if(isset($upload_video['data'])){
                        unlink('public/admin/main/videos/' . $upload_video['data']);
                    }

                    set_session('empty_keys',$this->empty_keys);
                    set_session('reg_form_values',$this->data);
                }
                    else{
                        set_session('reg_form_values',$this->data);

                        if (get_session('error_img') != null){
                            if(isset($upload_video['data'])){
                                unlink('public/admin/main/videos/' . $upload_video['data']);
                            }
                        }
                        elseif (get_session('error_video') != null){
                            if(isset($upload_img['data'])){
                                unlink('public/admin/main/films/' . $upload_img['data']);
                            }
                        }

                        else{
                            $res = $this->model('films')->insert($this->data);

                            if($res == true){
                                remove_session('empty_keys');
                                remove_session('reg_form_values');
                                redirect('admin/home');
                            }else{
                                unlink('public/admin/main/films/' . $upload_img['data']);
                                unlink('public/admin/main/videos/' . $upload_video['data']);
                            }
                        }
                    }

            redirect('admin/home');
            //$this -> view('admin/home',...);
       }

        public function delete(){
            $fetch = $this->model('films')->select()
                                                ->where('id','=',$_POST['id'])
                                                ->execute()
                                                ->fetch();

            $del_img = $fetch['film_img'];
            $del_video = $fetch['film_video'];

            if(file_exists('public/admin/main/films/'.$del_img)){
                unlink('public/admin/main/films/'.$del_img);
            }
            if(file_exists('public/admin/main/videos/'.$del_video)){
                unlink('public/admin/main/videos/'.$del_video);
            }

            if(!file_exists('public/admin/main/films/'.$del_img) && !file_exists('public/admin/main/videos/'.$del_video)){
                $remove = $this->model('films')->remove()
                                                        ->where('id','=',$_POST['id'])
                                                        ->execute();

                if($remove == true){
                    echo 1;
                }
            }
        }
    }
?>