<?php
require_once '../config.php'; // On charge la config
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Contact | Angelo Paysagiste - Jardinier Marseille</title>
        <meta
            name="description"
            content="Contactez Angelo Paysagiste pour un devis gratuit, une demande d'information ou un rendez-vous à Marseille et ses alentours."
        />
        <meta
            name="keywords"
            content="contact paysagiste Marseille, devis jardinier Marseille, Angelo Paysagiste, jardin entretien contact"
        />
        <meta name="author" content="Angelo Cavailles" />
        <meta property="og:title" content="Contactez Angelo Paysagiste" />
        <meta
            property="og:description"
            content="Prenez contact avec Angelo Paysagiste pour vos projets de jardin à Marseille : aménagement, entretien, création..."
        />
        <meta
            property="og:image"
            content="https://angelopaysagiste.fr/assets/img/hero-bg.png"
        />
        <meta
            property="og:url"
            content="https://angelopaysagiste.fr/contact.html"
        />
        <meta property="og:type" content="website" />
        <link
            rel="icon"
            type="image/png"
            href="assets/logo/angelo-paysagiste-logo-rond.png"
        />
        <script src="https://cdn.tailwindcss.com"></script>
        <link
            href="https://unpkg.com/aos@2.3.4/dist/aos.css"
            rel="stylesheet"
        />
        <style>
            html,
            body {
                scrollbar-width: none;
                scroll-behavior: smooth;
            }
            html::-webkit-scrollbar,
            body::-webkit-scrollbar {
                display: none;
            }
        </style>
    </head>
    <body class="bg-white text-gray-900 font-sans">
        <!-- HEADER -->
        <?php include '../includes/header.php'; ?>
        
        <!-- MAIN CONTENT -->
        <main class="min-h-screen flex items-center justify-center px-6 py-20">
            <div
                class="max-w-6xl w-full grid md:grid-cols-2 gap-12"
                data-aos="fade-up"
            >
                <!-- Coordonnées -->
                <div class="space-y-6">
                    <h1 class="text-3xl font-bold text-[#005728] uppercase">
                        Angelo Cavailles
                    </h1>
                    <p class="text-gray-700 text-lg">
                        Paysagiste depuis 15 ans, basé à
                        <strong>Marseille</strong>. <br />
                        Intervention dans tout le département.
                    </p>
                    <div>
                        <p class="font-semibold text-[#005728]">Téléphone :</p>
                        <p>
                            <a href="tel:+33625150685" class="hover:underline"
                                >à compléter</a
                            >
                        </p>
                    </div>
                    <div>
                        <p class="font-semibold text-[#005728]">Email :</p>
                        <p>
                            <a
                                href="mailto:angelopaysagistepro@gmail.com"
                                class="hover:underline"
                                >à compléter</a
                            >
                        </p>
                    </div>
                    <div>
                        <p class="font-semibold text-[#005728]">Adresse :</p>
                        <p>
                            47 Avenue du Maréchal de Lattre de Tassigny, 13009
                            Marseille
                        </p>
                    </div>
                </div>

                <!-- Formulaire -->
                <form
                    action="mailto:"
                    method="POST"
                    enctype="text/plain"
                    class="space-y-6"
                >
                    <div>
                        <label
                            for="name"
                            class="block text-sm font-medium text-gray-700"
                            >Nom</label
                        >
                        <input
                            type="text"
                            id="name"
                            name="Nom"
                            required
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm px-4 py-2 focus:ring-[#4CAF50] focus:border-[#4CAF50]"
                        />
                    </div>

                    <div>
                        <label
                            for="email"
                            class="block text-sm font-medium text-gray-700"
                            >Email</label
                        >
                        <input
                            type="email"
                            id="email"
                            name="Email"
                            required
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm px-4 py-2 focus:ring-[#4CAF50] focus:border-[#4CAF50]"
                        />
                    </div>

                    <div>
                        <label
                            for="message"
                            class="block text-sm font-medium text-gray-700"
                            >Message</label
                        >
                        <textarea
                            id="message"
                            name="Message"
                            rows="5"
                            required
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm px-4 py-2 focus:ring-[#4CAF50] focus:border-[#4CAF50]"
                        ></textarea>
                    </div>

                    <button
                        type="submit"
                        class="bg-[#4CAF50] text-white px-6 py-3 rounded-full hover:bg-green-600 transition font-semibold"
                    >
                        Envoyer
                    </button>
                </form>
            </div>
        </main>

        <!-- FOOTER -->
        <?php include '../includes/footer.php'; ?>
    </body>
</html>
