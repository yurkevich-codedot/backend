<?php
    require_once("connect.php");

    if(!isset($_SESSION)){
        session_start();
        unset($_SESSION['email']);
    }
    if(isset($_GET['submit'])){
        $email = $_GET['email'];
        $password = $_GET['password'];
        $result = mysqli_fetch_array(mysqli_query($mysqli,"SELECT * FROM `usersdost`  WHERE `email`='$email' and `password`='$password';"));
        if($result['id']!=null){
            $_SESSION['id'] = $result['id'];
            $_SESSION['email'] = $result['email'];
            $_SESSION['role'] = $result['role'];
            $_SESSION['password'] = $result['password'];
            if($result['role']=='admin')
            {
                echo "<script>window.location.href='../pages/admin-panel.php';</script>";
            }
            else
            {
                echo "<script>alert('Здравствуйте ".$result['email'].", к сожалению у вас нет прав для входа в админку')</script>";
                echo "<script>window.location.href='../pages/loginPage.php';</script>";
            }
        }
        else
        {
            echo "<script>alert('Не правильно введенны данные или же пользователя не существует')</script>";
            echo "<script>window.location.href='../pages/loginPage.php';</script>";
            $_SESSION['errors'] = 'Не правильно введенны данные или же пользователя не существует!';
        }
    }
?>