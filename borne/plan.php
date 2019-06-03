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
    
  </head>
    
  <body>
    <div class="container text-center"> <!-- Création du corps de la page -->
        <div class="row">
            <div class="col-xl-6 col-xs-6 col-md-6">
            PLAN
            </div>
            
            <div class="col-xl-6 col-xs-6 col-md-6 conteneurcartes">
            <div class="carte">
                <?php
                $exposants = file_get_contents('exposants.json');
                $exposants = json_decode($exposants, true); 
                for($i=0;$i<count($exposants['exposants']);$i++) : ?>
                <div class="card w-75">
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
      
    <!-- Javascript optionnel -->

    <!-- jQuery, puis Popper.js, puis Bootstrap JS -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
    
</html>