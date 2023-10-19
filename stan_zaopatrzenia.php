
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

    <?php
        $con=mysqli_connect("localhost","root","","hurtownia_czesci");
        // Check connection
        if (mysqli_connect_errno())
        {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

        $result = mysqli_query($con,"SELECT * FROM towary");

        echo "
        <center>
        <h1> Obecny Stan Zaopatrzenia </h1>
        <table border='1'>
        <tr>
        <th>ID Produktu</th>
        <th>Nazwa Produktu</th>
        <th>Cena za sztukę</th>
        <th>Ilosc sztuk</th>
        <th>Kod_produktu</th>
        <th>Poniżej minimalnego stanu?</th>
        </tr></center>";

        while($row = mysqli_fetch_array($result))
        {
        echo "<tr>";
        echo "<td>" . $row['id_towary'] . "</td>";
        echo "<td>" . $row['nazwa'] . "</td>";
        echo "<td>" . $row['cena'] . "zł</td>";
        echo "<td>" . $row['ilosc_sztuk'] . "</td>";
        echo "<td>" . $row['kod_produktu'] . "</td>";
        if ($row['ilosc_sztuk']>100) echo "<td> Nie </td>";
        if ($row['ilosc_sztuk']<=100) echo "<td> Tak </td>";
        echo "</tr>";
        }
        echo "</table>";

        mysqli_close($con);
    ?>

</body>
</html>