

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

    <section class="login-hero">
        <div class="login-sect">
            <form action="dProdukt.php" method="post" >

            <h1>Dodaj Produkt</h1>

            <div class="login-form">
                <img src="images/plus.png" alt="nazwa">
                <input class="input-box" type="text" placeholder="Podaj nazwe produktu" name="nazwa" value="">
            </div>

            <div class="login-form">
                <img src="images/plus.png" alt="cena">
                <input class="input-box" type="number" placeholder="Podaj cene produktu" name="cena" value="">
            </div>

            <div class="login-form">
                <img src="images/plus.png" alt="ilosc">
                <input class="input-box" type="number" placeholder="Ilość Towaru" name="ilosc_sztuk" value="">
            </div>

            <div class="login-form">
                <img src="images/plus.png" alt="kod">
                <input class="input-box" type="number" placeholder="Kod produktu" name="kod_produktu" value="">
            </div>
			
			
            <input type="submit" name="submit" value="Dodaj produkt">
			</br>
			</br>
			<!--<input type="submit" name="submit" value="Wstecz" onClick="history.back();">
			-->
			<a href="zarzadzaniep.php"> Wstecz</a>
            </form>

        </div>
    </section>

</body>
</html>