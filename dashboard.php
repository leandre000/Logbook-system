<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<?php include 'templates/header.php'; ?>

<h2 class="text-center">Dashboard</h2>
<p>Welcome, <?php echo $_SESSION['username']; ?>!</p>
<a href="logbook.php" class="btn btn-primary">Manage Logbook</a>
<a href="logout.php" class="btn btn-danger">Logout</a>
<a href="" class="btn btn-secondary">Student</a>
<a href="" class="btn btn-secondary">Teacher</a>

<?php include 'templates/footer.php'; ?>
