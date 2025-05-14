# Laravel Bookmark Manager

Un outil personnel de gestion de favoris développé avec Laravel, Livewire, Filament et TailwindCSS.  
Permet de stocker, classer, rechercher et enrichir automatiquement les liens enregistrés, avec une interface moderne, rapide, et personnalisée.

---

## Installation

### 1. Cloner le projet

```bash
git clone https://github.com/votre-utilisateur/laravel-bookmark-manager.git
cd laravel-bookmark-manager
```

2. Configuration de l’environnement

```bash
cp .env.example .env
```

Configurer la base de données dans .env.

3. Installer les dépendances

```bash
composer install
npm install
```

4. Compiler les assets

En développement :

```bash
npm run dev
```

Pour la production :

```bash
npm run build
```

5. Lancer les migrations et seeders

```bash
php artisan migrate
php artisan db:seed
```

Les seeders initiaux peuvent contenir des dossiers, tags ou un utilisateur.

6. Démarrer le serveur

```bash
php artisan serve
```

⸻

Accès au backoffice

L’interface d’administration est accessible via /admin
Authentification requise (un seul utilisateur, sans gestion multi-compte).

⸻

Fonctionnalités
	•	Ajout de favoris avec enrichissement automatique :
	•	Titre
	•	Favicon
	•	Meta description
	•	Gestion des tags multiples (Spatie)
	•	Attribution facultative à un dossier
	•	Affichage des favoris sous forme de grille, liste ou timeline
	•	Recherche intelligente (titre, URL, description, tags)
	•	Filtrage par tags, dossier, à lire plus tard, favoris épinglés
	•	Statistiques :
	•	Nombre de visites
	•	Dernière visite
	•	Notes personnelles par favori
	•	Export CSV et JSON
	•	Préparation à une future extension Chrome ou bookmarklet

⸻

Stack technique
	•	Laravel 11
	•	Livewire 3
	•	FilamentPHP 3.x
	•	TailwindCSS
	•	Spatie Tags
	•	Embed.php (pour enrichissement auto des URLs)
	•	SQLite ou MySQL

---

## **Description pour ton repo GitHub**

> Un outil personnel de gestion de favoris développé avec Laravel, Livewire et Filament.  
> Classez, taguez, explorez, et enrichissez automatiquement vos liens préférés avec une interface moderne et rapide.  

Parfait. Voici ce que je te propose :

---

## 🧭 **Roadmap du projet de gestion de favoris (Nuxt + SQLite via Nitro)**

### ✅ **V1 – MVP (fonctionnel, personnel, local ou auto-hébergé)**

Objectif : Avoir un outil simple, fiable, rapide à utiliser.

#### 🔧 Fonctionnalités :

* [x] Interface minimaliste avec Nuxt 3
* [x] Stockage en base SQLite (via Nitro DB driver)
* [x] Page principale affichant les favoris (vue grille)
* [x] Ajout d’un favori via modale :

  * titre, URL, tags multiples, description
* [x] Validation simple (URL bien formée, pas vide, etc.)
* [x] Filtrage par tags
* [x] Recherche par titre/URL
* [x] Authentification simple (auth de développement ou par token dans l’URL si pas de back)

#### 🗃 Tech :

* Nuxt 3 (composition API)
* Nitro DB avec SQLite
* Tailwind CSS pour UI
* Pinia si besoin pour état global
* Aucune dépendance superflue

---

### 🚧 **V2 – Améliorations UX et fonctionnelles**

#### ⚙️ Fonctionnalités :

* [ ] Tri (date d’ajout, alphabétique, etc.)
* [ ] Tags cliquables (pour filtrage rapide)
* [ ] Édition & suppression de favoris
* [ ] Animation + transition (ex : Framer Motion ou Nuxt Transitions)
* [ ] Groupement intelligent (par usage ou domaine)
* [ ] Preview visuelle de la page (Open Graph, favicon, capture)

---

### 🚀 **V3 – Extension Chrome & enrichissement**

#### ⚙️ Fonctionnalités :

* [ ] Extension Chrome :

  * détecte URL active
  * ouverture rapide du formulaire
* [ ] Ajout rapide via bookmarklet ou raccourci clavier
* [ ] Import favoris navigateur
* [ ] Archiver un favori
* [ ] Historique d’utilisation (optionnel)

---

### 🌐 **V4 – Version publique / partage**

#### ⚙️ Fonctionnalités :

* [ ] Export JSON/CSV
* [ ] Sélection publique (ex : `public: true`)
* [ ] Mode lecture seule partagé (ex : page publique avec lien)
* [ ] Statistiques d’usage

---

## ✍️ **Note de motivation / intention à inclure dans le repo**

```md
## Pourquoi ce projet ?

J’ai accumulé des dizaines (voire centaines) de favoris dans mon navigateur, répartis dans des dossiers que je ne retrouve pas toujours facilement. Certains liens me sont devenus indispensables, d’autres tombent dans l’oubli alors qu’ils restent pertinents.

Ce projet a pour but de centraliser tous mes favoris dans un outil personnel, rapide, visuel, et intelligent.

## Objectifs

- M’offrir une meilleure vue d’ensemble de mes liens utiles
- Pouvoir les taguer, décrire, retrouver rapidement
- Garder un système simple, rapide, portable (Nuxt + SQLite)
- Préparer une future extension de navigateur pour capturer des liens à la volée
- Éventuellement partager une sélection publique

---

Je ne cherche pas à réinventer un outil comme Raindrop.io ou Notion, mais à construire **mon propre système**, pensé pour **mon usage réel**, et extensible avec les outils que j’aime utiliser.
```

Souhaites-tu que je prépare également :

* Le `README.md` complet incluant cette note ?
* Le squelette du projet Nuxt (`nuxi init`) avec base SQLite et première route d’API ?
