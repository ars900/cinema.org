		<div class = "container mt-5">
			<div class = "row">
				<div class = "col-lg-5 col-md-6 col-sm-12 border border-secondary">
					<div class = "col-lg-12 col-md-12 col-sm-12">
						<h2 class="display-5 text-center pt-3">Registration Form</h2>
					</div>
					<form action = "<?= URLROOT; ?>users/registration" method = "post">
						
						<div class="form-row row mt-4">
							<div class="form-group col-md-6 position-relative">
								  <span class = "for_error for_error_more position-absolute d-<?= (get_session('empty_keys') == null) ? 'none' : (in_arr('name',get_session('empty_keys'),'block','none')); ?>">require field *</span>
								  <label for="name">Name</label>
								  <input type="text" class="form-control <?= (get_session('empty_keys') != null) && in_arr('name',get_session('empty_keys'),'border-danger') ?>" id="name" name = "name" aria-describedby="emailHelp" placeholder="Enter Name"
								  value = "<?=(get_session('reg_form_values') != null) && (isset(get_session('reg_form_values')['name']) && in_arr(get_session('reg_form_values')['name'],get_session('reg_form_values')));?>" />
							</div>
							<div class="form-group col-md-6 position-relative">
								 <span class = "for_error for_error_more position-absolute d-<?= (get_session('empty_keys') == null) ? 'none' : (in_arr('surname',get_session('empty_keys'),'block','none')); ?>">require field *</span>
								  <label for="surname">SurName</label>
								  <input type="text" class="form-control <?= (get_session('empty_keys') != null) && in_arr('surname',get_session('empty_keys'),'border-danger') ?>" id="name" name = "surname" aria-describedby="emailHelp" placeholder="Enter Surname"
								  value = "<?=(get_session('reg_form_values') != null) && (isset(get_session('reg_form_values')['surname']) && in_arr(get_session('reg_form_values')['surname'],get_session('reg_form_values')));?>" />
							</div>
						</div>
						<div class="form-group mt-2 position-relative">
							<span class = "for_error position-absolute d-<?= (get_session('empty_keys') == null) ? 'none' : (in_arr('email',get_session('empty_keys'),'block','none')); ?>">require field *</span>
                            <span class = "for_error position-absolute d-<?=(get_session('empty_keys') == null && get_session('reg_email') != null) ? 'block' : 'none'; ?>"> Email already exists *</span>
													
							<label for="email">Email</label>
							<input type="text" class="form-control <?= (get_session('empty_keys') != null) && in_arr('email',get_session('empty_keys'),'border-danger') ?>" id="email" name = "email" aria-describedby="emailHelp" placeholder="Enter Surname"
							 value = "<?=(get_session('reg_form_values') != null) && (isset(get_session('reg_form_values')['email']) && in_arr(get_session('reg_form_values')['email'],get_session('reg_form_values')));?>" />
						</div>
						
						<div class = "row mt-2">
							<div class="form-group col-md-6 position-relative">
								<span class = "for_error for_error_more position-absolute d-<?= (get_session('empty_keys') == null) ? 'none' : (in_arr('password',get_session('empty_keys'),'block','none')); ?>">require field *</span>
								<label for="pass">Password</label>
								<input type="password" class="form-control <?= (get_session('empty_keys') != null) && in_arr('password',get_session('empty_keys'),'border-danger') ?>"
								id="pass" name = "password" aria-describedby="emailHelp" placeholder="Enter Password">
                                <span class = "for_error d-<?=(get_session('empty_keys') == null && get_session('reg_pass_length') != null) ? 'block' : 'none'; ?>"> Minimum password length is 6. *</span>
							</div>
							<div class="form-group col position-relative">
								<span class = "for_error for_error_more position-absolute d-<?= (get_session('empty_keys') == null) ? 'none' : (in_arr('age',get_session('empty_keys'),'block','none')); ?>">require field *</span>
								<label for="age">Age</label>
								<input type="text" class="form-control <?= (get_session('empty_keys') != null) && in_arr('age',get_session('empty_keys'),'border-danger') ?>" id="age" name = "age" aria-describedby="emailHelp" placeholder="Enter Surname"
								value = "<?=(get_session('reg_form_values') != null) && (isset(get_session('reg_form_values')['age']) && in_arr(get_session('reg_form_values')['age'],get_session('reg_form_values')));?>" />
							</div>
						</div>
						<div class="form-check form-check-inline">
						  <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="male" checked>
						  <label class="form-check-label" for="inlineRadio1">Male</label>
						</div>
						<div class="form-check form-check-inline mt-3">
						  <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="female">
						  <label class="form-check-label" for="inlineRadio2">FeMale</label>
						</div>
						<div class = "form-group mt-2">
							<button type="submit" value = "reg_submit" class="btn btn-success btn-lg d-block w-100">Registration</button>
						</div>
						<div class = "mt-3">
							<?php reg_success(get_session('reg_success')) ?>
						</div>						
					</form>
				</div>
				<div class = "col-lg-2"></div>
				<div class = "col-lg-5 col-md-6 col-sm-12 border border-secondary">
					<div class = "col-lg-12 col-md-12 col-sm-12">
						<h2 class="display-5 text-center pt-3">Login Form</h2>
					</div>
					<form action = "<?= URLROOT; ?>users/login" method = "post" class = "mt-4"> 
						<div class="form-group mt-3 position-relative">
							<label for="log_email">Login</label>
							<input type="email" class="form-control" id="log_email" name = "log_email" aria-describedby="emailHelp"
							placeholder="Enter Email"/>
						</div>
						<div class="form-group mt-3 position-relative">
							<label for="log_pass">Password</label>
							<input type="password" class="form-control" id="log_pass" name = "log_pass" aria-describedby="emailHelp" placeholder="Password" />
						</div>
						<div class="form-check mt-3">
							<input class="form-check-input" name = "remember" type="checkbox" value="login_remember" id="flexCheckDefault">
							<label class="form-check-label" for="flexCheckDefault">
								remember me?
							</label>
						</div>
						<div class = "form-group mt-4">
							<button type="submit" class="btn btn-primary btn-lg d-block w-100">Login</button>
						</div>
						<div class = "mt-3">
							<?php
								if(get_session('empty_fields') != null){
									echo 	'<div class="alert alert-danger" role="alert">
												'.get_session('empty_fields').'
											</div>';
								}
								else if(get_session('wrong_login') != null){
									echo 	'<div class="alert alert-danger" role="alert">
												'.get_session('wrong_login').'
											</div>';
								}
							?>
						</div>	
					</form>
				</div>
			</div>
		</div>




		
		
		
		
		
		