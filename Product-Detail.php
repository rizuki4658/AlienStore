<?php require_once 'Core/init.php'; ?>

<?php $pages = Pages::setpages(Input::get('nm')); ?>

<?php 



?>

<?php require_once 'Template/header.php'; ?>

<section>
	<div class="container mb-5" style="margin-top: 104px;">
		<div class="row 50">
	    	<div class="col-md-6 col-lg-7 p-0">
	    		<div class="col-md-12">
	    			<div id="detail-quick" class="carousel slide carousel-fade" data-ride="carousel"  data-interval="0">
						<div class="carousel-inner">
						    <div class="carousel-item active">
								<img src="Assets/Img/product-detail-01.jpg" class="d-block w-100" alt="...">
							</div>
							<div class="carousel-item" id="detail-quick-2">
							  	<img src="Assets/Img/product-detail-02.jpg" class="d-block w-100" alt="...">
							</div>
							<div class="carousel-item">
							  	<img src="Assets/Img/product-detail-03.jpg" class="d-block w-100" alt="...">
							</div>
						</div>
						<a class="carousel-control-prev bg-dark" href="#detail-quick" role="button" data-slide="prev" style="position: absolute; top: 45%; bottom: 45%;">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next bg-dark" href="#detail-quick" role="button" data-slide="next" style="position: absolute; top: 45%; bottom: 45%;">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
	    		</div>
	    		<div class="col-md-12 text-center mt-2">	
	    			<button style="display: inline; max-width: 20%; cursor: pointer;" type="button" data-togle="carousel" data-target="#detail-quick" data-slide-to="0" class="bg-transparent p-0 border-0">
						<img src="Assets/Img/product-detail-01.jpg" class="img-fluid">
			    	</button>	
	    			<button style="display: inline; max-width: 20%; cursor: pointer;" type="button" data-togle="carousel" data-target="#detail-quick" data-slide-to="1" class="bg-transparent p-0 border-0">
						<img src="Assets/Img/product-detail-02.jpg" class="img-fluid">
			    	</button>	
	    			<button style="display: inline; max-width: 20%; cursor: pointer;" type="button" data-togle="carousel" data-target="#detail-quick" data-slide-to="2" class="bg-transparent p-0 border-0">
						<img src="Assets/Img/product-detail-03.jpg" class="img-fluid">
					</button>
	    		</div>
	    	</div>
	    	<div class="col-md-6 col-lg-5">
	    		<h3 class="text-secondary">Product Name</h3>
	    		<h5 class="text-dark">Rp. 120.090</h5>
	    		<p class="text-justify text-wrap text-secondary mt-5 mb-3">Description</p>
	    		<div class="col-md-12 p-3">
	    			<form>
	    				<div class="form-group row">
						    <label for="select_size" class="col-sm-2 col-form-label text-secondary">Size</label>
							<div class="ml-3 col-sm-9">
								<select class="form-control custom-select" id="select_size" name="select_size">
									<option>Choose an option</option>
									<option class="select-child">Size S</option>
									<option>Size M</option>
									<option>Size L</option>
									<option>Size X</option>
								</select>
							</div>
						</div>
						<div class="form-group row">
						    <label for="select_color" class="col-sm-2 col-form-label text-secondary">Color</label>
							<div class="ml-3 col-sm-9">
							  	<select class="form-control custom-select" id="select_color" name="select_size">
							  		<option>Choose an option</option>
							  		<option>Red</option>
							  		<option>Blue</option>
							  		<option>White</option>
							  		<option>Gray</option>
							  	</select>
							</div>
						</div>
						<div class="form-group row">
						    <label for="select_color" class="col-sm-2 col-form-label text-secondary"></label>
							<div class="ml-3 col-sm-9">
							  	<div class="btn-group" role="group" aria-label="Basic example">
									<button type="button" class="px-3" id="minus"><i class="ti-minus"></i></button>
									<input type="text" class="form-control form-control-md border w-25 text-center" placeholder="1" value="1" required="" name="quantity" id="quantity">
									<button type="button" class="px-3" id="plus"><i class="ti-plus"></i></button>
								</div>
							</div>
						</div>
						<div class="form-group row">
						    <label for="select_color" class="col-sm-2 col-form-label text-secondary"></label>
						    <div class="ml-3 col-sm-9">
						      	<div class="btn-group" role="group" aria-label="Basic example">
								  	<input type="submit" class="btn btn-addcart rounded-pill px-4 py-2" id="submit" name="submit" value="ADD TO CART">
								</div>
							</div>
						</div>
	    			</form>
	    		</div>
	    		<div class="col-md-12 p-3 mt-5">
	    			<a href="#" class="link-footer d-inline mr-2"> <i class="ti-facebook"></i> </a>
	    			<a href="#" class="link-footer d-inline mr-2"> <i class="ti-instagram"></i> </a>
	    			<a href="#" class="link-footer d-inline mr-2"> <i class="ti-google"></i> </a>
	    		</div>
	    	</div>
	    </div>
	</div>
	<div class="container p-3 text-center">
		<ul class="nav nav-pills mb-0" id="pills-tab" role="tablist" style="float: left;">
			<li class="nav-item mr-4">
				<a class="nav-link active" id="pills-all-tab" data-toggle="pill" href="#pills-all" role="tab" aria-controls="pills-home" aria-selected="true" style="padding-left: 0%; padding-right: 1%;">Description </a>
			</li>
			<li class="nav-item mr-4">
				<a class="nav-link" id="pills-men-tab" data-toggle="pill" href="#pills-men" role="tab" aria-controls="pills-profile" aria-selected="false" style="padding-left: 0%; padding-right: 1%;">Additional Information</a>
			</li>
			<li class="nav-item mr-4">
				<a class="nav-link" id="pills-women-tab" data-toggle="pill" href="#pills-women" role="tab" aria-controls="pills-contact" aria-selected="false" style="padding-left: 0%; padding-right: 1%;">Review</a>
			</li>
		</ul>
	</div>
	<div class="container border mt-5 p-3">
		<div class="tab-content" id="pills-tabContent">

			<div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab">
				asadasdasd
			</div>
				
			<div class="tab-pane fade" id="pills-men" role="tabpanel" aria-labelledby="pills-men-tab">
				cvbxnbjdshfjkh
			</div>
			
			<div class="tab-pane fade" id="pills-women" role="tabpanel" aria-labelledby="pills-women-tab">
						
			</div>
				
		</div>
	</div>
</section>

<?php require_once 'template/footer.php'; ?>