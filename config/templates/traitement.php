<?php 

session_start();
require_once '../config/bdd.php';


<?php if (
isset($_POST['nom'])) echo $firstName ($_POST['nom']);
?>

<?php if
 (isset($_POST['prenom'])) echo $lasteName ($_POST['prenom']);
 ?>

 <?php 
 if 
(isset($_POST['email'])) echo $email ($_POST['email']);
?>

<?php
 if (isset($_POST['telephone'])) echo $telephone ($_POST['telephone']);
?>

<?php 
if (isset($_POST[
'commentaire'])) echo $commentaire ($_POST['commentaire']);
?>

<?php
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "votre@email";
    $email_subject = "Le sujet de votre email";
 
    function died($error) {
        // your error code can go here
        echo 
"Nous sommes désolés, mais des erreurs ont été détectées dans le" .
" formulaire que vous avez envoyé. ";
        echo "Ces erreurs apparaissent ci-dessous.<br /><br />";
        echo $error."<br /><br />";
        echo "Merci de corriger ces erreurs.<br /><br />";
        die();
    }
 
 
   
     if(!isset($_POST['nom']) ||
        !isset($_POST['prenom']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telephone']) ||
        !isset($_POST['commentaire'])) {
        died(
'Nous sommes désolés, mais le formulaire que vous avez soumis semble poser' .
' problème.');
    }
 
    
    $nom = $_POST['nom']; 
    $prenom = $_POST['prenom']; 
    $email = $_POST['email']; 
    $telephone = $_POST['telephone']; 
    $commentaire = $_POST['commentaire']; 
 
    $error_message = "merci de verifier ";
    $validation = true;
    
 
    if(!preg_match($email_exp,$email)) {
      $error_message .= 'L\'adresse e-mail que vous avez entrée ne semble pas être valide.<br />';
    }
   
         
    if(!preg_match($string_exp,$nom)) {
      $error_message .= 'Le nom que vous avez entré ne semble pas être valide.<br />';
    }
   
    if(!preg_match($string_exp,$prenom)) {
      $error_message .= 'Le prénom que vous avez entré ne semble pas être valide.<br />';
    }
   
    if(strlen($commentaire) < 2) {
      $error_message .= 'Le commentaire que vous avez entré ne semble pas être valide.<br />';
    }
   
    if(strlen($error_message) > 0) {
      died($error_message);
    }
 
    $email_message = "Détail.\n\n";
    $email_message .= "Nom: ".$nom."\n";
    $email_message .= "Prenom: ".$prenom."\n";
    $email_message .= "Email: ".$email."\n";
    $email_message .= "Telephone: ".$telephone."\n";
    $email_message .= "Commentaire: ".$commentaire."\n";
 



    $headers = 'From: '.$email."\r\n".
    'Reply-To: '.$email."\r\n" .
    'X-Mailer: PHP/' . phpversion();
    mail($email_to, $email_subject, $email_message, $headers);
    
    ?>
     
    
    
    




