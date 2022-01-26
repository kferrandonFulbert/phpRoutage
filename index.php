<html>
     <?php include 'head.php'; ?>
    <body>
        <div class="container">
        <?php include 'menu.php'; ?>
        
        <?php
        /**
         * Gestion des routes
         */
        $page = (isset($_GET["page"]))?$_GET["page"]:"home";
        switch ($page){
            case "home": echo "Welcome";
                break;
            case "presentation": echo "<h1>Developpeur web</h1><p>Developpeur en BTS SIO au lycée fulbert....</p>";
                break; 
            case "cv": include 'cv.php';
                break; 
            case "apropos": echo "todo";
                break; 
            default:
                break;
        }
        ?>

        <?php include 'footer.php'; ?>
        </div>
    </body>
</html>