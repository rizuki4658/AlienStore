<?php require_once 'Core/init.php'; ?>

<?php $pages = Pages::setpages('My-Wishlist'); ?>

<?php if (!$user->is_loggedIn() ) { Redirect::to('Login'); } ?>

<?php require_once 'Template/header.php'; ?>

<section>
	<!-- Begin Product Overview===================================================================================================-->
		<div class="container" style="margin-top: 124px; height: 900px;">
			<h5> MY WHISHLIST </h5>
			<table class="table">
				<thead>
					<tr>
						<th>Product</th>
						<th></th>
						<th>Price</th>
						<th>Add To Cart</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							<div class="wrap" style="width: 60px; height: 74px;">
								<img src="Assets/Img/product-detail-01.jpg" class="img-fluid">
								<div class="info">
									<a href="#" class="btn text-light" style="margin-top: 25%; margin-left: 15%;"> 
										<i class="fa fa-trash"></i>
									</a>
								</div>
							</div>
						</td>
						<td> PRODUCT NAME </td>
						<td> Rp.<span id="harga"> 200.800</span> </td>
						<td>
							<a class="btn btn-md btn-primary" href="1"> ADD to <i class="fa fa-shopping-cart"></i> </a>
						</td>
					</tr>
				</tbody>
			</table>
		</div>	
		
	<!-- Ending Product Overview==================================================================================================-->
</section>

<?php require_once 'template/footer.php'; ?>