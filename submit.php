<?php
$to = "yeouehieboniface@gmail.com";

$nom = $_POST['nom'] ?? '';
$prenom = $_POST['prenom'] ?? '';
$date_naissance = $_POST['date_naissance'] ?? '';
$telephone = $_POST['telephone'] ?? '';
$email = $_POST['email'] ?? '';
$classe = $_POST['classe'] ?? '';
$domaine = $_POST['domaine'] ?? '';
$session = $_POST['session'] ?? '';
$message = $_POST['message'] ?? '';

$subject = "Nouvelle demande d'inscription - $prenom $nom";

$body = "Bonjour,\n\n";
$body .= "Nouvelle demande d'inscription :\n\n";
$body .= "Nom : $nom\n";
$body .= "Prénom : $prenom\n";
$body .= "Date de naissance : $date_naissance\n";
$body .= "Téléphone : $telephone\n";
$body .= "Email (parent/tuteur) : $email\n";
$body .= "Classe souhaitée : $classe\n";
$body .= "Option / Domaine : $domaine\n";
$body .= "Session : $session\n";
$body .= "Message : $message\n\n";
$body .= "Cordialement.\n";

$headers = "From: no-reply@college-jbs2plus.local\r\n";
$headers .= "Reply-To: $email\r\n";

mail($to, $subject, $body, $headers);

header("Location: admissions.html?ok=1");
exit;
?>
