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
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<title><?php echo $page;?></title>
<meta name="description" content="Roughly 155 characters">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
