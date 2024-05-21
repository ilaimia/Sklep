<meta http-equiv='Refresh' content='3; url=http://localhost/zoologiczny/index.php' >

<?php
$login=$_POST['f_login'];
$haslo=md5($_POST['f_pass']);
session_start();

include 'dbconfig.php';
$baza = mysqli_connect($server,$user,$pass,$base) or ('cos nie tak z polaczenie z BD');

$zapytanie="SELECT * FROM `users` WHERE `login` LIKE '".$login."'";
$result = $baza->query($zapytanie) or die ('bledne zapytanie');

while($wiersz = $result->fetch_assoc())
{
if($wiersz['pass']==$haslo){
                            echo "Trwa logowanie do serwisu";
                            $_SESSION['user']=$wiersz['login'];
                            $_SESSION['pu']=$wiersz['pu'];
                            };

};

$baza->close();
?>

