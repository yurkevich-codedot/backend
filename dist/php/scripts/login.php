<?php
    require_once("connect.php");

    if(!isset($_SESSION)){
        session_start();
        unset($_SESSION['email']);
    }

    // if(isset($_GET['submit'])){
         $email = $_POST['email'];
        $password = $_POST['password'];

         $result = mysqli_fetch_array(mysqli_query($mysqli,"SELECT * FROM `usersdost`  WHERE `email`='$email' and `password`='$password';"));
         if($result['id']!=null){
             $_SESSION['id'] = $result['id'];
           $_SESSION['email'] = $result['email'];
        $_SESSION['role'] = $result['role'];
         $_SESSION['password'] = $result['password']; 
             echo "<script>window.location.href='../../index.php';</script>";
         }
        else
        {
            echo "<script>alert('Не правильно введенны данные или же пользователя не существует')</script>";
            echo "<script>window.location.href='/dist/php/pages/loginPage.php';</script>";
            $_SESSION['errors'] = 'Не правильно введенны данные или же пользователя не существует!';
        }
    // }
?>