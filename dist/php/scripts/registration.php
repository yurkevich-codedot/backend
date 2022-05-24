<?
require('../scripts/connect.php');
// $data_columns = mysqli_query($mysqli, 'SELECT `COLUMN_NAME` FROM `INFORMATION_SCHEMA`.`COLUMNS` WHERE `TABLE_NAME`= `usersdost` ORDER BY ordinal_position');
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