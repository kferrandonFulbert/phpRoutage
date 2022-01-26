<html>

    <?php include 'head.php'; ?>
    <body>
        <div class="container">
            <?php include 'menu.php'; ?>

            <?php
            /**
             * Gestion des routes
             */
            $page = (isset($_GET["page"])) ? $_GET["page"] : "accueil";
            switch ($page) {
                // Je peux directement afficher du contenu dynamiquement
                case "accueil": echo "<h1>Accueil</h1><p>Bienvenue sur mon site.</p>";
                    ?> 
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="coding.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="code.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="laravel.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                <?php
                break;
            case "presentation": echo "<h1>Developpeur web</h1><p>Developpeur en BTS SIO au lycée fulbert....</p>";
                break;
            // Je peux également charger un fichier dynamiquement
            case "cv": include 'cv.php';
                break;
            case "apropos": include 'apropos.php';
                ;
                break;
            default:
                break;
        }
        ?>

        <?php include 'footer.php'; ?>
    </div>
</body>
</html>