<?php
require 'functions.php';

$conn = dbConnect();

$result = $conn -> query("SELECT * FROM `producten`")





?>

<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Alles wat Tekoop is bij ReUse">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="js/script.js" defer></script>
    <script src="https://kit.fontawesome.com/44df10ddff.js" crossorigin="anonymous"></script>
    <title>ReUse | TeKoop</title>
    <link rel="shortcut icon" href="img/recycling-symbol-icon-twotone-light-green.png" type="image/x-icon">
</head>

<body class="tekoopPage" id="js--tekoop" data-aos="fade-in" data-aos-duration="1500">
    <figure class="circle circle1"></figure>
    <figure class="circle circle2"></figure>

    <header class="header">
        <span class="hidden" id="js--title"></span>
        <div class="headerInfo hContact" id="js--info">
            <a href="index.html">
                <h1 class="logo"><i class="fa-solid fa-gamepad "></i> ReUse</h1>
            </a>
            <ul>
                <li><a href="inleveren.html" class="hover--animation2">Inzenden</a></li>
                <li><a href="tekoop.php" class="hover--animation2">Tekoop</a></li>
                <li><a href="contact.html" class="hover--animation2">Contact</a></li>
            </ul>
            <div class="icons">
                <div class="shopcart hover--animation2">
                    <figure class="cartItems" id="js--cart">
                        <p id="js--inCart">0</p>
                    </figure>
                    <a href="#">

                        <i class="fa-solid fa-cart-shopping">

                        </i>
                    </a>
                </div>
                <div class="menu hover--animation2"><button id="js--menuInfo-on"><i class="fa-solid fa-bars"></i></button></div>

            </div>

        </div>
        <div id="js--menuInfo" class="headerInfo-hidden">
            <ul>
                <li><a href="inleveren.html" class="hover--animation2">Inzenden</a></li>
                <li><a href="tekoop.php" class="hover--animation2">Tekoop</a></li>
                <li><a href="contact.html" class="hover--animation2">Contact</a></li>
                <li><button class="hover--animation2" id="js--menuInfo-off">X</button></li>

            </ul>
        </div>
    </header>
    <section class="categories">
        <h3>Categorie??n</h3>
        <div>
            <label for="checkbox-shooting" class="label">
                <p>Shooting</p>
                <input type="checkbox" class="filter" id="checkbox-shooting">
            </label>
        </div>
        <div>
            <label for="checkbox-racing" class="label">
                <p>Racing</p>
                <input type="checkbox" class="filter" id="checkbox-racing">
            </label>
        </div>
        <div>
            <label for="checkbox-story" class="label">
                <p> Story</p>
                <input type="checkbox" class="filter" id="checkbox-story">
            </label>
        </div>
        <div>
            <label for="checkbox-horror" class="label">
                <p>Horror</p>
                <input type="checkbox" class="filter" id="checkbox-horror">
            </label>
        </div>
        <div>
            <label for="checkbox-vechten" class="label">
                <p>Vechten</p>
                <input type="checkbox" class="filter" id="checkbox-vechten">
            </label>
        </div>
        <form action="">
            <div>
                <label for="platform">
                    <p>Platform:</p>
                    <select class="platforms" name="platform" id="platform">`
                        <option value="alles">Alles</option>
                        <option value="playstation">PlayStation</option>
                        <option value="xbox">Xbox</option>
                        <option value="nintendo">Nintendo</option>
                        <option value="pc">PC</option>
                    </select>
                    <input type="submit" value="Submit">
                </label>
            </div>
        </form>
    </section>
    <main class="main mainTekoop">
        <ul class="producten">

            <?php foreach ($result as $product) : ?>
                <li data-category="<?php echo $product['categorie']; ?>" class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="<?php echo $product['foto']; ?>" alt="">
                        </div>
                        <div class="flip-card-back">
                            <h3><?php echo $product['gamenaam']; ?></h3>
                            <p class="card-prijs"><?php echo $product['prijs'], "$"; ?></p>
                            <img src="<?php echo $product['foto']; ?> " alt="">
                            <a href="details.php?id=<?php echo $product['id'] ?>" class="hover--animation">Meer info:</a>
                            <button class="buttonverzend toCard"><span>Zet het in winkelmandje</span></button>
                            <span class="message" id="js--message">Verzonden!</span>
                        </div>
                    </div>


                </li>
            <?php endforeach; ?>


        </ul>
    </main>
    <a class="top" href="#"><i class="fa-solid fa-arrow-up"></i></a>
    <hr>
    <footer class="footer">
        <article class="art art1">
            <span><a class="hover--animation" href="mailto:herrebrughigor@gmail.com">Igor Herrebrugh</a></span>
            <span><a class="hover--animation" href="https://www.google.com/maps/dir//Contactweg,+Amsterdam/@52.3945562,4.8461917,15z/data=!4m17!1m7!3m6!1s0x47c5e28953d7076d:0x23ce5417168790f!2sContactweg,+Amsterdam!3b1!8m2!3d52.3945565!4d4.8549465!4m8!1m0!1m5!1m1!1s0x47c5e28953d7076d:0x23ce5417168790f!2m2!1d4.8549465!2d52.3945565!3e3">
                    Contactweg 36, 1014 AN Amsterdam</a>
            </span>
            <p>Nummer : (+31) 6 15438490</p>

        </article>
        <article class="art art2">
            <a href="https://www.facebook.com/profile.php?id=100009024188188" class="fa fa-facebook "></a>
            <a href="https://twitter.com/elonmusk" class="fa fa-twitter "></a>
            <a href="https://www.instagram.com/pornhub/ " class="fa fa-instagram "></a>
            <a href="https://www.linkedin.com/in/igor-herrebrugh-10476323a/" class="fa fa-linkedin "></a>
        </article>
        <article class="art art3">
            <a href="#" class="hover--animation">Privacy</a>
            <a href="#" class="hover--animation">Werkwijze</a>
            <p>All Rights Reserved &#169; </p>
        </article>
    </footer>

</body>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init({
        once: true,
        offset: 200,
        duration: 1500,
    });
</script>

</html>