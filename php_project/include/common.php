<?php

function sanitize($value){
    $level1 = trim($value);
    $level2 = strip_tags($level1);
    return $level2 ;
}

function hash_password($password){
  $password_new=sha1($password);
  return $password_new ;
}
