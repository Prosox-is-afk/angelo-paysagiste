document.addEventListener("DOMContentLoaded", function () {
    const burgerBtn = document.getElementById("burgerBtn");
    const mobileMenu = document.getElementById("mobileMenu");
    const closeMenu = document.getElementById("closeMenu");

    burgerBtn?.addEventListener("click", () => {
        mobileMenu.classList.remove("translate-y-full");
    });

    closeMenu?.addEventListener("click", () => {
        mobileMenu.classList.add("translate-y-full");
    });
});

document.addEventListener("DOMContentLoaded", () => {
    const currentPage =
        window.location.pathname.split("/").pop() || "index.html";
    const navLinks = document.querySelectorAll(".nav-link");

    navLinks.forEach((link) => {
        const href = link.getAttribute("href");
        const isDesktopBtn = link.classList.contains("contact-btn-desktop");

        if (
            href === currentPage ||
            (href === "index.html" && currentPage === "")
        ) {
            if (href === "contact.html" && isDesktopBtn) {
                // Contact bouton desktop actif
                link.classList.add("bg-green-600", "text-white");
            } else {
                link.classList.add("text-[#4CAF50]", "font-semibold");
            }
        } else {
            if (href === "contact.html" && isDesktopBtn) {
                // Contact bouton desktop inactif
                link.classList.add(
                    "bg-[#4CAF50]",
                    "text-white",
                    "hover:bg-green-600",
                    "transition",
                    "px-5",
                    "py-3",
                    "rounded-full",
                    "font-semibold"
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
});
