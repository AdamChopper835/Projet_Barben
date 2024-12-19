<?php
 $curl = curl_init();

 curl_setopt_array($curl, array(
   CURLOPT_URL => 'http://localhost/projet%20webdev/liste%20des%20services.php',
   CURLOPT_RETURNTRANSFER => true,
   CURLOPT_ENCODING => '',
   CURLOPT_MAXREDIRS => 10,
   CURLOPT_TIMEOUT => 0,
   CURLOPT_FOLLOWLOCATION => true,
   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
   CURLOPT_CUSTOMREQUEST => 'GET',
 ));
 
 $response = curl_exec($curl);
 
 curl_close($curl);
$services = json_decode($response);
?>


<!DOCTYPE html>
<style>
            /* Style de base pour les liens */
            .link {
                color: #149b2b ;             /* Couleur du lien */
                font-weight: bold;          /* Gras pour plus de visibilité */
                text-decoration: none;      /* Enlève le soulignement */
                padding: 8px 16px;          /* Ajoute un peu de marge interne */
                border-radius: 5px;         /* Arrondit les coins */
                background-color: #f0f0f0;  /* Arrière-plan léger */
                transition: all 0.3s ease;  /* Transition pour les effets au survol */
            }
    
            /* Style au survol */
            .link:hover {
                color: #fff;                /* Change la couleur du texte */
                background-color: green;  /* Change la couleur d'arrière-plan */
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Ombre pour effet 3D */
            }
    
            /* Style pour l'état actif/click */
            .link:active {
                background-color: #1d5a82;  /* Arrière-plan plus foncé au clic */
                transform: scale(0.98);     /* Légère réduction de taille au clic */
            }
    
            /* Container Flexbox pour l'alignement */
            .nav {
                display: flex;
                gap: 10px; /* Espace entre les liens */
            }
            #p{text-indent:20em;}
            #i{text-indent: 2em;}

            .greenText {
                color:  #149b2b;}
            
        </style>
      
             
    </head>
    <body>
    
        <div class="nav">
            
            <a> <h1 id="i"  class="greenText">Parc animalier de la Barben </h1> </a>
           <h5 id="p">.</h5>
           <p><a  href="Barben_page_principale.html" class="link">Acceuil</a></p>
           <p><a href="Barben_animaux.php" class="link">Nos animaux </a></p>
           <p><a  href="page3.html" class="link">Navigation </a> </p>
            <p><a  href="page_de_connexion.html" class="link">Se connecter </a></p>
            <p><a  href="billetterie.html" class="link">Billeterie </a> </p>
           
        


        </div>


    </body>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Services</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f9f9f9;
        }
        h1 {
            text-align: center;
        }
        .service {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 15px;
            padding: 10px 15px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <h1>Liste des Services</h1>
    <div class="services">
        <?php foreach ($services as $service) {
            ?>
            <div class="service">
                
                <h2>Service : <?= htmlspecialchars($service->nom_service) ?></h2>
                <p>ID Biomes associés : <?= htmlspecialchars($service->id_biomes) ?></p>
                <img src="lodge.jpg" >
            </div>
        <?php } ?>
    </div>
</body>
</html>
