document.addEventListener("DOMContentLoaded", () => {
    // ==========================================
    // 1. GESTION DU MENU BURGER (Mobile)
    // ==========================================
    const burgerBtn = document.getElementById("burgerBtn");
    const mobileMenu = document.getElementById("mobileMenu");
    const closeMenu = document.getElementById("closeMenu");

    // Ouvrir le menu
    if (burgerBtn && mobileMenu) {
        burgerBtn.addEventListener("click", () => {
            mobileMenu.classList.remove("translate-y-full"); // On enlève la classe qui le cache vers le haut
        });
    }

    // Fermer le menu
    if (closeMenu && mobileMenu) {
        closeMenu.addEventListener("click", () => {
            mobileMenu.classList.add("translate-y-full"); // On remet la classe qui le cache
        });
    }

    // ==========================================
    // 2. NAVIGATION ACTIVE STATE (Menu Vert)
    // ==========================================
    const currentPath = window.location.pathname; // L'URL actuelle du navigateur
    const navLinks = document.querySelectorAll(".nav-link");

    navLinks.forEach((link) => {
        // On utilise l'objet URL pour récupérer proprement le chemin du lien (ça gère les http://... automatiquement)
        const linkPath = new URL(link.href).pathname;
        const isContactBtn = link.classList.contains("contact-btn-desktop");
        let isActive = false;

        // --- LOGIQUE CORRIGÉE ---

        // 1. On nettoie les chemins pour éviter les soucis de "/" à la fin ou de "index.php"
        // On enlève "index.php" et le dernier "/" pour comparer ce qui compte vraiment
        const cleanCurrent = currentPath
            .replace("index.php", "")
            .replace(/\/$/, "");
        const cleanLink = linkPath.replace("index.php", "").replace(/\/$/, "");

        // 2. Comparaison
        if (cleanLink.endsWith("angelo-paysagiste") || cleanLink === "") {
            // CAS SPÉCIAL ACCUEIL (Racine du projet) :
            // Si le lien nettoyé finit par le nom du dossier projet (ou est vide à la racine),
            // on exige une égalité STRICTE.
            // Cela empêche l'accueil d'être vert quand on est sur /services
            isActive = cleanCurrent === cleanLink;
        } else {
            // CAS GÉNÉRAL (Services, Contact...) :
            // On vérifie si l'URL actuelle COMMENCE par le lien
            // ex: /angelo-paysagiste/services matche avec /angelo-paysagiste/services
            isActive = cleanCurrent.startsWith(cleanLink);
        }

        // --- APPLICATION DU STYLE (Inchangé) ---
        if (isActive) {
            if (isContactBtn) {
                link.classList.add(
                    "bg-green-700",
                    "text-white",
                    "px-5",
                    "py-3",
                    "rounded-full",
                    "font-semibold",
                    "shadow-inner"
                );
            } else {
                link.classList.add("text-[#4CAF50]", "font-semibold");
            }
        } else {
            if (isContactBtn) {
                link.classList.add(
                    "bg-[#4CAF50]",
                    "text-white",
                    "hover:bg-green-600",
                    "transition",
                    "px-5",
                    "py-3",
                    "rounded-full",
                    "font-semibold",
                    "shadow-md",
                    "hover:shadow-lg"
                );
            } else {
                link.classList.add(
                    "text-gray-700",
                    "hover:text-[#4CAF50]",
                    "transition"
                );
            }
        }
    });

    // ==========================================
    // 3. GALERIE : BOUTON "VOIR PLUS"
    // ==========================================
    const showMoreBtn = document.getElementById("showMoreBtn");
    // On cible les div cachées (celles qui ont la classe 'hidden' dans la grille)
    const hiddenItems = document.querySelectorAll("#galleryGrid .hidden");

    if (showMoreBtn) {
        showMoreBtn.addEventListener("click", () => {
            hiddenItems.forEach((item) => {
                item.classList.remove("hidden"); // On affiche

                // Petite animation d'apparition si tu as mis le CSS fade-in
                item.classList.add("fade-in");
                item.style.animation = "fadeIn 0.5s ease-in-out";
            });
            // On cache le bouton une fois cliqué
            showMoreBtn.style.display = "none";

            // Si le bouton est dans un conteneur parent, on peut aussi cacher le parent pour être propre
            const btnContainer = document.getElementById("btnContainer");
            if (btnContainer) btnContainer.style.display = "none";
        });
    }
});
