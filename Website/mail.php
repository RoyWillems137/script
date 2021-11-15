<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mailheader = "From:".$name."<".$email.">\r\n";

$recipient = "contact@willems-it.eu";

mail($recipient, $subject, $message, $mailheader) or die("Error!");

echo'<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Contact | Willems-IT</title>
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
            </ul>
        </nav>
    </header>
    <div class="container">
    <h1>Uw bericht is verzonden. U krijgt zo snel mogelijk reactie.</h1>
      <p class="back">Go back to the <a href="index.html"><i>Homepagina</i></a></p>
    </div>

    <footer>
        © 2021 by Willems-IT
    </footer>
    
</body>

</html>';


?>