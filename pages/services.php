<?php
require_once '../config.php'; // On charge la config (remonte d'un cran)

// --- DONNÉES : LISTE DES SERVICES ---
// C'est ici que tu modifies tes textes et images !
$services_list = [
    [
        "title" => "Entretien espaces verts",
        "img"   => "entretien-espace-vert.webp",
        "alt"   => "Jardinier effectuant l'entretien d'espaces verts à Marseille",
        "desc"  => "Tonte de pelouse, taille de haies, débroussaillage... Nous assurons un entretien régulier et soigné de vos espaces verts pour un jardin propre toute l'année (Contrat annuel ou ponctuel)."
    ],
    [
        "title" => "Élagage",
        "img"   => "elagage.webp",
        "alt"   => "Élagage professionnel d'arbre à Marseille",
        "desc"  => "Élagage d’arbres et arbustes pour garantir leur bonne santé, la sécurité de votre terrain et la clarté de vos espaces extérieurs. Respect du végétal garanti."
    ],
    [
        "title" => "Création de jardin",
        "img"   => "jardin.webp",
        "alt"   => "Aménagement paysager et création de jardin sur mesure",
        "desc"  => "Conception sur-mesure de jardins paysagers : massifs, allées, gazon, plantations. Créons ensemble un espace harmonieux, fonctionnel et qui vous ressemble."
    ],
    [
        "title" => "Pose de gazon",
        "img"   => "gazon.webp",
        "alt"   => "Rouleaux de gazon naturel posés dans un jardin",
        "desc"  => "Installation de gazon en rouleau (plaques) ou synthétique pour un rendu immédiat, verdoyant et durable. Préparation du sol incluse pour un enracinement optimal."
    ],
    [
        "title" => "Arrosage automatique",
        "img"   => "arrosage-auto.webp",
        "alt"   => "Système d'arrosage automatique enterré",
        "desc"  => "Installation de systèmes d'arrosage enterrés intelligents et goutte-à-goutte pour un jardin bien irrigué sans effort, tout en réalisant des économies d'eau."
    ],
    [
        "title" => "Clôture & Maçonnerie",
        "img"   => "cloture.webp",
        "alt"   => "Pose de clôture rigide et muret paysager",
        "desc"  => "Création de murets, terrasses, dalles ou clôtures (rigides, souples, bois) pour structurer, délimiter et sécuriser vos espaces extérieurs avec esthétisme."
    ],
    [
        "title" => "Évacuation des végétaux",
        "img"   => "evacuation.webp",
        "alt"   => "Camion benne pour l'évacuation des déchets verts",
        "desc"  => "Enlèvement et traitement des déchets verts en déchetterie agréée : branches, feuillage, tonte... Nous garantissons un chantier propre après chaque intervention."
    ],
    [
        "title" => "Travail en hauteur",
        "img"   => "hauteur.webp",
        "alt"   => "Paysagiste dans une nacelle pour élagage difficile",
        "desc"  => "Interventions sécurisées pour la taille d’arbres de grande hauteur ou accès difficiles. Utilisation de camion nacelle et matériel d'élagage professionnel."
    ],
    [
        "title" => "Conseils personnalisés",
        "img"   => "conseils.webp",
        "alt"   => "Angelo Paysagiste donnant des conseils d'aménagement",
        "desc"  => "Diagnostic, choix de plantes adaptées au climat méditerranéen, idées d’aménagement... Angelo vous guide avec expertise selon votre budget et vos envies."
    ]
];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <title>Nos Services Paysagers à Marseille | Angelo Paysagiste</title>
    <meta name="description" content="Découvrez les prestations d'Angelo Paysagiste : Entretien de jardin, élagage, création paysagère, pose de gazon et arrosage à Marseille et alentours." />
    <meta name="author" content="Angelo Cavailles" />

    <meta property="og:title" content="Services Paysagers - Angelo Paysagiste Marseille" />
    <meta property="og:description" content="Entretien, création, élagage... Tous nos services pour votre jardin à Marseille." />
    <meta property="og:image" content="https://angelopaysagiste.fr/assets/img/hero-bg.webp" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://angelopaysagiste.fr/pages/services.php" />

    <link rel="canonical" href="https://angelopaysagiste.fr/pages/services.php" />
    <link rel="icon" type="image/png" href="<?php echo $root; ?>/assets/logo/angelo-paysagiste-logo-rond.webp" />

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet" />

    <style>
        html, body { scrollbar-width: none; scroll-behavior: smooth; }
        html::-webkit-scrollbar, body::-webkit-scrollbar { display: none; }
    </style>

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "serviceType": "Aménagement paysager",
        "provider": {
            "@type": "LocalBusiness",
            "name": "Angelo Paysagiste",
            "image": "https://angelopaysagiste.fr/assets/logo/angelo-paysagiste-logo-sans-ecriture.webp",
            "telephone": "+33 6 25 15 06 85",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Marseille",
                "addressCountry": "FR"
            }
        },
        "areaServed": {
            "@type": "City",
            "name": "Marseille"
        },
        "description": "Services complets de jardinage : création, entretien, élagage et maçonnerie paysagère."
    }
    </script>
</head>

<body class="bg-white text-gray-900 font-sans">
    
    <?php include '../includes/header.php'; ?>

    <main class="py-20 bg-gray-50">
        <section class="max-w-6xl mx-auto px-6">
            <h1 class="text-3xl md:text-4xl font-bold text-[#005728] text-center uppercase mb-4" data-aos="fade-down">
                Prestations de Jardinage & Paysagisme
            </h1>
            <p class="text-center text-gray-600 mb-16 max-w-2xl mx-auto" data-aos="fade-down" data-aos-delay="100">
                Intervention rapide et soignée à Marseille, Allauch, Aubagne et les environs.
            </p>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
                
                <?php foreach ($services_list as $index => $service): ?>
                    <div class="bg-white shadow-lg rounded-xl overflow-hidden hover:shadow-xl transition-shadow duration-300"
                         data-aos="fade-up" 
                         data-aos-delay="<?php echo $index * 100; ?>"> <div class="h-56 overflow-hidden">
                            <img src="<?php echo $root; ?>/assets/services/<?php echo $service['img']; ?>"
                                 alt="<?php echo $service['alt']; ?>"
                                 class="w-full h-full object-cover transition-transform duration-500 hover:scale-110"
                                 loading="lazy" />
                        </div>
                        
                        <div class="p-6 flex flex-col h-[calc(100%-14rem)]">
                            <h2 class="text-xl font-bold text-[#005728] mb-3">
                                <?php echo $service['title']; ?>
                            </h2>
                            <p class="text-gray-700 text-sm mb-4 flex-grow">
                                <?php echo $service['desc']; ?>
                            </p>
                            <div class="mt-auto">
                                <a href="<?php echo $root; ?>/contact"
                                   class="inline-block text-[#4CAF50] font-bold border-2 border-[#4CAF50] px-4 py-2 rounded-full hover:bg-[#4CAF50] hover:text-white transition duration-300 text-sm">
                                   Demander un devis
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        </section>
    </main>

    <?php include '../includes/footer.php'; ?>

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({ once: true, offset: 50, duration: 800 });
    </script>
</body>
</html>