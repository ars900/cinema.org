<body class="hold-transition sidebar-mini layout-fixed <?= (get_session('edit_empty_keys') != null) ? 'modal-open' : ''; ?>" style = "<?= (get_session('edit_empty_keys') != null) ? 'style="height: auto; overflow: hidden; padding-right: 17px;"' : ''; ?>" />
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button">
			<span class="material-symbols-outlined">
				menu
			</span>
		</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a class="admin_home nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" role="button">
          <span class="material-symbols-outlined">
			 search
		  </span>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search film" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="button">
					<span class="material-symbols-outlined">
						search
					</span>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                        <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                    </svg>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <span class="nav-link" data-toggle="dropdown">
          <span class="material-symbols-outlined">
			forum
		  </span>
          <span class="badge badge-danger navbar-badge">3</span>
        </span>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?= URLROOT.'public/admin/pars/dist/img/user1-128x128.jpg' ?>" alt="User Avatar" class="img-size-50 mr-3 img-circle">
			  <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src=" <?= URLROOT.'public/admin/pars/dist/img/user8-128x128.jpg' ?>" alt="User Avatar" class="img-size-50 img-circle mr-3">
			  <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?= URLROOT.'public/admin/pars/dist/img/user3-128x128.jpg' ?>" alt="User Avatar" class="img-size-50 img-circle mr-3">
			  <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <span class="material-symbols-outlined">
			notifications
		  </span>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
         <span class="material-symbols-outlined">
			open_with
		 </span>
        </a>
      </li>
      <li id = "logout_admin">
        <a class="nav-link pointer" href="<?= URLROOT ?>admin/logout">
          <div class="material-symbols-outlined">
			  logout
		  </div>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?= URLROOT.'public/admin/pars/dist/img/AdminLTELogo.png' ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
	  <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="admin_avatar">
			<img src="<?= URLROOT.'public/admin/pars/dist/img/user2-160x160.jpg' ?>" class="img-circle elevation-2" alt="User Image">
		</div>
       
		<div class="info">
           <span class="d-block text-light"><?= (get_session('admin')!= null) ? get_session('admin')['username'] : '' ; ?></span>
		</div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <span class="material-symbols-outlined text-light">
				 search
			  </span>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="nav-icon bi bi-speedometer2" viewBox="0 0 16 16">
				  <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
				  <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z"/>
			 </svg>
              <p>
                Dashboard
                <span class="right material-symbols-outlined">
					expand_more
				</span>
			  </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <span class="admin_home pointer nav-link active">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="nav-icon bi bi-circle" viewBox="0 0 16 16">
					  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
				  </svg>
				  <p>Dashboard v1</p>
                </span>
              </li>
		    </ul>
          </li>
	   </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
   <section class="content">

       <form id="uploadForm" action = "<?= URLROOT ?>admin/check_before_adding" method = "post" enctype="multipart/form-data">
		   <div class="container border-bottom" style = "padding: 0 0 5px 0">
				<div class="row row-cols-2">
					<div class = "col-lg-6 mt-4">
                        <div class = "margin_top_err text-end text-danger d-<?= (get_session('empty_keys') == null) ? 'none' : (in_arr('film_name',get_session('empty_keys'),'block','none')); ?>">require field *</div>
						<div class="input-group mb-3">
							<span class="input-group-text">Film name</span>
							<input type="text" name = "film_name"  id="film_name" class="form-control input_validate
                            <?= (get_session('empty_keys') != null) && in_arr('film_name',get_session('empty_keys'),'border-danger') ?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"
                            value = "<?=(get_session('reg_form_values') != null) && in_arr(get_session('reg_form_values')['film_name'],get_session('reg_form_values'));?>"/>
                        </div>
					</div>
					<div class = "col-lg-6 mt-4">
						<div class = "margin_top_err text-end text-danger film_date_empty d-<?= (get_session('empty_keys') == null) ? 'none' : (in_arr('film_date',get_session('empty_keys'),'block','none')); ?>">require field *</div>
						<select class="form-select input_validate <?= (get_session('empty_keys') != null) && in_arr('film_date',get_session('empty_keys'),'border-danger') ?>" name = "film_date"  id = "film_date" aria-label="Default select example">
						   <option selected><?= (get_session('reg_form_values') == null) ? 'Year of film production' : in_arr(get_session('reg_form_values')['film_date'],get_session('reg_form_values')); ?></option>
						   <option value="2022">2022</option>
						   <option value="2021">2021</option>
						   <option value="2020">2020</option>
						   <option value="2019">2019</option>
						   <option value="2018">2018</option>
						   <option value="2017">2017</option>
						   <option value="2016">2016</option>
						   <option value="2015">2015</option>
						</select>
					</div>
					<div class = "col-lg-6 mt-4">
						<div class = "margin_top_err text-end text-danger d-<?= (get_session('empty_keys') == null) ? 'none' : (in_arr('film_country',get_session('empty_keys'),'block','none')); ?>">require field *</div>
						<select class="form-select input_validate <?= (get_session('empty_keys') != null) && in_arr('film_country',get_session('empty_keys'),'border-danger') ?>" name = "film_country" id = "film_country" aria-label="Default select example">
						   <option selected><?= (get_session('reg_form_values') == null) ? 'Production countries' : in_arr(get_session('reg_form_values')['film_country'],get_session('reg_form_values')); ?></option>
						   <option value="Russia">Russia</option>
						   <option value="USA">USA</option>
						   <option value="USSR">USSR</option>
						   <option value="Australia">Australia</option>
						   <option value="Austria">Austria</option>
						   <option value="Albania">Albania</option>
						</select>
					</div>
					<div class = "col-lg-6 mt-4">
						<div class = "margin_top_err text-end text-danger d-<?= (get_session('empty_keys') == null) ? 'none' : (in_arr('film_genre',get_session('empty_keys'),'block','none')); ?>">require field *</div>
						<select class="form-select input_validate <?= (get_session('empty_keys') != null) && in_arr('film_genre',get_session('empty_keys'),'border-danger') ?>" name = "film_genre" id = "film_genre" aria-label="Default select example">
							<option selected><?= (get_session('reg_form_values') == null) ? 'Select genres' : in_arr(get_session('reg_form_values')['film_genre'],get_session('reg_form_values')); ?></option>
							<option value="Action">Action</option>
							<option value="Comedy">Comedy</option>
							<option value="Drama">Drama</option>
							<option value="Fantasy">Fantasy</option>
							<option value="Horror">Horror</option>
							<option value="Romance">Romance</option>
							<option value="Thriller">Thriller</option>
						</select>
					</div>
				</div>
				<div class="row row-cols-2 mt-3">
					<div class = "col-lg-6 mt-4">
						<div class = "margin_top_err text-end text-danger d-<?= (get_session('empty_keys') == null) ? 'none' : (in_arr('film_director',get_session('empty_keys'),'block','none')); ?>">require field *</div>
						<div class="input-group mb-3">
						  <span class="input-group-text">Film director</span>
						  <input type="text" name = "film_director" id="film_director" class="form-control input_validate <?= (get_session('empty_keys') != null) && in_arr('film_director',get_session('empty_keys'),'border-danger') ?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"
                            value = "<?=(get_session('reg_form_values') != null) && in_arr(get_session('reg_form_values')['film_director'],get_session('reg_form_values'));?>"/>
						</div>
					</div>
					<div class = "col-lg-6 mt-4">
						<div class = "margin_top_err text-end text-danger d-<?= (get_session('empty_keys') == null) ? 'none' : (in_arr('film_duration',get_session('empty_keys'),'block','none')); ?>">require field *</div>
						<div class="input-group mb-3">
						  <span class="input-group-text">Film duration</span>
						  <input type="number" name = "film_duration" id="film_duration" class="form-control input_validate <?= (get_session('empty_keys') != null) && in_arr('film_duration',get_session('empty_keys'),'border-danger') ?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"
                             value = "<?=(get_session('reg_form_values') != null) && in_arr(get_session('reg_form_values')['film_duration'],get_session('reg_form_values'));?>" />
						</div>
					</div>
                </div>
                <div class = "row d-flex justify-content-center">
                    <div class = "col-lg-8 mt-4">
                        <div class = "margin_top_err text-end text-danger d-<?= (get_session('empty_keys') == null) ? 'none' : (in_arr('film_desc',get_session('empty_keys'),'block','none')); ?>">require field *</div>
                        <div class="input-group">
                            <span class="input-group-text">Film description</span>
                            <textarea class="form-control input_validate <?= (get_session('empty_keys') != null) && in_arr('film_desc',get_session('empty_keys'),'border-danger') ?>" name = "film_desc" id="film_desc" aria-label="With textarea"><?= (get_session('reg_form_values'))?get_session('reg_form_values')['film_desc'] : ''; ?></textarea>
                        </div>
                    </div>
                </div>

                <div class="row position-relative">
                    <div class="col mt-4">
                        <div class="mb-3 mt-4">
                            <div for="formFile" class="margin_top_err_file w-100 text-end form-label text-danger d-<?= (get_session('empty_keys') == null) ? 'none' : (in_arr('film_img',get_session('empty_keys'),'block','none')); ?>">img does not exists!</div>
                            <input name = "film_img" class="position-relative form-control <?= (get_session('empty_keys') != null) && in_arr('film_img',get_session('empty_keys'),'border-danger') ?>" type="file" id="formFile"
                               value = "<?=(get_session('reg_form_values') != null) && (isset(get_session('reg_form_values')['film_img'])) && in_arr(get_session('reg_form_values')['film_img'],get_session('reg_form_values'));?>">
                               <span class="position-absolute" style = "top:-5px">Film img</span>
                               <span class = "position-absolute text-danger" style = "top:-4px;right:10px;">
                                   <?= (get_session('error_img') != null) ? get_session('error_img') : ''; ?>
                               </span>
                        </div>
                    </div>
                    <div class="col mt-4">
                        <div class="mb-3 mt-4">
                           <div for="formFile" class="margin_top_err_file w-100 text-end form-label text-danger d-<?= (get_session('empty_keys') == null) ? 'none' : (in_arr('film_video',get_session('empty_keys'),'block','none')); ?>">video does not exists!</div>
                            <input name = "film_video" class="position-relative form-control <?= (get_session('empty_keys') != null) && in_arr('film_video',get_session('empty_keys'),'border-danger') ?>" type="file" id="formFile"
                               value = "<?=(get_session('reg_form_values') != null) && (isset(get_session('reg_form_values')['film_video'])) && in_arr(get_session('reg_form_values')['film_video'],get_session('reg_form_values'));?>">
                               <span class="position-absolute" style = "top:-5px">Film video</span>
                                <span class = "position-absolute text-danger" style = "top:-4px;right:10px;">
                                   <?= (get_session('error_video') != null) ? get_session('error_video') : ''; ?>
                               </span>
                        </div>
                    </div>
               </div>
                <button type="submit"  class="btn btn-success mt-3">Add film</button>
			</div>
		</form>
        <div class = "container d-flex justify-content-between mt-3">
            <div class = "w-25 text-success"><?= (get_session('update_success') != null) ? get_session('update_success') : '';?></div>
            <div class="position-relative w-auto input-group d-flex justify-content-end">
                <span style = "z-index:10;top:5px;" class="position-absolute opacity-75 material-symbols-outlined">
                     search
                </span >
                <span style = "top:-22px;left:136px;" id = "search_list" class = "d-none position-absolute text-danger">Not found</span>
                <input type="text" id = "search" data-urlroot = "<?= URLROOT; ?>" class="form-control" placeholder="Search film" aria-label="Username" aria-describedby="basic-addon1">
            </div>
        </div>
        <div class = "container">
            <table class="table mt-3">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Genre</th>
                    <th scope="col">Country</th>
                    <th scope="col">Date</th>
                    <th scope="col">Director</th>
                    <th scope="col">Duration</th>
                    <th scope="col">Image</th>
                    <th scope="col">Treiler</th>
                    <th scope="col">Description</th>
                    <th style = "width:173px; background: #fff!important;" class = "text-center" scope="col">
                        <img style = "object-fit: fill;" src = "<?= URLROOT.'public/admin/main/images/config.png' ?>" width = "40" height="38" />
                    </th>
                </tr>
                </thead>
                <tbody id = "output_table">
                <?php
                    if(isset($data)){
                       foreach ($data as $key => $value){
                            if(strlen($value['film_director']) <= 10){
                                $film_director = $value['film_director'];
                            }else{
                                $film_director = rtrim($value['film_director'], "!,.-");
                                $film_director = substr($film_director, 0, 10);
                                $film_director =  $film_director.' ... ';
                            }
                            if(strlen($value['film_name']) <= 10){
                                $film_name = $value['film_name'];
                            }else{
                                $film_name = rtrim($value['film_name'], "!,.-");
                                $film_name = substr($film_name, 0, 10);
                                $film_name =  $film_name.' ... ';
                            }
                            if(strlen($value['film_desc']) <= 5){
                                $film_desc = $value['film_desc'];
                            }else{
                                $film_desc = rtrim($value['film_desc'], "!,.-");
                                $film_desc = substr($film_desc, 0, 8);
                                $film_desc =  $film_desc.' ... ';
                            }

                            ?>
                            <tr class = "main_elems position-relative" data-id = <?= $value['id']; ?>>
                                <th scope="row"><?= $value['id']; ?></th>
                                <td><?= $film_name; ?></td>
                                <td><?= $value['film_genre']; ?></td>
                                <td><?= $value['film_country']; ?></td>
                                <td><?= $value['film_date']; ?></td>
                                <td><?= $film_director; ?></td>
                                <td><?= $value['film_duration'].' min'; ?></td>
                                <td><img src="<?= URLROOT ?>public/admin/main/films/<?= $value['film_img']; ?>" width = '50px' height = '50px'></td>
                                <td>
                                    <video controls poster="<?= URLROOT ?>public/admin/main/films/<?= $value['film_img']; ?>" width="50" height="50" src="<?= URLROOT ?>public/admin/main/videos/<?= $value['film_video'] ?>">

                                    </video>
                                </td>
                                <td><?= $film_desc; ?></td>
                            <td class = "row">
                            <div class = "text-center col">
                                 <!-- start of data edit process -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="38" fill="currentColor" class="edit_film pointer bi bi-pen-fill" data-bs-toggle="modal" data-bs-target="#modalOpen" viewBox="0 0 16 16">
                                  <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                                </svg>
                                <!-- Modal -->
                                    <div class="modal fade <?= (get_session('edit_empty_keys') != null) ? 'show d-block' : ''; ?>" id="modalOpen" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" <?= (get_session('edit_empty_keys') != null) ? 'aria-modal = "true" role = "dialog"' : ''; ?> aria-hidden="true">
                                          <div class="modal-dialog">
                                                <div class="modal-content">
                                                      <div class="modal-header">
                                                            <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                                            <button type="button" class="mc btn-close" data-mc = "<?= (get_session('edit_empty_keys') != null) ? 'show' : ''; ?>" data-bs-dismiss="modal" aria-label="Close"></button>
                                                      </div>
                                                      <div class="modal-body">

                                                          <form id="edit_process" method="post" action="film_edit" enctype="multipart/form-data">
                                                                  <div class="container">
                                                                        <div class="row row-cols-2">
                                                                            <div class = "col-lg-6 mt-4">
                                                                                <div class = "margin_top_err text-end text-danger d-<?= (get_session('edit_empty_keys') == null) ? 'none' : (in_arr('film_name',get_session('edit_empty_keys'),'block','none')); ?>">require field *</div>
                                                                                <div class="input-group mb-3">
                                                                                    <span class="input-group-text">Film name</span>
                                                                                    <input type="text" name = "film_name" class="film_name_edit form-control <?= (get_session('edit_empty_keys') != null) && in_arr('film_name',get_session('edit_empty_keys'),'border-danger') ?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"
                                                                                    value = "<?=(get_session('edit_values') != null) && (isset(get_session('edit_values')['film_name']) && in_arr(get_session('edit_values')['film_name'],get_session('edit_values')));?>"  />
                                                                                </div>
                                                                            </div>
                                                                            <div class = "col-lg-6 mt-4">
                                                                                <div class = "margin_top_err text-end text-danger d-<?= (get_session('edit_empty_keys') == null) ? 'none' : (in_arr('film_date',get_session('edit_empty_keys'),'block','none')); ?>">require field *</div>
                                                                                <select class="film_date_edit form-select input_validate <?= (get_session('edit_empty_keys') != null) && in_arr('film_date',get_session('edit_empty_keys'),'border-danger') ?>" name = "film_date" aria-label="Default select example">
                                                                                   <option selected><?= (get_session('edit_values') == null) ? 'Year of film production' : (isset(get_session('edit_values')['film_date']) && in_arr(get_session('edit_values')['film_date'],get_session('edit_values'))); ?></option>
                                                                                   <option value="2022">2022</option>
                                                                                   <option value="2021">2021</option>
                                                                                   <option value="2020">2020</option>
                                                                                   <option value="2019">2019</option>
                                                                                   <option value="2018">2018</option>
                                                                                   <option value="2017">2017</option>
                                                                                   <option value="2016">2016</option>
                                                                                   <option value="2015">2015</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class = "col-lg-6 mt-4">
                                                                                <div class = "margin_top_err text-end text-danger d-<?= (get_session('edit_empty_keys') == null) ? 'none' : (in_arr('film_country',get_session('edit_empty_keys'),'block','none')); ?>">require field *</div>
                                                                                <select class="film_country_edit form-select input_validate <?= (get_session('edit_empty_keys') != null) && in_arr('film_country',get_session('edit_empty_keys'),'border-danger') ?>" name = "film_country" aria-label="Default select example">
                                                                                   <option selected><?= (get_session('edit_values') == null) ? 'Production countries' : (isset(get_session('edit_values')['film_country']) && in_arr(get_session('edit_values')['film_country'],get_session('edit_values'))); ?></option>
                                                                                   <option value="Russia">Russia</option>
                                                                                   <option value="USA">USA</option>
                                                                                   <option value="USSR">USSR</option>
                                                                                   <option value="Australia">Australia</option>
                                                                                   <option value="Austria">Austria</option>
                                                                                   <option value="Albania">Albania</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class = "col-lg-6 mt-4">
                                                                                <div class = "margin_top_err text-end text-danger d-<?= (get_session('edit_empty_keys') == null) ? 'none' : (in_arr('film_genre',get_session('edit_empty_keys'),'block','none')); ?>">require field *</div>
                                                                                <select class="film_genre_edit form-select input_validate <?= (get_session('edit_empty_keys') != null) && in_arr('film_genre',get_session('edit_empty_keys'),'border-danger') ?>" name = "film_genre" aria-label="Default select example">
                                                                                    <option selected><?= (get_session('edit_values') == null) ? 'Select genres' : (isset(get_session('edit_values')['film_genre']) && in_arr(get_session('edit_values')['film_genre'],get_session('edit_values'))); ?></option>
                                                                                    <option value="Action">Action</option>
                                                                                    <option value="Comedy">Comedy</option>
                                                                                    <option value="Drama">Drama</option>
                                                                                    <option value="Fantasy">Fantasy</option>
                                                                                    <option value="Horror">Horror</option>
                                                                                    <option value="Romance">Romance</option>
                                                                                    <option value="Thriller">Thriller</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row row-cols-2 mt-3">
                                                                            <div class = "col-lg-6 mt-4">
                                                                                <div class = "margin_top_err text-end text-danger d-<?= (get_session('edit_empty_keys') == null) ? 'none' : (in_arr('film_director',get_session('edit_empty_keys'),'block','none')); ?>">require field *</div>
                                                                                <div class="input-group mb-3">
                                                                                  <span class="input-group-text">Film director</span>
                                                                                  <input type="text" name = "film_director" class="film_director_edit form-control input_validate <?= (get_session('edit_empty_keys') != null) && in_arr('film_director',get_session('edit_empty_keys'),'border-danger') ?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"
                                                                                  value = "<?=(get_session('edit_values') != null) && (isset(get_session('edit_values')['film_director']) && in_arr(get_session('edit_values')['film_director'],get_session('edit_values')));?>"  />
                                                                                </div>
                                                                            </div>
                                                                            <div class = "col-lg-6 mt-4">
                                                                                <div class = "margin_top_err text-end text-danger d-<?= (get_session('edit_empty_keys') == null) ? 'none' : (in_arr('film_duration',get_session('edit_empty_keys'),'block','none')); ?>">require field *</div>
                                                                                <div class="input-group mb-3">
                                                                                  <span class="input-group-text">Film duration</span>
                                                                                  <input type="number" name = "film_duration" class="film_duration_edit form-control input_validate <?= (get_session('edit_empty_keys') != null) && in_arr('film_duration',get_session('edit_empty_keys'),'border-danger') ?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"
                                                                                  value = "<?=(get_session('edit_values') != null) && (isset(get_session('edit_values')['film_duration']) && in_arr(get_session('edit_values')['film_duration'],get_session('edit_values')));?>"  />
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class = "row">
                                                                            <div class = "col-lg-12 mt-4">
                                                                                <div class = "margin_top_err text-end text-danger d-<?= (get_session('edit_empty_keys') == null) ? 'none' : (in_arr('film_desc',get_session('edit_empty_keys'),'block','none')); ?>">require field *</div>
                                                                                <div class="input-group">
                                                                                    <span class="input-group-text">Film description</span>
                                                                                    <textarea class="film_desc_edit form-control input_validate <?= (get_session('edit_empty_keys') != null) && in_arr('film_desc',get_session('edit_empty_keys'),'border-danger') ?>" name = "film_desc" aria-label="With textarea"><?= (isset(get_session('edit_values')['film_desc'])) ? get_session('edit_values')['film_desc'] : '';?></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class = "row mt-5">
                                                                            <div class="col-lg-6 position-relative">
                                                                                <div class = "position-absolute" style = "top:-24px;">Film img</div>
                                                                                <span class = "position-absolute text-danger" style = "top:-25px;right:10px;">
                                                                                    <?= (get_session('error_img_edit') != null) ? get_session('error_img_edit') : ''; ?>
                                                                               </span>
                                                                                <div class = "w-100" style = "height:100px;">
                                                                                    <img style = "object-fit: fill;" src = "<?= URLROOT ?>public/admin/main/films/<?php if(get_session('edit_values') == null){echo $value['film_img'];} else{ echo (get_session('edit_values')['film_img']); }; ?>" class = "film_img_edit_path w-100 h-100"/>
                                                                                </div>

                                                                                <input name = "film_img" class="film_img_edit position-relative form-control" type="file"/>
                                                                            </div>

                                                                           <div class="col-lg-6 position-relative">
                                                                                <div class = "position-absolute" style = "top:-24px;">Film video</div>
                                                                               <div class = "w-100" style = "height:100px;">
                                                                                    <video controls muted poster="<?= URLROOT ?>public/admin/main/films/<?php if(get_session('edit_values') == null){echo $value['film_img'];} else{ echo (get_session('edit_values')['film_img']); }; ?>" class = "film_img_video_edit_path film_video_edit_path w-100 h-100" src="<?= URLROOT ?>public/admin/main/videos/<?php if(get_session('edit_values') == null){echo $value['film_video'];} else{ echo (get_session('edit_values')['film_video']); }; ?>">

                                                                                    </video>
                                                                               </div>
                                                                               <input name = "film_video" class="position-relative form-control" type="file" id="formFile" />
                                                                           </div>
                                                                        </div>
                                                               </div>
                                                                <div class="modal-footer">
                                                                    <input type="hidden" name="film_id" id = "id_hidden" value="<?php if(isset(get_session('edit_values')['film_id'])){ echo get_session('edit_values')['film_id'];}?>" />
                                                                    <button type="button" class="mc_second btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                    <button type="submit" id = "film_edit" data-bs-dismiss="modal" class="btn btn-success">Edit</button>
                                                                </div>
                                                          </form>

                                                     </div>

                                                </div>
                                          </div>
                                    </div>
                            </div>
                                    <span class = "text-center col">
                                <!-- Starting the delete process -->
                                <svg style = "color:red;" xmlns="http://www.w3.org/2000/svg" width="50" height=38 fill="currentColor" data-id = "" class="delete_film pointer bi bi-x-circle" viewBox="0 0 16 16" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                </svg>
                                        <!-- Modal -->
                                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                          </div>
                                          <div class="modal-body">
                                             Are you sure you want to delete this movie?
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="button" data-bs-dismiss="modal" class="delete_film_modal btn btn-danger">Delete</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                            </span>
                                    <div class="modal" tabindex="-1">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Modal title</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Modal body text goes here.</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php }; ?>
                    <?php }; ?>

                </tbody>
            </table>
        </div>
   </section>










  

  