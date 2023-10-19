<?php
    session_start();
    include("connect2.php");

  
    
    if(isset($_POST['submit'])){
        $oldpwd=$_POST['sh'];
        $newpwd=$_POST['nh'];
        $conpwd=$_POST['pnh'];
        $profile=$_SESSION['loginn'];
        $query=mysqli_query($con,"SELECT haslo FROM pracownik WHERE loginn='$profile'");
        $num=mysqli_fetch_array($query);
        if($num>0)
        {
         $con=mysqli_query($con,"UPDATE pracownik SET haslo='$newpwd' where loginn='$profile'");
         $_SESSION['msg1']="Password Changed Successfully !!";
        }
        else
        {
        $_SESSION['msg1']="Old Password not match !!";
        }

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

    <section class="login-hero">
        <div class="login-sect">
            <form action="zmianah.php" name="chngpwd" method="post" >

            <h1>Zmień haslo</h1>

            <div class="login-form">
                <img src="images/password.png" alt="nowe_haslo">
                <input class="input-box" type="text" placeholder="Podaj stare haslo" name="sh" value="">
            </div>

            <div class="login-form">
                <img src="images/password.png" alt="stare_haslo">
                <input class="input-box" type="password" placeholder="Podaj nowe haslo" name="nh" value="">
            </div>

            <div class="login-form">
                <img src="images/password.png" alt="stare_haslo_powtorz">
                <input class="input-box" type="password" placeholder="Powtórz nowe haslo" name="pnh" value="">
            </div>

            <input type="submit" name="submit" value="Zmień haslo">


            </form>

        </div>
    </section>

</body>
</html>