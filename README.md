# Lar-Insects


laravel-project
==================

L�objectif est de cr�er un carnet d�adresse pour insecte sous laravel � savoir:

    (Inscription/Connexion/D�connexion) de l�insecte par login/mot de passe
    (Afficher/Modifier) mes informations (age / famille / race / nourriture)
    (Ajouter/Lister/Supprimer) un insecte de sa liste d�amis (relation �many to many�)

	Voir trello pour d�tail sur le d�veloppement des userstories
	https://trello.com/b/OTSSn86K/lar-insects
	Page d'accueil 
	Page de connexion
	Page de profil 
	Page liste d'amis
	Page de modification 

	## User story 1-2-3: Je veux m'inscrire, me connecter et me d�connecter

Toujours s'assurer qu'on ne travaille pas sur la branche Master mais Develop et/ou Feature.
 ### 1-Commencer par travailler sur branche Develop:
 $ git checkout -b develop
 
 ### 2-Puis cr�er une branche Feature et se mettre dessus
 $ git checkout -b feature/auth develop
 
 ### 3-Cr�er une BDD via phpmyadmin et modifier dans .env en changeant les configuration avec le nom de la BDD
 
 ### 4-Cr�er les boutons de connexion et inscription utilisateur qui seront reli�s � la BDD
 $ php artisan make:auth
 $ php artisan migrate
 
 --> Attention, si probl�me de connexion, s'assurer d'avoir fait la commande :
 	$ chmod -R a+w storage bootstrap
