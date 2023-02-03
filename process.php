<?php
include 'database.php'; 
// Check if form submitted
if(isset($_POST['user']) && isset($_POST['message'])){
    $user = mysqli_real_escape_string($conn, $_POST['user']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);


    // Set timezone
    date_default_timezone_set('Europe/Sarajevo');
    $date = date('h:i:s a', time());

     $query = "INSERT INTO shouts (user, message, date) VALUES ('$user', '$message', '$date')";

    if(!mysqli_query($conn, $query)){
        echo 'Error: ' . mysqli_error($conn);
     } else {
        echo '<li>' . $date . ' - ' . '<strong>'.ucwords($user) . ':</strong> ' . $message . '</li>';
        }
    }
