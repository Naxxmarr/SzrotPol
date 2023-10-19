<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/main.css">
    <title>SzrotPol - Stwórz Konto</title>
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
        <form action="r1.php" method="post">
            <h1>Rejestracja nowego konta</h1>

            <div class="login-form">
                <img src="images/user.png" alt="nazwa użytkownika">
                <input type="text" placeholder="Nazwa Użytkownika" name="nazwa" value="">
            </div>

            <div class="login-form">
                <img src="images/password.png" alt="Hasło">
                <input type="password" placeholder="Hasło" name="haslo" value="">
            </div>

           <!-- <div class="login-form">
                <img src="images/password.png" alt="Powtórz Hasło">
                <input type="password" placeholder="Powtórz hasło" name="haslo2" value="">
            </div>
            -->
            <div class="login-form">
                <img src="images/user.png" alt="imie">
                <input type="text" placeholder="Imie" name="imie" value="">
            </div>

            <div class="login-form">
                <img src="images/user.png" alt="nazwisko">
                <input type="text" placeholder="Nazwisko" name="nazwisko" value="">
            </div>

            <div class="login-form">
                <img src="images/email.png" alt="adres email">
                <input type="email" placeholder="e-mail" name="mail" value="">
            </div>

            <div class="login-form">
                <img src="images/dom.png" alt="adres">
                <input type="text" placeholder="miejsce zamieszkania" name="miejscowosc" value="">
            </div>

            <div class="login-form">
                <img src="images/dom.png" alt="adres">
                <input type="text" placeholder="ulica" name="ulica" value="">
            </div>

            <div class="login-form">
                <img src="images/dom.png" alt="adres">
                <input type="text" placeholder="nr domu" name="nrdomu" value="">
            </div>

            <div class="login-form">
                <img src="images/dom.png" alt="adres">
                <input type="text" placeholder="kod pocztowy" name="kodpocztowy" value="">
            </div>

            <div class="login-form">
                <img src="images/telefon.jpg" alt="numer telefonu">
                <input type="text" placeholder="numer telefonu" name="nrtele" value="">
            </div>
            
             
            <input class="check-box" type="checkbox" name="" id="regulamin-checkbox">
            <label class="regulamin-label" for="regulamin-checkbox">Potwierdzam, że podane wyżej dane są prawdziwe oraz akceptuje regulamin serwisu.</label>
                
            <input type="submit" name="submit" value="Utwórz nowe konto">
            </form>
            <h3 class="druciarz" >asd</h3>

        </div>
    </section>

    

</body>
</html>