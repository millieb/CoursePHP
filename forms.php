<?php
session_start(['name'=>'MILDRED']);
unset($_SESSION['login']);
if(session_status()==PHP_SESSION_DISABLED){

}

if(isset($_SESSION['login'])){
    echo 'Bienvenido '.$_SESSION['login'];
    $_SESSION['login']='Client';
}else {

    echo 'No session';
}
?>


<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <form action='login_session.php' method='post'>
        User: <input type='text' name='userName'></br>
        Password: <input type='password' name='password'></br>
        <input type='submit' name='send' text='Enviar'>
        </form>

    
    </body>
</html>