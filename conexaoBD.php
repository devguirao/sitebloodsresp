<?php
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = 'usbw';
$dbName = 'formulario';


$conexao= new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
if ($conexao->connect_error) {
    die("Connection failed: " . $conexao->connect_error);
   }
?>