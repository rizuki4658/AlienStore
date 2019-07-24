<?php require_once 'Core/init.php'; ?>

<?php $pages = Pages::setpages('Shop'); ?>

<?php 



?>

<?php require_once 'Template/header.php'; ?>
<section>
	<!-- Begin Product Overview===================================================================================================-->
			
		<!-- Navigation Product ==================================================================================================-->
			<div class="container" style="margin-top: 104px;">
				<ul class="nav nav-pills mb-0" id="pills-tab" role="tablist" style="float: left;">
				  	<li class="nav-item mr-4">
				    	<a class="nav-link active" id="pills-all-tab" data-toggle="pill" href="#pills-all" role="tab" aria-controls="pills-home" aria-selected="true" style="padding-left: 0%; padding-right: 1%;">All </a>
				  	</li>
				  	<li class="nav-item mr-4">
				    	<a class="nav-link" id="pills-men-tab" data-toggle="pill" href="#pills-men" role="tab" aria-controls="pills-profile" aria-selected="false" style="padding-left: 0%; padding-right: 1%;">Men</a>
				  	</li>
				  	<li class="nav-item mr-4">
				    	<a class="nav-link" id="pills-women-tab" data-toggle="pill" href="#pills-women" role="tab" aria-controls="pills-contact" aria-selected="false" style="padding-left: 0%; padding-right: 1%;">Women</a>
				  	</li>
				  	<li class="nav-item mr-4">
				    	<a class="nav-link" id="pills-accessories-tab" data-toggle="pill" href="#pills-accessories" role="tab" aria-controls="pills-contact" aria-selected="false" style="padding-left: 0%; padding-right: 1%;">Accessories</a>
				  	</li>
				</ul>
				<ul class="nav nav-pills mb-4 justify-content-end" id="pills-tab2" role="tablist">
				  	<li class="nav-item mr-1">
				    	<a class="btn btn-filter-search" href="#filter" data-toggle="collapse" data-target="#filter" aria-expanded="true" aria-controls="filter" id="button-filter">
	    					<i class="fa fa-sort" id="icon-filter"></i> Filter
	  					</a>
				  	</li>
				  	<li class="nav-item mr-1">
				    	<a class="btn btn-filter-search" href="#search" data-toggle="collapse" data-target="#search" aria-expanded="true" aria-controls="search" id="button-search">
	    					<i class="fa fa-search" id="icon-search"></i> Search
	  					</a>
				  	</li>
				</ul>
				<p style="clear: both;">
					<div class="collapse" id="filter" style="">
					  	<div class="card card-body" style="background-color: #f2f2f2; color: #888; border-radius: 3px;">
							<div class="row">
								<div class="col-sm">
									<h6 style="color: #222;">Sort By</h6>
									<div class="list-group" style="padding: 0%;">
									  	<a href="#" class="list-group-item list-group-item-action p-1 border-0 bg-transparent">Default</a>
									  	<a href="#" class="list-group-item list-group-item-action p-1 border-0 bg-transparent">Popularity</a>
									  	<a href="#" class="list-group-item list-group-item-action p-1 border-0 bg-transparent">Porta Rating</a>
									  	<a href="#" class="list-group-item list-group-item-action p-1 border-0 bg-transparent">Price: Low to High</a>
									  	<a href="#" class="list-group-item list-group-item-action p-1 border-0 bg-transparent">Price: High to Low</a>
									</div>
								</div>
								<div class="col-sm">
									<h6 style="color: #222;">Price</h6>
									<div class="list-group" style="padding: 0%;">
									  	<a href="#" class="list-group-item list-group-item-action p-1 border-0 bg-transparent">0-50</a>
									  	<a href="#" class="list-group-item list-group-item-action p-1 border-0 bg-transparent">50-100</a>
									  	<a href="#" class="list-group-item list-group-item-action p-1 border-0 bg-transparent">100-150</a>
									  	<a href="#" class="list-group-item list-group-item-action p-1 border-0 bg-transparent">150-200</a>
									  	<a href="#" class="list-group-item list-group-item-action p-1 border-0 bg-transparent">200 +</a>
									</div>
								</div>
								<div class="col-sm">
									<h6 style="color: #222;">Color</h6>
									<div class="list-group" style="padding: 0%;">
									  	<a href="#" class="list-group-item list-group-item-action p-1 border-0 bg-transparent"><i class="fa fa-circle" style="color: black;"></i> Black</a>
									  	<a href="#" class="list-group-item list-group-item-action p-1 border-0 bg-transparent"><i class="fa fa-circle" style="color: blue;"></i> Blue</a>
									  	<a href="#" class="list-group-item list-group-item-action p-1 border-0 bg-transparent"><i class="fa fa-circle" style="color: grey;"></i> Grey</a>
									  	<a href="#" class="list-group-item list-group-item-action p-1 border-0 bg-transparent"><i class="fa fa-circle" style="color: green;"></i> Green</a>
									  	<a href="#" class="list-group-item list-group-item-action p-1 border-0 bg-transparent"><i class="fa fa-circle" style="color: red;"></i> Red</a>
									  	<a href="#" class="list-group-item list-group-item-action p-1 border-0 bg-transparent"><i class="fa fa-circle" style="color: white;"></i> White</a>
									</div>
								</div>
								<div class="col-sm">
									<h6 style="color: #222;">Tags</h6>
									<div class="mt-2">
										<a href="#" class="mr-auto mt-1 btn-tags">Denim</a>
										<a href="#" class="mr-auto mt-1 btn-tags">Jacket</a>
										<a href="#" class="mr-auto mt-1 btn-tags">Street</a>
										<a href="#" class="mr-auto mt-1 btn-tags">Skate</a>
									</div>
								</div>
							</div>
					  	</div>
					</div>
					<div class="collapse" id="search" style="">
						<div class="card card-body border-0">
					  	<form>
					  		<input type="search" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Search..." style="color: #222">
					  	</form>
					  </div>
					</div>
				</p>
				
				
			</div>
		<!-- END Navigation Product ==============================================================================================-->
			
		<!-- PILL PRODUCT=====================================================================================================-->
			<div class="container mt-5" style="height: 1717.38px;">
				<div class="tab-content" id="pills-tabContent">

				<!--ALL PILL======================================================================================================-->
				  	<div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab">

						<div class="container">
							<div class="row">
								<div class="col-md-3 p-3">
									<div class="wrap-product">
										<img src="Assets/Img/product-01.jpg" class="img-fluid">
										<div class="info-quick">
											<a href="#" data-toggle="modal" data-target="#modal-quick" class="btn btn-quick-view">Quick Preview</a>
										</div>
									</div>
									<div class="col-md-12 p-0">
										<a href="#" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6" style="position: relative;">Product Name</a>
										<a href="#" data-toggle="modal" class="stext-105 cl4 hov-cl1 trans-04 js-name-b2 p-b-6 btn-whishlist" style="position: absolute; right: 0px;" id="">
											<i class="fa fa-heart-o color-2"></i>
										</a>
									</div>
									<div class="col-md-12 p-0">
										<span class="stext-104 cl3 p-b-6">Rp. 125.000</span>
									</div>
								</div>
							</div>
						</div>

				  	</div>
				<!--END ALL PILL==================================================================================================-->

				<!--MEN PILL======================================================================================================-->
				  	<div class="tab-pane fade" id="pills-men" role="tabpanel" aria-labelledby="pills-men-tab">
				  		
				  		<div class="container">
							<div class="row">
								<div class="col-md-3 p-3">
									<div class="wrap-product">
										<img src="Assets/Img/product-03.jpg" class="img-fluid">
										<div class="info-quick">
											<a href="" class="btn btn-quick-view">Quick Preview</a>
										</div>
									</div>
								</div>
								<div class="col-md-3 p-3">
									<div class="wrap-product">
										<img src="Assets/Img/product-11.jpg" class="img-fluid">
										<div class="info-quick">
											<a href="" class="btn btn-quick-view">Quick Preview</a>
										</div>
									</div>
								</div>
								<div class="col-md-3 p-3">
									<div class="wrap-product">
										<img src="Assets/Img/product-12.jpg" class="img-fluid">
										<div class="info-quick">
											<a href="" class="btn btn-quick-view">Quick Preview</a>
										</div>
									</div>
								</div>
							</div>
						</div>

				  	</div>
				<!--END MEN PILL==================================================================================================-->

				<!--WOMEN PILL====================================================================================================-->
				  	<div class="tab-pane fade" id="pills-women" role="tabpanel" aria-labelledby="pills-women-tab">
				  		
				  		<div class="container">
							<div class="row">
								<div class="col-md-3 p-3">
									<div class="wrap-product">
										<img src="Assets/Img/product-01.jpg" class="img-fluid">
										<a href="2">
											<div class="info-quick">
												<button>AAA</button>
											</div>
										</a>
									</div>
								</div>
								<div class="col-md-3 p-3">
									<div class="wrap-product">
										<img src="Assets/Img/product-02.jpg" class="img-fluid">
										<a href="2">
											<div class="info-quick">
												<button>AAA</button>
											</div>
										</a>
									</div>
								</div>
								<div class="col-md-3 p-3">
									<div class="wrap-product">
										<img src="Assets/Img/product-04.jpg" class="img-fluid">
										<a href="2">
											<div class="info-quick">
												<button>AAA</button>
											</div>
										</a>
									</div>
								</div>
								<div class="col-md-3 p-3">
									<div class="wrap-product">
										<img src="Assets/Img/product-05.jpg" class="img-fluid">
										<a href="2">
											<div class="info-quick">
												<button>AAA</button>
											</div>
										</a>
									</div>
								</div>
								<div class="col-md-3 p-3">
									<div class="wrap-product">
										<img src="Assets/Img/product-07.jpg" class="img-fluid">
										<a href="2">
											<div class="info-quick">
												<button>AAA</button>
											</div>
										</a>
									</div>
								</div>
								<div class="col-md-3 p-3">
									<div class="wrap-product">
										<img src="Assets/Img/product-08.jpg" class="img-fluid">
										<a href="2">
											<div class="info-quick">
												<button>AAA</button>
											</div>
										</a>
									</div>
								</div>
								<div class="col-md-3 p-3">
									<div class="wrap-product">
										<img src="Assets/Img/product-10.jpg" class="img-fluid">
										<a href="2">
											<div class="info-quick">
												<button>AAA</button>
											</div>
										</a>
									</div>
								</div>
								<div class="col-md-3 p-3">
									<div class="wrap-product">
										<img src="Assets/Img/product-13.jpg" class="img-fluid">
										<a href="2">
											<div class="info-quick">
												<button>AAA</button>
											</div>
										</a>
									</div>
								</div>
								<div class="col-md-3 p-3">
									<div class="wrap-product">
										<img src="Assets/Img/product-14.jpg" class="img-fluid">
										<a href="2">
											<div class="info-quick">
												<button>AAA</button>
											</div>
										</a>
									</div>
								</div>
								<div class="col-md-3 p-3">
									<div class="wrap-product">
										<img src="Assets/Img/product-16.jpg" class="img-fluid">
										<a href="2">
											<div class="info-quick">
												<button>AAA</button>
											</div>
										</a>
									</div>
								</div>
							</div>
						</div>

				  	</div>
				<!--END WOMEN PILL================================================================================================-->

				<!--ACC PILL======================================================================================================-->
				  	<div class="tab-pane fade" id="pills-accessories" role="tabpanel" aria-labelledby="pills-accessories-tab">
				  		
				  		<div class="container">
							<div class="row">
								<div class="col-md-3 p-3">
									<div class="wrap-product">
										<img src="Assets/Img/product-06.jpg" class="img-fluid">
										<a href="2">
											<div class="info-quick">
												<button>AAA</button>
											</div>
										</a>
									</div>
								</div>
								<div class="col-md-3 p-3">
									<div class="wrap-product">
										<img src="Assets/Img/product-09.jpg" class="img-fluid">
										<a href="2">
											<div class="info-quick">
												<button>AAA</button>
											</div>
										</a>
									</div>
								</div>
								<div class="col-md-3 p-3">
									<div class="wrap-product">
										<img src="Assets/Img/product-12.jpg" class="img-fluid">
										<a href="2">
											<div class="info-quick">
												<button>AAA</button>
											</div>
										</a>
									</div>
								</div>
								<div class="col-md-3 p-3">
									<div class="wrap-product">
										<img src="Assets/Img/product-15.jpg" class="img-fluid">
										<a href="2">
											<div class="info-quick">
												<button>AAA</button>
											</div>
										</a>
									</div>
								</div>
							</div>
						</div>

				  	</div>
				<!--END ACC PILL==================================================================================================-->

				</div>
			</div>
		<!-- END PILL PRODUCT=================================================================================================-->

		<div class="container mt-1 mb-4 p-4 text-center">
			<a href="#" class="btn btn-alien hover-white px-5 rounded-pill">LOAD MORE</a>
		</div>
	<!-- Ending Product Overview==================================================================================================-->
</section>

<?php require_once 'template/footer.php'; ?>