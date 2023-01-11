<?php
	class IndexController extends Controller{
		public function index(){
            if(isset($_COOKIE['email']) && (isset($_COOKIE['password']))){
                $fetch = $this->model('users')->select()
                                                    ->where('email','=',$_COOKIE['email'])
                                                    ->where('password','=',$_COOKIE['password'])
                                                    ->execute()
                                                    ->fetch();

                set_session('user',$fetch);
            }

            $this->view('index');
		}	
	}
?>