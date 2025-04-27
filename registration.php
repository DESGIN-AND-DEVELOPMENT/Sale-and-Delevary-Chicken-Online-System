<?php
session_start();
error_reporting(0);
$connection = mysqli_connect("localhost","root","","online_chickenand_booking");

if(isset($_POST['sign'])) {
    $name = $_POST['fname'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $profile = $_FILES['profile']['name'];
    $email = $_POST['email'];
    $user_type = 5;
    $password = md5($_POST['password']);

$sql = "INSERT INTO tbluser(name, gender, address, phone, user_type, profile_pic, email, password) 
VALUES ('$name','$gender','$address','$phone','$user_type','$profile','$email','$password')";

$query = mysqli_query($connection,$sql);

if($query) {
    move_uploaded_file($_FILES['profile']['tmp_name'], 'upload/' .$_FILES['profile']['name']);
    echo "thanks you have orad sign";
    header('location: login.php');
} else {
    echo "tyr again";
    header('location: registration.php');
}

}

?>



<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<title>Marry Off Wedding Category Bootstrap Responsive Website Template | Contact </title>
	<!-- Meta-Tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Marry Off Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
		Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta-Tags -->
	<!-- Style-sheets -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<!--// Style-sheets -->
	<!--web-fonts-->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
	<!--//web-fonts-->
</head>

<body>
<script src='../../../../../../../ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script><script src="../../../../../../../m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>
<script>
(function(){
	if(typeof _bsa !== 'undefined' && _bsa) {
  		// format, zoneKey, segment:value, options
  		_bsa.init('flexbar', 'CKYI627U', 'placement:w3layoutscom');
  	}
})();
</script>
<script>
(function(){
if(typeof _bsa !== 'undefined' && _bsa) {
	// format, zoneKey, segment:value, options
	_bsa.init('fancybar', 'CKYDL2JN', 'placement:demo');
}
})();
</script>
<script>
(function(){
	if(typeof _bsa !== 'undefined' && _bsa) {
  		// format, zoneKey, segment:value, options
  		_bsa.init('stickybox', 'CKYI653J', 'placement:w3layoutscom');
  	}
})();
</script>
<script>
	(function(v,d,o,ai){ai=d.createElement("script");ai.defer=true;ai.async=true;ai.src=v.location.protocol+o;d.head.appendChild(ai);})(window, document, "../../../../../../../vdo.ai/core/w3layouts/vdo.ai.js");
	</script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-125810435-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-125810435-1');
</script><script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../../../../../www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-30027142-1', 'w3layouts.com');
  ga('send', 'pageview');
</script>
<body>
	<!-- banner -->
	<div class="banner inner-banner" id="home">
		<!-- header -->
        <?php include('include/header.php'); ?>
		<!-- //header -->
		<h1 class="inner-title-agileits-w3layouts">Contact</h1>
	</div>
	<!-- //banner -->
	<!-- breadcrumb -->
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.html">Home</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">Contact</li>
		</ol>
	</nav>
	<!-- //breadcrumb -->
	<!-- contact -->
	<section class="contact py-5">
		<div class="container py-xl-5 py-sm-3">
			<!---728x90--->

			<h5 class="main-w3l-title mb-sm-3 mb-2">Contact Us</h5>
			<!---728x90--->

			<div class="row">
				<div class="col-lg-4 wthree_contact_left">
					<h3 class="subheading-wthree mb-3">About Us</h3>
					<p class="paragraph-agileinfo">Lorem ipsum
						<span>Welcome To Our Marry Off</span> dolor sit amet
						<a href="mailto:info@example.com">info@example.com</a> interdum sed aliquet quis.</p>
					<div class="info-img-agileits row">
						<div class="col-4 info1"></div>
						<div class="col-4 info2"></div>
						<div class="col-4 info3"></div>
					</div>
					<h3 class="subheading-wthree mb-3">Servicing Hours</h3>
					<ul>
						<li class="mb-3">
							<span>Monday-Friday</span> 9:00 am - 10:00 pm </li>
						<li>
							<span>Saturday & Sunday</span> 9:00 am - 12:00 pm</li>
					</ul>
				</div>
				<div class="col-lg-8 wthree_contact_left">
					<h3 class="subheading-wthree mb-3">Sign Form</h3>
					<form action="" method="post" enctype="multipart/form-data"> 
                        <div class="row">
                            <div class="col-md-6">
                             <div class="form-group">
                                <label for="">Full name</label>
                                <input type="text" class="form-control" name="fname" placeholder="enter your name">
                            </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                                <label for="">Address</label>
                                <input type="text" class="form-control" name="address" placeholder="enter your name">
                            </div>
                        </div>
                     </div>

                     <div class="row">
                            <div class="col-md-6">
                             <div class="form-group">
                                <label for="">Phone</label>
                                <input type="text" class="form-control" name="phone" placeholder="enter your name">
                            </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                                <label for="">Gender</label>
                                <select name="gender" id="gender" class="form-control">
                                    <option value="--select--">--select gender--</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </div>
                     </div>

                     <div class="row">
                            <div class="col-md-12">
                             <div class="form-group">
                                <label for="">profile</label>
                                <input type="file" class="form-control" name="profile" placeholder="enter your name">
                            </div>
                        </div>
                        
                     </div>  
                     <div class="row">
                            <div class="col-md-12">
                             <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" class="form-control" name="email" placeholder="enter your name">
                            </div>
                        </div>
                     </div>
                     <div class="row">
                     <div class="col-md-12">
                        <div class="form-group">
                                <label for="">Password:</label>
                                <input type="password" class="form-control" name="password" placeholder="enter your name">
                            </div>
                        </div>
                     </div>
                        <div class="row">
                            <div class="col-md-12">
                            <button type="submit" name="sign" value="sign" class="btn btn-primary py-2 px-5">Sign</button>
                            </div>
                        </div>
                    </form>
				</div>
			</div>
			<!---728x90--->

		</div>
	</section>
	<section class="map-agileits">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3048.512905908186!2d44.50662171518936!3d40.17539757820561!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406abcf86e940951%3A0x87a1923d7df42367!2sBest+Western+Congress+Hotel!5e0!3m2!1sen!2sin!4v1521098356599"></iframe>
	</section>
	<!-- //contact -->


	<!-- Footer -->
	<footer class="footer-section-w3-agileits py-5">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 footer-grids-w3-agile">
					<h2>Instagram Tweets</h2>
					<div class="row ff-images">
						<a href="stories.html" class="col-4">
							<img src="images/s1.jpg" class="img-fluid" alt="Responsive image">
						</a>
						<a href="stories.html" class="col-4">
							<img src="images/s2.jpg" class="img-fluid" alt="Responsive image">
						</a>
						<a href="stories.html" class="col-4">
							<img src="images/s3.jpg" class="img-fluid" alt="Responsive image">
						</a>
						<a href="stories.html" class="col-4">
							<img src="images/s2.jpg" class="img-fluid" alt="Responsive image">
						</a>
						<a href="stories.html" class="col-4">
							<img src="images/s3.jpg" class="img-fluid" alt="Responsive image">
						</a>
						<a href="stories.html" class="col-4">
							<img src="images/s1.jpg" class="img-fluid" alt="Responsive image">
						</a>
					</div>
				</div>
				<div class="col-lg-4 footer-grids-w3-agile">
					<h3>Get in touch</h3>
					<address>
						<p>Congress Yerevan, 1 Italy St, Yerevan,</p>
						<p class="my-2">Armenia,No 008921</p>
						<p class="phone">phone: +0(21) 334 5678</p>
						<p class="phone my-2">Fax: +0(21) 334 5678</p>
						<p class="phone">Mail:
							<a href="mailto:info@example.com">info@example.com</a>
						</p>
					</address>
				</div>
				<div class="col-lg-4 footer-grids-w3-agile">
					<h3>Twitter feed</h3>
					<ul class="w3agile_footer_grid_list">
						<li>Ut aut reiciendis voluptatibus adipiscing
							<a href="#">example.com</a> alias, ut aut.
							<span>
								<i class="fab fa-twitter"></i> 02 days ago</span>
						</li>
						<li>Itaque earum rerum hic tenetur a sapiente
							<a href="#">example.com</a> ut aut.
							<span>
								<i class="fab fa-twitter"></i> 03 days ago</span>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!-- //Footer -->
	<!-- copyright -->
	<div class="copyright-w3layouts">
		<div class="container">
			<p class="py-xl-4 py-3"><a target="_blank" href="https://www.templateshub.net">Templates Hub</a>
			</p>
		</div>
	</div>
	<!-- //copyright -->

	<!-- Required common Js -->
	<script src='js/jquery-2.2.3.min.js'></script>
	<!-- //Required common Js -->
	<!-- start-smoth-scrolling -->
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->
	<!-- here stars scrolling icon -->
	<script>
		$(document).ready(function () {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //here ends scrolling icon -->
	<!--js for bootstrap working-->
	<script src="js/bootstrap.min.js"></script>
	<!-- //for bootstrap working -->
</body>

</html>