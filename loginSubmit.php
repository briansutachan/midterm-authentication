<?php

$email = $_POST['email'];
$password = $_POST['password'];

// load email and pass from the file
$user = file_get_contents('save.db');

// unserialie
$userarr = unserialize($user);

// if if user / pass are the same
if($email === $userarr[0] && $password === $userarr[1]) {
    header('Location: a.php');
}else{
    die("Something is wrong with your password or email");
};
