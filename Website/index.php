<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: auth/login.php");
    exit;
}
?>
<!--Verwijderen de PHP niet-->
<!--Plaats hier je HTML-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Home | Willems-IT</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">  
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li class="mobile"><a href="shop.html">Shop</a></li>
                <li class="mobile"><a href="login.html">Login</a></li>
                <li class="logo"><a href="index.html">Willems-IT Logo</a></li>
                <li class="desktop"><a href="shop.html">Shop</a></li>
                <li class="desktop"><a href="login.html">Login</a></li>
            </ul>
        </nav>
    </header>
    <section class="features">
        <figure>
            <img src="images/laptop.jpg" alt="apparaat onderhoud">
            <figcaption>Apparaat onderhoud</figcaption>
        </figure>
        <figure>
            <img src="images/cable.jpg" alt="LAN kabels op maat">
            <figcaption>LAN kabels op maat</figcaption>
        </figure>
        <figure>
            <img src="images/techsupport.jpg" alt="technische hulp">
            <figcaption>technische hulp</figcaption>
        </figure>
    </section>
    
    <footer>
        © 2021 by Willems-IT
    </footer>
    
</body>

</html>

<a>Alles werkt naar behoren</a>

<a href="logout.php">Uitloggen</a>

<!--Werkt alleen wanneer je bent ingelogd-->
<a href="auth/reset-password.php">Wachtwoord Resseten</a>