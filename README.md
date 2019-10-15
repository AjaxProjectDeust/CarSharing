# Mini site de covoiturage
https://github.com/AjaxProjectDeust/CarSharing
## Rappels
Une classe est une boite noire pour les autre, et les méthodes publiques sont les interfaces pour agir  
Ne JAMAIS faire confiance à l'utilisateur.

## Partie 1  
Vous devrez réaliser en groupe un mini site de co-voiturage.  
Vous pouvez prendre le projet donné en bas de page pour initié votre travail.  
Vous implémenterez en PHP orienté objet le système composé des éléments suivants :  

**Utilisateur** : un nom, un prénom, une adresse mail, une date de naissance, une liste de voitures, une note, une liste de commentaires à propos de l'utilisateur.  
**Voiture** : une marque, un modèle, une couleur, un nombre de places.  
**Annonce** : une ville de départ, une date de départ, une ville d'arrivée, une date d'arrivée, un utilisateur conducteur, un nombre de places, un prix, une voiture, des commentaires à propos de cette annonce.  
**Commentaire d'utilisateur** : un texte, un utilisateur auteur, une date, un utilisateur associé.  
**Commentaire d'annonce** : un texte, un utilisateur auteur, une date, une annonce associé.  
**Réservation** : une date, un utilisateur, une annonce, un status.  

Vous créerez des données de tests (utilisateurs, voiture, annonces, etc.) permettant à votre page d'accueil d'afficher quelques données.  
Votre page d'accueil devra présenter les fonctionnalités suivantes :

1. Un tableau listant tous les utilisateurs existants et leurs attributs essentiels
On peut cliquer sur un utilisateur et accéder à une page affichant tous ses attributs.  

2. Un tableau listant toutes les annonces et ses attributs essentiels
On peut cliquer sur une annonce et accéder à une page affichant tous ses attributs

Sur la page d'un utilisateur:  
On peut cliquer sur une de ses réservations pour accéder à une page affichant tous les attributs de cette réservation.  

Sur la page d'une annonce:  
On peut cliquer sur l'auteur pour accéder à la page affichant tous les attributs de cet utilisateur.  

L'affichage d'un commentaire permet de cliquer sur l'auteur de ce commentaire et d'accéder à la page affichant tous les attributs de cet utilisateur

Règles à respecter :  
> N'utilisez pas de frameworks ni de librairies externe, codez uniquement en PHP natif, orienté objet
Respectez les standards d'écriture définis dans les PHP Standard Recommendation
Soignez et commentez votre code
Répartissez vous équitablement le travail
Codez en orienté objet, comme vu dans la classe virtuelle de la semaine dernière

Vous devrez réaliser cette partie et poster votre projet dans l'espace de dépôt de fichiers (voir bas de page) avant le mercredi 16 octobre au soir.

## Partie 2  
Pour cette deuxième et dernière partie du projet, vous implémenterez en PHP orienté objet le système composé des éléments suivants :
A venir

Votre page d'accueil devra présenter les fonctionnalités suivantes :
A venir

Règles à respecter :
A venir

Vous devrez déposer dans l'espace de dépôts de fichiers avant le dimanche 20 octobre au soir une archive ZIP contenant vos fichiers PHP, un dump de votre base de donnée  (export au format .sql)ainsi qu'un mémoire en PDF de 20 pages contenant les éléments suivants :

- Votre mode d'organisation, comment vous vous êtes répartis les tâches, les moyens de communication utilisés entre vous, etc
- Un bref compte-rendu de vos différentes réunions
- Les différentes fonctionnalités que vous avez implémentées
- La structure de votre base de données et l'organisation de vos fichiers PHP
des captures d'écran qui montrent le fonctionnement de votre application
- Une conclusion générale sur le projet, ce qui marche, ce qui ne marche pas, ce que vous auriez rajouté si vous aviez eu le temps, etc.
- Une conclusion individuelle sur ce que vous a apporté ce projet, ce qui a été simple et/ou compliqué pour vous, etc.