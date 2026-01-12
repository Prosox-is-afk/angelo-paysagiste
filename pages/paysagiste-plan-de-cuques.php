<?php
require_once '../config.php'; 

// --- CONFIGURATION SPÉCIFIQUE PLAN-DE-CUQUES ---
$ville = "Plan-de-Cuques";
$code_postal = "13380";
$intro_ville = "Au pied de la chaîne de l'Étoile, Plan-de-Cuques offre un cadre de vie verdoyant et paisible. Les jardins y sont souvent familiaux et nécessitent un entretien régulier. La proximité des collines impose également une vigilance accrue sur le débroussaillage pour la sécurité incendie.";

// Avis adaptés Plan-de-Cuques
$avis_local = [
    ["nom" => "Sylvie R.", "txt" => "Angelo s'occupe de la tonte et de la taille de mes haies depuis 3 ans. C'est toujours propre et soigné."],
    ["nom" => "Patrick F.", "txt" => "Débroussaillage de mon terrain en pente réalisé rapidement. Je suis aux normes pour l'été, merci !"]
];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <title>Paysagiste <?php echo $ville; ?> (<?php echo $code_postal; ?>) | Jardinier & Débroussaillage</title>
    <meta name="description" content="Jardinier Paysagiste à <?php echo $ville; ?>. Entretien de jardin, taille de haies, débroussaillage réglementaire et création d'espaces verts. Devis gratuit." />
    <meta name="author" content="Angelo Cavailles" />

    <link rel="canonical" href="https://angelopaysagiste.fr/pages/paysagiste-plan-de-cuques.php" />
    <link rel="icon" type="image/png" href="<?php echo $root; ?>/assets/logo/angelo-paysagiste-logo-rond.webp" />

    <meta property="og:title" content="Jardinier Paysagiste à <?php echo $ville; ?> - Angelo Cavailles" />
    <meta property="og:description" content="Entretien de jardins et débroussaillage à <?php echo $ville; ?>." />
    <meta property="og:image" content="https://angelopaysagiste.fr/assets/img/hero-bg.webp" />
    <meta property="og:type" content="website" />

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
        "serviceType": "Paysagiste",
        "provider": {
            "@type": "LocalBusiness",
            "name": "Angelo Paysagiste",
            "image": "https://angelopaysagiste.fr/assets/logo/angelo-paysagiste-logo-sans-ecriture.webp",
            "telephone": "+33 6 25 15 06 85",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Marseille",
                "addressRegion": "Provence-Alpes-Côte d'Azur"
            }
        },
        "areaServed": {
            "@type": "City",
            "name": "<?php echo $ville; ?>",
            "postalCode": "<?php echo $code_postal; ?>"
        },
        "description": "Services de jardinage et débroussaillage à <?php echo $ville; ?>."
    }
    </script>
</head>

<body class="bg-white text-gray-900 font-sans">
    
    <?php include '../includes/header.php'; ?>

    <section class="relative h-[60vh] bg-cover bg-center flex items-center justify-center text-center text-white"
             style="background-image: url('<?php echo $root; ?>/assets/img/hero-bg.webp')"> 
        <div class="absolute inset-0 bg-black/60"></div>
        <div class="relative z-10 px-4 max-w-5xl">
            <h1 class="text-4xl md:text-6xl font-extrabold mb-6 drop-shadow-lg leading-tight" data-aos="fade-up">
                Paysagiste à <span class="text-[#4CAF50]"><?php echo $ville; ?></span>
            </h1>
            <p class="text-xl md:text-2xl mb-8 font-light text-gray-100" data-aos="fade-up" data-aos-delay="200">
                Entretien de jardin et débroussaillage professionnel à <?php echo $ville; ?>.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="<?php echo $root; ?>/pages/contact.php" class="bg-[#4CAF50] hover:bg-green-600 text-white font-bold py-4 px-8 rounded-full transition shadow-lg transform hover:-translate-y-1">
                    Devis gratuit à Plan-de-Cuques
                </a>
                <a href="tel:+33625150685" class="bg-white text-[#005728] hover:bg-gray-100 font-bold py-4 px-8 rounded-full transition shadow-lg flex items-center justify-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" /></svg>
                    06 25 15 06 85
                </a>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
            <div data-aos="fade-right">
                <h2 class="text-3xl font-bold text-[#005728] uppercase mb-6 relative inline-block after:content-[''] after:block after:w-16 after:h-1 after:bg-[#4CAF50] after:mt-2">
                    Votre jardinier de proximité
                </h2>
                <p class="text-gray-700 text-lg leading-relaxed mb-6 text-justify">
                    <?php echo $intro_ville; ?>
                </p>
                <p class="text-gray-700 text-lg leading-relaxed mb-8 text-justify">
                    Résidant à proximité, je suis très présent sur <strong><?php echo $ville; ?> et Allauch</strong>. Je connais l'importance d'avoir un jardin propre et sécurisé, surtout à l'approche de l'été. Je m'occupe de tout : de la taille de vos lauriers roses à l'évacuation complète des déchets verts.
                </p>
                
                <ul class="space-y-3">
                    <li class="flex items-center gap-3 text-gray-700">
                        <svg class="w-6 h-6 text-[#4CAF50]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        <span>Débroussaillage (OLD) aux normes préfectorales</span>
                    </li>
                    <li class="flex items-center gap-3 text-gray-700">
                        <svg class="w-6 h-6 text-[#4CAF50]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        <span>Contrats d'entretien annuels avantageux</span>
                    </li>
                    <li class="flex items-center gap-3 text-gray-700">
                        <svg class="w-6 h-6 text-[#4CAF50]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        <span>Création de gazon et arrosage</span>
                    </li>
                </ul>
            </div>
            
            <div class="grid grid-cols-2 gap-4" data-aos="fade-left">
                <img src="<?php echo $root; ?>/assets/services/entretien-espace-vert.webp" alt="Entretien jardin <?php echo $ville; ?>" class="rounded-lg shadow-lg w-full h-48 object-cover transform translate-y-4">
                <img src="<?php echo $root; ?>/assets/services/elagage.webp" alt="Débroussaillage <?php echo $ville; ?>" class="rounded-lg shadow-lg w-full h-48 object-cover">
                <img src="<?php echo $root; ?>/assets/realisations/gazon-apres-1.webp" alt="Pose de gazon <?php echo $ville; ?>" class="rounded-lg shadow-lg w-full h-48 object-cover transform translate-y-4">
                <img src="<?php echo $root; ?>/assets/services/cloture.webp" alt="Clôture jardin <?php echo $ville; ?>" class="rounded-lg shadow-lg w-full h-48 object-cover">
            </div>
        </div>
    </section>

    <section class="py-20 bg-gray-50">
        <div class="max-w-6xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-center text-[#005728] uppercase mb-12">
                Services dédiés à Plan-de-Cuques
            </h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-xl shadow hover:shadow-lg transition border-t-4 border-[#4CAF50]">
                    <div class="w-14 h-14 bg-green-100 rounded-full flex items-center justify-center mb-6 text-2xl">🔥</div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Débroussaillage</h3>
                    <p class="text-gray-600">Mise en conformité de votre terrain avant l'été (OLD). Coupe des herbes hautes, élagage des arbres proches des habitations.</p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow hover:shadow-lg transition border-t-4 border-[#4CAF50]">
                    <div class="w-14 h-14 bg-green-100 rounded-full flex items-center justify-center mb-6 text-2xl">✂️</div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Taille de Haies</h3>
                    <p class="text-gray-600">Taille au carré de vos haies de cyprès, lauriers ou thuyas pour délimiter proprement votre propriété.</p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow hover:shadow-lg transition border-t-4 border-[#4CAF50]">
                    <div class="w-14 h-14 bg-green-100 rounded-full flex items-center justify-center mb-6 text-2xl">🌱</div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Remise en État</h3>
                    <p class="text-gray-600">Nettoyage complet de jardins laissés à l'abandon : désherbage, évacuation, bêchage et nouvelles plantations.</p>
                </div>
            </div>
            <div class="text-center mt-10">
                <a href="<?php echo $root; ?>/pages/services.php" class="text-[#005728] font-semibold hover:underline">Voir tous mes services &rarr;</a>
            </div>
        </div>
    </section>

    <section class="py-16 bg-white">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h2 class="text-2xl font-bold text-[#005728] mb-10">Avis de vos voisins à <?php echo $ville; ?></h2>
            <div class="grid md:grid-cols-2 gap-8">
                <?php foreach($avis_local as $avis): ?>
                <div class="bg-gray-50 p-6 rounded-lg border border-gray-100 italic relative">
                    <span class="absolute top-4 left-4 text-4xl text-[#4CAF50] opacity-20">"</span>
                    <p class="text-gray-700 mb-4 z-10 relative"><?php echo $avis['txt']; ?></p>
                    <div class="text-[#4CAF50] font-bold not-italic">- <?php echo $avis['nom']; ?></div>
                    <div class="text-yellow-400 text-sm mt-1">★★★★★</div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="py-16 bg-gray-50">
        <div class="max-w-3xl mx-auto px-6">
            <h2 class="text-2xl font-bold text-center text-[#005728] mb-10">Questions fréquentes - Secteur <?php echo $ville; ?></h2>
            <div class="space-y-4">
                <details class="bg-white rounded-lg shadow-sm p-4 group cursor-pointer">
                    <summary class="font-semibold text-gray-800 flex justify-between items-center list-none">
                        <span>Quand faut-il débroussailler à Plan-de-Cuques ?</span>
                        <span class="transition group-open:rotate-180">▼</span>
                    </summary>
                    <p class="text-gray-600 mt-4 text-sm">L'idéal est de le faire au printemps, avant la saison sèche. La réglementation impose d'avoir un terrain propre avant le 1er juin pour limiter les risques d'incendie.</p>
                </details>
                <details class="bg-white rounded-lg shadow-sm p-4 group cursor-pointer">
                    <summary class="font-semibold text-gray-800 flex justify-between items-center list-none">
                        <span>Faites-vous l'enlèvement des végétaux après la taille ?</span>
                        <span class="transition group-open:rotate-180">▼</span>
                    </summary>
                    <p class="text-gray-600 mt-4 text-sm">Oui, systématiquement. Je dispose d'un camion benne pour évacuer tous les déchets verts vers la déchetterie, laissant votre jardin impeccable.</p>
                </details>
                <details class="bg-white rounded-lg shadow-sm p-4 group cursor-pointer">
                    <summary class="font-semibold text-gray-800 flex justify-between items-center list-none">
                        <span>Proposez-vous des contrats annuels ?</span>
                        <span class="transition group-open:rotate-180">▼</span>
                    </summary>
                    <p class="text-gray-600 mt-4 text-sm">Oui, c'est la formule la plus demandée à Plan-de-Cuques. Je passe régulièrement (tous les mois ou trimestres) pour que votre jardin reste propre toute l'année sans que vous ayez à y penser.</p>
                </details>
            </div>
        </div>
    </section>

    <?php include '../includes/footer.php'; ?>
    
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script> AOS.init({once: true}); </script>
</body>
</html>