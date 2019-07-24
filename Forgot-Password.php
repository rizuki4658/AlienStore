<?php require_once 'Core/init.php'; ?>
<?php if ($user->is_loggedIn() ) { Redirect::to('index'); } ?>
<?php $pages = Pages::setpages('Create-Account'); ?>
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
			<h5>FORGOT PASSWORD</h5>
			<form>
				<div class="col-md-4">
					<input type="email" name="email" id="email" class="form-control mb-4 rounded-0" placeholder="Email..">

					<input type="submit" name="submit" id="submit" value="SUBMIT" class="btn btn-md btn-alien btn-block rounded-pill">
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

<script src="Assets/Bootstrap 4/js/jquery.js"></script>
<script src="Assets/Bootstrap 4/js/bootstrap.min.js"></script>

</body>
</html>