<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$odkogo = "janiu25@gmail.com";
$dokogo = "rafal.jankowski.93@gmail.com";

$tytul = "Formularz kontaktowy z codeliver.pl";

$wiadomosc = "";
$wiadomosc .= "Imie i nazwisko: " . $name . "\n";
$wiadomosc .= "Email: " . $email . "\n";
$wiadomosc .= "Wiadomoœæ: " . $message . "\n";

$sukces = mail($dokogo, $tytul, $wiadomosc, "Od: <$odkogo>");

if ($sukces){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=potwierdzenie.php\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.html\">";
}
?>