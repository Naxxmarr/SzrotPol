<?php

	session_start();
	
	if (!isset($_SESSION['zalogowanyklient']))
	{
		header('Location: login.php');
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
    <title>SzrotPol - Oferta</title>
</head>
<body>
    <div class="navbar">
        <div class="container">
            <img class="logo"  src="images/logo.jpg" alt="Logo SzrotPol">

            <ul class="primary-nav">
                <li > <a class="sg" href="index.php"><span class="kek">Home</span> </a> </li>
                <li> <a class="sg" href="offers.php"><span class="kek">Oferta</span></a> </li>
                <li> <a class="sg" href="login.php"><span class="kek">Zaloguj</span></a> </li>
                <li> <a class="sg" href="#contact"><span class="kek">Kontakt</span></a> </li>
            </ul>
        </div>
    </div>

    <section class="offers-hero">
        <div class="offers-sect">
            <h1>
                <p>Witaj kliencie !</p>
                <?php
                    echo "<p>Zalogowany: ".$_SESSION['imie']." ".$_SESSION['nazwisko'].'! <br> [ <a href="logout.php">Wyloguj się!</a> ]</p>';

                ?>
            </h1>
        </div>

    </section>

    <section class="user-panel">
        <h1>Panel użytkownika</h1>
            <ul class="user-panel-menu">
                <li><a class="sg" href=zmianaklient.php><span class="button" onclick="OpenForm(2)" >Zmień hasło</a></span>
                    <div id="form2" class="form-content">
                        <div class="login-form">  
                        </div>
                    </div>
                </li>

                <li><a class="sg" href=reklamacja.php><span class="button" onclick="OpenForm(2)" >Złóż reklamacje</a></span>
                    <div id="form4" class="form-content">
                        <div class="login-form">  
                        </div>

                    </div>
                </li>
				
            </ul>
    </section>

    

    <script src="scripts/open_form_on_button_click.js"></script>

    <script src="scripts/dropdown.js"></script>



</body>
</html>