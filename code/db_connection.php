<?php 
$conn = new PDO ("mysql:host=localhost; dbname=devoir;port=3306" , 'root' , '');
if(isset($_POST['email']) && isset($_POST['password']))
{
    if(!empty($_POST['email'])&& !empty($_POST['password']))
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql= "INSERT INTO users(email,password) VALUES('$email','$password')";
        $insertion = $conn ->prepare($sql);
        $insertion ->execute();
    }
}




?>