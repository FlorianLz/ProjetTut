<!DOCTYPE html>
<html lang="fr">
    
  <head>

    <title>Plan</title>
      
    <!-- Définition des meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Chargement du CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
  </head>
    
  <body>
    <div class="container text-center"> <!-- Création du corps de la page -->
        <div class="row">
            <div class="col-xl-3 "><img src="image/Convention-NOIR.png" class="logo"></div>
            <div class="col-xl-3 d-flex align-center justify-content-center"><button type="button" class="btn btn-primary">ACTUS</button></div>
            <div class="col-xl-3 d-flex align-center justify-content-center"><button type="button" class="btn btn-primary">PLAN</button></div>
            <div class="col-xl-3 "><?php date_default_timezone_set('UTC'); echo date("H:i");?></div>
        
        
        
        
        
        </div>
        <div class="row">
            <div class="col-xl-8 col-xs-8 col-md-8">
            PLAN
            </div>
            
            <div class="col-xl-4 col-xs-4 col-md-4 conteneurcartes">
                <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
                </div>
                <div class="carte">
                    <center><div style="width:100%;">
                        <button class="selection btn-default filter-button" data-filter="tout">Tout</button>
                        <button class="selection btn-default filter-button" data-filter="vente">Vente</button>
                        <button class="selection btn-default filter-button" data-filter="console">Console</button>
                        <button class="selection btn-default filter-button" data-filter="services">Services</button>
                        <button class="selection btn-default filter-button" data-filter="partenaire">Partenaire</button>
                        </div></center>    
                    <?php
                    $exposants = file_get_contents('exposants.json');
                    $exposants = json_decode($exposants, true); 
                    for($i=0;$i<count($exposants['exposants']);$i++) : ?>
                    <div class="card w-100 <?php echo $exposants['exposants'][$i]['filtre']; ?> filter">
                      <div class="card-body">
                        <h5 class="card-title"><?php echo $exposants['exposants'][$i]['nom']; ?></h5>
                        <p class="card-text"><?php echo $exposants['exposants'][$i]['description']; ?></p>
                      </div>
                    </div>    

                <?php endfor; ?>
                </div>
            </div>
        
        
        
        
        </div>
    </div> 
    <script src="js/script.js"></script>
      
    <!-- Javascript optionnel -->

    <!-- jQuery, puis Popper.js, puis Bootstrap JS -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
    
</html>