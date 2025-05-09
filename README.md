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

---

Souhaites-tu que je t’envoie aussi le `composer.json` et un `package.json` de base adaptés à ce projet, pour démarrer rapidement ?