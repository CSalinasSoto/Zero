<?php
session_start()
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Zero Gravity is een webshop die hardware en accessoires verkoopt voor je pc ook je voor je telefoon.">
    <meta name="keywords" content="Webshop, Zero Gravity, ZeroGravity, Hardware, pc, PC hardware, Pc accessoires, Iphone accessoires, Samsung accessoires, telefoon accessoires, Skin sticker laptop, Skin sticker Mac">
    <meta name="robots" content="index, follow">
    <meta name="revisit-after" content="7 days">
    <meta name="copyright" content="Tim Drion en Chris Salinas Soto">
    <meta name="googlebot" content="noodp">
    <meta name="language" content="Nederlands">
    <meta name="reply-to" content="">
    <meta name="web_author" content="Tim Drion en Chris Salinas Soto">
    <title>Zero Gravity</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>

<body>
    <div id="container">
        <a href="../index.php" id="home"><img src="../Afbeeldingen/logoZG.png" alt="logo" id="Logo">Zero Gravity</a>
        <br>
        <nav>
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="../nav/stickers.php">Stickers</a></li>
                <li><a href="../nav/cases.php">Cases</a></li>
                <li><a href="../nav/boxes.php">Boxes</a></li>
                <li><a href="../nav/overig.php">Overig</a></li>
                <li><a href="../nav/contact.php">Contact</a></li>
                <li><a href="../login/login.php">Login</a></li>
                <li><a href="../login/sign_up.php">Sign up</a></li>
                <li><a><?php if($_SESSION['login'] == 1) {
                            echo "Ingelogd als " . $_SESSION['user'];
                        }?>
                    </a>
                </li>
                <li><a class="_right"><?php if($_SESSION['login'] == 1){?>
                <li><a href="login/logout.php" target="_parent">Logout</a></li>
                <?php } ?>
                </a>
                </li>
            </ul>
        </nav>
        <br>
        <br>
        <h1>Under construction! || Webshop Zero Gravity</h1>
        <table>
            <tr>
                <td class="line">
                    <img src="../Afbeeldingen/6.png" alt="ph1" height="230" class="pc1Thumb">
                    <div class="pc1">
                        <img src="../Afbeeldingen/6.png" alt="ph1" height="230">
                        <h3 style="color: black">ACME Hoesje ZG-1080S series 945872.</h3>
                    <p>€10,00</p>
                        <p>
                        Dit hoesje is flexiebel en makkelijk te ontkoppelen, met scherm bescherming in begrepen.
                        Het brengt een goede bescherming voor je telefoon.
                        Hier zit ook een standaard op zodat je alles gemakkelijk in fullscreen kan kijken.
                        In een kleur beschikbaar.
                        </p>
                        <div class="product">
                            <a href="../cart/add_cart.php" style="color: white">Add to cart</a>
                        </div>
                        <h4>&copy;Zero Gravity 2016</h4>
    </div>
                </td>
                <td class="line">
                    <img src="../Afbeeldingen/7.png" alt="ph2" height="220" class="pc2Thumb">
                    <div class="pc2">
                        <img src="../Afbeeldingen/7.png" alt="ph2" height="230">
                        <h3 style="color: black">ACME Hoesje ZG-1080I series 945873.</h3>
                    <p>€10,00<p>
                    <p>
                        Dit hoesje is flexiebel en makkelijk te ontkoppelen.
                        Ook brengt het een goede bescherming voor je telefoon.
                        Speciaal voor superman fans.
                    </p>
                        <div class="product">
                            <a href="../cart/add_cart.php" style="color: white">Add to cart</a>
                        </div>
                        <h4>&copy;Zero Gravity 2016</h4>
    </div>
                </td>
                <td class="line">
                    <img src="../Afbeeldingen/10.png" alt="ph3" height="230" class="pc3Thumb">
                    <div class="pc3">
                        <img src="../Afbeeldingen/10.png" alt="ph3" height="230">
                        <h3 style="color: black">ACME Hoesje ZG-1080I series 945874.</h3>
                    <p>€10,00</p>
                    <p>
                        Dit hoesje heeft een harde beveiligings laag.
                        Waardoor het een goede bescherming voor je telefoon brengt.
                        In een kleur beschikbaar.
                    </p>
                        <div class="product">
                            <a href="../cart/add_cart.php" style="color: white">Add to cart</a>
                        </div>
                        <h4>&copy;Zero Gravity 2016</h4>
    </div>
                </td>
            </tr>
            <tr>
                <td class="line">
                    <img src="../Afbeeldingen/i6s.png" alt="ph4" height="230" class="pc4Thumb">
                    <div class="pc4">
                        <img src="../Afbeeldingen/i6s.png" alt="ph4" height="230">
                        <h3>ACME Hoesje ZG-1080I series 945875.</h3>
                        <p>€10,00</p>
                        <p>
                            Dit hoesje heeft een harde beveiligings laag.
                            Waardoor het een goede bescherming voor je telefoon brengt.
                            Fan van Pokemon? Zie hier jouw pokedex hoesje.
                        </p>
                        <div class="product">
                            <a href="../cart/add_cart.php" style="color: white">Add to cart</a>
                        </div>
                    </div>
                </td>
                <td></td>
                <td class="line">
                    <img src="../Afbeeldingen/s6s.png" alt="ph5" height="230" class="pc5Thumb">
                    <div class="pc5">
                        <img src="../Afbeeldingen/s6s.png" alt="ph5" height="230">
                        <h3>ACME Hoesje ZG-1080S series 945876.</h3>
                        <p>€10,00</p>
                        <p>
                            Dit hoesje is flexiebel en makkelijk te ontkoppelen.
                            Ook brengt het een goede bescherming voor je telefoon.
                            Dit hoesje is in een kleur beschikbaar.
                        </p>
                        <div class="product">
                            <a href="../cart/add_cart.php" style="color: white">Add to cart</a>
                        </div>
                    </div>
                </td>
            </tr>
        </table>
        <br>
        <br>
        
    </div>
    <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="../script/venster.js"></script>
    <script src="../script/modaal.js"></script>
    <script src="../script.js"></script>
    <footer>
        <div id="validator">
            <a href="http://validator.w3.org/check?uri=referer" target="_blank">
                <img src="http://blog.boyet.com/blog/files/media/image/valid-html5-blue.png" alt="validator1" height="25">
            </a>
            <h3>&copy; Zero Gravity 2016</h3>
            <a href="http://jigsaw.w3.org/css-validator/check/referer" target="_blank">
                <img src="http://jigsaw.w3.org/css-validator/images/vcss-blue.gif" alt="validator2" height="25">
            </a>
        </div>
    </footer>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function()
        {
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  
        });
        (window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-75422545-1', 'auto');
        ga('send', 'pageview');

</script>
</body>
</html>