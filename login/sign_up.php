<?php
session_start()
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="description"
          content="Zero Gravity is een webshop die hardware en accessoires verkoopt voor je pc ook je voor je telefoon.">
    <meta name="keywords"
          content="Webshop, Zero Gravity, ZeroGravity, Hardware, pc, PC hardware, Pc accessoires, Iphone accessoires, Samsung accessoires, telefoon accessoires, Skin sticker laptop, Skin sticker Mac">
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
    <a href="../index.php" id="home"><img src="../Afbeeldingen/logoZG.png" alt="0" id="Logo">Zero Gravity</a>
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
    <br>
    <h2>Create a new account</h2>
    <?php
    if(!empty($_POST)){
        $name = $_POST['user'];
        $pass = hash('whirlpool', $_POST['pwd']);

        if(file_exists("../log/" . $name .  '.txt')){
            echo "<p style='color: red'>Gebruiker bestaat al</p>"; ?>
            <form method="post" action="<?php echo $_SERVER["PHP_SELF"] ?>">
                <table>
                    <tr>
                        <td><label>Full name:</label></td>
                        <td><input type="text" name="name" required></td>
                    </tr>
                    <tr>
                        <td>Username:</td>
                        <td><input type="text" name="user"></td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input type="password" name="pwd" required></td>
                    </tr>
                </table>
                <input type="submit" name="submit" value="submit">
            </form>
            <?php
        } else{
            $user = fopen(("../log/" . $name . '.txt'), 'w+');
            fwrite($user, $pass);
            fclose($user);
            echo "<p style='color: limegreen'>register successfull</p>";
        }
    }else{
        ?>
        <form method="post" action="<?php echo $_SERVER["PHP_SELF"] ?>">
            <table>
                <tr>
                    <td><label>Full name:</label></td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td>Username:</td>
                    <td><input type="text" name="user"></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="pwd"></td>
                </tr>
            </table>
            <input type="submit" name="submit" value="submit">
        </form>
        <?php
    }
    ?>
    </div>
<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
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