<?php
session_start();
require('../inc/db.php');

if(isset($_POST['submit'])){
    $name = filter_var($_POST['name']);
    $email = filter_var($_POST['email']);
    $mobile = filter_var($_POST['mobile']);
    $password = password_hash(filter_var($_POST['password']) , PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (name, email, mobile, password) VALUES (?,?,?,?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$name,$email,$mobile,$password]);

    $_SESSION['success'] = "data is inserted";
    
}
header('location:../register.php');