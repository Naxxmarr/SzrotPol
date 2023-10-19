<?php
    session_start();
    include("connect2.php");

  $sql = "DELETE FROM `towary` WHERE `kod_produktu`='" . $_GET["kod_produktu"] . "'";
if (mysqli_query($con, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($con);
}
mysqli_close($con);
echo "<script>window.location = 'usunp.php'</script>";
?>
