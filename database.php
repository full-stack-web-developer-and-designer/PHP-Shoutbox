<?php
// Connect to MySQL
$conn = mysqli_connect("localhost","root","","shoutit");
mysqli_set_charset($conn,"utf8");
// Test connection
if(mysqli_connect_errno()){
    echo 'Failed to connect to MySQL: '.$mysqli_connect_error();
    //die ('Failed to connect to MySQL: '.mysqli_connect_error());
}