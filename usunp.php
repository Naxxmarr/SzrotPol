<?php
    session_start();
    include("connect2.php");

	$result = mysqli_query($con,"SELECT * FROM `towary`");
	
	

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
        <p style="color:red;"><?php echo $_SESSION['msg1'];?><?php echo $_SESSION['msg1']="";?></p>
            <form action="usunproces.php" name="chngpwd" method="post" >

            <h1>Usuń Produkt</h1>

        <table border="1" frame="void">
	<tr>
	<td>Towary Id</td>
	<td>Nazwa</td>
	<td>Cena</td>
	<td>Ilość sztuk</td>
	<td>Kod produktu</td>
	<td>Działanie</td>
	</tr>
	<?php
	$i=0;
	while($row = mysqli_fetch_array($result)) {
	?>
	<tr class="<?php if(isset($classname)) echo $classname;?>">
	<td><?php echo $row["id_towary"]; ?></td>
	<td><?php echo $row["nazwa"]; ?></td>
	<td><?php echo $row["cena"]; ?></td>
	<td><?php echo $row["ilosc_sztuk"]; ?></td>
	<td><?php echo $row["kod_produktu"]; ?></td>
	<td><a href="usunproces.php?kod_produktu=<?php echo $row["kod_produktu"]; ?>">Usuń</a></td>
	</tr>
	<?php
	$i++;
	}
	?>
		</table>


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