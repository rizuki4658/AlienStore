<?php require_once 'Core/init.php'; ?>

<?php $pages = Pages::setpages('My-Cart'); ?>

<?php if (!$user->is_loggedIn() ) { Redirect::to('Login'); } ?>

<?php require_once 'Template/header.php'; ?>
<section>
	<!-- Begin Product Overview===================================================================================================-->
		<div class="container" style="margin-top: 124px;">
			<div class="row">
				<div class="col-md-12 mb-5 border">
					<table class="table table-scrolled">
						<thead>
							<tr>
								<th>PRODUCT</th>
								<th></th>
								<th>PRICE</th>
								<th>QUANTITY</th>
								<th>Total</th>
							</tr>
						</thead>
						<tbody style="font-size: 15px;">
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
								<td>
									PRODUCT NAME
								</td>
								<td>
									Rp.<span id="harga"> 200.800</span>
								</td>
								<td>
									<div class="btn-group" role="group" aria-label="Basic example">
										<button type="button" class="px-2" id="minus"><i class="ti-minus"></i></button>
										<input type="text" class="form-control form-control-md border w-25 text-center" placeholder="1" value="1" required="" name="quantity" id="quantity" disabled="">
										<button type="button" class="px-2" id="plus"><i class="ti-plus"></i></button>
									</div>
								</td>
								<td>
									Rp.<span><b id="total"> 200.800</b></span>
								</td>
							</tr>
						</tbody>
						<tfoot>
							<tr>
								<td>aa</td>
							</tr>
						</tfoot>
					</table>
				</div>
				<div class="col-md-12 p-4 border">
					<div class="row">
						<div class="col-md-12">CART TOTALS</div>
					</div>
					<div class="row mt-2">
						<div class="col-md-6">
							<button class="btn btn-addcart rounded-pill"> UPDATE TOTAL </button>
						</div>
						<div class="col-md-6 text-right">
							<h6>RP. 120.090</h6>
						</div>
					</div>
					<div class="row mt-5">
						<div class="col-md-12">
							Shipping:
							   There are no shipping methods available. Please double check your address, or contact us if you need any help.
						</div>
						<div class="col-md-12 mt-2">
							CALCULATE SHIPPING
							<br>
							<div class="row">
								<div class="col-md-4 mb-2">
									<select class="form-control custom-select" id="select_size" name="select_size">
										<option>Select Country</option>
										<option class="select-child">INDONESIA</option>
									</select>
								</div>
								<div class="col-md-4 mb-2">
									<select class="form-control custom-select" id="select_size" name="select_size">
										<option>State / Counrty</option>
										<option class="select-child">Size S</option>
									</select>
								</div>
								<div class="col-md-4 mb-2">
									<input class="form-control" id="select_size" name="select_size" placeholder="Postcode/Zip">
								</div>
							</div>
						</div>
						<div class="col-md-12 mt-2 text-right">
							<button class="btn btn-success rounded-pill"> PROCEED TO CHECKOUT </button>
						</div>
					</div>
				</div>
			</div>
		</div>	
		
	<!-- Ending Product Overview==================================================================================================-->
</section>

<?php require_once 'template/footer.php'; ?>