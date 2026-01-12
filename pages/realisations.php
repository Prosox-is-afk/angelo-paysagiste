<?php
require_once '../config.php'; // On charge la config

// 1. Liste des réalisations affichées par défaut
$realisations = [
    ["url" => "assets/realisations/piscine-apres-2.webp",      "alt" => "Création d'un jardin sec autour d'une piscine à Marseille"],
    ["url" => "assets/img/synthe_avt_apres.webp",     "alt" => "Aménagement extérieur avant/après avec gazon synthétique"],
    ["url" => "assets/img/gazonnatur_avt_apres.webp", "alt" => "Pose de gazon naturel en rouleau : transformation avant après"],
    ["url" => "assets/img/allee_avant.webp",          "alt" => "Préparation du terrain pour terrassement"],
    ["url" => "assets/img/allee_apres.webp",          "alt" => "Création d'allée et maçonnerie paysagère terminée"],
    ["url" => "assets/img/cloture-1.webp",              "alt" => "Rénovation de jardin : état initial"],
    ["url" => "assets/img/cloture1.webp",             "alt" => "Entretien de haies et tonte de pelouse"],
    ["url" => "assets/img/cloture2.webp",             "alt" => "Installation de clôture rigide avec brise-vue"],
    ["url" => "assets/img/cloture3.webp",             "alt" => "Aménagement végétal et plantation de massifs"],
    ["url" => "assets/img/cloture4.webp",             "alt" => "Réaménagement complet d'une cour intérieure"],
    ["url" => "assets/img/elagage-1.webp",              "alt" => "Chantier d'élagage d'arbres à Marseille"],
    ["url" => "assets/img/elagage2.webp",             "alt" => "Création d'un mur végétal et occultation"],
    ["url" => "assets/img/gazon_apres.webp",          "alt" => "Jardin moderne avec allée en pas japonais"],
    ["url" => "assets/img/pelouse_nat_apres_1.webp",  "alt" => "Plantations décoratives et olivier"],
    ["url" => "assets/img/pelouse_nat_apres_2.webp",  "alt" => "Finitions de jardin et nettoyage de chantier"],
];

// 2. Liste des réalisations cachées (affichées au clic)
$galerie_cachee = [
    ["url" => "assets/img/synthe_avt_apres.webp",          "alt" => "Transformation jardin gazon synthétique"],
    ["url" => "assets/realisations/gazon-avant-1.webp",     "alt" => "Terrain nu avant pose de gazon"],
    ["url" => "assets/realisations/gazon-apres-1.webp",     "alt" => "Résultat pose gazon naturel immédiat"],
    ["url" => "assets/realisations/gazon_apres2.webp",      "alt" => "Rendu final jardin vert"],
    ["url" => "assets/realisations/piscine-apres-1.webp",   "alt" => "Aménagement paysager piscine terminée"],
    ["url" => "assets/realisations/piscine-apres-2.webp",   "alt" => "Détail jardin sec et graviers décoratifs"],
    ["url" => "assets/realisations/terrain-de-boule-apres.webp", "alt" => "Création terrain de pétanque à domicile"],
    ["url" => "assets/realisations/terrain-de-boule-avant.webp", "alt" => "Espace avant création terrain de boules"],
    ["url" => "assets/realisations/gazon_pendant.webp",     "alt" => "Travaux de préparation du sol pour gazon"],
    ["url" => "assets/realisations/gazon_avant.webp",       "alt" => "Vue du jardin avant intervention paysagiste"],
];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <title>Nos Réalisations | Galerie Photos Angelo Paysagiste Marseille</title>
    <meta name="description" content="Découvrez en images les chantiers d'Angelo Paysagiste : avant/après, créations de jardins, élagage et aménagements à Marseille." />
    <meta name="author" content="Angelo Cavailles" />

    <link rel="canonical" href="https://angelopaysagiste.fr/pages/realisations.php" />
    <link rel="icon" type="image/png" href="<?php echo $root; ?>/assets/logo/angelo-paysagiste-logo-rond.webp" />

    <meta property="og:title" content="Galerie Réalisations - Angelo Paysagiste" />
    <meta property="og:description" content="Explorez nos projets d'aménagement extérieur à Marseille en photos." />
    <meta property="og:image" content="https://angelopaysagiste.fr/assets/img/hero-bg.webp" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://angelopaysagiste.fr/pages/realisations.php" />

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet" />

    <style>
        html, body { scrollbar-width: none; scroll-behavior: smooth; }
        html::-webkit-scrollbar, body::-webkit-scrollbar { display: none; }
        /* Animation d'apparition pour les images cachées */
        .fade-in { animation: fadeIn 0.5s ease-in-out; }
        @keyframes fadeIn { from { opacity: 0; transform: translateY(10px); } to { opacity: 1; transform: translateY(0); } }
    </style>
</head>

<body class="bg-white text-gray-900 font-sans">
    
    <?php include '../includes/header.php'; ?>

    <main class="py-20 bg-gray-50">
        <section class="max-w-4xl mx-auto px-6 text-center mb-16">
            <h1 class="text-3xl md:text-4xl font-bold text-[#005728] uppercase mb-6" data-aos="fade-down">
                Galerie de nos Chantiers
            </h1>
            <p class="text-gray-600 text-lg" data-aos="fade-down" data-aos-delay="100">
                De la conception à la réalisation, découvrez la qualité de notre travail à travers ces quelques exemples d'aménagements à Marseille et ses environs.
            </p>
        </section>

        <section class="max-w-7xl mx-auto px-6">
            <div id="galleryGrid" class="columns-1 sm:columns-2 lg:columns-3 gap-6 space-y-6">
                
                <?php foreach ($realisations as $index => $item): ?>
                    <div class="break-inside-avoid relative group rounded-xl overflow-hidden shadow-lg" 
                         data-aos="fade-up" data-aos-delay="<?php echo ($index % 3) * 100; ?>">
                        <img
                            src="<?php echo $root; ?>/<?php echo $item['url']; ?>"
                            alt="<?php echo $item['alt']; ?>"
                            class="w-full h-auto object-cover transform transition duration-500 group-hover:scale-105"
                            loading="lazy"
                        />
                        <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-4">
                            <p class="text-white font-semibold text-sm drop-shadow-md"><?php echo $item['alt']; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>

                <?php foreach ($galerie_cachee as $img): ?>
                    <div class="break-inside-avoid relative group rounded-xl overflow-hidden shadow-lg hidden-img hidden">
                        <img
                            src="<?php echo $root; ?>/<?php echo $img['url']; ?>"
                            alt="<?php echo $img['alt']; ?>"
                            class="w-full h-auto object-cover transform transition duration-500 group-hover:scale-105"
                            loading="lazy"
                        />
                        <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-4">
                            <p class="text-white font-semibold text-sm drop-shadow-md"><?php echo $img['alt']; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="text-center mt-16" id="btnContainer">
                <button
                    id="showMoreBtn"
                    class="bg-[#4CAF50] text-white px-8 py-3 rounded-full hover:bg-green-600 transition font-bold shadow-md hover:shadow-lg flex items-center justify-center mx-auto gap-2"
                >
                    <span>Voir plus de réalisations</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
            </div>
        </section>
    </main>

    <?php include '../includes/footer.php'; ?>

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        // Init AOS Animation
        AOS.init({ once: true, offset: 50, duration: 800 });
    </script>
</body>
</html>