<?php require_once 'Core/init.php'; ?>

<?php $pages = Pages::setpages('About'); ?>

<?php 



?>

<?php require_once 'Template/header.php'; ?>
<section>
	<!-- Begin Product Overview===================================================================================================-->
	<div class="container-fluid mb-5" style="margin-top: 84px; height: 239px; background-image: url('Assets/Img/bg-01.jpg'); background-repeat: no-repeat; background-size: auto; background-position: top;">
		<div class="text-light text-center py-5">
			<h1> About </h1>
		</div>
	</div>
	
	<div class="container mt-5 mb-5">
		<div class="row">
			<div class="col-md-7" style="text-align: justify;">
				<h3>Our Story</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris consequat consequat enim, non auctor massa ultrices non. Morbi sed odio massa. Quisque at vehicula tellus, sed tincidunt augue. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas varius egestas diam, eu sodales metus scelerisque congue. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Maecenas gravida justo eu arcu egestas convallis. Nullam eu erat bibendum, tempus ipsum eget, dictum enim. Donec non neque ut enim dapibus tincidunt vitae nec augue. Suspendisse potenti. Proin ut est diam. Donec condimentum euismod tortor, eget facilisis diam faucibus et. Morbi a tempor elit.
				</p>
				<p>Donec gravida lorem elit, quis condimentum ex semper sit amet. Fusce eget ligula magna. Aliquam aliquam imperdiet sodales. Ut fringilla turpis in vehicula vehicula. Pellentesque congue ac orci ut gravida. Aliquam erat volutpat. Donec iaculis lectus a arcu facilisis, eu sodales lectus sagittis. Etiam pellentesque, magna vel dictum rutrum, neque justo eleifend elit, vel tincidunt erat arcu ut sem. Sed rutrum, turpis ut commodo efficitur, quam velit convallis ipsum, et maximus enim ligula ac ligula.
				</p>
				<p>
				Any questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or call us on (+1) 96 716 6879
				</p>
			</div>
			<div class="col-md-4 ml-2">
				<img src="Assets/Img/logo-2.png" class="img-fluid">
			</div>
		</div>
	</div>
	<br>
	<br>
	<!-- Ending Product Overview==================================================================================================-->
</section>

<?php require_once 'template/footer.php'; ?>