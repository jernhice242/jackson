<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $adresse = $_POST['adresse'];
    $date = $_POST['date'];
    $details = $_POST['details'];
    
    // Email de l'entreprise de livraison
    $to = 'jacksonbouka9@gmail.com';  // Remplacez par l'adresse email de votre entreprise
    
    // Sujet de l'email
    $subject = 'Nouvelle réservation de livraison';
    
    // Contenu de l'email
    $message = "
    Nom: $nom\n
    Email: $email\n
    Téléphone: $telephone\n
    Adresse de livraison:\n $adresse\n
    Date souhaitée: $date\n
    Détails supplémentaires:\n $details\n
    ";
    
    // En-têtes de l'email
    $headers = "From: $email\r\nReply-To: $email";
    
    // Envoi de l'email
    if (mail($to, $subject, $message, $headers)) {
        echo '<script>alert("Votre réservation a été envoyée avec succès. Nous vous contacterons bientôt.");</script>';
    } else {
        echo '<script>alert("Erreur lors de l\'envoi de la réservation. Veuillez réessayer plus tard.");</script>';
    }
}
?>



