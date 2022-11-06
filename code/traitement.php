<?php 
if(isset($_POST['email']) && isset($_POST['password']))
{
    if(!empty($_POST['email'])&& !empty($_POST['password']))
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        echo $email ;
        echo $password;
    
    }
}

?>