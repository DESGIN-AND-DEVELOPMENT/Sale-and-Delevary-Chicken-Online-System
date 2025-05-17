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

    ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Users List</title>
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
	<link rel="stylesheet" type="text/css" href="vendors/datatables/datatables.min.css">
	<link rel="stylesheet" type="text/css" href="vendors/datatables/Responsive-2.2.2/css/responsive.bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/custom.datatables.css">


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
        <?php include('includes/header.php');?><!-- End top-bar -->

<!-- =========== sidebar-left ============= -->
<?php include('includes/sidebar.php');?><!-- End sidebar-left -->

		<!-- ===========Innerpage-wrapper============= -->
		<section>
			<div class="content listing-content users-list">
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
								<div class="breadcrumb-item active"><i class="fas fa-angle-right"></i>Users List
								</div>
							</div><!-- end breadcrumb -->
						</div><!-- End column -->
					</div><!-- end row -->

					<div class="box">
						<div class="row no-gutters">
							<div class="col-auto me-auto text-start pe-0">
								<div class="add-new">
									<a href="create_employee.php">Add New Employee<i class="fas fa-plus"></i></a>
								</div><!-- End add-new-->
							</div><!-- End column-->
							<div class="col text-end">
								<div class="tools-btns">
									<a href="#"><i class="fas fa-print" data-bs-toggle="tooltip" data-html="true" title="Print"></i></a>
									<a href="#"><i class="fas fa-file-pdf" data-bs-toggle="tooltip" data-html="true" title="Pdf"></i></a>
									<a href="#"><i class="fas fa-file-excel" data-bs-toggle="tooltip" data-html="true"
											title="Excel"></i></a>
								</div><!-- End tool-btns-->
							</div><!-- End text-end-->

						</div><!-- end row -->
						<div class="row no-gutters">
							<div class="col-12 table-responsive">
								<table id="example" class="table table-hover responsive listing">
									<thead>
										<tr>
                                            <th>#</th>
											<th>Img</th>
											
											<th>Full Name</th>
											<th>Gender</th>
                                            <th>Address</th>
                                            <th>Phone #</th>
                                            <th>Zan ID</th>
                                            <th>Position</th>
											<th>Email</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
                                    <?php 
$uid = $_SESSION['user_id'];
$sql = "SELECT name, gender, address, phone, profile_pic, positon, card_id, email 
        FROM tbluser 
        WHERE is_deleted = 0 AND status = 0 AND created_by = $uid and user_type = 3";

$sn = 0;
$query_run = mysqli_query($connection, $sql);

if (mysqli_num_rows($query_run) > 0) {
    while ($dmin = mysqli_fetch_assoc($query_run)) {
        $sn++;
        ?>
        <tr>
            <td><?php echo $sn; ?></td>
            <td><img src="../upload/<?php echo htmlspecialchars($dmin['profile_pic']); ?>" alt="Profile" width="50" height="50"></td>
            <td><?php echo htmlspecialchars($dmin['name']); ?></td>
            <td><?php echo htmlspecialchars($dmin['gender']); ?></td>
            <td><?php echo htmlspecialchars($dmin['address']); ?></td>
            <td><?php echo htmlspecialchars($dmin['phone']); ?></td>
            <td><?php echo htmlspecialchars($dmin['card_id']); ?></td>
            <td><?php echo htmlspecialchars($dmin['positon']); ?></td>
            <td><?php echo htmlspecialchars($dmin['email']); ?></td>
            <td><a href="#" class="btn btn-primary">Edit</a>  
            <form action="#" method="post">
                <button class="btn btn-danger mt-3">Delete</button>
            </form>
        </td>
        </tr>
        <?php
    }
}
?>

                                       
                                    </tbody>
								</table>
							</div><!-- end column -->
						</div><!-- end row -->
					</div><!-- end box -->
				</div><!-- end in-content-wrapper -->
			</div><!-- end users-list -->
		</section>
		<!-- ===========End Innerpage-wrapper============= -->

	</div><!-- end wrapper -->














	<!-- Optional JavaScript, Not optional it's need too -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap-5.3.2.min.js"></script>
	<script src="vendors/datatables/datatables.min.js"></script>

	<script src="js/customscriptfile.js"></script>

	<!-- Page Scripts Ends -->

	<script>
		$(document).ready(function () {
			$('#example').DataTable();
		});
	</script>
</body>

</html>
<?php } ?>