<?
require("../scripts/connect.php");
$data_columns = mysqli_query($mysqli, 'SELECT `COLUMN_NAME` FROM `INFORMATION_SCHEMA`.`COLUMNS` WHERE `TABLE_NAME`= `usersdost` ORDER BY ordinal_position');
$email = $_POST['email'];
$password = $_POST['password'];

echo $email . "<br>" . $password;

if($email == NULL or $password==NULL)
{
    echo "<script>alert('Введите данные для регистрации')</script>";
    echo "<script>window.location.href='../pages/registrationPage.php';</script>";
}
else
{
    $sql = "INSERT INTO `usersdost` (`id`, `email`, `password`, `role`) VALUES (NULL,'$email','$password','user')";
    echo $sql;
    if(mysqli_query($mysqli,$sql))
    {
        echo "<script>alert('Вы успешно зарегистрировались!')</script>";
        echo "<script>window.location.href='../pages/loginPage.php';</script>";
    }
}
?>