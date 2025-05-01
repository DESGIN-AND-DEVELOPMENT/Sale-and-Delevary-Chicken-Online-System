<?php
session_start();
error_reporting(0);
$connection = mysqli_connect("localhost", "root", "", "online_chickenand_booking");
include('includes/dbconnection.php');

$userType = isset($_SESSION['user_type']) ? (int)$_SESSION['user_type'] : 0;

// Clear any previous flags
unset($_SESSION['super']);

if ($userType === 1) {
    // Block access for super user
    $_SESSION['super'] = true;
    header('Location: logout.php');
    exit(); // important to stop further execution
} else {

    if(isset($_POST['submit'])){
        $uid = $_SESSION['user_id'];
        $name = $_POST['fname'];
        $gender = $_POST['gender'];
        $position = $_POST['position'];
        $zan = $_POST['zan'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $profile = $_FILES['profile']['name'];
        $email = $_POST['email'];
        $user_type = 2;
        $password = md5($_POST['password']);

        $sql = "INSERT INTO tbluser(name, gender, address, phone, user_type, created_by, profile_pic, positon, card_id, email, password)
         VALUES ('$name','$gender','$address','$phone','$user_type','$uid','$profile','$position','$zan','$email','$password')";

         $query = mysqli_query($connection,$sql);

         if($query) {
            move_uploaded_file($_FILES['profile']['tmp_name'], '../upload/' .$_FILES['profile']['name']);
            header('location:table_admin.php');

         } else {
            echo "erros";
            header('location:admin_create.php');
         }

    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Create User</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="images/favicon.png" type="image/x-icon">


	<!-- Framework Stylesheets Start-->


		<style>
		.loader {
	position: fixed;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	z-index: 9999;
	background: url(../images/loader-red.gif) center no-repeat #fff;
}
	</style>
	<link rel="stylesheet" href="css/loader.css">

	<!-- Bootstrap Stylesheet -->
	<link rel="stylesheet" href="css/bootstrap-5.3.2.min.css">


	<!-- Data Tables Stylesheet -->

	<link rel="stylesheet" type="text/css" href="css/custom.datatables.css">
	<link rel="stylesheet" type="text/css" href="vendors/dropzone-5.5.0/dist/min/dropzone.min.css">

	<!-- Framework Stylesheets End-->

	<!-- Font Awsome Stylesheet -->
	<link rel="stylesheet" href="vendors/fontawesome5.7.2/css/all.min.css">

	<!-- Custom Stylesheet Start-->

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
	<link rel="stylesheet" href="css/custom.css">

	<!-- Custom Stylesheet End-->


</head>

<body>

	<!--====== LOADER =====-->
	<div class="loader"></div>
	<!-- ===========wrapper============= -->
	<div class="wrapper">

		<!-- ===========Top-Bar============= -->
        <?php include('includes/headerbar.php');?><!-- End top-bar -->

<!-- =========== sidebar-left ============= -->
<?php include('includes/sidebar.php');?><!-- End sidebar-left -->

		<!-- ===========Innerpage-wrapper============= -->
		<section>
			<div class="content add-details profile User">
				<div class="in-content-wrapper">
					<div class="row no-gutters">

						<div class="col">
							<div class="heading-messages">
								<h3>Users</h3>
							</div><!-- End heading-messages -->
						</div><!-- End column -->
						<div class="col-md-4">
							<div class="breadcrumb">
								<div class="breadcrumb-item"><i class="fas fa-angle-right"></i><a href="#">Users</a>
								</div>
								<div class="breadcrumb-item active"><i class="fas fa-angle-right"></i>Create User
								</div>
							</div><!-- end breadcrumb -->
						</div><!-- End column -->

					</div><!-- end row -->

					<div class="box">

						<div class="row">
							<div class="col">
								<div class="details-text">
									<h4>Create User</h4>
								</div><!-- end details-text -->
							</div><!-- End column -->
						</div><!-- end row -->
						<div class="hotel-listing-form">
							<form class="text-center" action="" method="post" enctype="multipart/form-data">
								<div class="row">
									<div class="col-sm-8">
										<div class="row">
											<div class="col-md">
												<div class="form-group">
													<label for="to" class="">Full Name:</label>
													<input type="text" name="fname" class="form-control" required id="to">
												</div><!-- end form-group -->
											</div><!-- End column -->
											<div class="col-md">
												<div class="form-group">
													<label for="to1" class="">Gender</label>
													<select name="gender" id="grnder" class="form-control">
                                                        <option value="--select--">--select--</option>
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                    </select>
												</div><!-- end form-group -->
											</div><!-- End column -->
										</div><!-- end row -->

										<div class="row">
											<div class="col-md">
												<div class="form-group">
													<label for="to2" class="">Address:</label>
													<input type="text" name="address" class="form-control" required id="to2">
												</div><!-- end form-group -->
											</div><!-- End column -->
											<div class="col-md">
												<div class="form-group">
													<label for="to3" class="">Email:</label>
													<input type="email" class="form-control" name="email" required id="to3">
												</div><!-- end form-group -->
											</div><!-- End column -->
										</div><!-- end row -->
										<div class="row">
											<div class="col-md">
												<div class="form-group">
													<label for="to4" class="">Password:</label>
													<input type="password" class="form-control" name="password" required id="to4">
												</div><!-- end form-group -->
											</div><!-- End column -->
											<div class="col-md">
												<div class="form-group">
													<label for="to5" class="">Zan ID</label>
													<input type="TEXT" class="form-control" name="zan" id="to5">
												</div><!-- end form-group -->
											</div><!-- End column -->
										</div><!-- end row -->
										<div class="row">
											<div class="col-md">
												<div class="form-group">
													<label for="to6" class="">Phone:</label>
													<input type="tel" name="phone" class="form-control" required id="to6">
												</div><!-- end form-group -->
											</div><!-- End column -->
											<div class="col-md">
												<div class="form-group">
													<label for="to7" class="">POsition:</label>
													<input type="text" name="position" class="form-control text-center"  id="to7">
												</div><!-- end form-group -->
											</div><!-- End column -->
                                           
										</div><!-- end row -->
                                        <div class="row">
                                            <div class="col-md-12">
                                            <div class="form-gorup">
                                                <label label for="to7" class="">Profile</label>
                                                <input type="file" name="profile" id="profile" class="form-control">
                                            </div>
                                        </div>
                                        </div>
                                         

										<ul class="list-inline">
											<li class="list-inline-item">
												<button type="submit" class="btn" name="submit" value="submit" type="submit">Create User</button>
											</li>
											
										</ul>
									</div><!-- End column -->
									
                                    
								</div><!-- end row -->

							</form>
						</div><!-- end hotel-listing-form -->
					</div><!-- end box -->
				</div><!-- end in-content-wrapper -->
			</div><!-- end add-details profile User -->
		</section>
		<!-- ===========End Innerpage-wrapper============= -->

	</div><!-- end wrapper -->














	<!-- Optional JavaScript, Not optional it's need too -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap-5.3.2.min.js"></script>

	<script src="vendors/dropzone-5.5.0/dist/min/dropzone.min.js"></script>
	<script src="js/customscriptfile.js"></script>

	<!-- Page Scripts Ends -->


</body>

</html>

<?php } ?>