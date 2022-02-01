<?php 
 include "head.php";
?>
<body>
<!-- Content -->
<div class="container">
<?php include "menu.php" ?>
  <h1><?php echo $page; ?></h1>
    <?php include $page.".php" ?>
</div>
<?php include "footer.php";?>
</body>
</html>