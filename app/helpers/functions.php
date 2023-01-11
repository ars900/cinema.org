<?php
	session_start();

	/** Get the last element from the address of the current page **/

	function urlLastElem($url){
        $url = rtrim($url, '/');
        $lastElem = preg_replace('/[^0-9]/i', ' ', $url);
        $lastElem = trim($lastElem," ");
        return $lastElem;
    }

    /**  We get parameters for displaying rows, seats, their numbers, as well as the state of seats **/

	function SeatsAndTheirStatuses($film_id,$rows_and_seats,$reserved_seats){?>
        <?php for($r=1;$r<= $rows_and_seats['rows'];$r++){?>
            <div class = "mx-auto position-relative d-flex flex-row" style = "width: max-content;"><!---- row ---->
                <span class = "row_number"><?= $r ?></span><!---- row number ---->
                <div class = "seats_parent d-flex"><!---- seat ---->
                    <?php for($i=1;$i<=$rows_and_seats['seats'];$i++){?><!---- Seat number ---->
                    <!---- We transfer parameters to each seat in order to change their settings! ---->
                    <div data-user_id = "<?= get_session('user')['id'] ?>" data-film_id = "<?= $film_id ?>" data-seat = "<?= $i ?>" class = "
                            <?php
                                foreach($reserved_seats as $value){
                                    if($value['user_id'] != get_session('user')['id']  && $value['row'] == $r && $value['seat'] == $i){
                                        echo 'otherBooked ';
                                    }elseif($value['user_id'] == get_session('user')['id']  && $value['row'] == $r && $value['seat'] == $i){
                                        echo 'booked ';}
                                }
                            ?>
                            pointer seat rounded-circle border border-dark d-flex justify-content-center align-items-center" data-bs-toggle="modal" data-bs-target="#toBooking" style = "width: 50px;height:50px;">
                        <?= $i ?>
                    </div>

                    <?php } ?>
                </div>

                <!---- Modal window for booking a seat ---->
                <div class="modal fade" id="toBooking" tabindex="-1" aria-labelledby="toBooking" data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="toBooking">Notice of possible seat status change !</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                            </div>
                            <div class="modal-body">
                                <p class="modal_content fs-6 text-success">Are you sure you want to book this seat ?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                <button type="button" data-bs-dismiss="modal" id = "book" data-user_id = "" data-film_id = "" data-row = "" data-seat = "" class="btn btn-primary">Yes</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!---- modal window for canceling a booking ---->
                <div class="modal fade" id="toCancellationReservation" tabindex="-1" aria-labelledby="toCancellationReservation" data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="toCancellationReservation">Notice of possible seat status change !</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                            </div>
                            <div class="modal-body">
                                <p class="modal_content fs-6 text-danger">Do you really want to cancel your booking ?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                <button type="button" data-bs-dismiss="modal" id = "cancelReservation" data-user_id = "" data-film_id = "" data-row = "" data-seat = "" class="btn btn-primary">Yes</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!---- modal window by another user for reserved seat notification ---->
                <div class="modal fade" id="infoBooking" tabindex="-1" aria-labelledby="infoBooking" data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="infoBooking">Notice of possible seat status change !</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                            </div>
                            <div class="modal-body">
                                <p class="modal_content fs-6">This seat is already booked !</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" data-bs-dismiss="modal" class="btn btn-primary">Ok</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    <?php } ?>

<?php
	//---------------Parameters for registration and login!---------------//

	function reg_success($reg_success){
		echo ($reg_success != null) ? '<div class="alert alert-success" role="alert">'.$reg_success.'</div>' : '';
	}

	function login_data($value,$array){
		echo (in_array($value,$array)) ? $value : 'none';
	}

	function login_error($login_error,$errors_login){
		if($login_error == ''){
			return false;
		}else{
			echo (in_array($login_error,$errors_login)) ? '<div class="alert alert-danger" role="alert">'.$login_error.'</div>' : '';
		}
	}

    function in_arr($needle,$haystack,$value = false,$value_1 = false){
        if(in_array($needle,$haystack)){
            if($value == false){
                echo $needle;
            }
                else{
                    echo $value;
                }
        }
            else{
                  echo $value_1;
            }
        return;
    }

	function email_exists($email_exists){
		echo ($email_exists != null) ? 'block' : 'none';
	}
	
	function pass_length($pass_length){
		echo ($pass_length != null) ? 'block' : 'none';
	}
		
			
	//--------- Create Session Variable ----------//
	
	function set_session($name, $value){
		$_SESSION[$name] = $value;
		if(isset($_SESSION[$name])){
			return true;
		}
			else{
				return false;
			}
    }
	
	
	//--------- Get Session Variable -----------//
	
	function get_session($name){
		if(isset($_SESSION[$name])){
			return $_SESSION[$name];
		} else{
			return null;
		}
	}
	
		
    function remove_session($name){
		if(isset($_SESSION[$name])){
			unset($_SESSION[$name]);
			return true;
		}
			else{
				return false;
			}
    }
	
		
	function redirect($url){
		if($url == '/'){
			header('Location:'.URLROOT);
		}
			else{
				header('Location:'.URLROOT.$url);
			}
		
	}
	
	function get_file_format($file_name){
        $array = explode('.', $file_name);
        $ext = end($array);
        return $ext;
    }
    function change_file_name(){
        $file_name = md5(microtime());
        return $file_name;
    }
	
	function file_upload_img($file_tmp_name,$file_name,$path){
		$response = [];
		$allowed_exts = ['jpg','jpeg','png','gif','webp'];
		$extension = get_file_format($file_name);
		if(in_array($extension, $allowed_exts)){
            $new_file_name = change_file_name().'.'.$extension;
            $upload_file = move_uploaded_file($file_tmp_name,$path.$new_file_name);

            if($upload_file){
				$response['message'] = 'Upload Has Successfully Done';
				$response['status'] = 'success';
				$response['data'] = $new_file_name;
            }
				else{
					$response['message'] = 'Something Went Wrong';
					$response['status'] = 'error';
					$response['data'] = '';
				}

        }else{
			$response['message'] = 'File Type Is Incorrect!';
			$response['status'] = 'error';
			$response['data'] = '';
		}

		return $response;
	}

function file_upload_video($file_tmp_name,$file_name,$path){
    $response = [];
    $allowed_exts = ['mp4','mov','wmv','flv','avi','avchd','webm','mkv'];
    $extension = get_file_format($file_name);
    if(in_array($extension, $allowed_exts)){
        $new_file_name = change_file_name().'.'.$extension;
        $upload_file = move_uploaded_file($file_tmp_name,$path.$new_file_name);
        if($upload_file){
            $response['message'] = 'Upload Has Successfully Done';
            $response['status'] = 'success';
            $response['data'] = $new_file_name;
        }
        else{
            $response['message'] = 'Something Went Wrong';
            $response['status'] = 'error';
            $response['data'] = '';
        }

    }else{
        $response['message'] = 'File Type Is Incorrect!';
        $response['status'] = 'error';
        $response['data'] = '';
    }
    return $response;
}

	function film_img($arr_img){
		if($arr_img != ''){
			$arr_img = URLROOT.'app/admin/public/user/images/uploads/'.$arr_img;
		}else{
			$arr_img = URLROOT.'app/admin/public/user/images/avatar/movie.jpg';
		}
		
		return $arr_img;
	}
	
	/*

    function check_avatar(){
        if(get_session('user')['avatar'] == null){
            $avatar_src = URLROOT.'public/images/avatar/'.get_session('user')['gender'].'.jpg';
        }else {
            $avatar_src = URLROOT.'public/uploads/avatars/'.get_session('user')['avatar'];
        }
        return $avatar_src;
    }
		

    function get_file_format($file_name){
        $array = explode('.', $file_name);
        $ext = end($array);
        return $ext;
    }
    function change_file_name(){
        $file_name = md5(date("Y h:i:s A"));
        return $file_name;
    }
	
	function file_upload($file_tmp_name,$file_name,$path){
		$response = [];
		$allowed_exts = ['jpg','jpeg','png','gif','webp'];
		$extension = get_file_format($file_name);
		if(in_array($extension, $allowed_exts)){
            $new_file_name = change_file_name().'.'.$extension;
            $upload_file = move_uploaded_file($file_tmp_name,$path.$new_file_name);
            if($upload_file){
				$response['message'] = 'Upload Has Successfully Done';
				$response['status'] = 'success';
				$response['data'] = $new_file_name;
            }
				else{
					$response['message'] = 'Something Went Wrong';
					$response['status'] = 'error';
					$response['data'] = '';
				}

        }else{
			$response['message'] = 'File Type Is Incorrect!';
			$response['status'] = 'error';
			$response['data'] = '';
		}
		return $response;
	}

    function date_difference($from_time){
        date_default_timezone_set("Asia/Yerevan");
        $to_time = strtotime(date("Y-m-d H:i:s"));
        $from_time = strtotime($from_time);
        $diff = abs($to_time - $from_time);
        $years = floor($diff / (365*60*60*24));
        $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
        $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
        $hours = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24) / (60*60));
        $minutes = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60)/ 60);
        $seconds = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60 - $minutes*60));
        if($days >= 1){
            return $days.'d ago';
        }
        else if($hours < 24 && $hours>0){
            return $hours.'h '.$minutes.' min ago';
        }
        else if($hours < 1 && $minutes > 0 ){
            return $minutes.'min ago';
        }else {
            return 'just now';
        }
    }
	
    function cleanPosts($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

	*/
?>