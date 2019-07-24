<?php require_once 'Core/init.php'; ?>

<?php if ($user->is_loggedIn() ) { Redirect::to('index'); } ?>

<?php $pages = Pages::setpages('Create-Account'); ?>


<?php
$password_check='';
$email_cek='';
$success='';
if (Input::get('create')) {

	if ( (Input::get('password2') != Input::get('password')) && $user->cek_email( Input::get('email') )) {		
		$password_check = "Confirmation Password is not valid!";
		$email_cek 		= "This email is already used!";
	}else{
		if (Input::get('password2') != Input::get('password')) {
			$password_check = "Confirmation Password is not valid!";
		}else if( $user->cek_email( Input::get('email') ) ){
			$email_cek 		= "This email is already used!";	
		}else{
			$data=array('id' 		=> "",
						'password'	=> password_hash(Input::get('password2'), PASSWORD_DEFAULT), 
						'email' 	=> Input::get('email'),
						'name' 		=> Input::get('name'),
						'gender' 	=> Input::get('gender'),
						'address'	=> "",
						'phone' 	=> "",
						'photo'		=> 'Assets/Img/user.png',
						'role' 		=> 1);
			if ( $user->register_user($data)){
				$success = 'success';
				Session::set('email', Input::get('email'));
				Session::set('name', Input::get('name'));
				Session::set('role', Input::get('rol'));
				Redirect::to('index');
			}
		}
	}

}


?>

<!DOCTYPE html>
<html>
<head>
	<title><?= $pages; ?></title>
	<link href="Assets/Img/logo-2.png" rel="shortcut icon">
    <link rel="stylesheet" type="text/css" href="Assets/Bootstrap 4/css/bootstrap.min.css">
    <link rel="stylesheet" href="Assets/Font Awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="Assets/Font Awesome/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="Assets/Bootstrap 4/css/style.css">
</head>
<body>
<header>
			<div class="container-menu-desktop" id="for-delete">
				<div class="top-bar" style="padding: 1%;">
					<div class="container">
						<div class="row">
							<div class="col-md-6 text-light">
								Free shipping for standard order over $100
							</div>
							<div class="col-md-6 text-light text-right">
								<a href="Index.php" class="link-right"> Store </a>
								<!--<a href="" class="link-right"> Dashboard </a>-->
								<a href="Login.php" class="link-right"> Login </a>
								<!--<a href="#" data-toggle="modal" data-target="#modal-logout" class="link-right" style="cursor: pointer;"> Logout </a>-->
							</div>
						</div>

						
					</div>
				</div>
			</div>
</header>

<div class="container-fluid p-0 " style="/*background-color: rgb(34, 34, 34);*/">
	<div class="col-md-12" style="margin-top: 10%;">
		<center>
			<h5>CREATE ACCOUNT</h5>
			<form action="" method="post">
				<div class="col-md-4">
					
					<input type="text" name="name" id="name" class="form-control mb-4 rounded-0" placeholder="Your Name" required="" value="<?php if(Input::get('create')){ echo Input::get('name');} ?>">

					<select name="gender" id="gender" class="form-control mb-4 rounded-0" required="">
						<?php if(Input::get('create')){ 
								if (Input::get('gender')=='Male') { ?>
								
									<option selected="" value="Man">Men</option>
									<option value="Women">Women</option>
							<?php }else{ ?>

									<option value="Man">Men</option>
									<option value="Women" selected="">Women</option>
							<?php } ?>

						<?php }else{ ?>
								<option value="">Men/Women</option>
								<option value="Man">Men</option>
								<option value="Women">Women</option>
						<?php } ?>
					</select>

					<input type="email" name="email" id="email" class="form-control mb-0 rounded-0" placeholder="Email.." required="" value="<?php if(Input::get('create')){ echo Input::get('email');} ?>">
					
					<div style="color: rgb(220, 53, 69); text-align: right;" class="<?php if(!empty($email_cek)){ echo 'mb-2'; }else{ echo 'mb-4';}  ?>"><?php if (!empty($email_cek)) { echo $email_cek; } ?></div>

					<input type="password" name="password" id="password" class="form-control mb-4 rounded-0" placeholder="Password.." required="" value="<?php if(Input::get('create')){ echo Input::get('password');} ?>">
					

					<input type="password" name="password2" id="password2" class="form-control mb-0 rounded-0" placeholder="Confirm Password" required="" value="<?php if(Input::get('create')){ echo Input::get('password2');} ?>">

					<div style="color: rgb(220, 53, 69); text-align: right;" class="<?php if(!empty($password_check)){ echo 'mb-2'; }else{ echo 'mb-4';}  ?>">
						<?php if (!empty($password_check)) { echo $password_check; } ?></div>

					
					<input type="submit" name="create" id="create" value="Create Account" class="btn btn-md btn-alien btn-block rounded-pill">
				</div>
			</form>
			<div class="col-md-4 mt-4">
				Already a member? <a href="Login.php" class="link-create-acc">Login</a>
			</div>
			<div class="col-md-4 mt-4">
				<img src="Assets/Img/logo-2.png" style="width: 30px;"> ALIEN SYNDROME
			</div>
		</center>
	</div>
</div>

<?php if (!empty($success)) { ?>
	<div class="modal fade" id="modal-success" tabindex="100" role="dialog" aria-labelledby="modal-wishlist" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered border-0 rounded-0">
			<div class="modal-content border-0 rounded-0 p-3">
				<h1 class="text-center text-success mt-4 checked"><i class="fa fa-check"></i></h1>
				<div class="col-sm-12 mt-3 mb-2">
					<h3 class="text-dark text-center"> Success </h3>
				</div>
				<div class="col-sm-12">
					<h5 class="text-secondary text-center"> Your account Has been Registered </h5>
				</div>
				<div class="col-sm-12 mt-5 text-right">
					<a href="index.php" class="btn btn-md btn-info"> OK </a>
				</div>
			</div>
		</div>
	</div>
<?php } ?>
<script src="Assets/Bootstrap 4/js/jquery.js"></script>
<script src="Assets/Bootstrap 4/js/bootstrap.min.js"></script>
<?php if (!empty($success)) { ?>
<script type="text/javascript">
	$(document).ready(function(){
		$('.checked').fadeIn(2000);
		$('#modal-success').modal({backdrop: 'static'});
	});
</script>
<?php } ?>
</body>
</html>