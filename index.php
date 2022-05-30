<?php
$host = "localhost";
$dbname = "reuse";
$username = "root";
$password = "";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (mysqli_connect_errno()) {
    die("Connection error" . mysqli_connect_error());
}

$sql = 'SELECT  id,gamenaam,prijs,foto FROM producten ';

$result = mysqli_query($conn, $sql);

$prodcuten = mysqli_fetch_all($result, MYSQLI_ASSOC);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h4>Producten te koop!</h4>
    <?php foreach ($prodcuten as $product) { ?>
        <h6><?php echo htmlspecialchars($product['gamenaam']);?></h6>
        <p><?php echo htmlspecialchars($product['prijs'])?> Euro ></p>
        <img src="<?php echo htmlspecialchars($product['foto'])?>" alt="">
    <?php  }
    ?>

</body>

</html>