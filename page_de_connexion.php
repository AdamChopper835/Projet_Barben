<?php
// Configuration de la base de données
$server = "localhost";
$username = "root";
$password = "";
$databaseName = "barben";

$conn = mysqli_connect($server, $username, $password, $databaseName);

if (!$conn) {
    die("Erreur de connexion : " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if (empty($email) || empty($password)) {
        $message = "Veuillez remplir tous les champs.";
    } else {
        // Requête pour récupérer le mot de passe associé à l'email
        $stmt = $conn->prepare("SELECT password FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($stored_password);
            $stmt->fetch();

            // Vérification du mot de passe
            if ($password === $stored_password) {
                $message = "Mot de passe correct.";
            } else {
                $message = "Mot de passe incorrect.";
            }
        } else {
            $message = "Aucun compte trouvé avec cet email.";
        }

        $stmt->close();
    }
}

$conn->close();
?>









<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<style>
        /* Généralités */
        body {
                    font-family: 'Quicksand', sans-serif;
                    background-color: #d3d1d1;
                    color: #333;
                    margin: 0;
                    padding: 0;
                }
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
                #p{text-indent:30em;}
                #i{text-indent: 2em;}
    
                .greenText {
                    color:  #149b2b;}
        * {
          margin: 0;
          padding: 0;
          box-sizing: border-box;
        }
    
        body {
          font-family: 'Roboto', sans-serif;
          background: linear-gradient(to bottom, #d3d1d1, #74807a);
          color: #333;
          line-height: 1.6;
        }
    
        /* En-tête */
        header {
          text-align: center;
          padding: 20px 0;
          background: linear-gradient(to right, #d3d1d1, #74807a);
          color: white;
    
          box-shadow: 0px 3px 5px rgba(0, 0, 0, 0.3);
        }
    
        h1 {
          font-size: 2.8em;
          text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4);
        }
    
        /* Conteneur principal avec style de carte */
        .container {
          max-width: 600px;
          margin: 30px auto;
          background: white;
          padding: 20px;
          border-radius: 15px;
          box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.2);
          transition: transform 0.2s ease;
        }
    
        .container:hover {
          transform: translateY(-5px);
        }
    
        /* Section billetterie avec design propre */
        .ticket-section {
          display: flex;
          justify-content: space-between;
          flex-wrap: wrap;
          gap: 15px;
          margin: 20px 0;
        }
    
        /* Cartes avec style */
        .ticket-option {
          flex: 1 1 200px;
          background: #f0f0f0;
          border: 2px solid #468847;
          padding: 15px;
          text-align: center;
          border-radius: 10px;
          transition: box-shadow 0.2s ease;
          cursor: pointer;
          box-shadow: 0px 3px 5px rgba(0, 0, 0, 0.2);
        }
    
        .ticket-option:hover {
          box-shadow: 0px 5px 8px rgba(0, 0, 0, 0.3);
        }
    
        select,
        input[type="number"] {
          margin: 10px auto;
          padding: 8px;
          border-radius: 5px;
          border: 1px solid #555;
          display: block;
        }
    
        /* Style du bouton avec animation */
        button {
          background: #556b2f;
          color: white;
          border: none;
          padding: 12px 20px;
          font-size: 18px;
          border-radius: 8px;
          cursor: pointer;
          transition: all 0.3s ease;
          box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
    
        button:hover {
          background: #6b8e23;
          transform: translateY(-3px);
          box-shadow: 0 6px 10px rgba(0, 0, 0, 0.3);
        }
    
        /* Résumé du total dynamique */
        .total-section {
          text-align: center;
          font-size: 24px;
          font-weight: bold;
          color: #444;
          margin: 20px 0;
          transition: transform 0.2s ease;
        }
    
        /* Responsivité */
        @media (max-width: 768px) {
          .ticket-section {
            flex-direction: column;
          }
    
          select,
          input[type="number"] {
            width: 90%;
          }
        }
      </style>
    </head>
    <body>
      <!-- En-tête -->
      <body>
        <header> 
        <div class="nav">
            
           <a> <h1 id="i"  class="greenText">Parc animalier de la Barben </h1> </a>
           <p><a  href="Barben_page_principale.html" class="link">Acceuil </a></p>
           <p><a  href="echo_services1.php" class="link">Nos services </a></p>
           <p><a href="Barben_animaux.php" class="link">Nos animaux </a></p>
           <p><a  href="navigation.html" class="link">Navigation </a> </p>
            
            <p><a  href="billetterie.html" class="link">Billeterie </a> </p>
           
        
        </header>
       
        </div>
        <body>
    
    
</div>
<body>
<div class="container">
    <h1>Connexion</h1>
    <form method="POST" action="">
        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required>
        <br>
       <br>
        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" required>
        <br>
        <br>
        <button type="submit">Se connecter</button>
        <a href="page_d'inscription.html" class="link">creer un compte</a>
    </form>

    <?php if (isset($message)): ?>
        <p style="color: <?= $message === "Mot de passe correct." ? 'green' : 'red'; ?>;">
            <?= htmlspecialchars($message) ?>
        </p>
    <?php endif; ?>

    </div>
</body>
</html>
