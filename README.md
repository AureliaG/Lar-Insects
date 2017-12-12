# Lar-Insects


laravel-project
==================

L’objectif est de créer un carnet d’adresse pour insecte sous laravel à savoir:

    (Inscription/Connexion/Déconnexion) de l’insecte par login/mot de passe
    (Afficher/Modifier) mes informations (age / famille / race / nourriture)
    (Ajouter/Lister/Supprimer) un insecte de sa liste d’amis (relation “many to many”)

	Voir trello pour détail sur le développement des userstories
	https://trello.com/b/OTSSn86K/lar-insects
	Page d'accueil 
	Page de connexion
	Page de profil 
	Page liste d'amis
	Page de modification 

	## User story 1-2-3: Je veux m'inscrire, me connecter et me déconnecter

Toujours s'assurer qu'on ne travaille pas sur la branche Master mais Develop et/ou Feature.
 ### 1-Commencer par travailler sur branche Develop:
 $ git checkout -b develop
 
 ### 2-Puis créer une branche Feature et se mettre dessus
 $ git checkout -b feature/auth develop
 
 ### 3-Créer une BDD via phpmyadmin et modifier dans .env en changeant les configuration avec le nom de la BDD
 
 ### 4-Créer les boutons de connexion et inscription utilisateur qui seront reliés à la BDD
 $ php artisan make:auth
 $ php artisan migrate
 
 --> Attention, si problème de connexion, s'assurer d'avoir fait la commande :
 	$ chmod -R a+w storage bootstrap
