<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

include 'includes/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['id'])) {
        // Update existing entry
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
            echo "Activity updated successfully!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        // Insert new entry
        $entry_date = $_POST['entry_date'];
        $entry_time = $_POST['entry_time'];
        $days = $_POST['days'];
        $week = $_POST['week'];
        $activity_description = $_POST['activity_description'];
        $working_hour = $_POST['working_hour'];

        $sql = "INSERT INTO logbook_entries (entry_date, entry_time, days, week, activity_description, working_hour) 
                VALUES ('$entry_date', '$entry_time', '$days', '$week', '$activity_description', '$working_hour')";
        if ($conn->query($sql) === TRUE) {
            echo "Activity recorded successfully!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

$logbook_entries = [];
$sql = "SELECT * FROM logbook_entries";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $logbook_entries[] = $row;
    }
}
$conn->close();
?>

<?php include 'templates/header.php'; ?>

<h2 class="text-center">Logbook</h2>

<form action="logbook.php" method="POST">
    <div class="form-group">
        <label for="entry_date">Entry Date:</label>
        <input type="date" class="form-control" id="entry_date" name="entry_date" required>
    </div>
    <div class="form-group">
        <label for="entry_time">Entry Time:</label>
        <input type="time" class="form-control" id="entry_time" name="entry_time" required>
    </div>
    <div class="form-group">
        <label for="days">Days:</label>
        <input type="number" class="form-control" id="days" name="days" required>
    </div>
    <div class="form-group">
        <label for="week">Week:</label>
        <input type="number" class="form-control" id="week" name="week" required>
    </div>
    <div class="form-group">
        <label for="activity_description">Activity Description:</label>
        <textarea class="form-control" id="activity_description" name="activity_description" rows="3" required></textarea>
    </div>
    <div class="form-group">
        <label for="working_hour">Working Hours/Day:</label>
        <input type="number" step="0.01" class="form-control" id="working_hour" name="working_hour" required>
    </div>
    <button type="submit" class="btn btn-primary">Save Activity</button>
</form>

<h3 class="mt-5">Recorded Activities</h3>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Entry Date</th>
            <th>Entry Time</th>
            <th>Days</th>
            <th>Week</th>
            <th>Activity Description</th>
            <th>Working Hours/Day</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($logbook_entries as $entry): ?>
        <tr>
            <td><?php echo $entry['entry_date']; ?></td>
            <td><?php echo $entry['entry_time']; ?></td>
            <td><?php echo $entry['days']; ?></td>
            <td><?php echo $entry['week']; ?></td>
            <td><?php echo $entry['activity_description']; ?></td>
            <td><?php echo $entry['working_hour']; ?></td>
            <td>
                <a href="edit_logbook.php?id=<?php echo $entry['id']; ?>" class="btn btn-warning">Edit</a>
                <a href="delete_logbook.php?id=<?php echo $entry['id']; ?>" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php include 'templates/footer.php'; ?>
