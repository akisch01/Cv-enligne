<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $msg = htmlspecialchars($_POST['msg']);

    $phoneNumber = '+22899269715';  // Remplacez par votre numéro de téléphone WhatsApp
    $whatsappUrl = 'https://wa.me/' . $phoneNumber;

    // Créez le message à envoyer via WhatsApp
    $message = "Nom: $name\nEmail: $email\n\nMessage:\n$msg";

    // Encodez le message pour l'URL
    $encodedMessage = urlencode($message);

    // Redirigez l'utilisateur vers WhatsApp avec le message
    header("Location: $whatsappUrl?text=$encodedMessage");
    exit();
}
?>
