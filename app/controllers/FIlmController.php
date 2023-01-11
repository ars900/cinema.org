<?php
    class FilmController extends Controller{
        public function index(){
            $this->view('error');
        }

        public function fullFilm($id){ /** Actions and data collection related to the selected film **/

            if(empty($id)){ /** Jump to error if no movie with corresponding id is found **/
                $this->view('error');
            }

                else{
                    $rows_and_seats = $this->model('rows_and_seats')->select() /** Row and seat data request **/
                                                                            ->execute()
                                                                            ->fetch();

                    $film_id = urlLastElem($_SERVER['REQUEST_URI']); /** Get the movie id from the address bar **/

                    $reserved_seats = $this->model('reserved_seats')->select('','reserved_seats','*') /** Request for reserved seats **/
                                                                               ->join('INNER JOIN','reserved_seats','films','film_id','id')
                                                                                ->where('','',$film_id,'films','id')
                                                                                 ->execute()
                                                                                 ->fetchAll();

                    $fetch = $this->model('films')->select() /** Request data for the movie with the corresponding id **/
                                                            ->where('id','=',$id)
                                                            ->execute()
                                                            ->fetch();

                    if($fetch == null){ /** Go to error if there is no movie with the given id **/
                        $this->view('error');
                    }
                        else{ /** Collected data that is subject to action **/
                           $this->view('fullFilm',$fetch,$rows_and_seats,$reserved_seats);
                        }
                }
        }



        public function seatStatus(){ /** Actions determining seat status **/
            if(isset($_POST['key']) && $_POST['key'] == 'remove'){
                $res = $this->model('reserved_seats')->remove()
                                                                ->where('user_id','=',$_POST['user_id'])
                                                                ->where('film_id','=',$_POST['film_id'])
                                                                ->where('row','=',$_POST['row'])
                                                                ->where('seat','=',$_POST['seat'])
                                                                ->execute();

                if($res == true){
                    echo 1;
                }

            }

                else{ /** Seat reservation if the given seat is not available in the database **/
                    $fetch = $this->model('reserved_seats')->select()
                                                                    ->where('user_id','=',$_POST['user_id'])
                                                                    ->where('film_id','=',$_POST['film_id'])
                                                                    ->where('row','=',$_POST['row'])
                                                                    ->where('seat','=',$_POST['seat'])
                                                                    ->execute()
                                                                    ->fetch();

                    if($fetch == null){
                        $res = $this->model('reserved_seats')->insert($_POST);
                        if($res == true){
                            echo 1;
                        }
                    }
                }
        }
    }