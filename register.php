<?php
include 'includes/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = md5($_POST['password']);  // MD5 hashing for password
    $email = $_POST['email'];

    $sql = "INSERT INTO user_student (username, password, email) VALUES ('$username', '$password', '$email')";
    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>

<?php include 'templates/header.php'; ?>

<h2 class="text-center">Create an Account</h2>
<form action="register.php" method="POST">
    <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" class="form-control" id="username" name="username" required>
    </div>
    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" id="password" name="password" required>
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <button type="submit" class="btn btn-primary">Register</button>
</form>

<?php include 'templates/footer.php'; ?>
