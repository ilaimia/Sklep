<?php
$id=$_GET['id'];

    include 'dbconfig.php';
    $baza = mysqli_connect($server,$user,$pass,$base) or ('cos nie tak z polaczenie z BD');

    $zapytanie="DELETE FROM przysmaki WHERE `przysmaki`.`id` = ".$id;
    $result = $baza->query($zapytanie) or die ('bledne zapytanie');

$baza->close();

?>