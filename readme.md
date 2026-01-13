# 🌿 Angelo Paysagiste - Site Vitrine

Ce projet est le site vitrine d'un artisan paysagiste basé à Marseille. Il a été conçu pour être léger, rapide et optimisé pour le référencement local (SEO).

Le site utilise une architecture **PHP Native** (sans framework lourd) avec un système de routage via `.htaccess` pour des URLs propres et modernes.

## 🚀 Fonctionnalités

-   **Design Responsive & Moderne** : Interface soignée utilisant Tailwind CSS.
-   **Architecture Modulaire** : Utilisation d'`includes` PHP (Header, Footer) pour faciliter la maintenance.
-   **SEO Local Puissant** : Pages dédiées ("Landing Pages") pour les villes voisines (Aubagne, Cassis, Aix, etc.) avec données structurées JSON-LD.
-   **URLs Propres** : Réécriture d'URL via `.htaccess` (ex: `/services` au lieu de `/pages/services.php`).
-   **Animations** : Intégration de la librairie AOS (Animate On Scroll).
-   **Navigation Active** : Le menu détecte automatiquement la page en cours.

## 🛠️ Stack Technique

-   **Langage** : PHP 8.x (Compatible 7.4+)
-   **Style** : Tailwind CSS (via CDN pour la simplicité de développement)
-   **Script** : JavaScript Vanilla (ES6+)
-   **Serveur** : Apache (Requis pour le `.htaccess`)

## 📂 Structure du Projet

```text
angelo-paysagiste/
├── assets/             # Images, logos et icônes
│   ├── img/
│   ├── logo/
│   └── realisations/
├── includes/           # Fichiers PHP réutilisables
│   ├── header.php
│   └── footer.php
├── js/                 # Scripts JavaScript
│   └── main.js         # Gestion du menu, galerie et navigation active
├── pages/              # Les pages de contenu
│   ├── contact.php
│   ├── services.php
│   ├── realisations.php
│   ├── faq.php
│   ├── mentions.php
│   └── paysagiste-aubagne.php (et autres villes...)
├── .htaccess           # Configuration du routage et sécurité
├── config.php          # Variables globales ($root)
├── index.php           # Page d'accueil
└── README.md           # Documentation
```

## 💻 Installation en Local (WAMP / XAMPP / MAMP)

1. **Cloner ou télécharger** le projet dans votre dossier serveur (ex: `C:/wamp64/www/angelo-paysagiste/`).
2. **Activer le module Rewrite** :
   Assurez-vous que le module `rewrite_module` est activé sur votre serveur Apache (Via le menu WAMP > Apache > Modules).
3. **Configurer le .htaccess pour le local** :
   Ouvrez le fichier `.htaccess` et assurez-vous que la `RewriteBase` pointe vers votre dossier de projet :

```apache
RewriteEngine On
RewriteBase /angelo-paysagiste/
```

## 🌍 Mise en Production (Mise en ligne)

Lors du transfert des fichiers sur votre hébergeur (OVH, Hostinger, O2Switch...) via FTP :

1. Mettre à jour `config.php`:

`$root = "[https://angelopaysagiste.fr](https://angelopaysagiste.fr)"; // Votre vrai nom de domaine`

2. Mettre à jour `.htaccess ` : C'est l'étape la plus importante. Passez la base à la racine et forcez le HTTPS.

```
RewriteEngine On
RewriteBase /

# Forcer le HTTPS
RewriteCond %{HTTPS} off
RewriteRule ^(.*)$ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]
```

3. Transférer les fichiers : Envoyez tout le contenu sauf les dossiers .git ou .vscode s'ils existent.

## ✨ Bonnes Pratiques SEO intégrées

Maillage interne : Liens croisés entre les pages villes et les services.

Canonical : Balises présentes pour éviter le contenu dupliqué (Duplicate Content).

JSON-LD : Données structurées Schema.org (LocalBusiness) dynamiques selon la ville visitée.

Performance : Pas de chargement inutile, structure légère.

📝 Auteur

Projet réalisé pour Angelo Paysagiste par Prosox. Développé avec ❤️ et du code propre.
