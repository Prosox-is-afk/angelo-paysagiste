<?php
// 1. CHARGEMENT DE PHPMAILER
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require_once '../config.php'; 

$message_sent = false;
$error_message = "";

// 2. TRAITEMENT DU FORMULAIRE
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // --- STRATÉGIE NINJA ANTI-SPAM ---
    if (!empty($_POST['website_check'])) {
        $message_sent = true; // On simule le succès pour le robot
    } else {
        // Nettoyage
        $nom = htmlspecialchars(trim($_POST['Nom']));
        $email_client = filter_var(trim($_POST['Email']), FILTER_SANITIZE_EMAIL);
        $message_client = htmlspecialchars(trim($_POST['Message']));

        // Validation PHP
        if (!filter_var($email_client, FILTER_VALIDATE_EMAIL)) {
            $error_message = "L'adresse email n'est pas valide.";
        } elseif (empty($nom) || empty($message_client)) {
            $error_message = "Merci de remplir tous les champs.";
        } else {
            
            $mail = new PHPMailer(true);

            try {
                // Config SMTP
                $mail->isSMTP();
                $mail->Host       = 'smtp.gmail.com';
                $mail->SMTPAuth   = true;
                // Utilisation des constantes définies dans config.php pour la sécurité
                $mail->Username   = defined('SMTP_EMAIL') ? SMTP_EMAIL : 'angelopaysagistepro@gmail.com'; 
                $mail->Password   = defined('SMTP_PASSWORD') ? SMTP_PASSWORD : 'TON_MOT_DE_PASSE_APP_ICI'; // Sécurité : utilise la constante
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port       = 587;

                // Destinataires
                $mail->setFrom(defined('SMTP_EMAIL') ? SMTP_EMAIL : 'angelopaysagistepro@gmail.com', 'Angelo Site Web');
                $mail->addAddress(defined('SMTP_EMAIL') ? SMTP_EMAIL : 'angelopaysagistepro@gmail.com');
                $mail->addReplyTo($email_client, $nom);

                // Contenu
                $mail->isHTML(false);
                $mail->Subject = 'Nouveau contact site web : ' . $nom;
                $mail->Body    = "Nom : $nom\nEmail : $email_client\n\nMessage :\n" . htmlspecialchars_decode($message_client);

                $mail->send();
                $message_sent = true;

            } catch (Exception $e) {
                // En prod, on cache l'erreur technique
                $error_message = "Une erreur technique est survenue. Merci de réessayer plus tard ou de nous contacter par téléphone.";
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <title>Contactez Angelo Paysagiste Marseille | Devis Jardin Gratuit</title>
    <meta name="description" content="Besoin d'un paysagiste à Marseille ? Contactez Angelo pour l'entretien de jardin, l'élagage ou la création d'espaces verts. Devis gratuit et réponse rapide au 06 25 15 06 85." />
    <meta name="robots" content="index, follow" />
    <link rel="canonical" href="<?php echo $root; ?>/contact" />
    
    <meta property="og:title" content="Contactez Angelo Paysagiste - Devis Gratuit Marseille" />
    <meta property="og:description" content="Entretien de jardin, élagage et création paysagère. Intervention rapide à Marseille et alentours." />
    <meta property="og:image" content="<?php echo $root; ?>/assets/img/hero-bg.webp" />
    <meta property="og:url" content="<?php echo $root; ?>/contact" />
    <meta property="og:type" content="website" />

    <link rel="icon" type="image/png" href="<?php echo $root; ?>/assets/logo/angelo-paysagiste-logo-rond.webp" />

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet" />
    <style>
        html, body { scrollbar-width: none; scroll-behavior: smooth; }
        html::-webkit-scrollbar, body::-webkit-scrollbar { display: none; }
        .antispam-field { display: none !important; } 
    </style>

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "LocalBusiness",
      "name": "Angelo Paysagiste",
      "image": "<?php echo $root; ?>/assets/logo/angelo-paysagiste-logo-sans-ecriture.webp",
      "telephone": "06 25 15 06 85",
      "email": "angelopaysagistepro@gmail.com",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "47 Avenue du Maréchal de Lattre de Tassigny",
        "addressLocality": "Marseille",
        "postalCode": "13009",
        "addressCountry": "FR"
      },
      "url": "<?php echo $root; ?>/contact",
      "openingHoursSpecification": {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": [
          "Monday",
          "Tuesday",
          "Wednesday",
          "Thursday",
          "Friday",
          "Saturday"
        ],
        "opens": "08:00",
        "closes": "19:00"
      }
    }
    </script>
</head>
<body class="bg-white text-gray-900 font-sans flex flex-col min-h-screen">
    
    <?php include '../includes/header.php'; ?>
    
    <main class="flex-grow flex items-center justify-center px-4 py-20 bg-gray-50">
        <div class="max-w-6xl w-full grid md:grid-cols-2 gap-12 bg-white p-8 md:p-12 rounded-2xl shadow-xl" data-aos="fade-up">
            
            <div class="flex flex-col justify-center space-y-8 border-r-0 md:border-r border-gray-100 pr-0 md:pr-8">
                <div>
                    <h1 class="text-3xl md:text-4xl font-extrabold text-[#005728] uppercase mb-4">
                        Discutons de votre projet
                    </h1>
                    <p class="text-gray-600 text-lg leading-relaxed">
                        Vous avez un projet d'aménagement ou besoin d'un entretien ponctuel ? 
                        Angelo Paysagiste intervient à <strong>Marseille (13009 et alentours)</strong>.
                    </p>
                </div>

                <div class="space-y-6">
                    <div class="flex items-start space-x-4">
                        <div class="bg-green-100 p-3 rounded-full text-[#4CAF50]">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-800 text-lg">Téléphone</h3>
                            <a href="tel:+33625150685" class="text-[#005728] text-lg font-semibold hover:underline">
                                06 25 15 06 85
                            </a>
                            <p class="text-sm text-gray-500">Du Lundi au Samedi, 8h - 19h</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="bg-green-100 p-3 rounded-full text-[#4CAF50]">
                             <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-800 text-lg">Email</h3>
                            <a href="mailto:angelopaysagistepro@gmail.com" class="text-gray-600 hover:text-[#4CAF50] transition">
                                angelopaysagistepro@gmail.com
                            </a>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="bg-green-100 p-3 rounded-full text-[#4CAF50]">
                             <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-800 text-lg">Adresse</h3>
                            <p class="text-gray-600">
                                47 Avenue du Maréchal de Lattre de Tassigny<br>
                                13009 Marseille
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Envoyer un message</h2>

                <?php if ($message_sent): ?>
                    <div id="msg-success" class="mb-6 p-4 rounded-md bg-green-100 text-green-700 border border-green-400 flex items-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        <span><strong>Succès !</strong> Votre message a bien été envoyé.</span>
                    </div>
                <?php endif; ?>

                <?php if (!empty($error_message)): ?>
                    <div id="msg-error" class="mb-6 p-4 rounded-md bg-red-100 text-red-700 border border-red-400">
                        <?php echo $error_message; ?>
                    </div>
                <?php endif; ?>

                <form action="" method="POST" class="space-y-5">
                    
                    <div class="antispam-field">
                        <input type="text" name="website_check" id="website_check" autocomplete="off">
                    </div>

                    <div>
                        <label for="name" class="block text-sm font-semibold text-gray-700 mb-1">Votre Nom</label>
                        <input type="text" id="name" name="Nom" required placeholder="Ex: Jean Dupont"
                            class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-[#4CAF50] focus:border-transparent outline-none transition" />
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-semibold text-gray-700 mb-1">Votre Email</label>
                        <input type="email" id="email" name="Email" required placeholder="jean@exemple.com"
                            class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-[#4CAF50] focus:border-transparent outline-none transition" />
                    </div>

                    <div>
                        <label for="message" class="block text-sm font-semibold text-gray-700 mb-1">Votre Message</label>
                        <textarea id="message" name="Message" rows="5" required placeholder="Bonjour, je souhaiterais un devis pour..."
                            class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-[#4CAF50] focus:border-transparent outline-none transition"></textarea>
                    </div>

                    <button type="submit" class="w-full bg-[#4CAF50] hover:bg-green-600 text-white font-bold py-4 rounded-lg shadow-lg hover:shadow-xl transition transform hover:-translate-y-1">
                        Envoyer ma demande
                    </button>
                    
                    <p class="text-xs text-gray-400 text-center mt-4">
                        Vos données sont confidentielles et ne seront jamais partagées.
                    </p>
                </form>
            </div>
        </div>
        
        <div id="toast-container" class="fixed bottom-5 right-5 z-50 flex flex-col gap-4 w-full max-w-xs"></div>
    </main>

    <?php include '../includes/footer.php'; ?>
    
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script> AOS.init(); </script>
    <script src="<?php echo $root; ?>/js/contact.js"></script>
</body>
</html>