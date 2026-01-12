<?php
require_once 'config.php'; // Chargement de la configuration

// --- DONNÉES : SERVICES ---
$services = [
    ["title" => "Entretien espaces verts", "img" => "entretien-espace-vert.webp", "alt" => "Entretien d'espaces verts et jardins à Marseille"],
    ["title" => "Élagage",                 "img" => "elagage.webp",                "alt" => "Élagage d'arbres et taille de haies par Angelo Paysagiste"],
    ["title" => "Création de jardin",      "img" => "jardin.webp",                 "alt" => "Conception et création de jardin sur mesure"],
    ["title" => "Pose de gazon",           "img" => "gazon.webp",                  "alt" => "Pose de gazon en rouleau ou synthétique à Marseille"],
    ["title" => "Arrosage automatique",    "img" => "arrosage-auto.webp",          "alt" => "Installation de système d'arrosage automatique"],
    ["title" => "Clôture & Maçonnerie",    "img" => "cloture.webp",                "alt" => "Installation de clôtures et maçonnerie paysagère"],
    ["title" => "Évacuation des végétaux", "img" => "evacuation.webp",             "alt" => "Évacuation de déchets verts et nettoyage de jardin"],
    ["title" => "Travail en hauteur",      "img" => "hauteur.webp",                "alt" => "Travaux d'élagage en hauteur avec nacelle"],
    ["title" => "Conseils personnalisés",  "img" => "conseils.webp",               "alt" => "Conseils d'expert en aménagement extérieur"],
];

// --- DONNÉES : AVIS CLIENTS ---
$avis = [
    ["nom" => "Aline P.",           "txt" => "Prestation sérieuse et efficace. Angelo fait tout pour nous satisfaire."],
    ["nom" => "Jean-Christophe L.", "txt" => "Super sérieux et très professionnel avec 15 ans d'expérience 👍 Je recommande vivement."],
    ["nom" => "Christian J.",       "txt" => "Connaît et aime son métier. Très dévoué et appliqué dans son travail. Paysagiste à recommander."],
];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <title>Angelo Paysagiste | Création & Entretien de Jardins à Marseille</title>
    <meta name="description" content="Angelo Paysagiste, votre artisan jardinier à Marseille (13). Création de jardins, entretien d'espaces verts, élagage et pose de gazon. Devis gratuit." />
    <meta name="author" content="Angelo Cavailles" />
    
    <meta property="og:title" content="Angelo Paysagiste - Artisan Jardinier à Marseille" />
    <meta property="og:description" content="Besoin d'un paysagiste à Marseille ? Création, entretien, élagage. Découvrez mes réalisations et demandez votre devis gratuit." />
    <meta property="og:image" content="https://angelopaysagiste.fr/assets/img/hero-bg.webp" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://angelopaysagiste.fr/" />
    
    <link rel="canonical" href="https://angelopaysagiste.fr/" />
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
        "@type": "LandmarksOrHistoricalBuildings", 
        "@type": "LocalBusiness",
        "name": "Angelo Paysagiste",
        "image": "https://angelopaysagiste.fr/assets/logo/angelo-paysagiste-logo-sans-ecriture.webp",
        "description": "Artisan paysagiste à Marseille spécialisé dans la création et l'entretien de jardins pour particuliers et professionnels.",
        "email": "angelopaysagistepro@gmail.com",
        "address": { 
            "@type": "PostalAddress", 
            "addressLocality": "Marseille", 
            "addressRegion": "Provence-Alpes-Côte d'Azur",
            "addressCountry": "FR" 
        },
        "url": "https://angelopaysagiste.fr/",
        "telephone": "+33 6 25 15 06 85",
        "areaServed": ["Marseille", "Allauch", "Aubagne", "Aix-en-Provence", "Cassis", "Plan-de-Cuques"],
        "priceRange": "€€",
        "openingHoursSpecification": [
            { "@type": "OpeningHoursSpecification", "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"], "opens": "08:00", "closes": "18:00" }
        ],
        "aggregateRating": { "@type": "AggregateRating", "ratingValue": "5", "reviewCount": "5" }
    }
    </script>
</head>
<body class="bg-white text-gray-900 font-sans">

    <?php include 'includes/header.php'; ?>

    <section class="relative h-[calc(100vh-4.5rem)] pt-20 bg-cover bg-center flex items-center justify-center text-center text-white"
             style="background-image: url('<?php echo $root; ?>/assets/img/hero-bg.webp')">
        
        <div class="absolute inset-0 bg-black/50"></div>

        <div class="relative z-10 px-4 max-w-5xl mx-auto">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold mb-6 drop-shadow-lg leading-tight" data-aos="fade-up" data-aos-delay="200">
                Angelo Paysagiste :<br>Création & Entretien de Jardins à Marseille
            </h1>
            <p class="text-lg md:text-2xl mb-10 drop-shadow font-light" data-aos="fade-up" data-aos-delay="400">
                Donnez vie à vos extérieurs avec un artisan passionné.
            </p>

            <div class="flex flex-col sm:flex-row justify-center items-center gap-4 mt-8 w-full">
                <a href="<?php echo $root; ?>/contact"
                   class="group relative w-full sm:w-auto bg-[#4CAF50] text-white font-bold py-4 px-8 rounded-full shadow-lg shadow-green-900/20 hover:bg-green-600 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex items-center justify-center"
                   data-aos="zoom-in" data-aos-delay="600">
                    <span>Demander un devis gratuit</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </a>
                <a href="<?php echo $root; ?>/services"
                   class="w-full sm:w-auto bg-white/90 backdrop-blur-sm text-[#4CAF50] border-2 border-white font-bold py-4 px-8 rounded-full shadow-lg hover:bg-[#4CAF50] hover:text-white hover:border-[#4CAF50] hover:-translate-y-1 transition-all duration-300 flex items-center justify-center"
                   data-aos="zoom-in" data-aos-delay="800">
                    Découvrir mes services
                </a>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-6xl mx-auto px-6 flex flex-col md:flex-row items-center gap-10 md:gap-24">
            <div class="w-full md:w-1/2" data-aos="fade-right">
                <img src="<?php echo $root; ?>/assets/img/angelo_portrait-v2.webp"
                     alt="Angelo Cavailles, artisan paysagiste à Marseille"
                     class="rounded-lg shadow-lg w-full object-cover max-h-[500px]"
                     loading="lazy" width="600" height="500" />
            </div>
            <div class="w-full md:w-1/2" data-aos="fade-left">
                <h2 class="text-3xl font-bold text-[#005728] uppercase mb-8 relative inline-block after:content-[''] after:block after:w-12 after:h-1 after:bg-[#4CAF50] after:mt-2">
                    Votre Artisan Paysagiste à Marseille
                </h2>
                <p class="text-gray-700 text-lg leading-relaxed text-justify">
                    Je m’appelle <strong>Angelo Cavailles</strong>, paysagiste à Marseille depuis plus de 15 ans. 
                    J’ai choisi ce métier par passion pour la nature et le travail bien fait. 
                    J’accompagne mes clients – particuliers comme professionnels – dans la <strong>création, 
                    l’entretien et l’aménagement de jardins</strong> et espaces verts dans les Bouches-du-Rhône.
                    <br><br>
                    Mon objectif ? Vous offrir un extérieur qui vous ressemble, avec des conseils personnalisés, 
                    un travail soigné et des résultats durables. Je suis fier d’exercer en tant 
                    qu’<strong>artisan indépendant</strong>, privilégiant une approche humaine et réactive.
                </p>
            </div>
        </div>
    </section>

    <section class="bg-gray-50 py-20">
        <h2 class="text-3xl font-bold text-center text-[#005728] uppercase mb-12">Nos Prestations Paysagères</h2>
        
        <div class="max-w-6xl mx-auto px-6 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10">
            <?php foreach($services as $index => $service): ?>
                <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-transform transform hover:scale-105 overflow-hidden group"
                     data-aos="fade-up" data-aos-delay="<?php echo $index * 50; ?>">
                    
                    <div class="overflow-hidden h-72">
                        <img src="<?php echo $root; ?>/assets/services/<?php echo $service['img']; ?>"
                             alt="<?php echo $service['alt']; ?>"
                             class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                             loading="lazy" />
                    </div>
                    
                    <div class="p-6 text-center">
                        <h3 class="text-lg font-bold text-[#005728] uppercase tracking-wide">
                            <?php echo $service['title']; ?>
                        </h3>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="text-center mt-12">
             <a href="<?php echo $root; ?>/services" 
                class="inline-block text-[#4CAF50] font-bold hover:underline hover:text-green-700 transition">
                En savoir plus sur mes services &rarr;
             </a>
        </div>
    </section>

    <section class="py-20 bg-white">
        <h2 class="text-3xl font-bold text-center text-[#005728] uppercase mb-12">Réalisations de chantiers à Marseille</h2>

        <div class="flex flex-col md:flex-row items-center gap-8 max-w-6xl mx-auto px-6 mb-16">
            <div class="w-full md:w-1/2" data-aos="fade-right">
                <img src="<?php echo $root; ?>/assets/realisations/gazon-avant-1.webp" alt="Terrain à Marseille avant pose de gazon" class="rounded-lg shadow w-full h-[320px] object-cover" loading="lazy">
            </div>
            <div class="w-full md:w-1/2" data-aos="fade-left">
                <img src="<?php echo $root; ?>/assets/realisations/gazon-apres-1.webp" alt="Résultat final pose de gazon naturel à Marseille" class="rounded-lg shadow w-full h-[320px] object-cover" loading="lazy">
            </div>
        </div>

        <div class="flex flex-col md:flex-row items-center gap-8 max-w-6xl mx-auto px-6 mb-16">
            <div class="w-full md:w-1/2 grid grid-cols-1 sm:grid-cols-2 gap-4" data-aos="fade-right">
                <img src="<?php echo $root; ?>/assets/realisations/piscine-avant-1.webp" alt="Contour de piscine avant aménagement" class="rounded-lg shadow w-full h-[320px] object-cover" loading="lazy">
                <img src="<?php echo $root; ?>/assets/realisations/piscine-avant-2.webp" alt="Détail travaux piscine" class="rounded-lg shadow w-full h-[320px] object-cover" loading="lazy">
            </div>
            <div class="w-full md:w-1/2 grid grid-cols-1 sm:grid-cols-2 gap-4" data-aos="fade-left">
                <img src="<?php echo $root; ?>/assets/realisations/piscine-apres-1.webp" alt="Aménagement paysager piscine terminé" class="rounded-lg shadow w-full h-[320px] object-cover" loading="lazy">
                <img src="<?php echo $root; ?>/assets/realisations/piscine-apres-2.webp" alt="Jardin sec autour de piscine" class="rounded-lg shadow w-full h-[320px] object-cover" loading="lazy">
            </div>
        </div>

        <div class="flex flex-col md:flex-row items-center gap-8 max-w-6xl mx-auto px-6 mb-16">
            <div class="w-full md:w-1/2" data-aos="fade-right">
                <img src="<?php echo $root; ?>/assets/realisations/terrain-de-boule-avant.webp" alt="Jardin en friche avant création terrain de pétanque" class="rounded-lg shadow w-full h-[320px] object-cover" loading="lazy">
            </div>
            <div class="w-full md:w-1/2" data-aos="fade-left">
                <img src="<?php echo $root; ?>/assets/realisations/terrain-de-boule-apres.webp" alt="Création terrain de boules terminé" class="rounded-lg shadow w-full h-[320px] object-cover" loading="lazy">
            </div>
        </div>

        <div class="text-center mt-12" data-aos="zoom-in">
            <a href="<?php echo $root; ?>/realisations"
               class="inline-block bg-[#4CAF50] text-white px-8 py-3 rounded-full hover:bg-green-600 transition font-semibold shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                Voir toutes mes réalisations
            </a>
        </div>
    </section>

    <section class="py-20 bg-gray-50">
        <h2 class="text-3xl font-bold text-center text-[#005728] uppercase mb-12">Avis Clients</h2>

        <div class="text-center mb-10" data-aos="fade-in">
            <div class="inline-flex items-center gap-2 bg-white shadow-md border border-gray-100 px-6 py-3 rounded-full text-sm text-gray-700">
                <img src="<?php echo $root; ?>/assets/img/google-logo.webp" alt="Logo Google Avis" class="w-5 h-5" loading="lazy" />
                <span><span class="font-bold text-gray-900">5,0/5</span> sur Google - Avis vérifiés</span>
            </div>
        </div>

        <div class="max-w-6xl mx-auto px-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach($avis as $index => $item): ?>
                <div class="bg-white rounded-xl shadow p-8 text-center border border-gray-100"
                     data-aos="fade-up" data-aos-delay="<?php echo $index * 100; ?>">
                    <img src="<?php echo $root; ?>/assets/img/user-profile-icon-free-vector.webp"
                         alt="Avis client Angelo Paysagiste"
                         class="w-16 h-16 rounded-full mx-auto mb-4 object-cover opacity-80"
                         loading="lazy" />
                    <h3 class="text-[#005728] font-bold text-lg"><?php echo $item['nom']; ?></h3>
                    <div class="text-yellow-400 text-lg my-2">★★★★★</div>
                    <p class="text-sm text-gray-600 italic">
                        “<?php echo $item['txt']; ?>”
                    </p>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>
    
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({ once: true, offset: 100, duration: 800 });
    </script>
</body>
</html>