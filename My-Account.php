<?php require_once 'Core/init.php'; ?>
<?php if (!$user->is_loggedIn() ) { Redirect::to('Login'); } ?>
<?php $pages = Pages::setpages('My-Account'); ?>
<?php require_once 'Template/header.php'; ?>

<section>
	<!-- Begin Product Overview===================================================================================================-->
	<div class="container-fluid mb-5" style="margin-top: 84px; height: 239px; background-image: url('Assets/Img/bg-02.jpg'); background-repeat: no-repeat; background-size: auto; background-position: top;">
		<div class="text-light text-center py-5">
			<h1> My Account </h1>
		</div>
	</div>
	<br><br>
	<div class="container mt-5 mb-5">
		<div class="row">
			<div class="col-md-6 border p-5">
				<h4 class="text-center">Photo</h4>
				<img src="Assets/Img/gallery-02.jpg" class="img-fluid">
				<form class="mt-5">
					<div class="form-group row">
						<label for="file" class="col-sm-2 col-form-label text-secondary">
							<i class="fa fa-image"></i>
						</label>
						<div class="col-sm-9">
							<input type="file" name="file" id="file" class="form-control">
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
				<form class="mt-5 p-5">
					<div class="form-group row">
						<label for="email" class="col-sm-2 col-form-label text-secondary">
							<i class="fa fa-envelope-o"></i>
						</label>
						<div class="col-sm-9">
							<input type="email" name="email" id="email" class="form-control" value="<?php foreach ($data['users'] as $user) {?> <?= $user['name']; ?>  <?php }?>">
							
						</div>
					</div>
					<div class="form-group row">
						<label for="address" class="col-sm-2 col-form-label text-secondary">
							<i class="ti-location-pin"></i>
						</label>
						<div class="col-sm-9">
							<textarea name="address" id="address" class="form-control" rows="5"></textarea>
						</div>
					</div>
					<div class="form-group row">
						<label for="phone" class="col-sm-2 col-form-label text-secondary">
							<i class="fa fa-phone"></i>
						</label>
						<div class="col-sm-9">
							<input type="text" name="phone" id="phone" class="form-control">
						</div>
					</div>
					<div class="form-group row">
						<div class="col-sm-12">
							<button type="submit" name="submit" value="submit" class="btn btn-md btn-dark rounded-pill w-100">
								UPDATE
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<br>
	<br>
	<!-- Ending Product Overview==================================================================================================-->
</section>

<?php require_once 'Template/footer.php'; ?>