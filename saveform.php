<?php
    print_r($_POST);
    setcookie('username',$_POST['username']);
    setcookie('password',$_POST['password']);
    $combo = json_encode($_POST);
    setcookie('usernamepasword', $combo);
?>