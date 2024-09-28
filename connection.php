<?php
$server = 'localhost';
$user = 'root';
$pass = '';
$database = 'crud';

$con = mysqli_connect($server, $user, $pass, $database);

if(!$con){
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "";
}
?>
