<?php

$con=mysqli_connect("localhost","root","","hurtownia_czesci");
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
        <th>Cena za sztuke</th>
        <th>Ilosc sztuk</th>
        <th>Kod_produktu</th>
        <th>Ponizej minimalnego stanu?</th>
        </tr></center>";

        while($row = mysqli_fetch_array($result))
        {
        echo "<tr>";
        echo "<td>" . $row['id_towary'] . "</td>";
        echo "<td>" . $row['nazwa'] . "</td>";
        echo "<td>" . $row['cena'] . "zl</td>";
        echo "<td>" . $row['ilosc_sztuk'] . "</td>";
        echo "<td>" . $row['kod_produktu'] . "</td>";
        if ($row['ilosc_sztuk']>100) echo "<td> Nie </td>";
        if ($row['ilosc_sztuk']<=100) echo "<td> Tak </td>";
        echo "</tr>";
        }
        echo "</table>";

        $products = array();
            if (mysqli_num_rows($result) > 0) 
            {
                while ($row = mysqli_fetch_assoc($result)) 
                {
                    $products[] = $row;
                }
            }   

        mysqli_close($con);    

        $utfEncodedArray = array_map("utf8_encode", $products );

header('Content-Type: text/html; charset=utf-8');
header('Content-Disposition: attachment; filename=Braki_Zaopatrzenia.doc');
$output = fopen('php://output', 'w');

if (count($utfEncodedArray) > 0) {
    foreach ($utfEncodedArray as $row) {
        fputcsv($output, $row);
    }
}

?>