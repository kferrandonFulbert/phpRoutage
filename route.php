<?php 
// Je récupère le paramétre page 
// (ex : index.php?page=accueil)
$page = (isset($_GET['page']))?$_GET['page']:'404';
//var_dump($page);die;
// Je créé un tableau associatif (clef =>valeur)
// pour gérer mes routes. 
// La clef correspond a la variable page.
// la valeur sera le fichier que je veux charger.

$pages=[
    'accueil'=>'accueil.php',
    'competences'=>'competences.php',
    'contact'=>'contact.php',
    'cv'=>'cv.php',
    ''=>'accueil.php',
    '404'=>'404.php'
];
// Si le paramétre page 
// n'existe pas je charge une page d'erreur 404
// et j'envoie au client que la ressource demandé n'existe pas.
 if(!isset($pages[$page])){
     $page= "404";
     header("HTTP/1.1 404 Not Found");
 }
?>