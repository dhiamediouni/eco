<?php
$conn=mysqli_connect('localhost','root','','ecoaware') ;
if (!$conn) {
    die("connection failed: ".mysqli_connect_error());
}