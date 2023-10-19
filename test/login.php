<?php

	session_start();
	
	if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
	{
		header('Location: pozalogowaniu.php');
		exit();
	}

?>


<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="chrome">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/main.css">
    
    <title>SzrotPol - Logowanie</title>
</head>
<body>
    <div class="navbar">
        <div class="container">
            <img class="logo"  src="images/logo.jpg" alt="Logo SzrotPol">

            <ul class="primary-nav">
                <li > <a class="sg" href="index.php"><span class="kek">Home</span> </a> </li>
                <li> <a class="sg" href="offers.php"><span class="kek">Oferta</span></a> </li>
                <li> <a class="sg" href="login.php"><span class="kek">Zaloguj</span></a> </li>
                <li> <a class="sg" href="index.php#contact"><span class="kek">Kontakt</span></a> </li>
            </ul>
        </div>
    </div>

    <section class="login-hero">
        <div class="login-sect">
            <form action="l1.php" method="post">

            <h1>Zaloguj się</h1>

            <div class="login-form">
                <img src="images/user.png" alt="nazwa użytkownika">
                <input class="input-box" type="text" placeholder="Nazwa Użytkownika" name="login" value="">
            </div>

            <div class="login-form">
                <img src="images/password.png" alt="Hasło">
                <input class="input-box" type="password" placeholder="Hasło" name="haslo" value="">
            </div>

            <input type="submit" value="Zaloguj">

            <h2>Nie masz konta?</h2>
            <a class="register-link" href="register.php">Zarejestruj się!</a>

            </form>

        </div>
    </section>

</body>
</html>