<?php
require_once '../config.php'; // On charge la config
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <meta name="robots" content="noindex, follow" />
    
    <title>Mentions Légales | Angelo Paysagiste Marseille</title>
    <meta name="description" content="Mentions légales, politique de confidentialité et conditions d'utilisation du site Angelo Paysagiste." />
    <meta name="author" content="Angelo Cavailles" />

    <link rel="canonical" href="https://angelopaysagiste.fr/pages/mentions.php" />
    <link rel="icon" type="image/png" href="<?php echo $root; ?>/assets/logo/angelo-paysagiste-logo-rond.webp" />

    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        html, body { scrollbar-width: none; scroll-behavior: smooth; }
        html::-webkit-scrollbar, body::-webkit-scrollbar { display: none; }
    </style>
</head>

<body class="bg-white text-gray-900 font-sans flex flex-col min-h-screen">
    
    <?php include '../includes/header.php'; ?>

    <main class="flex-grow max-w-4xl mx-auto px-6 py-20 w-full">
        <h1 class="text-3xl font-bold text-[#005728] uppercase mb-10 text-center">
            Mentions Légales
        </h1>

        <div class="space-y-8 text-gray-700 leading-relaxed text-justify">
            
            <section>
                <h2 class="text-xl font-bold text-[#4CAF50] mb-3">1. Édition du site</h2>
                <p>
                    En vertu de l'article 6 de la loi n° 2004-575 du 21 juin 2004 pour la confiance dans l'économie numérique, il est précisé aux utilisateurs du site internet <strong>https://angelopaysagiste.fr</strong> l'identité des différents intervenants dans le cadre de sa réalisation et de son suivi :
                </p>
                <ul class="list-disc pl-5 mt-2 space-y-1">
                    <li><strong>Propriétaire du site :</strong> Angelo Cavailles</li>
                    <li><strong>Statut :</strong> Entrepreneur individuel (Auto-entrepreneur / EI)</li>
                    <li><strong>Adresse :</strong> 47 Avenue du Maréchal de Lattre de Tassigny, 13009 Marseille</li>
                    <li><strong>SIRET :</strong> 989 823 729 000 11</li>
                    <li><strong>Téléphone :</strong> 06 25 15 06 85</li>
                    <li><strong>Email :</strong> angelopaysagistepro@gmail.com</li>
                </ul>
            </section>

            <section>
                <h2 class="text-xl font-bold text-[#4CAF50] mb-3">2. Hébergement</h2>
                <p>
                    Le site est hébergé sur un serveur personnel géré par :<br>
                    <strong>Pierre Burnier</strong><br>
                    Adresse : 123 Traverse Parangon bat GA<br>
                    Téléphone : +33 7 81 58 82 55
                </p>
            </section>

            <section>
                <h2 class="text-xl font-bold text-[#4CAF50] mb-3">3. Propriété intellectuelle</h2>
                <p>
                    Angelo Cavailles est propriétaire des droits de propriété intellectuelle et détient les droits d’usage sur tous les éléments accessibles sur le site internet, notamment les textes, images, graphismes, logos, vidéos, architecture, icônes et sons.
                </p>
                <p class="mt-2">
                    Toute reproduction, représentation, modification, publication, adaptation de tout ou partie des éléments du site, quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation écrite préalable de Angelo Cavailles.
                </p>
            </section>

            <section>
                <h2 class="text-xl font-bold text-[#4CAF50] mb-3">4. Gestion des données personnelles (RGPD)</h2>
                <p>
                    Le client est informé des réglementations concernant la communication marketing, la loi du 21 Juin 2014 pour la confiance dans l’Economie Numérique, la Loi Informatique et Liberté du 06 Août 2004 ainsi que du Règlement Général sur la Protection des Données (RGPD : n° 2016-679).
                </p>
                <p class="mt-2">
                    <strong>Utilisation des données :</strong> Les informations recueillies via le formulaire de contact (Nom, Email, Téléphone) sont enregistrées dans un fichier informatisé par Angelo Cavailles pour la gestion de la clientèle et l'élaboration de devis. Elles sont conservées pendant 3 ans et sont destinées uniquement à Angelo Paysagiste.
                </p>
            </section>

            <section>
                <h2 class="text-xl font-bold text-[#4CAF50] mb-3">5. Cookies</h2>
                <p>
                    La navigation sur ce site est susceptible de provoquer l’installation de cookie(s) sur l’ordinateur de l’utilisateur. Un "cookie" est un fichier de petite taille qui enregistre des informations relatives à la navigation d’un utilisateur sur un site.
                </p>
                <p class="mt-2">
                    Ce site utilise principalement des cookies techniques nécessaires à son bon fonctionnement et des cookies de mesure d'audience anonymes.
                </p>
            </section>

        </div>
    </main>

    <?php include '../includes/footer.php'; ?>

</body>
</html>