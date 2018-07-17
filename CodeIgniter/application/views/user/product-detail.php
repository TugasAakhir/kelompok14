<!DOCTYPE html>
<html lang="en">
<head>
	<title>Product Detail</title>
		
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Electronic Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
		SmartPhone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
		<link href="<?php echo base_url('assets/css/bootstrap.css');?>" rel="stylesheet" type="text/css" media="all" />
	<link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet" type="text/css" media="all" />
	<link href="<?php echo base_url('assets/css/fasthover.css');?>" rel="stylesheet" type="text/css" media="all" />
	<link href="<?php echo base_url('assets/css/popuo-box.css');?>" rel="stylesheet" type="text/css" media="all" />
	<!-- //Custom Theme files -->
	<!-- font-awesome icons -->
	<link href="<?php echo base_url('assets/css/font-awesome.css');?>" rel="stylesheet"> 
	<!-- //for-mobile-apps -->
	<!-- Custom Theme files -->
	<!--===============================================================================================-->
		<link rel="icon" type="image/png" href="<?php echo base_url('assets/images/icons/favicon.png');?>"/>
	<!--===============================================================================================-->

		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css');?>">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fonts/themify/themify-icons.css');?>">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css');?>">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fonts/elegant-font/html-css/style.css');?>">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/animate/animate.css');?>">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/css-hamburgers/hamburgers.min.css');?>">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/animsition/css/animsition.min.css');?>">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/select2/select2.min.css');?>">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/daterangepicker/daterangepicker.css');?>">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/slick/slick.css');?>">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/lightbox2/css/lightbox.min.css');?>">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/util.css');?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/main.css');?>">

	<!-- //font-awesome icons -->
	<!-- js -->
	<script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/jquery.countdown.css');?>" /> <!-- countdown --> 
	<!-- //js -->  
	<!-- web fonts --> 
	<link href='//fonts.googleapis.com/css?family=Glegoo:400,700' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

	<!-- //web fonts -->  
	<!-- start-smooth-scrolling -->
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling --> 
</head> 
<body class="animsition">
	<!-- for bootstrap working -->
	<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap-3.1.1.min.js');?>"></script>
	<!-- //for bootstrap working -->
	<!-- header modal -->
	<div class="modal fade" id="myModal88" tabindex="-1" role="dialog" aria-labelledby="myModal88"
		aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<br><br>
					<h1 class="modal-title" id="myModalLabel">Login</h1>
				</div>
				<div class="modal-body modal-body-sub">
					<div class="row">
						<div class="col-md-8 modal_body_left modal_body_left1" style="border-right: 1px dotted #C2C2C2;padding-right:3em;">
							<div class="sap_tabs">	
								<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
									<ul>
										<li class="resp-tab-item" aria-controls="tab_item-0"><span>Sign in</span></li>
										<li class="resp-tab-item" aria-controls="tab_item-1"><span>Sign up</span></li>
									</ul>		
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
										<div class="facts">
											<div class="register">
												<?php echo form_open('login/cekLogin')?>
 												<?php echo validation_errors();?>
 												<div class="form-group">
													<input name="Email" placeholder="Email Address" type="email" required="" >
												</div>		
												<div class="form-group">				
													<input name="Password" placeholder="Password" type="password" required="">
												</div>
												<div class="form-group">								
													<div class="sign-up">
 														<?php echo "<a href='".base_url('index.php/login/create')."' ><input type='submit' value='Sign in' class='btn btn-primary'/></a>"; ?>
 														<?php echo form_close(); ?>
													</div>
												</div>
											</div>
										</div> 
									</div>	 
									<div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
										<div class="facts">
											<div class="register">
												<?php 
							 						echo form_open_multipart('login/signUp'); 
							 						echo validation_errors();
							 					?>			
													<input name="nama" placeholder="Nama" type="text" required="">
													<br><br>
													<input name="alamat" placeholder="Alamat" type="text" required="">
													<br><br>			
													<input name="noTelepon" placeholder="No Telepon" type="text" required="">	
													<br><br>					
													<input name="kodePos" placeholder="Kode Pos" type="text" required="">
													<br><br>	
													<input name="provinsi" placeholder="Provinsi" type="text" required="">	
													<br><br>					
													<input name="kota" placeholder="Kota" type="text" required="">	
													<br>
													<input placeholder="Email" name="email" type="email" required="">	
													<input placeholder="Password" name="password" type="password" required="">	
													<input placeholder="ConfirmPassword" name="ConfirmPassword" type="password" required=""> <br><br>
													<input name="level" value="user" type="hidden" required="">	
													<div class="sign-up">
														<input type="submit" value="Create Account"/>
													</div>
													<?php echo form_close(); ?>
											</div>
										</div>
									</div> 			        					            	      
								</div>	
							</div>
							<script src="<?php echo base_url('assets/js/easyResponsiveTabs.js');?>" type="text/javascript"></script>
							<script type="text/javascript">
								$(document).ready(function () {
									$('#horizontalTab').easyResponsiveTabs({
										type: 'default', //Types: default, vertical, accordion           
										width: 'auto', //auto or any width like 600px
										fit: true   // 100% fit in a container
									});
								});
							</script>
							<div id="OR" class="hidden-xs">OR</div>
						</div>
						<div class="col-md-4 modal_body_right modal_body_right1">
							<div class="row text-center sign-with">
								<div class="col-md-12">
									<h3 class="other-nw">Sign in with</h3>
								</div>
								<div class="col-md-12">
									<ul class="social">
										<li class="social_facebook"><a href="./www.facebook.com" class="entypo-facebook"></a></li>
										<li class="social_dribbble"><a href="www.gmail.com" class="entypo-dribbble"></a></li>
										<li class="social_twitter"><a href="www.twitter.com" class="entypo-twitter"></a></li>
										<li class="social_behance"><a href="www.pinterest.com" class="entypo-behance"></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- header modal -->
	<!-- header -->
	
	<!-- Header -->
	<header class="header1">
		<div class="container-menu-header">
			<div class="wrap_header">

				<div class="header" id="home1">
					<div class="container">
						<div class="w3l_login">
							<a href="#" data-toggle="modal" data-target="#myModal88"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
						</div>
						<div class="w3l_logo">
							<h1><a href="index.html">Electronic Store<span>Your stores. Your place.</span></a></h1>
						</div>
						

					</div>
				</div>
			</div>
			<div class="wrap_header">
				<!-- Logo -->
				<a href="<?php echo base_url('index.php/user/index');?>" class="logo">
					<img src="<?php echo base_url('assets/images/icons/te.png');?>" alt="IMG-LOGO">
				</a>

				<!-- Menu -->
				<div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">

							<li>
								<a href="<?php echo base_url('index.php/Shop/index');?>">Shop</a>
							</li>

							<li>
								<a href="<?php echo base_url('index.php/Blog/index');?>">Blog</a>
							</li>

							<li>
								<a href="<?php echo base_url('index.php/About/index');?>">About</a>
							</li>

							<li>
								<a href="<?php echo base_url('index.php/Contact/index');?>">Contact</a>
							</li>
						</ul>
					</nav>
				</div>

				
			</div>
		</div>

		

		<!-- Menu Mobile -->
		<div class="wrap-side-menu" >
			<nav class="side-menu">
				<ul class="main-menu">
					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<span class="topbar-child1">
							Free shipping for standard order over $100
						</span>
					</li>

					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<div class="topbar-child2-mobile">
							<span class="topbar-email">
								fashe@example.com
							</span>

							<div class="topbar-language rs1-select2">
								<select class="selection-1" name="time">
									<option>USD</option>
									<option>EUR</option>
								</select>
							</div>
						</div>
					</li>

					<li class="item-topbar-mobile p-l-10">
						<div class="topbar-social-mobile">
							<a href="#" class="topbar-social-item fa fa-facebook"></a>
							<a href="#" class="topbar-social-item fa fa-instagram"></a>
							<a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
							<a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
							<a href="#" class="topbar-social-item fa fa-youtube-play"></a>
						</div>
					</li>

					<li class="item-menu-mobile">
						<a href="index.html">Home</a>
						<i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
					</li>

					<li class="item-menu-mobile">
						<a href="product.html">Shop</a>
					</li>

					<li class="item-menu-mobile">
						<a href="product.html">Sale</a>
					</li>

					<li class="item-menu-mobile">
						<a href="cart.html">Features</a>
					</li>

					<li class="item-menu-mobile">
						<a href="blog.html">Blog</a>
					</li>

					<li class="item-menu-mobile">
						<a href="about.html">About</a>
					</li>

					<li class="item-menu-mobile">
						<a href="contact.html">Contact</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>


	<!-- Product Detail -->
	<div class="container bgwhite p-t-35 p-b-80">
		<div class="flex-w flex-sb">
			<div class="w-size13 p-t-30 respon5">
				<div class="wrap-slick3 flex-sb flex-w">
					<div class="wrap-slick3-dots"></div>

					<div >
						<div >
							<div class="wrap-pic-w">
								<img src="<?php echo base_url().'assets/uploads/'.$detail_barang->foto;?>" width="300px" height="400" alt="IMG-PRODUCT">
							</div>
						</div>

					</div>
				</div>
			</div>

			<div class="w-size14 p-t-30 respon5">
				<h4 class="product-detail-name m-text16 p-b-13">
					<?php echo $detail_barang->namaBarang;?>
				</h4>

				<span class="m-text17">
					Rp. <?php echo $detail_barang->harga;?>
				</span>

				<p class="s-text8 p-t-10">
					<?php echo $detail_barang->deskripsi;?>
				</p>

				<!--  -->
				<div class="p-t-33 p-b-60">

					<div class="flex-m flex-w">
						<div class="s-text15 w-size15 t-center">
							Color
						</div>
						<div class="rs2-select2 rs3-select2  of-hidden w-size16">
							<p>: <?php echo $detail_barang->warna;?></p>
						</div>
					</div>
					<div class="flex-m flex-w">
						<div class="s-text15 w-size15 t-center">
							Berat
						</div>
						<div class="rs2-select2 rs3-select2  of-hidden w-size16">
							<p>: <?php echo $detail_barang->berat;?></p>
						</div>
					</div>

					<div class="flex-r-m flex-w p-t-10">
						<div class="w-size16 flex-m flex-w">
							

							<div class="btn-addcart-product-detail size9 trans-0-4 m-t-10 m-b-10">
								<!-- Button -->
								<a href="<?php echo base_url().'index.php/ProductDetail/beli/'.$this->uri->segment(3);?>"><button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
									Beli
								</button></a>
							</div>
						</div>
					</div>
				</div>

				<div class="p-b-45">
					<span class="s-text8 m-r-35">Categories: Mug, Design</span>
				</div>
			</div>
		</div>
	</div>
<!-- Footer -->
	<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
		<div class="flex-w p-b-90">
			<div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
				<h4 class="s-text12 p-b-30">
					GET IN TOUCH
				</h4>

				<div>
					<p class="s-text7 w-size27">
						Ada pertanyaan ? Beritau kami di Polinema Lt 7, Soekarno Hatta, Indonesia, (+62)81332677077 or (+62)81232246320
					</p>

					<div class="flex-m p-t-30">
						<a href="#" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-pinterest-p"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-snapchat-ghost"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-youtube-play"></a>
					</div>
				</div>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Categories
				</h4>

				<ul>
					<li class="p-b-9">
						<a href="#" class="s-text7">
							Laptop
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Kitchen
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							TV
						</a>
					</li>

				</ul>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Links
				</h4>

				<ul>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							About
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Contact
						</a>
					</li>
				</ul>
			</div>

			
		</div>

		<div class="t-center p-l-15 p-r-15">
			<a href="#">
				<img class="h-size2" src="<?php echo base_url('assets/images/icons/paypal.png');?>" alt="IMG-PAYPAL">
			</a>

			<a href="#">
				<img class="h-size2" src="<?php echo base_url('assets/images/icons/visa.png');?>" alt="IMG-VISA">
			</a>

			<a href="#">
				<img class="h-size2" src="<?php echo base_url('assets/images/icons/mastercard.png');?>" alt="IMG-MASTERCARD">
			</a>

			<a href="#">
				<img class="h-size2" src="<?php echo base_url('assets/images/icons/express.png');?>" alt="IMG-EXPRESS">
			</a>

			<a href="#">
				<img class="h-size2" src="<?php echo base_url('assets/images/icons/discover.png');?>" alt="IMG-DISCOVER">
			</a>

			
		</div>
	</footer>



	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection -->
	<div id="dropDownSelect1"></div>
	<div id="dropDownSelect2"></div>




<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url('assets/vendor/animsition/js/animsition.min.js');?>"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url('assets/vendor/bootstrap/js/popper.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.min.js');?>"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url('assets/vendor/select2/select2.min.js');?>"></script>
	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});

		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect2')
		});
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url('assets/vendor/slick/slick.min.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/slick-custom.js');?>"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url('assets/vendor/sweetalert/sweetalert.min.js');?>"></script>
	<script type="text/javascript">
		$('.block2-btn-addcart').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});

		$('.block2-btn-addwishlist').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");
			});
		});

		$('.btn-addcart-product-detail').each(function(){
			var nameProduct = $('.product-detail-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");
			});
		});
	</script>

<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/js/main.js');?>"></script>

</body>
</html>
