<?php

if (isset($_POST['submit'])) {
    if (isset($_POST['nazwa']) && isset($_POST['haslo']) && isset($_POST['imie']) 
    && isset($_POST['nazwisko']) && isset($_POST['mail']) 
    && isset($_POST['miejscowosc']) && isset($_POST['ulica'])
    && isset($_POST['nrdomu']) && isset($_POST['kodpocztowy'])
    && isset($_POST['nrtele']))  {


        $nazwa = $_POST['nazwa'];
        $haslo = $_POST['haslo'];
        //$haslo2 = $_POST['haslo2'];
        $imie = $_POST['imie'];
        $nazwisko = $_POST['nazwisko'];
        $mail = $_POST['mail'];
        $miejscowosc = $_POST['miejscowosc'];
        $ulica = $_POST['ulica'];
        $nrdomu = $_POST['nrdomu'];
        $kodpocztowy = $_POST['kodpocztowy'];
        $nrtele = $_POST['nrtele'];

        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "hurtownia_czesci";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            $Select = "SELECT email FROM pracownik WHERE email = ? LIMIT 1";
            $Insert = "INSERT INTO pracownik(loginn, haslo, imie, nazwisko, nr_telefonu, email, miejscowosc, ulica, nr_domu, kod_pocztowy) values(?, ?, ?, ?, ?, ?, ?, ?, ?,?)";

            $stmt = $conn->prepare($Select);
            $stmt->bind_param("s", $mail);
            $stmt->execute();
            $stmt->bind_result($resultEmail);
            $stmt->store_result();
            $stmt->fetch();
            $rnum = $stmt->num_rows;

            if ($rnum == 0) {
                $stmt->close();
                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("ssssisssis",$nazwa, $haslo, $imie, $nazwisko, $nrtele, $mail, $miejscowosc, $ulica, $nrdomu, $kodpocztowy);
                if ($stmt->execute()) {
                    header('Location: login.php');
                    echo "Dodano nowego użytkownika";
                }
                else {
                    echo $stmt->error;
                }
            }
            else {
                echo "Adres email jest używany";
                header('Location: register.php');
            }
            $stmt->close();
            $conn->close();
        }
    }
    else {
        echo "Wypełnij wszystkie pola";
        die();
    }
}
else {
    echo "Submit button nie dziala";
}

?>