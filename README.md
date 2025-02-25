# SAE-Spondy
Voici un fichier `README.md` détaillé pour votre projet :  

---

## 📌 AFS - Refonte de site

### 📝 Description  
Ce projet est une plateforme permettant aux utilisateurs de s'inscrire, de se connecter et de remplir un questionnaire en ligne. Les administrateurs peuvent visualiser les réponses sous forme de tableaux et de graphiques interactifs avec **D3.js**.

### 🛠️ Technologies utilisées  
- **Backend** : PHP, MySQL  
- **Frontend** : HTML, CSS, JavaScript  
- **Frameworks/Libraries** : D3.js (visualisation des données)  

---

## 🚀 Installation et Configuration  

### 1️⃣ Prérequis  
- Serveur local (**XAMPP, WAMP, Laragon** ou autre)  
- **PHP 7+**  
- **MySQL**  

### 2️⃣ Cloner le projet  
```bash
git clone https://github.com/daywon03/SAE-Spondy.git  
cd Spondy  
```

### 3️⃣ Configuration de la base de données  
1. Importez le fichier **afs_quiz.sql** dans **phpMyAdmin**  
2. Vérifiez que la base **AFS-Quiz** et les tables (**users**, **questionnaire**, etc.) sont bien créées.  

### 4️⃣ Modifier la configuration  
Dans `config.php`, mettez à jour les accès à votre base MySQL :  
```php
define('DB_HOST', 'localhost');  
define('DB_NAME', 'AFS-Quiz');  
define('DB_USER', 'root');  
define('DB_PASSWORD', '');  
```
---

## ⚙️ Fonctionnalités  

### 🔹 Utilisateur  
- Inscription / Connexion  
- Remplissage d’un **questionnaire unique**  
- Redirection après soumission  

### 🔹 Administrateur  
- Tableau de bord des réponses  
- **Visualisation des données** via **D3.js**  
- Graphiques dynamiques :  
  - **Répartition régionale** (camembert)  
  - **Distribution des âges** (barres regroupées)  
  - **Besoins des utilisateurs** (barres verticales)  

---

## 🎯 Améliorations futures  
✅ Vérification avancée des entrées utilisateurs  
✅ Authentification des administrateurs  
✅ Système d’exportation des données (CSV, PDF)  

---
