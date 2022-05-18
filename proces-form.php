<?php

$naam = $_POST["naam"];
$bericht = $_POST["bericht"];
$priority = filter_input(INPUT_POST, "priority", FILTER_VALIDATE_INT);
$type = filter_input(INPUT_POST,"type",FILTER_VALIDATE_INT);


$host = "localhost";
$dbname = "berichten";
$username = "root";
$password = "";

$conn = mysqli_connect($host,$username,$password,$dbname);

if (mysqli_connect_errno()){
    die("Connection error" . mysqli_connect_error());
}

$sql = "INSERT INTO berichten (name,body, priority,type )
        VALUES (?, ?, ?, ? )";

$stmt = mysqli_stmt_init($conn);

if ( ! mysqli_stmt_prepare($stmt, $sql)) {
    die(mysqli_error($conn));
};
 

mysqli_stmt_bind_param($stmt, "ssii", $naam,$bericht,$priority,$type);

mysqli_stmt_execute($stmt);

echo "Record saved";