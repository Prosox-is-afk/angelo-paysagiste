<!-- HEADER -->
<header
    class="bg-white shadow-md"
    data-aos="fade-down"
    data-aos-duration="800"
>
    <div
        class="max-w-8xl mx-auto flex justify-between items-center py-4 px-6"
    >
        <!-- Logo -->
        <a href="<?php echo $root; ?>/" class="flex items-center space-x-2">
            <img
                src="<?php echo $root; ?>/assets/logo/angelo-paysagiste-logo-sans-ecriture.webp"
                alt="Logo de Angelo Cavailles, paysagiste et jardinnier à Marseille"
                class="h-10 w-auto rounded"
            />
            <span class="text-xl font-bold uppercase">
                <span class="text-[#005728]">Angelo</span>
                <span class="text-[#4CAF50]">Paysagiste</span>
            </span>
        </a>

        <!-- Bouton Burger -->
        <button
            id="burgerBtn"
            class="md:hidden text-[#005728] focus:outline-none"
        >
            <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-8 w-8"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16"
                />
            </svg>
        </button>

        <!-- Navigation Desktop -->
        <nav class="hidden md:flex items-center space-x-6">
            <a href="<?php echo $root; ?>/" class="nav-link">Accueil</a>
            <a href="<?php echo $root; ?>/services" class="nav-link">Services</a>
            <a href="<?php echo $root; ?>/realisations" class="nav-link"
                >Réalisations</a
            >
            <a href="<?php echo $root; ?>/contact" class="nav-link contact-btn-desktop">
                Contact
            </a>
        </nav>
    </div>
</header>

<!-- MENU MOBILE -->
<div
    id="mobileMenu"
    class="fixed inset-0 z-50 bg-white/95 backdrop-blur-sm flex-col items-center justify-center text-[#005728] text-xl font-semibold gap-6 transition-all duration-300 transform translate-y-full md:hidden flex"
>
    <nav class="flex flex-col items-center gap-6">
        <a href="<?php echo $root; ?>/" class="nav-link">Accueil</a>
        <a href="<?php echo $root; ?>/services" class="nav-link">Services</a>
        <a href="<?php echo $root; ?>/realisations" class="nav-link">Réalisations</a>
        <a href="<?php echo $root; ?>/contact" class="nav-link">Contact</a>
    </nav>
    <button
        id="closeMenu"
        class="mt-10 text-sm text-gray-500 hover:underline"
    >
        Fermer
    </button>
</div>