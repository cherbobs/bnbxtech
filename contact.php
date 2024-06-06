<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="globals.css" />
        <link rel="stylesheet" href="styleguide.css" />
        <link rel="stylesheet" href="contact.css" />
        <link rel="stylesheet" href="footer.css" />
        <link rel="stylesheet" href="header.css" />

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>
    <body>
        <div class="page">
            <header class="header">
                <div class="left-part">
                    <a class="burger-logo" href="index.html">
                        <img class="logo-bnb" src="img/bnb-logo.svg" />
                    </a>
                    <div class="menu-items">
                        <div class="div-wrapper"><a href="index.html" class="text-wrapper">Accueil</a></div>
                        <div class="div-wrapper"><a href="index.html#nos-services-target" class="text-wrapper">Nos services</a></div>
                        <div class="div-wrapper"><a href="index.html#nos-realisations-target" class="text-wrapper">Nos réalisations</a></div>
                    </div>
                </div>
                <div class="right-part">
                    <div class="nous-contacter"><a href="contact.php" class="div-contacter">Contactez-nous</a></div>
                </div>
            </header>
            <div class="frame"> 
                <div class="frame-wrapper">
                    <div class="div">
                        <div class="div-2">
                            <p class="vous-avez-un-projet">
                                <span class="text-wrapper">Vous avez un </span>
                                <span class="span">projet</span>
                                <span class="text-wrapper"> ? </span>
                            </p>
                            <p class="p">Résumez-le en quelques lignes, nous vous répondrons rapidement.</p>
                        </div>
                        <div class="div-3">
                            <div class="div-4">
                                <img class="img" src="img/phone.svg" />
                                <p class="text-wrapper-2"><a href="tel:+33130054000">+33 1 30 05 40 00</a></p>
                            </div>
                            <div class="div-4">
                                <img class="img" src="img/envelope-simple.svg" />
                                <div class="text-wrapper-2"><a href="mailto:contact@bnbxtech.com">contact@bnbxtech.com</a></div>
                            </div>
                            <div class="div-4">
                                <img class="img" src="img/map-pin.svg" />
                                <p class="text-wrapper-3"><a href="https://www.google.com/maps?q=54+rue+Panicale,+78320,+LA+VERRIERE,+FRANCE" target="_blank">54 rue Panicale, 78 320, LA VERRIERE, FRANCE</a></p>
                            </div>
                            <div class="div-4">
                                <img class="img" src="img/tram.svg" />
                                <div class="div-5">
                                    <img class="paris-transit-icons" src="img/paris-transit-icons-train-u-1.png" />
                                    <img class="paris-transit-icons-2" src="img/paris-transit-icons-train-n-1.png" />
                                </div>
                            </div>
                        </div>         
                    </div>
                </div>
                    <form class="formulaire" name="contact_form" method="post" action="">
                    <div class="div-6">
                            <div class="text-wrapper-4">Expliquez-nous</div>
                            <input class="formu" type="text" name="prenom" maxlength="50" size="30" placeholder="Prénom" value="<?php if (isset($_POST['prenom'])) echo htmlspecialchars($_POST['prenom']);?>">
                            <input class="formu" type="text" name="nom" maxlength="50" size="30" placeholder="Nom" value="<?php if (isset($_POST['nom'])) echo htmlspecialchars($_POST['nom']);?>">
                            <input class="formu" type="text" name="nom_entreprise" maxlength="50" size="30" placeholder="Nom de l'entreprise" value="<?php if (isset($_POST['nom_entreprise'])) echo htmlspecialchars($_POST['nom_entreprise']);?>">
                            <input class="formu" type="mail" name="email" maxlength="80" size="30" placeholder="Adresse mail" value="<?php if (isset($_POST['email'])) echo htmlspecialchars($_POST['email']);?>">
                            <textarea  class="pr-nom-wrapper" name="commentaire" cols="28" rows="10" placeholder="Expliquez votre projet en quelques lignes"><?php if (isset($_POST['commentaire'])) echo htmlspecialchars($_POST['commentaire']);?></textarea>
                    </div>
                    <input class="nous-contacter" type="submit" value="Nous contacter">
                </form>    
            </div>

            <section class="footer">
                    <div class="bloc-footer">
                        <div class="primary-footer">
                            <div class="rectangle"></div>
                            <div class="div">
                                <img class="logo" src="img/logo-bnbxtech-blanc.svg" />
                                <div class="information">
                                    <div class="frame1">
                                        <div class="frame-2">
                                            <div class="office-address">
                                                <img class="img" src="img/MapPin.svg" />
                                                <p class="ABC-company"><a href="https://www.google.com/maps?q=54+rue+Panicale,+78320,+LA+VERRIERE,+FRANCE" target="_blank">54 rue Panicale, 78 320, LA VERRIERE, FRANCE</a></p>
                                            </div>
                                            <div class="frame-3">
                                                <div class="div-2">
                                                    <img class="img" src="img/Phone.svg" />
                                                    <p class="element"><a href="tel:+33130054000">+33 1 30 05 40 00</a></p>
                                                </div>
                                                <div class="div-2">
                                                    <img class="img" src="img/EnvelopeSimple.svg" />
                                                    <div class="element"><a href="mailto:contact@bnbxtech.com">contact@bnbxtech.com</a></div>
                                                </div>
                                            </div>
                                            <img class="img" src="img/LinkedinLogo.svg" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="secondary-footer-wrapper">
                            <div class="secondary-footer">
                                <div class="rectangle-2"></div>
                                <div class="secondary-footer-2">
                                    <div class="frame-4">
                                        <a href="index.html" class="liens">ACCUEIL</a>
                                        <a href="index.html#nos-services-target" class="liens">NOS SERVICES</a>
                                        <a href="index.html#nos-realisations-target" class="liens">NOS RÉALISATIONS</a>
                                        <a href="index.html#nos-actualites-target" class="liens">ACTUALITÉS</a>
                                        <a href="contact.php" class="liens">CONTACT</a>

                                    </div>
                                    <div class="secondary-footer-3">
                                        <div class="copyright-m"><a href="terms-conditions.html">Termes et conditions</a></div>
                                        <div class="copyright-m"><a href="cgv.html">Conditions générales de vente</a></div>
                                    </div>
                                    <p class="Copyright">Copyright © 2024 • BNB SAS</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
        </div>
    </body>
</html>





<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if (isset($_POST['email'])) {

    // Configuration de l'e-mail
    $email_to = "eva.cherbonnier@bnbxtech.com";
    $email_subject = "Contact BNB";

    function died($error) {
        $message = "<div class='message'> Nous sommes désolés, mais des erreurs ont été détectées dans le formulaire que vous avez envoyé.<br /><br />" . $error . "<br /><br />" . "Merci de corriger ces erreurs.<br /><br /></div>";
        echo $message;

        die();
    }

    // Validation des données attendues
    if (!isset($_POST['prenom']) ||
        !isset($_POST['nom']) ||
        !isset($_POST['nom_entreprise']) ||
        !isset($_POST['email']) ||
        !isset($_POST['commentaire'])) {
        died("<div class='message'>Nous sommes désolés, mais le formulaire que vous avez soumis semble poser problème.</div>");
    }

    $prenom = $_POST['prenom']; // required
    $nom = $_POST['nom']; // required
    $nom_entreprise = $_POST['nom_entreprise']; // required
    $email = $_POST['email']; // required
    $commentaire = $_POST['commentaire']; // required

    $error_message = "<div class='message'>";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

    if (!preg_match($email_exp, $email)) {
        $error_message .= 'L\'adresse e-mail que vous avez entrée ne semble pas être valide.<br />';
    }

    $string_exp = "/^[A-Za-z0-9 .'-]+$/";

    if (!preg_match($string_exp, $nom)) {
        $error_message .= 'Le nom que vous avez entré ne semble pas être valide.<br />';
    }

    if (!preg_match($string_exp, $prenom)) {
        $error_message .= 'Le prénom que vous avez entré ne semble pas être valide.<br />';
    }

    if (strlen($commentaire) < 2) {
        $error_message .= 'Le commentaire que vous avez entré ne semble pas être valide.<br />';
    }
    $error_message .= "</div>";
    if (strlen($error_message) > 0) {
        died($error_message);
    }

    $email_message = "Détail.\n\n";
    $email_message .= "Prenom: " . $prenom . "\n";
    $email_message .= "Nom: " . $nom . "\n";
    $email_message .= "Nom de l'entreprise: " . $nom_entreprise . "\n";
    $email_message .= "Email: " . $email . "\n";
    $email_message .= "Commentaire: " . $commentaire . "\n";

    // Utiliser PHPMailer pour envoyer l'e-mail
    $mail = new PHPMailer(true);

    try {
        // Configuration du serveur SMTP d'IONOS
        $mail->isSMTP();
        $mail->Host = 'smtp.ionos.fr'; // Utilisez l'adresse SMTP de votre fournisseur
        $mail->SMTPAuth = true;
        $mail->Username = 'eva.cherbonnier@bnbxtech.com'; // Remplacez par votre adresse e-mail IONOS
        $mail->Password = 'h8)f@2Pn7M'; // Remplacez par votre mot de passe IONOS
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Utilisez TLS
        $mail->Port = 587; // Le port TCP à utiliser pour la connexion

        // Destinataires
        $mail->setFrom('eva.cherbonnier@bnbxtech.com', 'BNBXTECH'); // Remplacez par votre adresse e-mail
        $mail->addAddress($email_to, 'BNBXTECH');

        // Contenu
        $mail->isHTML(true);
        $mail->Subject = $email_subject;
        $mail->Body = nl2br($email_message);
        $mail->AltBody = $email_message;

        $mail->send();
        echo "<div class='message'>Merci de nous avoir contacté. Nous vous contacterons très bientôt.</div>";
    } catch (Exception $e) {
        echo "<div class='message'>Le message n'a pas pu être envoyé. Erreur de mailer: {$mail->ErrorInfo}<div>";
    }
}
?>
