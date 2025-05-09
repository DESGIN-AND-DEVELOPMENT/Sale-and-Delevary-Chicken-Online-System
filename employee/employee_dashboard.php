<!doctype html>
<html lang="en">

<head>
	<title>Admin Dashboard</title>
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
					<li class="nav-item list-inline-item dropdown profile">
						<a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
							aria-haspopup="true" aria-expanded="false">
							<img src="images/commenter-1.jpg" alt="" class="img-fluid rounded-circle" width="30px" />
						</a>

						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="profile-view-profile.html"><i class="fas fa-user-alt"></i>
								<span>View Profile</span></a>
							<a class="dropdown-item" href="profile-edit-profile.html"><i class="fas fa-cog"></i>
								<span>Edit Profile</span></a>
							<a class="dropdown-item" href="profile-change-password.html"><i class="fas fa-unlock"></i>
								<span>Change Password</span></a>
							<a class="dropdown-item" href="#"><i class="fas fa-unlock"></i>
								<span>Lock Screen</span></a>
							<a href="#" class="btn d-block text-start"><i class="fas fa-power-off"></i>Logout</a>
						</div>
					</li>
				</ul>
			</nav>
		</div><!-- End top-bar -->

		<!-- =========== sidebar-left ============= -->
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
							<span class="items-list-text">Users</span>
							<span><i class="fa fa-chevron-down arrow"></i></span>
						</a>
						<div class="collapse sub-menu" id="users">
							<a class="items-list1" href="users-create-user.html">Create User</a>
							<a class="items-list1" href="users-list.html">List</a>
						</div><!-- End sub-menu -->
					</li>
					<li class="nav-item">
						<a href="#Listing" class="items-list" data-bs-toggle="collapse" aria-expanded="false">
							<span><i class="fas fa-list-alt" data-bs-toggle="tooltip" data-html="true" title="Listing"></i></span>
							<span class="items-list-text">Listing</span>
							<span><i class="fa fa-chevron-down arrow"></i></span>
						</a>
						<div class="collapse sub-menu" id="Listing">
							<a href="#Hotel-Listing" class="items-list2" data-bs-toggle="collapse" aria-expanded="false">
								<span><i class="fas fa-hotel" data-bs-toggle="tooltip" data-html="true" title="Hotel"></i></span>
								<span class="items-list-text">Hotel Listing</span>
								<span><i class="fa fa-chevron-down arrow"></i></span>
							</a>
							<div class="collapse sub-sub-menu" id="Hotel-Listing">
								<a class="items-list3" href="listing-hotel-create.html">Create</a>
								<a class="items-list3" href="listing-hotel-all.html">All</a>
								<a class="items-list3" href="listing-hotel-active.html">Active</a>
								<a class="items-list3" href="listing-hotel-drafts.html">Drafts</a>
								<a class="items-list3" href="listing-hotel-expired.html">Expired</a>
								<a class="items-list3" href="listing-hotel-featured.html">Featured</a>
							</div>
						</div><!-- End sub-menu -->
						<div class="collapse sub-menu" id="Listing">
							<a href="#Tour-Listing" class="items-list2" data-bs-toggle="collapse" aria-expanded="false">
								<span><i class="fas fa-torii-gate" data-bs-toggle="tooltip" data-html="true" title="Tour"></i></span>
								<span class="items-list-text">Tour Listing</span>
								<span><i class="fa fa-chevron-down arrow"></i></span>
							</a>
							<div class="collapse sub-sub-menu" id="Tour-Listing">
								<a class="items-list3" href="listing-tour-create.html">Create</a>
								<a class="items-list3" href="listing-tour-all.html">All</a>
								<a class="items-list3" href="listing-tour-active.html">Active</a>
								<a class="items-list3" href="listing-tour-drafts.html">Drafts</a>
								<a class="items-list3" href="listing-tour-expired.html">Expired</a>
								<a class="items-list3" href="listing-tour-featured.html">Featured</a>
							</div>
						</div><!-- End sub-menu -->
						<div class="collapse sub-menu" id="Listing">
							<a href="#Cruise-Listing" class="items-list2" data-bs-toggle="collapse" aria-expanded="false">
								<span><i class="fas fa-anchor" data-bs-toggle="tooltip" data-html="true" title="Cruise"></i></span>
								<span class="items-list-text">Cruise Listing</span>
								<span><i class="fa fa-chevron-down arrow"></i></span>
							</a>
							<div class="collapse sub-sub-menu" id="Cruise-Listing">
								<a class="items-list3" href="listing-cruise-create.html">Create</a>
								<a class="items-list3" href="listing-cruise-all.html">All</a>
								<a class="items-list3" href="listing-cruise-active.html">Active</a>
								<a class="items-list3" href="listing-cruise-drafts.html">Drafts</a>
								<a class="items-list3" href="listing-cruise-expired.html">Expired</a>
								<a class="items-list3" href="listing-cruise-featured.html">Featured</a>
							</div>
						</div><!-- End sub-menu -->
						<div class="collapse sub-menu" id="Listing">
							<a href="#Car-Listing" class="items-list2" data-bs-toggle="collapse" aria-expanded="false">
								<span><i class="fas fa-car-alt" data-bs-toggle="tooltip" data-html="true" title="Car"></i></span>
								<span class="items-list-text">Car Listing</span>
								<span><i class="fa fa-chevron-down arrow"></i></span>
							</a>
							<div class="collapse sub-sub-menu" id="Car-Listing">
								<a class="items-list3" href="listing-car-create.html">Create</a>
								<a class="items-list3" href="listing-car-all.html">All</a>
								<a class="items-list3" href="listing-car-active.html">Active</a>
								<a class="items-list3" href="listing-car-drafts.html">Drafts</a>
								<a class="items-list3" href="listing-car-expired.html">Expired</a>
								<a class="items-list3" href="listing-car-featured.html">Featured</a>
							</div>
						</div><!-- End sub-menu -->
						<div class="collapse sub-menu" id="Listing">
							<a href="#Flight-Listing" class="items-list2" data-bs-toggle="collapse" aria-expanded="false">
								<span><i class="fas fa-plane" data-bs-toggle="tooltip" data-html="true" title="Flight"></i></span>
								<span class="items-list-text">Flight Listing</span>
								<span><i class="fa fa-chevron-down arrow"></i></span>
							</a>
							<div class="collapse sub-sub-menu" id="Flight-Listing">
								<a class="items-list3" href="listing-flight-create.html">Create</a>
								<a class="items-list3" href="listing-flight-all.html">All</a>
								<a class="items-list3" href="listing-flight-active.html">Active</a>
								<a class="items-list3" href="listing-flight-drafts.html">Drafts</a>
								<a class="items-list3" href="listing-flight-expired.html">Expired</a>
								<a class="items-list3" href="listing-flight-featured.html">Featured</a>
							</div>
						</div><!-- End sub-menu -->
					</li>
					<li class="nav-item">
						<a href="#booking" class="items-list" data-bs-toggle="collapse" aria-expanded="false">
							<span><i class="fas fa-suitcase-rolling" data-bs-toggle="tooltip" data-html="true"
									title="Bookings"></i></span>
							<span class="items-list-text">Booking</span>
							<span><i class="fa fa-chevron-down arrow"></i></span>
						</a>
						<div class="collapse sub-menu" id="booking">
							<a class="items-list1" href="bookings.html">All</a>
							<a class="items-list1" href="bookings-approved.html">Approved</a>
							<a class="items-list1" href="bookings-pending.html">Pending</a>
							<a class="items-list1" href="bookings-cancelled.html">Cancelled</a>
						</div><!-- End sub-menu -->
					</li>
					<li class="nav-item">
						<a href="reviews.html" class="items-list">
							<span><i class="fas fa-sync-alt" data-bs-toggle="tooltip" data-html="true" title="Reviews"></i></span>
							<span class="items-list-text">Reviews</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="bookmarks.html" class="items-list">
							<span><i class="far fa-bookmark" data-bs-toggle="tooltip" data-html="true" title="Messages"></i></span>
							<span class="items-list-text">Bookmarks</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="#messages" class="items-list" data-bs-toggle="collapse" aria-expanded="false">
							<span><i class="far fa-envelope" data-bs-toggle="tooltip" data-html="true" title="Messages"></i></span>
							<span class="items-list-text">Messages</span>
							<span><i class="fa fa-chevron-down arrow"></i></span>
						</a>
						<div class="collapse sub-menu" id="messages">
							<a class="items-list1" href="messages-inbox.html">Inbox</a>
							<a class="items-list1" href="messages-compose.html">Compose</a>
							<a class="items-list1" href="messages-details.html">Details</a>
							<a class="items-list1" href="messages-starred.html">Starred</a>
							<a class="items-list1" href="messages-important.html">Important</a>
							<a class="items-list1" href="messages-sent.html">Sent</a>
							<a class="items-list1" href="messages-drafts.html">Drafts</a>
							<a class="items-list1" href="messages-trash.html">Trash</a>
						</div><!-- End sub-menu -->
					</li>
					<li class="nav-item">
						<a href="#pages" class="items-list" data-bs-toggle="collapse" aria-expanded="false">
							<span><i class="fas fa-pager" data-bs-toggle="tooltip" data-html="true" title="Pages"></i></span>
							<span class="items-list-text">Pages</span>
							<span><i class="fa fa-chevron-down arrow"></i></span>
						</a>
						<div class="collapse sub-menu" id="pages">
							<a href="#forms" class="items-list2" data-bs-toggle="collapse" aria-expanded="false">
								<span><i class="fas fa-hotel" data-bs-toggle="tooltip" data-html="true" title="Forms"></i></span>
								<span class="items-list-text">Forms</span>
								<span><i class="fa fa-chevron-down arrow"></i></span>
							</a>
							<div class="collapse sub-sub-menu" id="forms">
								<a class="items-list3" href="form-login.html">Login</a>
								<a class="items-list3" href="form-registration.html">Sign Up</a>
								<a class="items-list3" href="form-forgot-password.html">Forgot Password</a>
							</div>
							<a class="items-list1" href="invoices.html">Invoices</a>
							<a class="items-list1" href="faq.html">FAQ</a>
							<a class="items-list1" href="privacy-policy.html">Privacy Policy</a>
							<a class="items-list1" href="pricing-tables.html">Pricing</a>
							<a class="items-list1" href="coming-soon.html">Coming Soon</a>
							<a class="items-list1" href="404.html">404</a>
						</div><!-- End sub-menu -->
					</li>

					<li class="nav-item">
						<a href="#profile" class="items-list" data-bs-toggle="collapse" aria-expanded="false">
							<span><i class="fas fa-building" data-bs-toggle="tooltip" data-html="true" title="Profile"></i></span>
							<span class="items-list-text">Profile</span>
							<span><i class="fa fa-chevron-down arrow"></i></span>
						</a>
						<div class="collapse sub-menu" id="profile">
							<a class="items-list1" href="profile-view-profile.html">View Profile</a>
							<a class="items-list1" href="profile-edit-profile.html">Edit Profile</a>
							<a class="items-list1" href="profile-change-password.html">Change Password

							</a>
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

		<!-- ===========Innerpage-wrapper============= -->
		<section>
			<div class="content dashbaord">
				<div class="in-content-wrapper">
					<div class="row no-gutters">

						<div class="col">
							<div class="heading-messages">
								<h3>Dashboard</h3>
							</div><!-- End heading-messages -->
						</div><!-- End column -->
						<div class="col-md-4">
							<div class="breadcrumb">
								<div class="breadcrumb-item"><i class="fas fa-angle-right"></i><a href="#">Dashboard</a>
								</div>
							</div><!-- End Breadcrumbs-->
						</div><!-- End column -->
					</div><!-- End row -->

					<div class="box">
						<div class="dashboard-wrapper">
							<div class="row">
								<div class="col-xl col-md-6">
									<div class="dashboard-boxes primary">
										<div class="row no-gutters">
											<div class="col-4">
												<div class="icon">
													<a href="messages-inbox.html"><i class="fas fa-envelope"></i></a>
												</div>
											</div><!-- End column -->
											<div class="col">
												<a href="messages-inbox.html">
													<h5>10 New Messages</h5>
												</a>
											</div><!-- End column -->
										</div><!-- End row -->
									</div><!-- End dashboard-boxes -->
								</div><!-- End column -->
								<div class="col-xl col-md-6">
									<div class="dashboard-boxes success">
										<div class="row no-gutters">
											<div class="col-4">
												<div class="icon">
													<a href="bookmarks.html"><i class="fas fa-bookmark"></i></a>
												</div>
											</div><!-- End column -->
											<div class="col">
												<a href="bookmarks.html">
													<h5>6 New Bookmarks</h5>
												</a>
											</div><!-- End column -->
										</div><!-- End row -->
									</div><!-- End dashboard-boxes -->
								</div><!-- End column -->
								<div class="col-xl col-md-6">
									<div class="dashboard-boxes danger">
										<div class="row no-gutters">
											<div class="col-4">
												<div class="icon">
													<a href="reviews.html"><i class="fas fa-star"></i></a>
												</div>
											</div><!-- End Columns -->
											<div class="col">
												<a href="reviews.html">
													<h5>10 New Reviews</h5>
												</a>
											</div><!-- End column -->
										</div><!-- End row -->
									</div><!-- End dashboard-boxes -->
								</div><!-- End column -->
								<div class="col-xl col-md-6">
									<div class="dashboard-boxes warning">
										<div class="row no-gutters">
											<div class="col-4">
												<div class="icon">
													<a href="bookings.html"><i class="fas fa-address-book"></i></a>
												</div>
											</div>
											<div class="col">
												<a href="bookings.html">
													<h5>10 New Bookings</h5>
												</a>
											</div><!-- End column -->
										</div><!-- End row -->
									</div><!-- End dashboard-boxes -->
								</div><!-- End column -->
							</div><!-- End row -->
						</div><!-- End dashboard-wrapper -->
						<div class="dashboard1-wrapper">
							<div class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-2 mx-0 g-3">
								<div class="col">
									<div class="dashboard-boxes1 primary">

										<div class="icon">
											<a href="listing-hotel-all.html"><i class="fas fa-hotel"></i></a>
										</div>


										<a href="listing-hotel-all.html">
											<h5>10 <small class="d-block">New Hotel Listings</small></h5>
										</a>

									</div><!-- End dashboard-boxes1 -->
								</div><!-- End column -->
								<div class="col">
									<div class="dashboard-boxes1 success">

										<div class="icon">
											<a href="listing-tour-all.html"><i class="fas fa-torii-gate"></i></a>
										</div>


										<a href="listing-tour-all.html">
											<h5>26 <small class="d-block">New Tour Listings</small></h5>
										</a>

									</div><!-- End dashboard-boxes1 -->
								</div><!-- End column -->
								<div class="col">
									<div class="dashboard-boxes1 danger">

										<div class="icon">
											<a href="listing-cruise-all.html"><i class="fas fa-anchor"></i></a>
										</div>


										<a href="listing-cruise-all.html">
											<h5>16 <small class="d-block">New Cruise Listings</small></h5>
										</a>

									</div><!-- End dashboard-boxes1 -->
								</div><!-- End column -->
								<div class="col">
									<div class="dashboard-boxes1 last-ones warning">

										<div class="icon">
											<a href="listing-car-all.html"><i class="fas fa-car-alt"></i></a>
										</div>


										<a href="listing-car-all.html">
											<h5>22 <small class="d-block">New Car Listings</small></h5>
										</a>

									</div><!-- End dashboard-boxes1 -->
								</div><!-- End column -->
								<div class="col">
									<div class="dashboard-boxes1 last-ones info">

										<div class="icon">
											<a href="listing-flight-all.html"><i class="fas fa-plane"></i></a>
										</div>


										<a href="listing-flight-all.html">
											<h5>12 <small class="d-block">New Flight Listings</small></h5>
										</a>

									</div><!-- End dashboard-boxes1 -->
								</div><!-- End column -->
							</div><!-- End row -->
						</div><!-- End dashboard1-wrapper -->
						<div class="charts-section">
							<div class="row">
								<div class="col-12 d-block mx-auto canvas1">
									<canvas id="myChart" height="200"></canvas>
								</div><!-- End column -->
								<div class="col-12 d-block mx-auto">
									<canvas id="myChart1" height="200"></canvas>
								</div><!-- End column -->
							</div><!-- End row -->
						</div><!-- End charts-section -->
					</div><!-- End Box -->
				</div><!-- End in-content-wrapper -->
			</div><!-- End content-dashboard -->
		</section>
		<!-- ===========End Innerpage-wrapper============= -->

	</div><!-- end wrapper -->














	<!-- Optional JavaScript, Not optional it's need too -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap-5.3.2.min.js"></script>
	<script src="js/customscriptfile.js"></script>
	<script src="vendors/chart.js-2.8.0/dist/Chart.min.js"></script>

	<!-- Page Scripts Ends -->

	<script>
		var ctx = document.getElementById("myChart");
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["January", "February", "March", "April", "May", "June"],
				datasets: [{
					label: '# of Bookings',
					data: [12, 19, 3, 5, 10, 3],
					backgroundColor: [
						'rgba(255, 99, 132, 0.2)',
						'rgba(54, 162, 235, 0.2)',
						'rgba(255, 206, 86, 0.2)',
						'rgba(75, 192, 192, 0.2)',
						'rgba(153, 102, 255, 0.2)',
						'rgba(255, 159, 64, 0.2)'
					],
					borderColor: [
						'rgba(255,99,132,1)',
						'rgba(54, 162, 235, 1)',
						'rgba(255, 206, 86, 1)',
						'rgba(75, 192, 192, 1)',
						'rgba(153, 102, 255, 1)',
						'rgba(255, 159, 64, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero: true,
						}
					}],
					yAxes: [{
						ticks: {
							// fontSize: 15,
							fontColor: 'black',
						}
					}],
					xAxes: [{
						ticks: {
							// fontSize: 15,
							fontColor: 'black',
							beginAtZero: true,
						}
					}]
				}
			}
		});
	</script>
	<script>
		var ctx = document.getElementById("myChart1");
		var myChart = new Chart(ctx, {
			type: 'pie',
			data: {
				labels: ["January", "February", "March", "April", "May", "June"],
				datasets: [{
					label: '# of Bookings',
					data: [12, 19, 3, 5, 10, 3],
					backgroundColor: [
						'rgba(260, 103, 134, 0.9)',
						'rgba(59, 166, 237, 0.9)',
						'rgba(260, 210, 88, 0.9)',
						'rgba(80, 196, 194, 0.9)',
						'rgba(158, 106, 257, 0.9)',
						'rgba(260, 163, 66, 0.9)'
					],
					borderColor: [
						'rgba(255,99,132,1)',
						'rgba(54, 162, 235, 1)',
						'rgba(255, 206, 86, 1)',
						'rgba(75, 192, 192, 1)',
						'rgba(153, 102, 255, 1)',
						'rgba(255, 159, 64, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero: true,
						}
					}],
					yAxes: [{
						ticks: {
							// fontSize: 15,
							fontColor: 'black',
						}
					}],
					xAxes: [{
						ticks: {
							// fontSize: 15,
							fontColor: 'black',
							beginAtZero: true,
						}
					}]
				}
			}
		});
	</script>
</body>

</html>