<?php 
// charge le fichier head.php 
// pour factoriser mon code et gagner en lisibilité
 include "head.php";
?>
<body>
<!-- Content -->
<div class="container">
<?php include "menu.php" ?>
  <h1><?php echo $page; ?></h1>
    <?php 
    // charge le fichier (accueil.php, cv.php...)
    include $pages[$page]; 
    ?>
</div>
<?php include "footer.php";?>
</body>
</html>