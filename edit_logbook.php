<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

include 'includes/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $entry_date = $_POST['entry_date'];
    $entry_time = $_POST['entry_time'];
    $days = $_POST['days'];
    $week = $_POST['week'];
    $activity_description = $_POST['activity_description'];
    $working_hour = $_POST['working_hour'];

    $sql = "UPDATE logbook_entries SET entry_date='$entry_date', entry_time='$entry_time', days='$days', 
            week='$week', activity_description='$activity_description', working_hour='$working_hour' WHERE id='$id'";
    if ($conn->query($sql) === TRUE) {
        header("Location: logbook.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    $id = $_GET['id'];
    $sql = "SELECT * FROM logbook_entries WHERE id='$id'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $entry = $result->fetch_assoc();
    } else {
        header("Location: logbook.php");
    }
}

$conn->close();
?>

<?php include 'templates/header.php'; ?>

<h2 class="text-center">Edit Activity</h2>
<form action="edit_logbook.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $entry['id']; ?>">
    <div class="form-group">
        <label for="entry_date">Entry Date:</label>
        <input type="date" class="form-control" id="entry_date" name="entry_date" value="<?php echo $entry['entry_date']; ?>" required>
    </div>
    <div class="form-group">
        <label for="entry_time">Entry Time:</label>
        <input type="time" class="form-control" id="entry_time" name="entry_time" value="<?php echo $entry['entry_time']; ?>" required>
    </div>
    <div class="form-group">
        <label for="days">Days:</label>
        <input type="number" class="form-control" id="days" name="days" value="<?php echo $entry['days']; ?>" required>
    </div>
    <div class="form-group">
        <label for="week">Week:</label>
        <input type="number" class="form-control" id="week" name="week" value="<?php echo $entry['week']; ?>" required>
    </div>
    <div class="form-group">
        <label for="activity_description">Activity Description:</label>
        <textarea class="form-control" id="activity_description" name="activity_description" rows="3" required><?php echo $entry['activity_description']; ?></textarea>
    </div>
    <div class="form-group">
        <label for="working_hour">Working Hours/Day:</label>
        <input type="number" step="0.01" class="form-control" id="working_hour" name="working_hour" value="<?php echo $entry['working_hour']; ?>" required>
    </div>
    <button type="submit" class="btn btn-primary">Update Activity</button>
</form>

<?php include 'templates/footer.php'; ?>
