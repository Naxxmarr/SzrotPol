<?php

if (isset($_POST['submit'])) {
    if (isset($_POST['nazwa']) && isset($_POST['cena']) && isset($_POST['ilosc_sztuk']) 
    && isset($_POST['kod_produktu']))  {


        $nazwa = $_POST['nazwa'];
        $cena = $_POST['cena'];
        $ilosc_sztuk = $_POST['ilosc_sztuk'];
        $kod_produktu = $_POST['kod_produktu'];

        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "hurtownia_czesci";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }

        else {
            $Select = "SELECT kod_produktu FROM towary WHERE kod_produktu = ? LIMIT 1";
            $Insert = "INSERT INTO towary(nazwa, cena, ilosc_sztuk, kod_produktu ) values(?, ?, ?, ?)";
            $stmt = $conn->prepare($Select);
            $stmt->bind_param("i", $kod_produktu);
            $stmt->execute();
            $stmt->bind_result($resultkodd);
            $stmt->store_result();
            $stmt->fetch();
            $rnum = $stmt->num_rows;

            if ($rnum == 0) {
                $stmt->close();
                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("siii",$nazwa, $cena, $ilosc_sztuk, $kod_produktu);
                if ($stmt->execute()) {
                    header('Location: dodajp.php');
                    echo "Dodano nowy produkt";
                }
                else {
                    echo $stmt->error;
                }
            }
            else {
                echo "Kod produktu jest uzywany";
                header('Location: dodajp.php');
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