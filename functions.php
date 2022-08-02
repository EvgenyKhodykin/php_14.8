<?php

function getUsersList() {
  return [
    ['login' => 'admin', 'password' => 'e10adc3949ba59abbe56e057f20f883e'], //123456
    ['login' => 'kea', 'password' => 'd0970714757783e6cf17b26fb8e2298f'], //112233
    ['login' => 'key', 'password' => '3c6fcccf800b9652d2ac85de6c108c86'], //000123
    ['login' => 'guest', 'password' => 'c33367701511b4f6020ec61ded352059'], //654321
  ];
}

function existsUser($login){
  return array_key_exists($login, getUsersList());
}

function checkPassword($login, $password) {
  if (!existsUser($login)) {
    return false;
  }
  return md5($password) === getUsersList()[$login]['password'];
}

function getCurrentUser() {
  $login = $_SESSION['login'] || null;
  return md5('112233');
}
