<?php

$email = $_POST['email'];
$password = $_POST['password']
$password2 = $_POST['password2'];

if($password != $password2) die("password doesn't match");

$users = serialize([$email, $password]);

file_put_contents('save.db', $users);

header('Location:login.php');