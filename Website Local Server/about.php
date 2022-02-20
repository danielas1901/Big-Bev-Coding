<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quick Quit - About</title>
    <link rel="stylesheet" href="cssFiles/about.css">
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
                <li id="first"><a href="#">Option1</a></li>
                <li><a href="#">Option2</a></li>
                <li><a href="#">Option3</a></li>
            </ul>
        </li>
        <li class="headItem" id="about"><a class="nav" href="about.php">About</a></li>
        <?php
                if (isset($_SESSION["userid"])){
                    echo "<li class='headItem'><a class='nav' href='include/logout.inc.php'></a>'Logout'</li>";
                }
                else{
                    echo "<li class='headItem' id='about'><a class='nav' href='login.php'>Log In</a></li>";
                }
        ?>
    </ul>
    </div>
    <div class="container">
        <div>
            <h1>About Us</h1>
            <p>We are a group of engineering students at Queen's University that are passionate about combatting the hardships that
                harm millions of people's mental and phycial health.
                Addiction has been an increasing issue in our world. Despite their being many individuals that wish to quit smoking
                or alchohol, they fall back into their old habits
                becuase they have no set plan. We belive in creating that plan for them to help these individuals that are willing
                to put the work in acheive their goals. </p>
        </div>
    </div>
    <div class="bottom">
        <ul class="footer">
            <li class="foot"><a class="Fitem" id="return" href="#begin">Return to top</a></li>
            <li class="foot"><a class="Fitem">Quick Quit, 2022</a></li>
        </ul>
    </div>
</body>

</html>