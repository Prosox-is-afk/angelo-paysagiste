<?php
require_once '../config.php'; // On charge la config

// LISTE DES QUESTIONS / RÉPONSES
// C'est ici que tu modifies tes textes !
$faq_items = [
    [
        "q" => "Quels services de paysagisme proposez-vous à Marseille ?",
        "r" => "J'interviens pour l'entretien de jardin (tonte, taille), la création d'espaces verts sur mesure, l'élagage d'arbres, la pose de gazon (naturel ou synthétique), l’installation d'arrosage automatique, la pose de clôtures, la maçonnerie paysagère, et l'évacuation de déchets verts."
    ],
    [
        "q" => "Intervenez-vous en dehors de Marseille ?",
        "r" => "Oui, bien que basé à Marseille (13009), j'interviens dans tout le département des Bouches-du-Rhône et les villes limitrophes comme Allauch, Aubagne, Cassis, La Ciotat ou Aix-en-Provence selon l'ampleur du projet."
    ],
    [
        "q" => "Faites-vous des devis gratuits pour l'aménagement de jardin ?",
        "r" => "Absolument. Chaque projet commence par une visite technique gratuite pour évaluer vos besoins et établir un devis précis, détaillé et sans engagement."
    ],
    [
        "q" => "Quels sont vos délais d'intervention pour un entretien ?",
        "r" => "Les délais varient selon la saison (le printemps est très chargé). En général, je peux intervenir sous 1 à 2 semaines pour des urgences ou petits entretiens. Contactez-moi pour connaître mes disponibilités actuelles."
    ],
    [
        "q" => "Travaillez-vous avec des particuliers ou des professionnels ?",
        "r" => "Je travaille avec les deux ! Que vous soyez un particulier pour son jardin privé, un syndic de copropriété pour une résidence, ou une entreprise pour ses espaces verts, je m’adapte à chaque demande avec le même professionnalisme."
    ],
    [
        "q" => "Proposez-vous des contrats d'entretien annuel ?",
        "r" => "Oui, pour votre tranquillité, je propose des contrats d'entretien annuels (visites mensuelles ou trimestrielles) qui incluent la tonte, la taille et le nettoyage. C'est la solution idéale pour un jardin impeccable toute l'année sans y penser."
    ],
    [
        "q" => "Êtes-vous équipé pour l'élagage en hauteur ?",
        "r" => "Oui, je dispose de tout le matériel de sécurité nécessaire (EPI, harnais) et je peux louer une nacelle pour les arbres difficiles d'accès ou dangereux, afin de garantir un travail en toute sécurité."
    ]
];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <title>FAQ Jardinier Paysagiste Marseille | Questions Fréquentes</title>
    <meta name="description" content="Réponses à vos questions sur l'entretien de jardin, l'élagage et l'aménagement paysager à Marseille avec Angelo Paysagiste." />
    <meta name="author" content="Angelo Cavailles" />

    <link rel="canonical" href="https://angelopaysagiste.fr/pages/faq.php" />
    <link rel="icon" type="image/png" href="<?php echo $root; ?>/assets/logo/angelo-paysagiste-logo-rond.webp" />

    <meta property="og:title" content="FAQ - Angelo Paysagiste Marseille" />
    <meta property="og:description" content="Tout savoir sur mes services de jardinage et paysagisme." />
    <meta property="og:image" content="https://angelopaysagiste.fr/assets/img/hero-bg.webp" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://angelopaysagiste.fr/pages/faq.php" />

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet" />

    <style>
        html, body { scrollbar-width: none; scroll-behavior: smooth; }
        html::-webkit-scrollbar, body::-webkit-scrollbar { display: none; }
        /* Transition douce pour l'accordéon */
        .faq-content { max-height: 0; overflow: hidden; transition: max-height 0.3s ease-out; }
        .faq-item.active .faq-content { max-height: 500px; /* Valeur arbitraire suffisante */ }
        .faq-item.active .icon-plus { transform: rotate(45deg); }
    </style>

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [
            <?php 
            $last_key = array_key_last($faq_items);
            foreach($faq_items as $key => $item): ?>
            {
                "@type": "Question",
                "name": "<?php echo str_replace('"', '\"', $item['q']); ?>",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "<?php echo str_replace('"', '\"', $item['r']); ?>"
                }
            }<?php echo ($key !== $last_key) ? ',' : ''; ?>
            <?php endforeach; ?>
        ]
    }
    </script>
</head>

<body class="bg-white text-gray-900 font-sans flex flex-col min-h-screen">
    
    <?php include '../includes/header.php'; ?>

    <main class="flex-grow max-w-4xl mx-auto px-6 py-20 w-full">
        <div class="text-center mb-16">
            <h1 class="text-3xl md:text-4xl font-bold text-[#005728] uppercase mb-4" data-aos="fade-down">
                Foire Aux Questions
            </h1>
            <p class="text-gray-600" data-aos="fade-down" data-aos-delay="100">
                Vous avez des questions sur l'entretien de votre jardin ? Voici les réponses les plus courantes.
            </p>
        </div>

        <div class="space-y-4" data-aos="fade-up" data-aos-delay="200">
            <?php foreach($faq_items as $index => $item): ?>
                <div class="faq-item border border-gray-200 rounded-lg overflow-hidden bg-gray-50 hover:bg-white hover:shadow-md transition duration-300">
                    <button class="w-full flex justify-between items-center p-5 text-left focus:outline-none" onclick="toggleFaq(this)">
                        <span class="font-semibold text-[#005728] text-lg pr-4"><?php echo $item['q']; ?></span>
                        <span class="icon-plus text-[#4CAF50] text-2xl font-bold transition-transform duration-300">+</span>
                    </button>
                    <div class="faq-content bg-white px-5">
                        <p class="text-gray-700 pb-5 leading-relaxed">
                            <?php echo $item['r']; ?>
                        </p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </main>

    <?php include '../includes/footer.php'; ?>

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({ once: true, offset: 50, duration: 800 });

        // Script simple pour l'accordéon
        function toggleFaq(button) {
            const item = button.parentElement;
            const content = item.querySelector('.faq-content');
            
            // Si l'élément est déjà ouvert, on le ferme
            if (item.classList.contains('active')) {
                item.classList.remove('active');
            } else {
                // Optionnel : Fermer les autres ouverts (mode accordéon strict)
                document.querySelectorAll('.faq-item.active').forEach(activeItem => {
                    activeItem.classList.remove('active');
                });
                // On ouvre celui cliqué
                item.classList.add('active');
            }
        }
    </script>
</body>
</html>