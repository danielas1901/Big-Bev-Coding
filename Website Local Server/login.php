<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quick Quit - Login</title>
    <link rel="stylesheet" href="cssFiles/login.css">
</head>

<body>
    <a id="begin"></a>
    <div class="top">
        <ul class="Navbar">
            <li class="headItem">
                <div class="logo"><img src="cssFiles/Images/logo.jpg" alt=""></div>
            </li>
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
            <li class="headItem" id="about"><a class="nav" href="login.php">Log In</a></li>
        </ul>
    </div>
    <div class="big">
        <div class="container">
            <div>
                <h1>Sign Up</h1>
                <div class="form">
                    <img src="cssFiles/Images/loginsymbol.png" alt="login">
                    <form action="include/signup.inc.php" method="POST">
                        <div class="entry">
                            <label for="firstname">First Name</label>
                            <br>
                            <input type="text" name="firstname" id="firstname">
                        </div>
                        <br>
                        <div class="entry">
                            <label for="lastname">SurName</label>
                            <br>
                            <input type="text" name="lastname" id="lastname">
                        </div>
                        <br>
                        <div class="entry">
                            <label for="email">Email</label>
                            <br>
                            <input type="email" name="email" id="email">
                        </div>
                        <br>
                        <div class="entry">
                            <label for="pass">Password</label>
                            <br>
                            <input type="password" name="password" id="password">
                        </div>
                        <input class="submit" type="submit" name="submit" value="Sign Up!">
                    </form>
                </div>
                <?php
    if (isset($_GET["error"])){
        if($_GET["error"] == "emptyinput"){
            echo "<p>Fill in all fields!</p>";
        }
        elseif($_GET["error"] == "invalidemail"){
            echo "<p>Choose a proper email!</p>";
        }
        elseif($_GET["error"] == "emailinuse"){
            echo "<p>Email already in use, please login!</p>";
        }
        elseif($_GET["error"] == "stmtfailed"){
            echo "<p>Something went real bad, try again!</p>";
        }
        elseif($_GET["error"] == "none"){
            echo "<p>You signed up!</p>";
        }
    }
?>
            </div>
        </div>
        <div class="container">
            <div>
                <h1>Login</h1>
                <p>Already have an Account?</p>
                <div class="form">
                    <img src="cssFiles/Images/loginsymbol.png" alt="login">
                    <form action="include/login.inc.php" method="POST">
                        <div class="entry">
                            <label for="email">Email</label>
                            <br>
                            <input type="email" name="email" id="email">
                        </div>
                        <br>
                        <div class="entry">
                            <label for="pass">Password</label>
                            <br>
                            <input type="password" name="password" id="password">
                        </div>
                        <input class="submit" type="submit" name="submit" value="Login!">
                    </form>
            </div>
                            <?php
    if (isset($_GET["error"])){
        if($_GET["error"] == "emptyinput"){
            echo "<p>Fill in all fields!</p>";
        }
        elseif($_GET["error"] == "wronglogin"){
            echo "<p>Hm, that info didn't match!</p>";
        }
    }
?>
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
