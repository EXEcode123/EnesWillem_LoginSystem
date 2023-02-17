<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>PHP Login System</title>
        <link rel="stylesheet" href="CSS/reset.css">
        <link rel="stylesheet" href="CSS/style.css">
    </head>
    <body>
        <nav>
            <div class="wrapper">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="discover.php">About</a></li>
                    <li><a href="blog.php">Find Blogs</a></li>
                    <?php
                        if (isset($_SESSION["useruid"])) {
                            echo "<li><a href='profile.php'>Profile page</a></li>";
                            echo "<li><a href='includes/logout.inc.php'>Log Out</a></li>";
                        }
                        else {
                            echo "<li><a href='signup.php'>Sign Up</a></li>";
                            echo "<li><a href='login.php'>Log In</a></li>";
                        }
                    ?>
                </ul>
            </div>
        </nav>
    
        <div class="wrapper">