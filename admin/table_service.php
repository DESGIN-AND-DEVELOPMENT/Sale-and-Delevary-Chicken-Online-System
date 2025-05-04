<?php
session_start();
error_reporting(0);
$connection = mysqli_connect("localhost", "root", "", "online_chickenand_booking");
include('includes/dbconnection.php');

$userType = isset($_SESSION['user_type']) ? (int)$_SESSION['user_type'] : 0;

// Clear any previous flags
unset($_SESSION['admin']);

if ($userType === 2) {
    // Block access for super user
    $_SESSION['admin'] = true;
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
        <?php include('includes/headerbar.php');?><!-- End top-bar -->

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
									<a href="users-create-user.html">Add New<i class="fas fa-plus"></i></a>
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
            <th>Service</th>
            <th>Description</th>
            <th>Price</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $uid = $_SESSION['user_id'];
        $sql = "SELECT tblservice.ID, tblservice.servicename, tblservice.description, tblservice.price,
                tblservice.pic_profile, tblservice.status FROM tblservice WHERE tblservice.user_id = $uid and tblservice.is_deleted = 0";

        $query = mysqli_query($connection, $sql);
        $query_runn = $query->num_rows;
        $sn = 0;

        if($query_runn > 0) {
            while($student = $query->fetch_assoc()) { 
                $sn++;

                // Prepare status text
                $status_text = ($student['status'] == 0) ? 'Active' : 'Inactive';

                echo "
                <tr>
                    <td>$sn</td>
                    <td><img src='../upload/{$student['pic_profile']}' width='50' height='50' style='object-fit: cover; border-radius: 5px;'></td>
                    <td style='text-transform: uppercase;'>{$student['servicename']}</td>
                    <td>{$student['description']}</td>
                    <td>{$student['price']}</td>
                    <td>$status_text</td>
                    <td>
                        <a href='edit.php?id={$student['ID']}' class='btn btn-sm btn-primary'>Edit</a>
                        <a href='delete.php?id={$student['ID']}' class='btn btn-sm btn-danger' onclick='return confirm(\"Are you sure?\");'>Delete</a>
                    </td>
                </tr>";
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