<?php
$con = mysqli_connect("localhost", "root", "12345","workonline");

if(mysqli_connect_errno()){
    echo 'Failed to connect to MYSQL: '.mysqli_connect_error();
}
?>