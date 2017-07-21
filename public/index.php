<?php
include_once '../private/app/init.php';

//On inclut l'en tete html du document
include_once VIEWS_DIRECTORY.'header.php';

//include_once VIEWS_DIRECTORY.'home.php';
include_once VIEWS_DIRECTORY.$router[$page][0];
// On inclut le pied du document
include_once VIEWS_DIRECTORY . 'footer.php';