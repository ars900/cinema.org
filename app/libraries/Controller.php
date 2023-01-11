<?php

	class Controller{
		
		private $allowed_user_pages = ['index', 'error'];
		private $allowed_admin_pages = ['index', 'error'];

        public function view($view,$data = false,$rows_and_seats = false,$reserved_seats = false){
            $exp = explode('/',$view);
            if($exp[0] == 'admin'){
                if(get_session('admin') == null && $view == 'admin/home' || get_session('admin') == null && $_SERVER['REQUEST_URI'] == '/admin'){
                    redirect('admin/index');
                }
                elseif(get_session('admin') != null && $view == 'admin/index'){
                    redirect('admin/home');
                }
                    if(file_exists('app/views/pages/'.$view.'.php')){
                        require 'app/views/pages/layouts/admin'.$exp[1].'_header.php';
                        require 'app/views/pages/'.$view.'.php';
                        require 'app/views/pages/layouts/admin'.$exp[1].'_footer.php';
                    }
            }

                else{
                    if(get_session('user') == null && $view == 'home' || get_session('user') == null && $_SERVER['REQUEST_URI'] == '/'){
                        redirect('index');
                    }
                    elseif(get_session('user') != null && $view == 'index'){
                       redirect('home');
                    }
                       if(file_exists('app/views/pages/'.$view.'.php')){
                           if($view == 'fullFilm'){
                               require 'app/views/pages/layouts/header_fullFilm.php';
                           }
                               else{
                                   require 'app/views/pages/layouts/header.php';
                               }

                           require 'app/views/pages/'.$view.'.php';

                            if($view == 'fullFilm'){
                                require 'app/views/pages/layouts/footer_fullFilm.php';
                            }
                                else{
                                    require 'app/views/pages/layouts/footer.php';
                                }
                       }
                }
		}
			
			
				
		public function model($model){
            require_once APPROOT.'/models/'. ucwords($model) . '.php';
            return new $model();
		}
	}


?>