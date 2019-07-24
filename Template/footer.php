<footer class="footer mt-5 py-3">
  	<div class="container py-4">
    	<div class="row">
    		<div class="col-md-3 mt-2 mb-4 p-4"> 
    			<h6>CATEGORIES</h6> 
    			<a href="" class="link-footer mt-4">Men</a>
    			<a href="" class="link-footer mt-2">Women</a>
    			<a href="" class="link-footer mt-2">Accessories</a>
    		</div>
    		<div class="col-md-3 mt-2 mb-4 p-4"> 
    			<h6>HELP</h6> 
    			<a href="" class="link-footer mt-4">Track Order</a>
    			<a href="" class="link-footer mt-2">Returns</a>
    			<a href="" class="link-footer mt-2">Shipping</a>
    			<a href="" class="link-footer mt-2">FAQs</a>
    		</div>
    		<div class="col-md-3 mt-2 mb-4 p-4"> 
    			<h6>GET IN TOUCH</h6> 
    			<p class="text-sm-left text-justify text-wrap mt-4">Any questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or call us on (+1) 96 716 6879</p>
    			<a href="#" class="link-footer d-inline"> <i class="ti-facebook"></i> </a>
    			<a href="#" class="link-footer d-inline"> <i class="ti-instagram"></i> </a>
    			<a href="#" class="link-footer d-inline"> <i class="ti-pinterest"></i> </a>
    		</div>
    		<div class="col-md-3 mt-2 mb-4 p-4"> 
    			<h6>NEWSLETTER</h6> 
    			<form class="mt-4">
    				<input type="email" name="email_subs" id="email_subs" class="form-control email-subs" placeholder="example@mail.com"><br>
    				<button type="submit" class="btn btn-danger rounded-pill px-5 btn-subs">SUBSCRIBE</button>
    			</form>
    		</div>
    	</div>
    	<center>
    		Copyright ©2019 | Rizki Khair  by Celeno
    	</center>
  	</div>
</footer>

<!-- Modal SEARCH==========================================================================================================-->
	<div class="modal fade bd-example-modal-xl" id="modal-search" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true" style="background-color: rgba(255, 255, 255, 0.9);">
	  <div class="modal-dialog modal-xl modal-dialog-centered" style="width: 100%; height: auto;">
	    <div class="modal-content" style="width: 100%; height: 100%; background-color: rgba(255, 255, 255, 0.9);">
	      	<form>
	      		<input type="text" class="form-control form-control-lg" placeholder="Search..." style="border-radius: 0px;">
	  		</form>
	    </div>
	  </div>
	</div>
<!--END Modal SEARCH==========================================================================================================-->

<!-- Modal LOGOUT==========================================================================================================-->
	<div class="modal fade bd-example-modal-xl" id="modal-logout" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true" style="background-color: rgba(255, 255, 255, 0.9);  overflow: scroll;">
	  <div class="modal-dialog modal-xl" style="width: 100%; height: auto;">
	    <div class="modal-content" style="width: 100%; height: 100%; background-color: transparent; border:unset;">
	      	<center>
	      		<h4><?= Session::get('name'); ?> Are you sure to logout ?</h4>
	      		<br>
	      		<form action="Logout.php" method="post">
	      		<button type="submit" name="yes_logout" id="yes_logout" class="btn btn-danger btn-lg text-light rounded-pill"> YES! </button>
	      		<button type="button" class="btn btn-success btn-lg text-light rounded-pill" data-dismiss="modal"> NO! </button>
	      		</form>
	      	</center>
	    </div>
	  </div>
	</div>
<!--END Modal LOGOUT==========================================================================================================-->

<!--Modal Quick View=======================================================================-->
	<div class="modal fade bd-example-modal-xl" id="modal-quick" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	  	<div class="modal-dialog modal-xl">
	    	<div class="modal-content">
	    		<div class="modal-body">
	    			<div class="row 50">
	    				<div class="col-md-6 col-lg-7 p-0">
	    					<div class="col-md-12">
	    						<div id="detail-quick" class="carousel slide carousel-fade" data-ride="carousel"  data-interval="0">
									<div class="carousel-inner">
									    <div class="carousel-item active">
									    	<img src="<?= $GLOBALS['path'];?>/<?= $GLOBALS['path'];?>/assets/img/product-detail-01.jpg" class="d-block w-100" alt="...">
									    </div>
									    <div class="carousel-item" id="detail-quick-2">
									      	<img src="<?= $GLOBALS['path'];?>/<?= $GLOBALS['path'];?>/assets/img/product-detail-02.jpg" class="d-block w-100" alt="...">
									    </div>
									    <div class="carousel-item">
									      	<img src="<?= $GLOBALS['path'];?>/<?= $GLOBALS['path'];?>/assets/img/product-detail-03.jpg" class="d-block w-100" alt="...">
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
									<img src="<?= $GLOBALS['path'];?>/assets/img/product-detail-01.jpg" class="img-fluid">
			    				</button>	
	    						<button style="display: inline; max-width: 20%; cursor: pointer;" type="button" data-togle="carousel" data-target="#detail-quick" data-slide-to="1" class="bg-transparent p-0 border-0">
									<img src="<?= $GLOBALS['path'];?>/assets/img/product-detail-02.jpg" class="img-fluid">
			    				</button>	
	    						<button style="display: inline; max-width: 20%; cursor: pointer;" type="button" data-togle="carousel" data-target="#detail-quick" data-slide-to="2" class="bg-transparent p-0 border-0">
									<img src="<?= $GLOBALS['path'];?>/assets/img/product-detail-03.jpg" class="img-fluid">
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
	    	</div>
	  	</div>
	</div>
<!--End Modal Quick View=====================================================================================================-->

	<div class="modal fade" id="modal-wishlist" tabindex="100" role="dialog" aria-labelledby="modal-wishlist" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered border-0 rounded-0">
			<div class="modal-content border-0 rounded-0 p-3">
				<h1 class="text-center text-success mt-4 checked"><i class="fa fa-check"></i></h1>
				<div class="col-sm-12 mt-3 mb-2">
					<h3 class="text-dark text-center"> Product Name </h3>
				</div>
				<div class="col-sm-12">
					<h5 class="text-secondary text-center"> is added to whistlist! </h5>
				</div>
				<div class="col-sm-12 mt-5 text-right">
					<form action="" method="post">
						<button class="btn btn-md btn-info" data-dismiss="modal"> OK </button>
					</form>
				</div>
			</div>
		</div>
	</div>

</div>
<script src="Assets/Bootstrap 4/js/jquery.js"></script>
<script src="Assets/Bootstrap 4/js/bootstrap.min.js"></script>
<script type="text/javascript">

</script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.image-bg-trans').fadeIn(2000);
		var i=0;
		$('#valueprogress').each(function(){
			$("#progressbar").animate({"width": 100 + "%"}, {duration: 600, easing: 'linear'});
			for (i = 0; i <= 100; i++) { 
				$('#valueprogress').animate({ 'value': i }, {duration: 1});
				//$( ".animate-transition-static" ).delay(1000).fadeOut(1000);
			}			  			
		});
		$( ".animate-transition-static" ).delay(1000).fadeOut(1000);
		$( ".animate-transition" ).delay(2500).fadeIn(2500);
		$('#plus').click(function(){
			var value_of = parseInt($('#quantity').val());
			value_of = value_of + 1;
			$('#quantity').val(value_of);
		});
		$('#minus').click(function(){
			var value_of = parseInt($('#quantity').val());
			if (value_of == 1) {
				value_of = 1;
				$('#quantity').val(value_of);	
			}else{
				value_of = value_of - 1;
				$('#quantity').val(value_of);
			}
		});
		$('.btn-whishlist').click(function(){
			$(this).find("i").removeClass("fa-heart-o");
			$(this).find("i").addClass("fa-heart");
			$(this).find("i").removeClass("color-2");
			$(this).find("i").addClass("color-1");
			//$('#modal-wishlist').modal('show');
			$('.checked').fadeIn(2000);
			$('#modal-wishlist').modal({backdrop: 'static'});
			//$(this).prop("href", "logo.php");
			return true;	
		});

		$("#btn-scroll-top").click(function(){
			$("html, body").animate({scrollTop: $("#for-delete").offset().top}, 500);
			$("#field-scroll").fadeOut(1000);
			return false;
		});
	////////////////////////////////////////////////// ANIMATION BANNER ///////////////////////////////////////////////////////////
		$('#banner-01').show('slow');

	////////////////////////////////////////////////// ANIMATION PILLS //////////////////////////////////////////////////////////////
		$('#button-filter').click(function(){
			$('#search').removeClass('show');
			$(this).find("i").toggleClass("fa-sort fa-times");
			$('#button-search').find("i.fa-times").toggleClass(" fa-times fa-search");

		});
		$('#button-search').click(function(){
			$('#filter').removeClass('show');
			$(this).find("i").toggleClass("fa-search fa-times");
			$('#button-filter').find("i.fa-times").toggleClass("fa-times fa-sort");
		});


	//////////////////////////////////////////////// ANIMATION SCROLL////////////////////////////////////////////////////////////////
		$(window).scroll(function() {
			var scroll 	= $(window).scrollTop();
			var width 	= $(window).width();
			
			if (width < 1025) {
				$(".navbar").css({"backgroundColor": '#fff'},1500);
		    	$(".fixed-top").css({'top':'0px'}, 100);
		    	if (scroll > 120) {
			    	$("#field-scroll").fadeIn(1000);
			    }else{
			    	$("#field-scroll").fadeOut(1000);
			    }
			}else if (width >= 1025) {
				if (scroll > 1) {
					$(".navbar").css({"backgroundColor": '#fff'},1500);
					$(".navbar").css({"borderBottom": '1px solid rgba(222, 226, 230, 0.9)'},1500);
			    	$(".fixed-top").css({'top':'0px'}, 1000);
			    	if (scroll > 120) {
			    		$("#field-scroll").fadeIn(1000);
			    	}else{
			    		$("#field-scroll").fadeOut(1000);
			    	}
				}else{
					<?php if ($pages == 'Home') { ?>
					
						$(".navbar").css({"backgroundColor": 'transparent'},1500);
						$(".navbar").css({"borderBottom": 'unset'},1500);
					
					<?php }else{ ?>
					
						$(".navbar").css({"backgroundColor": '#fff'},1500);
						$(".navbar").css({"borderBottom": '1px solid rgba(222, 226, 230, 0.9)'},1500);

			    	<?php } ?>
			    	$(".fixed-top").css({'transform': 'top', 'transition':'0.3s','top':'40px'}, 1000);	
			    	if (scroll > 120) {
			    		$("#field-scroll").fadeIn(1000);
			    	}else{
			    		$("#field-scroll").fadeOut(1000);
			    	}
				} 	
			}
			return false;
		});
		return false;
	});
</script>
</body>
</html>