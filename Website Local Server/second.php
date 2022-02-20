<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quick Quit - Second</title>
    <link rel="stylesheet" href="cssFiles/format.css">
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
                    <li id="first"><a href="#">Schedule</a></li>
                    <li><a href="#">Create</a></li>
                    <li><a href="#">Progress</a></li>
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
    <div class="placeholder">
        <div class="row1">
            <div class="object"><img src="cssFiles/Images/Filler1.jpg" alt="Earth">
            <p>Create Calendar</p>
            </div>
            <div class="object"><img src="cssFiles/Images/Filler2.jpg" alt="Trees">
            <p>Save Money</p>
            </div>
        </div>
        <div class="row2">
            <div class="object"><img src="cssFiles/Images/Filler3.jpg" alt="Win95">
            <p>Track Progress</p>
            </div>
            <div class="object"><img src="cssFiles/Images/Filler4.jpg" alt="Vroom">
            <p>Share with Friends</p>
            </div>
        </div>
    </div>
    <div class="bottom">
        <ul class="footer">
            <li class="foot"><a class="Fitem" id="return" href="#begin">Return to top</a></li>
            <li class="foot"><a class="Fitem">Website name, 2022</a></li>
        </ul>
    </div>
</body>

</html>