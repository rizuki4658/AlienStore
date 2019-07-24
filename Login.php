<?php require_once 'Core/init.php'; ?>
<?php if ($user->is_loggedIn('index') ) { Redirect::to('index'); } ?>
<?php $pages = Pages::setpages('Login'); ?>

<?php
	$error1='';
	$error2='';
	if (Input::get('submit')) {
		if ($user->cek_email(Input::get('email'))) {
			if ( $user->login_user( Input::get('email'), Input::get('password') ) ) {
				$data=array();
				$data = $user->login_user( Input::get('email'), Input::get('password') );
				Session::set('email', Input::get('email'));
				Session::set('name', $data['name']);
				Session::set('role', $data['role']);
				Session::set('photo', $data['photo']);
				Redirect::to('index');
			}else{
				$error2	= 'Password is not valid!';
			}
		}else{
			$error1	= 'Email is not registered!';
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
								<a href="Create-Account.php" class="link-right"> Create Account </a>
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
			<h5>LOGIN</h5>
			<form action="" method="post">
				<div class="col-md-4">
					<input type="email" name="email" id="email" class="form-control rounded-0" value="<?php if(Input::get('submit')){ echo Input::get('email');} ?>">
					<div style="color: rgb(220, 53, 69); text-align: right;" class="<?php if(!empty($error1)){ echo 'mb-2'; }else{ echo 'mb-4';}  ?>"><?php if (!empty($error1)) { echo $error1; } ?></div>

					<input type="password" name="password" id="password" class="form-control rounded-0" value="<?php if(Input::get('submit')){ echo Input::get('password');} ?>">
					<div style="color: rgb(220, 53, 69); text-align: right;" class="<?php if(!empty($error2)){ echo 'mb-2'; }else{ echo 'mb-4';}  ?>"><?php if (!empty($error2)) { echo $error2; } ?></div>

					<input type="submit" name="submit" id="submit" value="Login" class="btn btn-md btn-alien btn-block rounded-pill">
				</div>
			</form>
			<div class="col-md-4 mt-4">
				<a href="Forgot-Password.php" class="link-create-acc">Forgot Password!</a>
				<br><br>
				New to site? <a href="Create-Account.php" class="link-create-acc">Create Account</a>
			</div>
			<div class="col-md-4 mt-4">
				<img src="Assets/Img/logo-2.png" style="width: 30px;"> ALIEN SYNDROME
			</div>
		</center>
	</div>
</div>

<script src="Assets/Bootstrap 4/js/jquery.js"></script>
<script src="Assets/Bootstrap 4/js/bootstrap.min.js"></script>

</body>
</html>