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


<div class="top-bar">
    <nav class="navbar">
        <button class="navbar-toggler d-block sideMenuToggler" type="button">
            <span class="fa fa-bars"></span>
        </button>

        <ul class="ms-auto list-unstyled nav-list list-inline d-flex my-auto">
            <!-- ... search, messages, notifications etc ... -->

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
                    <img src="../upload/<?php echo htmlspecialchars($row->profile_pic); ?>" alt=""
                        class="img-fluid rounded-circle" width="30px" />
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="profile-view-profile.html">
                        <i class="fas fa-user-alt"></i> <span><?php  echo $row->name;?></span></a>
                    <a class="dropdown-item" href="profile-edit-profile.html">
                        <i class="fas fa-cog"></i> <span>Edit Profile</span></a>
                    <a class="dropdown-item" href="profile-change-password.html">
                        <i class="fas fa-unlock"></i> <span>Change Password</span></a>
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-lock"></i> <span>Lock Screen</span></a>
                    <a href="logout.php" class="btn d-block text-start">
                        <i class="fas fa-power-off"></i> Logout</a>
                </div>
            </li>
<?php
    }
}
?>
        </ul>
    </nav>
</div>

<?php } ?>
