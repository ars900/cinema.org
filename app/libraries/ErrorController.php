<?php
	class ErrorController extends Controller{
	
		public function page_404(){
            $this->view('error');
		}
		
		public function render_error($key,$message){
			set_session($key,$message);
		}
		
		public function clean_errors(){
			foreach($_SESSION as $key => $value){
				if($key != 'user'){
					if($key != 'admin'){
						unset($_SESSION[$key]);
					}
                    elseif ($key == 'admin'){
                       if(get_session('empty_keys' != null) && get_session('reg_form_values' != null)){
                            unset($_SESSION[$key]);
                        }
                   }
				}
			}
		}
				
	}

?>