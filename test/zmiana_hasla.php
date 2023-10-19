<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['opwd']) && isset($_POST['npwd']) && isset($_POST['cpwd']))  {

        $oldpass = md5($_POST['opwd']);
        $newpassword = md5($_POST['npwd']);
        $repeatpassword = md5($_POST['cpwd']);

        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "hurtownia_czesci";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        

?>