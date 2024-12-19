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
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Services</title>
    <style>
        /* Styles généraux */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        h1 {
            text-align: center;
            margin: 20px 0;
            color: #149b2b;
        }

        /* Styles pour la barre de navigation */
        .nav {
            background-color: #149b2b;
            display: flex;
            justify-content: space-around;
            align-items: center;
            padding: 15px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .nav a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s, transform 0.3s;
        }

        .nav a:hover {
            background-color: #117a1e;
            transform: scale(1.05);
        }

        /* Conteneur des services */
        .services {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Style pour chaque service */
        .service {
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .service:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
        }

        .service img {
            width: 100%;
            height: auto;
        }

        .service-content {
            padding: 15px;
        }

        .service h2 {
            font-size: 20px;
            color: #149b2b;
            margin-bottom: 10px;
        }

        .service p {
            margin: 0;
            color: #555;
        }
    </style>
</head>
<body>
    <!-- Barre de navigation -->
    <div class="nav">
        <a href="Barben_page_principale.html">Accueil</a>
        <a href="Barben_animaux.php">Nos Animaux</a>
        <a href="navigation.html">Navigation</a>
        <a href="page_de_connexion.php">Se Connecter</a>
        <a href="billetterie.html">Billetterie</a>
    </div>

    <!-- Contenu principal -->
    <h1>Liste des Services</h1>
    <div class="services">
        <?php foreach ($services as $service): ?>
            <div class="service">
                <img src="<?= htmlspecialchars($service->nom_service) ?>2.jpg" alt="Image du service">
                <div class="service-content">
                    <h2><?= htmlspecialchars($service->nom_service) ?></h2>
                    <p>ID Biomes associés : <?= htmlspecialchars($service->id_biomes) ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
