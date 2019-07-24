<?php require_once 'Core/init.php'; ?>

<?php $pages = Pages::setpages('Contact'); ?>

<?php 



?>

<?php require_once 'Template/header.php'; ?>

<section>
	<!-- Begin Product Overview===================================================================================================-->
	<div class="container-fluid mb-5" style="margin-top: 84px; height: 239px; background-image: url('Assets/Img/bg-02.jpg'); background-repeat: no-repeat; background-size: auto; background-position: top;">
		<div class="text-light text-center py-5">
			<h1> Contact </h1>
		</div>
	</div>
	<br><br>
	<div class="container mt-5 mb-5">
		<div class="row">
			<div class="col-md-6 border p-5">
				<h4 class="text-center">Send Us A Message</h4>
				<form class="mt-5">
					<div class="form-group row">
						<label for="email" class="col-sm-2 col-form-label text-secondary">
							<i class="fa fa-envelope-o"></i> mail
						</label>
						<div class="ml-3 col-sm-9">
							<input type="email" name="email" id="email" class="form-control">
						</div>
					</div>
					<div class="form-group row">
						<div class="col-sm-12">
							<textarea name="message" id="message" class="form-control" placeholder="How can we Help?" rows="10"></textarea>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-sm-12">
							<button type="submit" name="submit" value="submit" class="btn btn-md btn-dark rounded-pill w-100">
								SUBMIT
							</button>
						</div>
					</div>
				</form>
			</div>
			<div class="col-md-6 border p-5">
				<div class="mt-4">
					<div class="row px-5 py-4">
						<div class="col-md-1"><i class="ti-location-pin"></i></div>
						<div class="col-md-11">Address</div>
						<div class="col-md-1">&nbsp;</div>
						<div class="col-md-11">Alien Syndrome Store Center 8th floor, 379 Hudson St, New York, NY 10018 US</div>
					</div>
					<div class="row px-5 py-4">
						<div class="col-md-1"><i class="fa fa-phone"></i></div>
						<div class="col-md-11">Lets Talk</div>
						<div class="col-md-1">&nbsp;</div>
						<div class="col-md-11">+1 800 1236879</div>
					</div>
					<div class="row px-5 py-4">
						<div class="col-md-1"><i class="fa fa-envelope-o"></i></div>
						<div class="col-md-11">Sale Support</div>
						<div class="col-md-1">&nbsp;</div>
						<div class="col-md-11">contact@example.com</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br>
	<br>
	<!-- Ending Product Overview==================================================================================================-->
</section>


<?php require_once 'template/footer.php'; ?>