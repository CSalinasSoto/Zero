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
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div id="container">
        <a href="index.php" id="home"><img src="Afbeeldingen/logoZG.png" alt="logo" id="Logo">Zero Gravity</a>
        <br>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="nav/stickers.php">Stickers</a></li>
                <li><a href="nav/cases.php">Cases</a></li>
                <li><a href="nav/boxes.php">Boxes</a></li>
                <li><a href="nav/overig.php">Overig</a></li>
                <li><a href="nav/contact.php">Contact</a></li>
                <li><a href="login/login.php">Login</a></li>
                <li><a href="login/sign_up.php">Sign up</a></li>
                <li><a class="_right"><?php if($_SESSION['login'] == 1) {
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
        <h2>
        Op onze site Zero Gravity verkopen wij allerelei computerproducten.
        Zoals coolers, telefoon hoesjes, computer stickers, boxen, etc..
        Wij verkopen deze producten met onze hoofdsponser ACME.
        Deze website is 24/7 open.
        Maar onze bezorginsdienst is op maandag t/m vrijdag van 08.00 uur t/m 17.00 uur.
    </h2>
        <h3>Op onze home page is de welkoms pagina zichtbaar.</h3>
        <table id="tab">
            <tr>
                <td class="line">
                    <img src="Afbeeldingen/pcsticker1.png" alt="pc1" height="135" >
                    <br>
                    <span>skn</span>
                </td>
                <td class="line">
                    <img src="Afbeeldingen/pcsticker2.png" alt="pc2" height="135" >
                    <br>
                    <span>skn</span>
                </td>
                <td class="line">
                    <img src="Afbeeldingen/pcsticker3.png" alt="pc3" height="135">
                    <br>
                    <span>skn</span>
                </td>
                <td class="line">
                    <img src="Afbeeldingen/pcsticker4.png" alt="pc4" height="135">
                    <br>
                    <span>skn</span>
                </td>
                <td class="line">
                    <img src="Afbeeldingen/pcsticker5.png" alt="pc5" height="135">
                    <br>
                    <span>skn</span>
                </td>
            </tr>
            <tr>
                <td class="line">
                    <img src="Afbeeldingen/box1.png" alt="box6" height="135" >
                    <br>
                    <span>speak</span>
                </td>
                <td class="line">
                    <img src="Afbeeldingen/box2.png" alt="box7" height="135" >
                    <br>
                    <span>speak</span>
                </td>
                <td class="line">
                    <img src="Afbeeldingen/box3.png" alt="box8" height="135">
                    <br>
                    <span>speak</span>
                </td>
                <td class="line">
                    <img src="Afbeeldingen/box4.png" alt="box9" height="135">
                    <br>
                    <span>speak</span>
                </td>
                <td class="line">
                    <img src="Afbeeldingen/box5.png" alt="box10" height="135">
                    <br>
                    <span>speak</span>
                </td>
            </tr>
            <tr>
                <td class="line">
                    <img src="Afbeeldingen/1.png" alt="hd11" height="120" >
                    <br>
                    <span>speak</span>
                </td>
                <td class="line">
                    <img src="Afbeeldingen/2.png" alt="hd12" height="135" >
                    <span>speak</span>
                </td>
                <td class="line">
                    <img src="Afbeeldingen/3.png" alt="hd12" height="120" >
                    <span>speak</span>
                </td>
                <td class="line">
                    <img src="Afbeeldingen/4.png" alt="hd13" height="120" >
                    <span>speak</span>
                </td>
                <td class="line">
                    <img src="Afbeeldingen/5.png" alt="hd14" height="120" >
                    <br>
                    <span>speak</span>
                </td>
            </tr>
            <tr>
                <td class="line">
                    <img src="Afbeeldingen/6.png" alt="ph15" height="135" >
                    <br>
                    <span>speak</span>
                </td>
                <td class="line">
                    <img src="Afbeeldingen/7.png" alt="ph16" height="135" >
                    <br>
                    <span>speak</span>
                </td>
                <td class="line">
                    <img src="Afbeeldingen/10.png" alt="ph17" height="135" >
                    <br>
                    <span>speak</span>
                </td>
                <td class="line">
                    <img src="Afbeeldingen/i6s.png" alt="ph18" height="135" >
                    <br>
                    <span>speak</span>
                </td>
                <td class="line">
                    <img src="Afbeeldingen/s6s.png" alt="ph19" height="120">
                    <br>
                    <span>speak</span>
                </td>
            </tr>
        </table>
    </div>
    <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="script.js"></script>
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
    <script type="text/javascript">
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