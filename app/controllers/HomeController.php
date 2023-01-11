<?php
	class HomeController extends Controller{

		public function index(){
            $fetch_all = $this->model('films')->select('LIMIT 10')
                                                    ->execute()
                                                    ->fetchAll();

            $this->view('home',$fetch_all);
        }


        public function movies(){
           $this->view('movies');
        }

        public function locations(){
           $this->view('locations');
        }

        public function dealsandexclusives(){
            $this->view('dealsandexclusives');
        }

        public function advertise(){
            $this->view('advertise');
        }

	}
?>