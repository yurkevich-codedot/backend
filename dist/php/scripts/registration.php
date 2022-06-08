<?
require('../scripts/connect.php');
$email = $_POST['email'];
$password = $_POST['password'];
$secret = $_POST['secret'];
echo $email . "<br>" . $password;




if($email == NULL or $password == NULL)
{
    echo "sda" . $email . "<br>" . $password;
    echo "<script>alert('Введите данные для регистрации')</script>";
    echo "<script>window.location.href='../pages/registrationPage.php';</script>";
}

else
{
    $sql = mysqli_query($mysqli,"INSERT INTO `usersdost` (`id`, `email`, `password`, `role`, `secret_word`) VALUES (NULL,'$email','$password','user','$secret')");
    if($sql)
    {
        echo "<script>alert('Вы успешно зарегистрировались!')</script>";
        echo "<script>window.location.href='/dist/php/pages/loginPage.php';</script>";
    } 
}
?>