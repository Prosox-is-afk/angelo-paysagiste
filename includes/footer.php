<!-- CTA Final -->
<section class="py-20 bg-[#4CAF50] text-white mt-20">
    <div class="text-center px-6 max-w-3xl mx-auto" data-aos="zoom-in">
        <h2 class="text-3xl sm:text-4xl font-bold mb-6">
            Besoin d’un paysagiste à Marseille ou alentours ?
        </h2>
        <p class="text-lg mb-10">
            Prenez contact avec moi pour bénéficier d’un devis gratuit
            et personnalisé. J’interviens rapidement dans toute la
            région.
        </p>
        <a
            href="<?php echo $root; ?>/contact"
            class="bg-white text-[#005728] font-semibold px-8 py-4 rounded-full hover:bg-gray-100 transition duration-300 inline-block"
            aria-label="Demander un devis gratuit à Angelo Paysagiste"
        >
            Demandez un devis gratuit
        </a>
    </div>
</section>

<footer class="bg-[#333] text-white pt-12 pb-6">
    <div class="max-w-6xl mx-auto px-6 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-5 gap-8">
        
        <div>
            <div class="flex items-center space-x-2 mb-4">
                <img src="<?php echo $root; ?>/assets/logo/angelo-paysagiste-logo-sans-ecriture.webp"
                    alt="Logo de Angelo Cavailles, paysagiste et jardinier à Marseille" 
                    class="w-10 h-10 rounded-full" />
                <span class="font-bold text-lg uppercase tracking-wider">
                    Angelo Paysagiste
                </span>
            </div>
            <p class="text-sm">
                Création et entretien d'espaces verts à Marseille et alentours.
            </p>
        </div>

        <div>
            <h4 class="font-semibold uppercase text-sm mb-4">Navigation</h4>
            <ul class="space-y-2 text-sm">
                <li><a href="<?php echo $root; ?>/" class="hover:underline">Accueil</a></li>
                <li><a href="<?php echo $root; ?>/services" class="hover:underline">Services</a></li>
                <li><a href="<?php echo $root; ?>/realisations" class="hover:underline">Réalisations</a></li>
                <li><a href="<?php echo $root; ?>/contact" class="hover:underline">Contact</a></li>
            </ul>
        </div>

        <div>
            <h4 class="font-semibold uppercase text-sm mb-4">Infos légales</h4>
            <ul class="space-y-2 text-sm">
                <li><a href="<?php echo $root; ?>/mentions-legales" class="hover:underline">Mentions légales</a></li>
                <li><a href="<?php echo $root; ?>/faq" class="hover:underline">FAQ</a></li>
            </ul>
        </div>

        <div>
            <h4 class="font-semibold uppercase text-sm mb-4">Coordonnées</h4>
            <ul class="space-y-2 text-sm">
                <li><a href="tel:+33625150685" class="hover:underline">06 25 15 06 85</a></li>
                <li><a href="mailto:angelopaysagistepro@gmail.com" class="hover:underline">angelopaysagistepro@gmail.com</a></li>
                <li><span class="text-white/80">Marseille (13)</span></li>
            </ul>
        </div>

        <div>
            <h4 class="font-semibold uppercase text-sm mb-4">Villes voisines</h4>
            <ul class="space-y-2 text-sm">
                <li><a href="<?php echo $root; ?>/paysagiste-aix-en-provence" class="hover:underline">Aix en Provence</a></li>
                <li><a href="<?php echo $root; ?>/paysagiste-aubagne" class="hover:underline">Aubagne</a></li>
                <li><a href="<?php echo $root; ?>/paysagiste-cassis" class="hover:underline">Cassis</a></li>
                <li><a href="<?php echo $root; ?>/paysagiste-la-ciotat" class="hover:underline">La Ciotat</a></li>
                <li><a href="<?php echo $root; ?>/paysagiste-plan-de-cuques" class="hover:underline">Plan-de-Cuques</a></li>
            </ul>
        </div>
    </div>

    <div class="text-center text-sm text-white/80 mt-10 px-6">
        <p>© 2025 – Angelo Paysagiste. Tous droits réservés.</p>
    </div>
</footer>
<script src="<?php echo $root; ?>/js/main.js"></script>
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
AOS.init({
    duration: 800,
    offset: 200,
    easing: "ease-in-out",
    once: true,
});
</script>