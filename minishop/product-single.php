<!DOCTYPE html>
<html lang="en">
  <head>
    <title>quang định</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body class="goto-here">
		<div class="py-1 bg-black">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">+ 1235 2355 98</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">quangdinnh@gmail.com</span>
					    </div>
					    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
						    <span class="text">Làm việc ca tuần</span>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">Quang định</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="index.php" class="nav-link">Trang Chủ</a></li>
	          <!--<li class="nav-item dropdown active">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Catalog</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="shop.php">Shop</a>
                <a class="dropdown-item" href="product-single.php">Single Product</a>
                <a class="dropdown-item" href="cart.php">Cart</a>
                <a class="dropdown-item" href="checkout.php">Checkout</a>
              </div>
            </li>-->
	          <li class="nav-item"><a href="about.php" class="nav-link">Giới thiệu </a></li>
	          <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="contact.php" class="nav-link">Liên hệ</a></li>
	           <li class="nav-item dropdown">
	          <a class="nav-link dropdown-toggle" href="#" id="dropdown0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Khách hàng</a>
              <div class="dropdown-menu" aria-labelledby="dropdown0">
              	<a class="dropdown-item" href="#">Đăng nhập </a>
                <a class="dropdown-item" href="#">Đăng xuất</a>
                <a class="dropdown-item" href="#">Thông báo</a>
               
              </div>
              </li>
	          <li class="nav-item cta cta-colored"><a href="cart.php" class="nav-link"><span class="icon-shopping_cart"></span>[0]</a></li>

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

    <div class="hero-wrap hero-bread" style="background-image: url('images/anh1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.php">QUANG ĐỊNH</a></span> <span></span></p>
            <h1 class="mb-0 bread">DỊCH VỤ</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
    	<div class="container">
			<?php
					
				 $id = $_GET["id"];
				 include("./cauhinh/db_cauhinh.php");
				 $ketnoi = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);

				// Lấy ra dữ liệu mong muốn
				$sql = "SELECT * FROM tbl_dichvu where madv='".$id ."'";
				$noidung = mysqli_query($ketnoi, $sql);

				// Hiển thị chúng
				while ($row = mysqli_fetch_array($noidung)) {	
			?>
			<div class="row">
    			<div class="col-lg-6 mb-5 ftco-animate">
    				<a href="images/product-1.png" class="image-popup prod-img-bg"><img src="<?php echo $row ['anh'] ; ?>"  style="height: 527px" class="img-fluid" alt="Colorlib Template"></a>
    			</div>
    			<div class="col-lg-6 product-details pl-md-5 ftco-animate">
    				<h3> <?php echo $row['tendich'] ?></h3>
					<div class="rating d-flex">
						<p class="text-left mr-4">
							<a href="#" class="mr-2">5.0</a>
							<a href="#"><span class="ion-ios-star-outline"></span></a>
							<a href="#"><span class="ion-ios-star-outline"></span></a>
							<a href="#"><span class="ion-ios-star-outline"></span></a>
							<a href="#"><span class="ion-ios-star-outline"></span></a>
							<a href="#"><span class="ion-ios-star-outline"></span></a>
						</p>
						<p class="text-left mr-4">
							<a href="#" class="mr-2" style="color: #000;">
							100 
							<span style="color: #bbb;">Đánh giá</span>
							</a>
						</p>
						<p class="text-left">
							<a href="#" class="mr-2" style="color: #000;">
							500 
							<span style="color: #bbb;">
								đã bán
							</span>
							</a>
						</p>
					</div>
					<p class="price">GIÁ:
						<?php echo $row['gia'] ?>
					</p>
					<p>
						Bao gồm :
						<br>
						<?php echo nl2br($row['noidung'] )?>
					</p>
					
				</div>

				<div>

	          		<p><a href="cart.php?id=<?php echo $row['madv']; ?>" class="btn btn-primary py-3 px-5">Buy now</a></p>
	          	</div>
          	</div>
          	<?php 
	          	} 
      		 ?>


    		<div class="row mt-5">
	          	<div class="col-md-12 nav-link-wrap">
		            <div class="nav nav-pills d-flex text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
		              <a class="nav-link ftco-animate mr-lg-1" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Bình luận</a>
		             
		            </div>
          		</div>

          <div class="col-md-12 tab-wrap">
	            <div class="tab-content bg-light" id="v-pills-tabContent">
              	<div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-day-2-tab">
              		<div>
              		
              		<form action="admin/nhanxetth.php" method="post">
              		<p> Nhận xét</p>
              		<input type="text" name="txtNoidung">
              		
              		<input type="hidden" name="txtMadv" value=" <?php echo $_GET['id']; ?>">
              		<input type="submit" name="" value="cập nhập">

              		</form>
              		</div>
              	


              		<?php
				 
				 include("./cauhinh/db_cauhinh.php");
				

				// Lấy ra dữ liệu mong muốn
				$sql = "SELECT * FROM tbl_nhanxet ";
				$noidung = mysqli_query($ketnoi, $sql);

				// Hiển thị chúng
				while ($row = mysqli_fetch_array($noidung)) {	
				?>
              		
              		<div class="p-4">
	              	<div class="review">
				   		<div class="user-img" style="background-image: url(images/person_1.jpg)">
				   		</div>
								   		<div class="desc">
								   			<h4>
								   				<span class="text-left"><?php echo $row['makh']; ?></span>
								   				<span class="text-right"><?php echo $row['ngayviet']; ?></span>
								   			</h4>
								   		
								   			<input type="text" name="" value="<?php echo html_entity_decode($row['noidung']); ?>" readonly>
								   		</div>
					</div>
               	 	</divo>
               	 	<?php 
               	 	}
               	 	mysqli_close( $ketnoi) ?>
                </div>
				
				
              <!--<div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-day-3-tab">
              	<div class="row p-4">
						   		<div class="col-md-7">
						   			<h3 class="mb-4">23 Reviews</h3>
						   			<div class="review">
								   		<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
								   		<div class="desc">
								   			<h4>
								   				<span class="text-left">Jacob Webb</span>
								   				<span class="text-right">14 March 2018</span>
								   			</h4>
								   			<p class="star">
								   				<span>
								   					<i class="ion-ios-star-outline"></i>
								   					<i class="ion-ios-star-outline"></i>
								   					<i class="ion-ios-star-outline"></i>
								   					<i class="ion-ios-star-outline"></i>
								   					<i class="ion-ios-star-outline"></i>
							   					</span>
							   					<span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
								   			</p>
								   			<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
								   		</div>
								   	</div>
								   	<div class="review">
								   		<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
								   		<div class="desc">
								   			<h4>
								   				<span class="text-left">Jacob Webb</span>
								   				<span class="text-right">14 March 2018</span>
								   			</h4>
								   			<p class="star">
								   				<span>
								   					<i class="ion-ios-star-outline"></i>
								   					<i class="ion-ios-star-outline"></i>
								   					<i class="ion-ios-star-outline"></i>
								   					<i class="ion-ios-star-outline"></i>
								   					<i class="ion-ios-star-outline"></i>
							   					</span>
							   					<span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
								   			</p>
								   			<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
								   		</div>
								   	</div>
								   	<div class="review">
								   		<div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
								   		<div class="desc">
								   			<h4>
								   				<span class="text-left">Jacob Webb</span>
								   				<span class="text-right">14 March 2018</span>
								   			</h4>
								   			<p class="star">
								   				<span>
								   					<i class="ion-ios-star-outline"></i>
								   					<i class="ion-ios-star-outline"></i>
								   					<i class="ion-ios-star-outline"></i>
								   					<i class="ion-ios-star-outline"></i>
								   					<i class="ion-ios-star-outline"></i>
							   					</span>
							   					<span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
								   			</p>
								   			<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
								   		</div>
								   	</div>
						   		</div>
						   		<div class="col-md-4">
						   			<div class="rating-wrap">
							   			<h3 class="mb-4">Give a Review</h3>
							   			<p class="star">
							   				<span>
							   					<i class="ion-ios-star-outline"></i>
							   					<i class="ion-ios-star-outline"></i>
							   					<i class="ion-ios-star-outline"></i>
							   					<i class="ion-ios-star-outline"></i>
							   					<i class="ion-ios-star-outline"></i>
							   					(98%)
						   					</span>
						   					<span>20 Reviews</span>
							   			</p>
							   			<p class="star">
							   				<span>
							   					<i class="ion-ios-star-outline"></i>
							   					<i class="ion-ios-star-outline"></i>
							   					<i class="ion-ios-star-outline"></i>
							   					<i class="ion-ios-star-outline"></i>
							   					<i class="ion-ios-star-outline"></i>
							   					(85%)
						   					</span>
						   					<span>10 Reviews</span>
							   			</p>
							   			<p class="star">
							   				<span>
							   					<i class="ion-ios-star-outline"></i>
							   					<i class="ion-ios-star-outline"></i>
							   					<i class="ion-ios-star-outline"></i>
							   					<i class="ion-ios-star-outline"></i>
							   					<i class="ion-ios-star-outline"></i>
							   					(98%)
						   					</span>
						   					<span>5 Reviews</span>
							   			</p>
							   			<p class="star">
							   				<span>
							   					<i class="ion-ios-star-outline"></i>
							   					<i class="ion-ios-star-outline"></i>
							   					<i class="ion-ios-star-outline"></i>
							   					<i class="ion-ios-star-outline"></i>
							   					<i class="ion-ios-star-outline"></i>
							   					(98%)
						   					</span>
						   					<span>0 Reviews</span>
							   			</p>
							   			<p class="star">
							   				<span>
							   					<i class="ion-ios-star-outline"></i>
							   					<i class="ion-ios-star-outline"></i>
							   					<i class="ion-ios-star-outline"></i>
							   					<i class="ion-ios-star-outline"></i>
							   					<i class="ion-ios-star-outline"></i>
							   					(98%)
						   					</span>
						   					<span>0 Reviews</span>
							   			</p>
							   		</div>
						   		</div>
						   	</div>
              </div>-->
            </div>
          </div>
        </div>
    	</div>
    </section>
		

    <footer class="ftco-footer ftco-section">
      <div class="container">
      	<div class="row">
      		<div class="mouse">
						<a href="#" class="mouse-icon">
							<div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
						</a>
					</div>
      	</div>
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Minishop</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Menu</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Shop</a></li>
                <li><a href="#" class="py-2 d-block">About</a></li>
                <li><a href="#" class="py-2 d-block">Journal</a></li>
                <li><a href="#" class="py-2 d-block">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Help</h2>
              <div class="d-flex">
	              <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
	                <li><a href="#" class="py-2 d-block">Shipping Information</a></li>
	                <li><a href="#" class="py-2 d-block">Returns &amp; Exchange</a></li>
	                <li><a href="#" class="py-2 d-block">Terms &amp; Conditions</a></li>
	                <li><a href="#" class="py-2 d-block">Privacy Policy</a></li>
	              </ul>
	              <ul class="list-unstyled">
	                <li><a href="#" class="py-2 d-block">FAQs</a></li>
	                <li><a href="#" class="py-2 d-block">Contact</a></li>
	              </ul>
	            </div>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
						  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

  <script>
		$(document).ready(function(){

		var quantitiy=0;
		   $('.quantity-right-plus').click(function(e){
		        
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		            
		            $('#quantity').val(quantity + 1);

		          
		            // Increment
		        
		    });

		     $('.quantity-left-minus').click(function(e){
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		      
		            // Increment
		            if(quantity>0){
		            $('#quantity').val(quantity - 1);
		            }
		    });
		    
		});
	</script>
    
  </body>
</html>