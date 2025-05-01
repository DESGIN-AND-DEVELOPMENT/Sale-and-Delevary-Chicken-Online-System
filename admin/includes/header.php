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



<div class="top-bar">
			<nav class="navbar">
				<button class="navbar-toggler d-block sideMenuToggler" type="button">
					<span class="fa fa-bars"></span>
				</button>

				<ul class="ms-auto list-unstyled nav-list list-inline d-flex my-auto">
					<li class="nav-item list-inline-item">
						<form class="form-inline my-2 my-lg-0 d-none d-xl-flex">
							<input class="form-control me-sm-2" type="search" placeholder="Search" aria-label="Search" />
							<i class="fas fa-search"></i>
						</form>
					</li>
					<li class="nav-item list-inline-item dropdown messages">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
							aria-haspopup="true" aria-expanded="false">
							<i class="far fa-envelope"></i>
						</a>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
							<span>Messages (5)</span>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#"><i class="far fa-envelope"></i>Your Order is
								Placed<span>Lorem ipsum
									dolor sit, amet consectetur adipisicing elit.
									Nisi, maxime?</span>
							</a>
							<a class="dropdown-item" href="#"><i class="far fa-envelope-open"></i>New Message
								Received<span>Lorem
									ipsum dolor sit amet.</span></a>
							<a class="dropdown-item bottom-margin" href="#"><i class="far fa-envelope-open"></i>Your
								item is
								Shipped<span>Lorem ipsum dolor sit amet consectetur adipisicing.</span></a>
							<div class="dropdown-divider"></div>
							<a href="#" class="btn mx-auto d-block">View All</a>
						</div>
					</li>
					<li class="nav-item list-inline-item dropdown notifications">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
							aria-haspopup="true" aria-expanded="false">
							<i class="far fa-bell"></i>
						</a>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
							<span>Notifications (258)</span>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#"><i class="fas fa-cart-plus"></i>Your Order is
								Placed<span>Lorem ipsum
									dolor sit, amet consectetur adipisicing elit.
									Nisi, maxime?</span>
							</a>
							<a class="dropdown-item" href="#"><i class="fas fa-sms"></i>New Message Received<span>Lorem
									ipsum dolor
									sit amet.</span></a>
							<a class="dropdown-item bottom-margin" href="#"><i class="fas fa-glass-martini"></i>Your
								item is
								Shipped<span>Lorem ipsum dolor sit amet consectetur adipisicing.</span></a>
							<div class="dropdown-divider"></div>
							<a href="#" class="btn mx-auto d-block">View All</a>
						</div>
					</li>
                    <?php
$aid = $_SESSION['user_id'];
$sql = "SELECT * FROM tbluser WHERE ID = :aid";
$query = $dbh->prepare($sql);
$query->bindParam(':aid', $aid, PDO::PARAM_STR);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_OBJ);

if ($query->rowCount() > 0) {
    foreach ($results as $row) {
?>
					<li class="nav-item list-inline-item dropdown profile">
						<a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
							aria-haspopup="true" aria-expanded="false">
							<img src="../upload/<?php echo htmlspecialchars($row->profile_pic); ?>" alt="" class="img-fluid rounded-circle" width="30px" />
						</a>

						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="profile-view-profile.html"><i class="fas fa-user-alt"></i>
								<span><?php  echo $row->name;?></span></a>
							<a class="dropdown-item" href="profile-edit-profile.html"><i class="fas fa-cog"></i>
								<span>Edit Profile</span></a>
							<a class="dropdown-item" href="profile-change-password.html"><i class="fas fa-unlock"></i>
								<span>Change Password</span></a>
							<a class="dropdown-item" href="#"><i class="fas fa-unlock"></i>
								<span>Lock Screen</span></a>
							<a href="logout.php" class="btn d-block text-start"><i class="fas fa-power-off"></i>Logout</a>
						</div>
					</li>

                    <?php
    }
}
?>
				</ul>
			</nav>
		</div><!-- End top-bar -->

        <?php } ?>