<?php
/*
 * Created by PhpStorm.
 * User: User
 * Date: 09.11.2016
 * Time: 01:49
 */

function checkLoginPassword($login, $password){
    $users = ['pupkin' => '123', 'ivanov' => 'qwerty'];
    return isset($users[$login]) && $password == $users[$login];
}
assert(true == checkLoginPassword('pupkin','123' ));
assert(false == checkLoginPassword('pupkin111','123' ));
assert(true == checkLoginPassword('pupkin','00' ));

function login($login)
{ 
    setcookie('auth', $login, time() + 86400);
}
function isUser(){
    return isset($_COOKIE['auth']);
}
function getUser(){
    return $_COOKIE['auth'];
}
if(!isUser()){
    header("Location: /form.html");
}
/* ogogoo ogoog ogogo og */