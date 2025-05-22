const services = [
    {
        title: "Entretien espaces verts",
        img: "assets/services/entretien-espace-vert.png",
    },
    { title: "Élagage", img: "assets/services/elagage.png" },
    { title: "Création de jardin", img: "assets/services/jardin.png" },
    { title: "Pose de gazon", img: "assets/services/gazon.png" },
    { title: "Arrosage automatique", img: "assets/services/arrosage-auto.png" },
    { title: "Clôture & Maçonnerie", img: "assets/services/cloture.png" },
    { title: "Évacuation des végétaux", img: "assets/services/evacuation.png" },
    { title: "Travail en hauteur", img: "assets/services/hauteur.png" },
    { title: "Conseils personnalisés", img: "assets/services/conseils.png" },
];

const container = document.getElementById("carousel-marquee");
const template = document.getElementById("service-card-template");

function addServices(repeat = 2) {
    for (let r = 0; r < repeat; r++) {
        services.forEach((service) => {
            const clone = template.content.cloneNode(true);
            const img = clone.querySelector("img");
            const p = clone.querySelector("p");
            img.src = service.img;
            img.alt = service.title;
            p.textContent = service.title;
            container.appendChild(clone);
        });
    }
}

addServices(3); // 2x pour boucle infinie

let scrollSpeed = 2.5;

function animate() {
    container.scrollLeft += scrollSpeed;
    console.log("scrolling", container.scrollLeft);
    if (container.scrollLeft >= container.scrollWidth / 2) {
        container.scrollLeft = 0;
    }
    requestAnimationFrame(animate);
}

animate();
