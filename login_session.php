<?php
$user='Mildred';
$password='123';

session_start();
if($_POST['userName']==$user
    && $_POST['password']==$password){
        $_SESSION['login']='Administrator';
        header('Location: forms.php');
    }else {
        echo 'Usuario & Password incorrect';
    }

?>