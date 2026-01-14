<?php
// ------------------------------------------------------------------
// CONFIGURATION GLOBALE
// ------------------------------------------------------------------

// Décommenter la ligne correspondante selon l'environnement

// OPTION A : En LOCAL (sur ton ordi)
// Remplace "ANGELO-PAYSAGISTE" par le nom exact de ton dossier si c'est différent
$root = "/angelo-paysagiste"; 

// OPTION B : EN LIGNE (Production / Vrai site)
// $root = "https://angelopaysagiste.fr";

// ------------------------------------------------------------------
// AUTRES VARIABLES GLOBALES (Si besoin plus tard)
// ------------------------------------------------------------------
$siteName = "Angelo Paysagiste";
$contactEmail = "angelopaysagistepro@gmail.com";
// --- INFO SENSIBLES (GMAIL) ---
// On définit des CONSTANTES accessibles partout
define('SMTP_EMAIL', 'angelopaysagistepro@gmail.com');
define('SMTP_PASSWORD', 'ton_mot_de_passe_appli_ici');
?>