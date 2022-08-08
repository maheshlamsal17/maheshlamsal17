<?php

$connect = mysqli_connect('localhost','root', '', 'register');

$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];

mysqli_query($connect,"INSERT INTO signup (username, email, password) VALUES ('$username','$email','$password')");



?>