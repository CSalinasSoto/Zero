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
                <li><a><?php if($_SESSION['login'] == 1){?>
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
                    <img src="../Afbeeldingen/box1.png" alt="box1" height="260" class="pc1Thumb">
                    <div class="pc1">
                        <img src="../Afbeeldingen/box1.png" alt="pc4">
                        <h3>ACME Box CX-720 series 4411411 mat zwart.</h3>
                        <p>€30,00</p>
                        <p>
                            Deze Boxen zijn van goede kwaliteit, en hebben een groot volume verspreiding systeem.
                            Deze box is 50 x 20 cm.
                        </p>
                        <h4>&copy;Zero Gravity 2016</h4>
                    </div>
                </td>
                <td class="line">
                    <img src="../Afbeeldingen/box2.png" alt="box2" height="260" class="pc2Thumb">
                    <div class="pc2">
                        <img src="../Afbeeldingen/box2.png" alt="pc4">
                        <h3>ACME Box CX-720 series 5522522 zwart.</h3>
                        <p>€45,00</p>
                        <p>
                            Deze Boxen zijn van goede kwaliteit, desondanks de grootte van deze boxenset.
                            Deze box is 25 x 11 cm.
                        </p>
                        <h4>&copy;Zero Gravity 2016</h4>
                    </div>
                </td>
                <td class="line">
                    <img src="../Afbeeldingen/box3.png" alt="box3" height="260" class="pc3Thumb">
                    <div class="pc3">
                        <img src="../Afbeeldingen/box3.png" alt="pc4">
                        <h3>ACME Box CX-720 series 6633633 grijs/ donkergrijs.</h3>
                        <p>€45,00</p>
                        <p>
                            Deze Box is goede kwaliteit en is een apart aanschaf baare boxenset.
                            Deze box is 50 x 12.5 cm.
                        </p>
                        <h4>&copy;Zero Gravity 2016</h4>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="line">
                    <img src="../Afbeeldingen/box4.png" alt="box4" height="260" class="pc5Thumb">
                    <div class="pc5">
                        <img src="../Afbeeldingen/box4.png" alt="pc4" width="400px">
                        <h3>ACME Box CX-720 series 7744744 grijs.</h3>
                        <p>€60,00</p>
                        <p>
                            Deze Boxen zijn van goede kwaliteit en geven je een warm en comfortabel.
                            Deze boxen zijn 75 x 25 cm.
                        </p>
                        <h4>&copy;Zero Gravity 2016</h4>
                    </div>
                </td>
                <td></td>
                <td class="line">
                    <img src="../Afbeeldingen/box5.png" alt="box5" height="260" class="pc6Thumb">
                    <div class="pc6">
                        <img src="../Afbeeldingen/box5.png" alt="pc4">
                        <h3>ACME Box CX-720 series 8855855 zwart.</h3>
                        <p>€75,00</p>
                        <p>
                            Deze Boxen zijn goede kwaliteit en geven je een warm en een bioscoop gevoel door de surround functie.
                            Deze boxen zijn 50 x 50 cm, en de bestuurder is 70 x 50 cm.
                        </p>
                        <h4>&copy;Zero Gravity 2016</h4>
                    </div>
                </td>
            </tr>
        </table>
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