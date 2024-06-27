<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

include 'includes/db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM logbook_entries WHERE id='$id'";
    if ($conn->query($sql) === TRUE) {
        header("Location: logbook.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    header("Location: logbook.php");
}

$conn->close();
?>
