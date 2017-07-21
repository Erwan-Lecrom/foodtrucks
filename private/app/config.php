<?php 
//-------------------
//Parametre de connexion BDD
//-------------------

//Addresse du serveur de base de données 
$host='127.0.0.1';

//Nom utilisateur de la base de donnees 
$user ='root';

//Mot de passe 
$pass='';
//Nom base de données 
$database = "foodtrucks";

// --------------------
// CONSTANTS
// --------------------

// -- Execution mode
define("MODE", "dev"); // dev | prod
// -- Directories
define("VIEWS_DIRECTORY","../private/views/");

//-----------
// DEFAULT VARS 
//-----------
$default_page='home';