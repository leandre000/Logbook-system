<?php
include 'includes/db.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = md5($_POST['password']);  // MD5 hashing for password

    $sql = "SELECT * FROM user_student WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
    } else {
        echo "Invalid username or password.";
    }
    $conn->close();
}
?>

<?php include 'templates/header.php'; ?>

<h2 class="text-center">Login</h2>
<form action="login.php" method="POST">
    <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" class="form-control" id="username" name="username" required>
    </div>
    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" id="password" name="password" required>
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
</form>

<?php include 'templates/footer.php'; ?>
