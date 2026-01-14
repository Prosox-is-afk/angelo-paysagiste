document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");

    // --- 1. GESTION DES MESSAGES PHP EXISTANTS ---
    // Si la page se recharge et que PHP a affiché un succès ou une erreur,
    // on le capture pour l'afficher en "Toast" stylé, puis on cache l'original.

    const phpSuccess = document.getElementById("msg-success");
    const phpError = document.getElementById("msg-error");

    if (phpSuccess) {
        showNotification("Message envoyé avec succès !", "success");
        phpSuccess.style.display = "none"; // On cache le vieux bandeau
    }

    if (phpError) {
        showNotification(phpError.innerText, "error");
        phpError.style.display = "none";
    }

    // --- 2. VALIDATION JS AVANT ENVOI ---
    if (form) {
        form.addEventListener("submit", function (e) {
            const nameInput = document.getElementById("name");
            const emailInput = document.getElementById("email");
            const messageInput = document.getElementById("message");

            // Regex
            const nameRegex = /^[a-zA-ZÀ-ÿ\s'-]+$/;
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            let hasError = false;

            // Validation NOM
            if (!nameRegex.test(nameInput.value.trim())) {
                showNotification(
                    "Le nom contient des caractères invalides.",
                    "error"
                );
                highlightError(nameInput);
                hasError = true;
            } else {
                removeError(nameInput);
            }

            // Validation EMAIL
            if (!emailRegex.test(emailInput.value.trim())) {
                showNotification("L'adresse email n'est pas valide.", "error");
                highlightError(emailInput);
                hasError = true;
            } else {
                removeError(emailInput);
            }

            // Validation MESSAGE
            if (messageInput.value.trim().length < 10) {
                showNotification(
                    "Le message est trop court (min. 10 caractères).",
                    "error"
                );
                highlightError(messageInput);
                hasError = true;
            } else {
                removeError(messageInput);
            }

            // Si erreur, on bloque l'envoi
            if (hasError) {
                e.preventDefault();
            }
        });
    }

    // --- 3. FONCTIONS UTILITAIRES ---

    function highlightError(element) {
        element.classList.add("border-red-500", "ring-1", "ring-red-500");
        element.classList.remove("border-gray-300");
    }

    function removeError(element) {
        element.classList.remove("border-red-500", "ring-1", "ring-red-500");
        element.classList.add("border-gray-300");
    }

    // --- 4. LE SYSTÈME DE NOTIFICATION (TOAST) ---
    function showNotification(message, type = "success") {
        const container = document.getElementById("toast-container");

        // Création de l'élément
        const toast = document.createElement("div");

        // Configuration des couleurs et icones selon le type
        let colors =
            type === "error"
                ? "border-red-500 text-red-700"
                : "border-green-500 text-green-700";
        let icon =
            type === "error"
                ? `<svg class="w-6 h-6 mr-2 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>`
                : `<svg class="w-6 h-6 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>`;

        // Structure HTML Tailwind
        toast.className = `flex items-center w-full max-w-sm p-4 mb-4 bg-white rounded-lg shadow-lg border-l-4 ${colors} transform transition-all duration-300 translate-x-full opacity-0`;
        toast.innerHTML = `
            <div class="flex items-center">
                ${icon}
                <div class="text-sm font-semibold">${message}</div>
            </div>
        `;

        // Ajout au DOM
        container.appendChild(toast);

        // Animation d'entrée (petit délai pour que le CSS prenne en compte la transition)
        requestAnimationFrame(() => {
            toast.classList.remove("translate-x-full", "opacity-0");
        });

        // Suppression automatique après 5 secondes
        setTimeout(() => {
            toast.classList.add("translate-x-full", "opacity-0"); // Animation de sortie
            setTimeout(() => {
                toast.remove(); // Suppression réelle du DOM
            }, 300); // Attendre la fin de l'animation (300ms)
        }, 5000);
    }
});
