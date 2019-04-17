

<?php

include_once '_config/config.php';
include_once '_config/db.php';
include_once '_functions/functions.php';



//Deffinitions de la page actuel 

if (isset($_GET['page']) AND !empty($_GET['page'])) {
    $page = trim(strtolower($_GET['page']));
} else {
    $page = 'home';
}

$allPages = scandir('controllers/');

if (in_array($page.'_controller.php', $allPages)) {

    // Inclusion de la page 
    include_once 'models/'.$page.'_models.php';
    include_once 'controllers/'.$page.'_controller.php';
    include_once 'views/'.$page.'_views.php';
} else {
    // Retour d'une erreur 
    echo 'Erreur 404';
}