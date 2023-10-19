<?php

	session_start();
	
	if ((!isset($_POST['login'])) || (!isset($_POST['haslo'])))
	{
		header('Location: login.php');
		exit();
	}

	require_once "connect.php";

	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
	
	if ($polaczenie->connect_errno!=0)
	{
		echo "Error: ".$polaczenie->connect_errno;
	}
	else
	{
		$login = $_POST['login'];
		$haslo = $_POST['haslo'];

		$login = htmlentities($login, ENT_QUOTES, "UTF-8");
		$haslo = htmlentities($haslo, ENT_QUOTES, "UTF-8");

		$sql= "SELECT * FROM pracownik WHERE loginn='$login' AND haslo='$haslo'";
		$sql2= "SELECT * FROM klient WHERE loginn='$login' AND haslo='$haslo'";

		if ($rezultat = @$polaczenie->query($sql))
		{

			$ilu_userow = $rezultat->num_rows;
			if($ilu_userow>0)
			{
				$_SESSION['zalogowany'] = true;
				
				$wiersz = $rezultat->fetch_assoc();
				$_SESSION['id_pracownik'] = $wiersz['id_pracownik'];
				$_SESSION['imie'] = $wiersz['imie'];
				$_SESSION['nazwisko'] = $wiersz['nazwisko'];
				$_SESSION['loginn'] = $wiersz['loginn'];

				
				unset($_SESSION['blad']);
				$rezultat->free_result();
				header('Location: pozalogowaniu.php');
				
			} else {
				
				$_SESSION['blad'] = '<span style="color:red">Nieprawidłowy login lub hasło!</span>';
				header('Location: login.php');
				
			}
			
		}

		if ($rezultat = @$polaczenie->query($sql2))
		{

			$ilu_userow = $rezultat->num_rows;
			if($ilu_userow>0)
			{
				$_SESSION['zalogowanyklient'] = true;
				
				$wiersz = $rezultat->fetch_assoc();
				$_SESSION['id_klient'] = $wiersz['id_klient'];
				$_SESSION['imie'] = $wiersz['imie'];
				$_SESSION['nazwisko'] = $wiersz['nazwisko'];
				$_SESSION['loginn'] = $wiersz['loginn'];

				
				unset($_SESSION['blad']);
				$rezultat->free_result();
				header('Location: klient.php');
				
			} else {
				
				$_SESSION['blad'] = '<span style="color:red">Nieprawidłowy login lub hasło!</span>';
				header('Location: login.php');
				
			}
			
		}
		
		$polaczenie->close();
	}
	
?>