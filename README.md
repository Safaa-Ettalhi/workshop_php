# Gestion des Livres d'une Bibliothèque

## Objectifs Pédagogiques
- Apprendre à connecter une application PHP à une base de données MySQL en utilisant le driver MySQLi.
- Implémenter les opérations CRUD (Create, Read, Update, Delete) en PHP procédural.
- Comprendre et appliquer les différentes techniques de récupération de données depuis une base de données.
- Comprendre la différence entre `include`, `require`, et leurs variantes avec `once`.

## Durée de l’Activité
2h30

## Déroulement de l’Activité

### 1. Introduction Théorique (30 minutes)
#### Concepts fondamentaux
- **Connexion à une base de données avec MySQLi :**
  - Création d’une connexion sécurisée.
  - Présentation des méthodes MySQLi : procédurale, orientée objet, requêtes préparées.

- **Techniques de récupération de données (Data Fetching) :**
  - `mysqli_fetch_assoc()`: Récupérer une ligne sous forme de tableau associatif.
  - `mysqli_fetch_array()`: Récupérer une ligne sous forme de tableau associatif ou numérique.
  - `mysqli_fetch_row()`: Récupérer une ligne sous forme de tableau indexé numériquement.
  - `mysqli_fetch_all()`: Récupérer toutes les lignes sous forme de tableau multidimensionnel.
  - **Quand utiliser chaque méthode ?**

- **Différence entre `include`, `require`, `include_once`, et `require_once` :**
  - `include`: Inclut un fichier, mais continue l’exécution en cas d’erreur.
  - `require`: Inclut un fichier et interrompt l’exécution en cas d’erreur fatale.
  - `include_once`: Similaire à `include`, mais évite les doublons.
  - `require_once`: Similaire à `require`, avec vérification d’inclusion unique.

---

### 2. Étude de Cas : Gestion des Livres d'une Bibliothèque (30 minutes)
#### Contexte
L’objectif est de gérer les livres disponibles dans une bibliothèque.  
Chaque livre possède :
- un titre,
- un auteur,
- une catégorie,
- une date d’ajout,
- une disponibilité.

#### Objectifs
- Implémenter un formulaire pour ajouter un nouveau livre.
- Récupérer les livres dans un tableau en utilisant différentes techniques de fetching (`fetch_assoc`, `fetch_row`, etc.).
- Comparer et expliquer les résultats.
- Utiliser `include` et `require` pour une meilleure organisation du code (par exemple, inclusion du fichier de connexion).

---

### 3. Activité Pratique (1h30)
#### Étape 1 : Configuration de la Base de Données (10 minutes)
Création une base de données `bibliotheque` avec une table `livres` :
#### Étape 2 : Connexion à la base de données avec MySQLi (10 minutes)
Création un fichier db.php pour gérer la connexion 
#### Étape 3 : Étape 3 : Ajout d’un livre avec require_once (20 minutes)
Création un fichier ajouter_livre.php 
#### Étape 4 : Récupération et affichage des données (Data Fetching) (40 minutes)
Créer un fichier liste_livres.php
#### Étape 5 : Comparaison des méthodes (10 minutes)
Discuter des avantages/inconvénients des différentes techniques de fetching.
#### 4. Mise en commun et correction (20 minutes)
Présentation des travaux par les groupes.
Analyse des méthodes utilisées et choix argumentés entre include, require, et leurs variantes.
Discussion collective sur les meilleures pratiques.

