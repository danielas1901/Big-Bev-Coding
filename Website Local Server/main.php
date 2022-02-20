<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quick Quit - Home</title>
    <link rel="stylesheet" href="cssFiles/mainpage.css">
</head>

<body>
    <a id="begin"></a>
    <div class="top">
        <ul class="Navbar">
            <li class="headItem"><div class="logo"><img src="cssFiles/Images/logo.jpg" alt=""></div></li>
            <li class="headItem"><a class="nav" href="main.php">Home</a></li>
            <li class="headItem"><a class="nav" href="second.php">Features</a></li>
            <li class="headItem"><a class="nav" href="#">Explore ↓</a>
                <ul class="drop">
                    <li id="first"><a  href="#">Schedule</a></li>
                    <li><a href="#">Create</a></li>
                    <li><a href="#">Progress</a></li>
                </ul>
            </li>
            <li class="headItem" id="about"><a class="nav" href="about.php">About</a></li>
            <?php
                if (isset($_SESSION["usersname"])){
                    $Name = $_SESSION["usersname"];
                    echo "<li class='headItem' id='about'><a class='nav' href='#'>Hello " .$Name."</a></li>";
                    echo "<li class='headItem' id='about'><a class='nav' href='include/logout.inc.php'>Logout</a></li>";
                }
                else{
                    echo "<li class='headItem' id='about'><a class='nav' href='login.php'>Log In</a></li>";
                }
            ?>
        </ul>
    </div>
    <div class="greet">
        <div class="overlay">
            <div class="text">
                <h1>Welcome To Quick Quit</h1>
                <p>Addictive habits like smoking or alchohol can take control of your life. Thats why Quick Quit is here to help.
                    We well help tackle your more stubborn habits to help improve your health and life.</p>
                <a href="#">Sign Up</a>
                <a href="#">See More</a>
            </div>
        </div>
    </div>
    <div class="other">
        <div class="row1">
            <img src="cssFiles/Images/Small1.jpg" alt="Seb">
            <div class="sub">
                <h2>Goal Calender</h2>
                <p>Our technology will create a full calender plan to gradually help you quit your addition based on your personal circumstances.
                    The plan will walk users through day by day limiting factors they need to take to help overcome their addiction.</p>
            </div>
        </div>
        <div class="row2">
            <div class="sub">
                <h2>Adding Motivation</h2>
                <p>Users will be boosted with additional motivation through Quick Quit keeping track of money saved from
                     less cigarettes or alchohol as well as progress on how much you have cut down your intake of these substances</p>
            </div>
            <img src="cssFiles/Images/drinks.jpg" alt="Ronny">
        </div>
        <div class="row3">
            <img src="cssFiles/Images/Small3.jpg" alt="">
            <div class="sub">
                <h2>Healthier and Happier Life</h2>
                <p>Ultimately Quick Quit is to help you live the life that cigerettes or alchohol addiction keeps your from. Its not easy to quit, but we will
                    provide you with the easiest and fastest mathematically proven way to do so. We are routing for you!</p>
            </div>
        </div>
    </div>
    <div class="bottom">
        <ul class="footer">
            <li class="foot"><a class="Fitem" id="return" href="#begin">Return to top</a></li>
            <li class="foot"><a class="Fitem" >Quick Quit, 2022</a></li>
        </ul>
    </div>
</body>

</html>