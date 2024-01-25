<?php
include 'db_connection.php';
$user_id = $_SESSION['user_id'];

// Fetch tasks list
$select = "SELECT * FROM `todolist` WHERE user_id = '$user_id'";
$s_query = mysqli_query($conn, $select);

// ADD TASKS
$tasks = $_POST['add-todo'];
if (isset($_POST['add-todo-btn'])) {
    $insert = "INSERT INTO `todolist`(`user_id`, `tasks`, `created_at`, `updated_at`) VALUES ('$user_id','$tasks', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)";
    $query = mysqli_query($conn, $insert);
    if ($query) {
        echo "<script>window.location='../../home.php';</script>";
    } else {
        echo "<script>alert('Something Went wrong...try again!!'); window.location='../../home.php';</script>";
    }
}

// UPDATE TASK
if (isset($_POST['update-todo-btn'])) {
    $update_id = $_POST['update-id'];
    $updated_tasks = $_POST['update-todo'];
    $update_query = "UPDATE `todolist` SET `tasks`='$updated_tasks', `updated_at`=CURRENT_TIMESTAMP WHERE id = $update_id AND user_id = '$user_id'";
    $u_query = mysqli_query($conn, $update_query);
    if ($u_query) {
        echo "<script>window.location='../../home.php';</script>";
    } else {
        echo "<script>alert('Something Went wrong...try again!!'); window.location='../../home.php';</script>";
    }
}

// DELETE TASK
if (isset($_POST['dlt-todo-btn'])) {
    $row_id = $_POST['update-id']; // Change this line from $_GET to $_POST
    $delete = "DELETE FROM `todolist` WHERE id = $row_id AND user_id = '$user_id'";
    $d_query = mysqli_query($conn, $delete);
    if ($d_query) {
        echo "<script>window.location='../../home.php';</script>";
    } else {
        echo "<script>alert('Something Went wrong...try again!!'); window.location='../../home.php';</script>";
    }
}
?>
