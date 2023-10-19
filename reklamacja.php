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
            <form action="#"  method="post" >

            <h1>Złóż reklamacje</h1>

            <div class="login-form">
                <img src="images/password.png" alt="Nazwa produktu">
                <input class="input-box" type="text" placeholder="Nazwa produktu" name="nazprod" value="">
            </div>

            <div class="login-form">
                <img src="images/password.png" alt="kod_produktu">
                <input class="input-box" type="text" placeholder="Kod produktu" name="kodprod" value="">
            </div>

            <div class="login-form">
                <img src="images/password.png" alt="Podaj date zakupu">
                <input class="input-box" type="date" placeholder="Podaj date zakupu" name="data_zakupu" value="">
            </div>

            <div class="login-form">
                <img src="images/password.png" alt="Dodaj załącznik">
                <input class="input-box" type="file" placeholder="Dodaj załącznik" name="dodaj_zalacznik" value="">
            </div>



            <div class="login-form">
                <img src="images/password.png" alt="opis">
                <label for="opis_reklamacja">Opis:</label>
                <textarea name="opis_reklamacja" id="opis_reklamacja" cols="60" rows="20" placeholder="Dodaj informacje na temat uszkodzonego produktu"></textarea>
            </div>

            <input type="submit" name="submit" value="Złóż">


            </form>

        </div>
    </section>

</body>
</html>