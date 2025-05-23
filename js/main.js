document.addEventListener("DOMContentLoaded", () => {
    // BURGER MENU
    const burgerBtn = document.getElementById("burgerBtn");
    const mobileMenu = document.getElementById("mobileMenu");
    const closeMenu = document.getElementById("closeMenu");

    burgerBtn?.addEventListener("click", () => {
        mobileMenu.classList.remove("translate-y-full");
    });

    closeMenu?.addEventListener("click", () => {
        mobileMenu.classList.add("translate-y-full");
    });

    // NAVIGATION ACTIVE STATE
    const currentPage =
        window.location.pathname.split("/").pop() || "index.html";
    const navLinks = document.querySelectorAll(".nav-link");

    navLinks.forEach((link) => {
        const href = link.getAttribute("href");
        const isContactBtn = link.classList.contains("contact-btn-desktop");

        if (
            href === currentPage ||
            (href === "index.html" && currentPage === "")
        ) {
            if (isContactBtn && href === "contact.html") {
                link.classList.add(
                    "bg-green-600",
                    "text-white",
                    "px-5",
                    "py-3",
                    "rounded-full",
                    "font-semibold"
                );
            } else {
                link.classList.add("text-[#4CAF50]", "font-semibold");
            }
        } else {
            if (isContactBtn && href === "contact.html") {
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

    // "VOIR PLUS" IMAGES
    const btn = document.getElementById("showMoreBtn");
    const hiddenImgs = document.querySelectorAll("#galleryGrid img.hidden");

    btn?.addEventListener("click", () => {
        hiddenImgs.forEach((img) => img.classList.remove("hidden"));
        btn.style.display = "none";
    });
});
