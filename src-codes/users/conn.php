<?php 
  $host = "localhost:3306";
  $user = "sdmceghv_sdmcet_qwertyio";
  $pass = "Qwerty@123io";
  $db   = "sdmceghv_qwerty-online-exam";

  try {
    $conn = new PDO("mysql:host={$host};dbname={$db};",$user,$pass);
  } catch (Exception $e) {
    
  }
?>