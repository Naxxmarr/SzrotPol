
<?php

	session_start();
	
	if (!isset($_SESSION['zalogowany']))
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
                <li > <a class="sg" href="index.php">Home</a> </li>
                <li> <a class="sg" href="offers.php">Oferta</a> </li>
                <li> <a class="sg" href="login.php">Zaloguj</a> </li>
                <li> <a class="sg" href="index.php#contact">Kontakt</a> </li>
            </ul>
        </div>
    </div>

    <section class="offers-hero">
        <div class="offers-sect">
            <h1>
                <?php
                    echo "<p>Witaj ".$_SESSION['imie']." ".$_SESSION['nazwisko'].'! </br>[ <a href="logout.php">Wyloguj się!</a> ]</p>';

                ?>
            </h1>
        </div>

    </section>

    <section class="user-panel">
        <h1>Zarządzanie produktami: </h1>
            <ul class="user-panel-menu">
                <li><a class="sg" href=dodajp.php><span class="button" onclick="OpenForm(2)" >Dodaj Produkt</a></span>
                    <div id="form2" class="form-content">
                        <div class="login-form">  
                        </div>

                    </div>
                </li>
                
				<li><a class="sg" href=usunp.php><span class="button" onclick="OpenForm(2)" >Usuń Produkt</a></span>
                    <div id="form4" class="form-content">
                        <div class="login-form">  
                        </div>

                    </div>
                </li>
				<li><a class="sg" href=znajdzp.php><span class="button" onclick="OpenForm(2)" >Znajdź Produkt</a></span>
                    <div id="form4" class="form-content">
                        <div class="login-form">  
                        </div>

                    </div>
                </li>
				<!--<input type="submit" name="submit" value="Wstecz" onClick="history.back();">
			-->
			<a href="pozalogowaniu.php"> Wstecz</a>
            </ul>
        
    </section>

    <script src="scripts/open_form_on_button_click.js"></script>

</body>
</html>