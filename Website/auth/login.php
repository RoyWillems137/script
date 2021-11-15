<!-- <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="../assets/css/styles.css">
    
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <title>Responsive Login Form Sign In Sign Up</title>
    </head>
    <body>
        <div class="login">
            <div class="login__content">
                <div class="login__img">
                    <img src="../assets/img/Mobile login-amico.svg" alt="">
                </div>

                <div class="login__forms">
                    <form action="../include/login.php" class="login__registre" id="loginform" method="POST">
                        <h1 class="login__title">Sign In</h1>
    
                        <div class="login__box">
                            <i class='bx bx-user login__icon'></i>
                            <input type="text" placeholder="Username" name="username" class="login__input">
                        </div>
    
                        <div class="login__box">
                            <i class='bx bx-lock-alt login__icon'></i>
                            <input type="password" placeholder="Password" name="password" class="login__input">
                        </div>

                        <a onclick="myFunction()" class="login__button">Sign In</a> 

                        <div>
                            <span class="login__account">Don't have an Account ?</span>
                            <a href="register.php" class="login__signin" id="sign-up">Sign Up</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="../assets/js/main.js"></script>

        <script>
            function myFunction() {
                document.getElementById("loginform").submit();
            }
        </script>
    </body>
</html> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Login | Willems-IT</title>
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

    <a class="webmail" href="https://webmail.strato.com/appsuite/ui" target="_blank">Webmail Login</a>

    <form action="../include/login.php" method="post">
            <div class="login-name"><h1>Login</h1></div>
        <div class="container">
          <label for="uname">Gebruikersnaam:</label>
          <input type="text" name="username" required>

      
          <label for="psw">Wachtwoord:</label>
          <input type="password" name="password" required>

      
          <input type="submit" value="Login">

          <br>
     
          <input class="checkboxText" id="checkbox1" type="checkbox" checked="checked" name="remember" />
          <label for="checkbox1" class="checkboxText">Remember me</label>
          
          <span class="psw">New? <a href="register.php">Create Account</a></span>
        </div>
    </form>
    <footer>
        © 2021 by Willems-IT
    </footer>
    
</body>
<style>
    .webmail {
        float: right;
        padding-right: 10px;
        padding-bottom: 100px;
        color: #828282;
        font-family: 'Poppins', sans-serif;
        text-decoration: none;
    }

    body {
        font-family: Arial, Helvetica, sans-serif;}


    
    .login-name {
        text-align: center;
    }

    /* Set a style for all buttons */
    button {
        background-color: #545557;
        padding: 15px 200px;
        color: white;
        font-size: 18px;
        border-bottom: none;
        margin-top: 30px;
        cursor: pointer;
        transition: all .3s ease;
    }

    /* Add a hover effect for buttons */
    button:hover {
        color: #fff;
    }

    /* Add padding to containers */
    .container {
        max-width: 1320px;
        margin: 0 auto;
        padding: 10%;
    }

    /* The "Forgot password" text */
    span.psw {
    float: right;
    padding-top: 16px;
    margin-top: -1.2em;
        line-height: 1.4em;
    }

    /* Change styles for span button on extra small screens */
    @media screen and (max-width: 300px) {
        span.psw {
            display: block;
            float: none;
        }
    }
    
    LABEL.checkboxText {
        margin-left: 1em;
        display: block;
        position: relative;
        margin-top: -1.2em;
        line-height: 1.4em;
    }
</style>

</html>