<?php
$nome_mittente= "Thrillernord";
$mail_mittente= "thrillernord@gmail.com";
$mail_destinatario= "al-fede@hotmail.it";

//oggetto della mail

$mail_oggetto="richiesta di collaborazione";
$mail_corpo="l'utente " .  $_POST['nome'] . " " . $_POST['cognome'] . " nato/a a " . $_POST['citta'] . " desidera collaborare";

//definisco gli headers della mail

$mail_headers = "From: " .  $nome_mittente . " <" .  $mail_mittente . ">\r\n";
$mail_headers .= "Reply-To: " .  $mail_mittente . "\r\n";
$mail_headers .= "X-Mailer: PHP/" . phpversion();


if (mail($mail_destinatario, $mail_oggetto, $mail_corpo, $mail_headers))
  echo "Messaggio inviato con successo a " . $mail_destinatario;
else
  echo "Errore. Nessun messaggio inviato.";

?>



