<?php
$services = ["Creation" => "Realisation de vos sites web sur mesure....",
    "Seo"=> "Audit sur mesure de votre site...",
    "Formation"=> "Formation web sur mesure adapté à vos besoins"
];
?>
<div class="row">
    <?php foreach ($services as $service=>$description) { ?>
    <div class="col-4">
        <div class="card">
          <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text></svg>
            <h2><?=$service?></h2>
            <div class="card-body">
                <p class="card-text"><?= $description; ?></p>
            </div>
        </div>
    </div>
    <?php } ?>
</div>