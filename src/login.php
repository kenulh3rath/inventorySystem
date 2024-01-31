<?php

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == 'admin' && $password == '1234') {
    echo 'Login Success';

// Redirect to suppliers.php
    header('Location: ../dashboard.php');
    exit;

} else {
    echo 'Login Failed';
}
