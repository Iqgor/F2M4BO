<?php
if (isset($_POST['submit'])) {

    $target = "uploads/". basename($_FILES['file']['name']);


    $db = mysqli_connect("localhost", "root", "", "reuse");

    $naam = $_POST['text'];
    $file = $_FILES['file']['name'];


    $sql = "INSERT INTO producten (gamenaam,foto) VALUES ('$naam', '$file')";


    mysqli_query($db, $sql);

    if(move_uploaded_file($_FILES['file']['tmp_name'],$target)){

    }else{
        
    }
}
