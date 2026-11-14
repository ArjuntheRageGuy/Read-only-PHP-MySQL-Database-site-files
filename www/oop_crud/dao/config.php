<?php
$servername = "sql201.infinityfree.com";
$username = "if0_43436744";
$password = "SN1DLSrKOS6";

try{
    $db = new PDO("mysql:host=$servername;dbname=if0_43436744_oop_crud", $username, $password);
    // set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
}
catch (PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}
?>
