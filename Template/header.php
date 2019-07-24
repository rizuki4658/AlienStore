<!DOCTYPE html>
<html>
<head>
	<title><?= $pages; ?></title>
	<link href="Assets/img/logo-2.png" rel="shortcut icon">
    <link rel="stylesheet" type="text/css" href="Assets/Bootstrap 4/css/bootstrap.min.css">
    <link rel="stylesheet" href="Assets/Font Awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="Assets/Font Awesome/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="Assets/Bootstrap 4/css/style.css">
    <style type="text/css">
    	.animate-transition-static{
    		padding: 0px;
    		width: 20%;
			position: fixed;
			left: 105%;
			top:30%;
			margin-left: -67%;
    	}
    	.animate-transition{
    		display: none;
    	}
    	.alien-image{
    		opacity: 1;
    		animation-name: tranparent;
    		animation-duration: 1s;
			animation-iteration-count: 2000;
			animation-delay: 1s;
			animation-fill-mode: forwards;
			animation-timing-function: ease-in;
    	}
    	@keyframes tranparent{
    		from{opacity: 1;}
    		to{opacity: 0;}
    	} 
    </style>
</head>
<body>

<div class="animate-transition-static text-center">
	<div class="col-sm-12 col-md-12 col-xl-12 col-xs-12">
		<img src="Assets/Img/logo-2.png" width="40" class="alien-image">
		<h5>ALIEN SYNDROME</h5>
		<div class="progress" style="height: 5px;">
			<div class="progress-bar bg-dark" role="progressbar" style="width: 1%; height:5px;" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100" id="progressbar">	
			</div>
		</div>
			<input type="hidden" name="progressbar" id="valueprogress" value="1" max="100">
	</div>
</div>
<div class="animate-transition">
<header>
	<!-- MENU DESKTOP TOP========================================================================================================-->
			<div class="container-menu-desktop" id="for-delete">
				<div class="top-bar" style="padding: 1%;">
					<div class="container">
						<div class="row">
							<div class="col-md-6 text-light">
								Free shipping for standard order over $100
							</div>
							<div class="col-md-6 text-light text-right">
								<?php if (Session::exists('email')) { ?>
									<a href="My-Account.php" class="link-right"> <?= strtoupper(Session::get('name')); ?> </a>
									<?php if (Session::get('role')==0) { ?>
										<a href="Dashboard/" class="link-right"> Dashboard </a>
									<?php } ?>
									<a href="#" data-toggle="modal" data-target="#modal-logout" class="link-right" style="cursor: pointer;"> Logout </a>		
								<?php }else{ ?>
									<a href="Login.php" class="link-right"><i class="fa fa-lock"></i> Login </a>
								<?php } ?>
							</div>
						</div>

						
					</div>
				</div>
			</div>
			<div id="field-scroll">
				<a href="#" class="btn btn-danger rounded-0 btn-scroll-top" id="btn-scroll-top"> <h4><i class="fa fa-angle-up"></i></h4> </a>
			</div>
	<!--END MENU DESKTOP TOP=====================================================================================================-->

	<!-- NAVBAR =================================================================================================================-->
			<nav class="navbar fixed-top navbar-expand-lg navbar-light" <?php if ($pages== 'Home') {
				# code...
			}else{ ?> style="border-bottom: 1px solid rgba(222, 226, 230, 0.9);" <?php } ?>>
			
		<!-- CAGE IN NAVBAR =====================================================================================================-->		
				<div class="container" id="bungkus-navbar">

			<!--NAVBAR BUTTON COLLAPSE, LOGO=====================================================================================-->
				    <a class="navbar-brand font-weight-bold" id="text-brand" href="index.php" style="font-size: 12px;"><img src="assets/img/logo-2 (5).png" class="img-fluid"> ALIEN SYNDROME</a>
				    <div class="ml-auto mr-0 link-hide">
				    	
				    <a class="nav-link link-hides link-hide" href="#" data-toggle="modal" data-target="#modal-search" style="cursor: pointer;"><i class="fa fa-search"></i></a>

					<?php if (Session::exists('email')) { ?>
						<a class="nav-link link-hides link-hide" href="Shopping-Cart.php">
							<i class="fa fa-shopping-cart"></i>
							<sup><span class="badge badge-pill badge-danger">2</span></sup>
						</a>

						<a class="nav-link link-hides link-hide" href="Wishlist.php">
							<i class="fa fa-heart-o"></i>
							<sup><span class="badge badge-pill badge-danger">2</span></sup>
						</a>
					<?php } ?>
				    </div>
				    
					<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
			      		<span class="navbar-toggler-icon"></span>
			    	</button>
			<!--END NAVBAR BUTTON COLLAPSE, LOGO==================================================================================-->
			
			<!--MENU NAVBAR COLLAPSE==============================================================================================-->
				    <div class="navbar-collapse collapse" id="navbarColor02" style="">

				<!-- MENU DESKTOP WHEN COLLAPSE===================================================================================-->
				    	
				    	<div class="top-bar" id="menu-top-bar">
							<div class="container">
								<div class="row">
									<div class="col-md-6 text-light">
										Free shipping for standard order over $100
									</div>
									<div class="col-md-6 text-light text-right">
										<?php if (Session::exists('email')) { ?>
											<a href="My-Account.php" class="link-right"> <?= strtoupper(Session::get('name')); ?> </a>
											<?php if (Session::get('role')==0) { ?>
												<a href="Dashboard/" class="link-right"> Dashboard </a>
											<?php } ?>
											<a href="#" data-toggle="modal" data-target="#modal-logout" class="link-right" style="cursor: pointer;"> Logout </a>		
										<?php }else{ ?>
											<a href="Login.php" class="link-right"><i class="fa fa-lock"></i> Login </a>
										<?php } ?>
									</div>
								</div>			
							</div>
						</div>

				<!--END MENU DESKTOP WHEN COLLAPSE================================================================================-->

				<!-- LIST MENU NAVBAR=============================================================================================-->
				      	
				      	<ul class="navbar-nav mr-auto font-weight-bold">
				        	<li class="nav-item">
				          		<a class="nav-link" href="<?php if(!file_exists('index.php')){ echo '404.php'; }else{ echo 'index.php'; } ?>">Home <span class="sr-only">(current)</span></a>
				        	</li>
				        	<li class="nav-item">
				          		<a class="nav-link" href="<?php if(!file_exists('Shop.php')){ echo '404.php'; }else{ echo 'Shop.php'; } ?>">Shop</a>
				        	</li>
				        	<li class="nav-item">
				          		<a class="nav-link" href="<?php if(!file_exists('Events.php')){ echo '404.php'; }else{ echo 'Events.php'; } ?>">Events</a>
				        	</li>
				        	<li class="nav-item">
				          		<a class="nav-link" href="<?php if(!file_exists('About.php')){ echo '404.php'; }else{ echo 'About.php'; } ?>">About</a>
				        	</li>
				        	<li class="nav-item">
				          		<a class="nav-link" href="<?php if(!file_exists('Contact.php')){ echo '404.php'; }else{ echo 'Contact.php'; } ?>">Contact</a>
				        	</li>
				      	</ul>
					    <ul class="navbar-nav mr-right" id="left-navbar-icon">
					      	<li class="nav-item">
					          <a class="nav-link" data-toggle="modal" data-target="#modal-search" style="cursor: pointer;"><i class="fa fa-search"></i></a>
					        </li>
					    <?php if (Session::exists('email')) { ?>
					      	<li class="nav-item">
					          <a class="nav-link" href="<?php if(!file_exists('Shopping-Cart.php')){ echo '404.php'; }else{ echo 'Shopping-Cart.php'; } ?>">
					          	<i class="fa fa-shopping-cart"></i>
					          	<sup><span class="badge badge-pill badge-danger">2</span></sup>
					          </a>
					        </li>
					      	<li class="nav-item">
					          <a class="nav-link" href="<?php if(!file_exists('Wishlist.php')){ echo '404.php'; }else{ echo 'Wishlist.php'; } ?>">
					          	<i class="fa fa-heart-o"></i>
					          	<sup><span class="badge badge-pill badge-danger">2</span></sup>
					          </a>
					        </li>
					    <?php } ?>
					    </ul>

				<!-- LIST MENU NAVBAR=============================================================================================-->

				    </div>
			<!--END MENU NAVBAR COLLAPSE==========================================================================================-->
				</div>
			
		<!-- END CAGE IN NAVBAR ==================================================================================================-->

			</nav>
	<!-- END NAVBAR ==============================================================================================================-->
</header>



	


