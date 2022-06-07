<?php


$gamenaam = $_POST["naam"];
$prijs = $_POST["prijs"];
$foto = "";

$host = "localhost";
$dbname = "reuse";
$username = "root";
$password = "";

$conn = mysqli_connect($host,$username,$password,$dbname);

if (mysqli_connect_errno()){
    die("Connection error" . mysqli_connect_error());
}

$sql = "INSERT INTO producten  (gamenaam,prijs )
        VALUES (?, ?, ?)";

$stmt = mysqli_stmt_init($conn);

if ( ! mysqli_stmt_prepare($stmt, $sql)) {
    die(mysqli_error($conn));
};
 

mysqli_stmt_bind_param($stmt, "ssii", $naam,$bericht,$priority,$type);

mysqli_stmt_execute($stmt);







