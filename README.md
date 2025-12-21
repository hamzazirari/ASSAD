# 🦁 Zoo Virtuel ASSAD

Projet web PHP/MySQL pour gérer un zoo virtuel avec rôles : admin, guide, visiteur.

---

## Description
- Inscription et connexion des utilisateurs
- Gestion des rôles (admin, guide, visiteur)
- Validation des guides par l’admin
- Gestion des animaux et habitats
- Dashboard admin sécurisé

---

## Technologies
- PHP (procédural)
- MySQL / MariaDB
- HTML/CSS (Tailwind)
- Apache (XAMPP/WAMP)

---

## Installation
1. Copier le projet dans `htdocs` (ou équivalent)
2. Lancer Apache + MySQL
3. Créer une base de données `assad`
4. Importer `assad.sql` via phpMyAdmin

---

## Compte Admin
Exécuter cette requête SQL pour créer un admin :

```sql
INSERT INTO utilisateurs (nom, email, rôle, motpasse_hash, statut)
VALUES (
  'Admin',
  'admin@example.com',
  'admin',
  '$2y$10$E4xIuYjV9X9uU/2rS2aL.eVRyqBq5rQ8gQWkP7z6D5yF5A8eU0F6G',
  'actif'
);
