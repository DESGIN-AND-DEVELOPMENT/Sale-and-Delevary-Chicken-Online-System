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
    $_SESSION['super'] = true;
    header('Location: logout.php');
    exit(); // important to stop further execution
} else {
?>
<div class="sidebar-left">

			<div class="sidebar-topbar text-center">
				<i class="fa fa-plane"></i><span class="text">Star Travels</span>
			</div> <!-- End sidebar-topbar -->
			<!-- End sidebar-topbar -->

			<div class="side-menu">
				<ul class="navbar-nav">
					<li class="nav-item" id="dashboard-link">
						<a href="index.html" class="items-list first active">
							<span><i class="fa fa-home link-icon" data-bs-toggle="tooltip" data-html="true"
									title="Dashboard"></i></span>
							<span class="items-list-text">Dashboard</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="#users" class="items-list" data-bs-toggle="collapse" aria-expanded="false">
							<span><i class="fas fa-user-tie" data-bs-toggle="tooltip" data-html="true" title="Users"></i></span>
							<span class="items-list-text">Employee</span>
							<span><i class="fa fa-chevron-down arrow"></i></span>
						</a>
						<div class="collapse sub-menu" id="users">
							<a class="items-list1" href="create_employee.php">Create Employee</a>
							<a class="items-list1" href="table_employee.php">List</a>
						</div><!-- End sub-menu -->
					</li>
					<li class="nav-item">
						<a href="#service" class="items-list" data-bs-toggle="collapse" aria-expanded="false">
							<span><i class="fas fa-user-tie" data-bs-toggle="tooltip" data-html="true" title="service"></i></span>
							<span class="items-list-text">Service</span>
							<span><i class="fa fa-chevron-down arrow"></i></span>
						</a>
						<div class="collapse sub-menu" id="service">
							<a class="items-list1" href="add_new_service.php">Create Service</a>
							<a class="items-list1" href="table_service.php">List</a>
						</div><!-- End sub-menu -->
					</li>
					
				</ul>
			</div><!-- End side-menu -->
			<div class="side-bar-bottom">
				<ul class="list-unstyled">
					<li class="list-inline-item" data-bs-toggle="tooltip" data-html="true" title="Edit Profile"><a
							href="profile-edit-profile.html"><i class="fas fa-cog"></i></a></li>
					<li class="list-inline-item" data-bs-toggle="tooltip" data-html="true" title="Change Password"><a
							href="profile-change-password.html"><i class="fas fa-key"></i></li>
					<li class="list-inline-item" data-bs-toggle="tooltip" data-html="true" title="Lockscreen"><a href="#"><i
								class="fas fa-unlock"></i></a></li>
					<li class="list-inline-item" data-bs-toggle="tooltip" data-html="true" title="Logout"><a href="#"><i
								class="fas fa-power-off"></i></a></li>
				</ul>
			</div><!-- End side-bar-bottom -->
		</div><!-- End sidebar-left -->
        <?php } ?>