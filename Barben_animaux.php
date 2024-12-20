<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>


body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 0;
        }
        form {
            margin-bottom: 20px;
        }
        input[type="text"] {
            padding: 8px;
            width: 300px;
        }
        button {
            padding: 8px 12px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
        .content2 {
            margin: 20px 0;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
        }
       
</style>


<style>


    *{
        margin: 0;
        padding: 0;
    }
    .rate {
        float: left;
        height: 20px;
        padding: 0 10px;
    }
    .rate:not(:checked) > input {
        position:absolute;
        top:-9999px;
    }
    .rate:not(:checked) > label {
        float:right;
        width:1em;
        overflow:hidden;
        white-space:nowrap;
        cursor:pointer;
        font-size:30px;
        color:#ccc;
    }
    .rate:not(:checked) > label:before {
        content: '★ ';
    }
    .rate > input:checked ~ label {
        color: #ffc700;    
    }
    .rate:not(:checked) > label:hover,
    .rate:not(:checked) > label:hover ~ label {
        color: #deb217;  
    }
    .rate > input:checked + label:hover,
    .rate > input:checked + label:hover ~ label,
    .rate > input:checked ~ label:hover,
    .rate > input:checked ~ label:hover ~ label,
    .rate > label:hover ~ input:checked ~ label 
    {
        color: #c59b08;
    }
    
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

   
/* Bouton stylé */
button {
    background: linear-gradient(135deg,rgb(12, 0, 2),rgb(247, 246, 246));
    border: none;
    border-radius: 50px;
    padding: 12px 30px;
    font-size: 16px;
    color: white;
    cursor: pointer;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
    transition: all 0.3s ease-in-out;

}
button1 {
    background: linear-gradient(135deg,rgb(205, 128, 146),rgb(155, 20, 65));
    border: none;
    border-radius: 50px;
    padding: 12px 30px;
    font-size: 16px;
    color: white;
    cursor: pointer;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
    transition: all 0.3s ease-in-out;

}
button6 {
    background: linear-gradient(135deg,rgb(150, 148, 143),rgb(67, 80, 70));
    border: none;
    border-radius: 50px;
    padding: 12px 30px;
    font-size: 16px;
    color: white;
    cursor: pointer;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
    transition: all 0.3s ease-in-out;}

    button2 {
    background: linear-gradient(135deg,rgb(127, 144, 207),rgb(31, 25, 145));
    border: none;
    border-radius: 50px;
    padding: 12px 30px;
    font-size: 16px;
    color: white;
    cursor: pointer;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
    transition: all 0.3s ease-in-out;}

    button3 {
    background: linear-gradient(135deg,rgb(200, 188, 97),rgb(211, 173, 34));
    border: none;
    border-radius: 50px;
    padding: 12px 30px;
    font-size: 16px;
    color: white;
    cursor: pointer;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
    transition: all 0.3s ease-in-out;}

    button4 {
    background: linear-gradient(135deg,rgb(150, 190, 98),rgb(20, 155, 25));
    border: none;
    border-radius: 50px;
    padding: 12px 30px;
    font-size: 16px;
    color: white;
    cursor: pointer;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
    transition: all 0.3s ease-in-out;}
    button5 {
    background: linear-gradient(135deg,rgb(26, 103, 25),rgb(6, 73, 16));
    border: none;
    border-radius: 50px;
    padding: 12px 30px;
    font-size: 16px;
    color: white;
    cursor: pointer;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
    transition: all 0.3s ease-in-out;}

button:hover {
    transform: translateY(-2px);
    box-shadow: 0px 8px 12px rgba(0, 0, 0, 0.3);
}

button:active {
    transform: translateY(2px);
    box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.2);
}
h3 , h4, h5{text-align: center;}

#image-container {
    margin-top: 20px;
    text-align: center;
    animation: fade-in 0.5s ease-in-out;
}

img {
    border: 4px solid #149b2b;
    border-radius: 10px;
    max-width: 100%;
    box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.3);
}
#avisZone {
    display: none;  /* Cacher la zone au départ */}

</style>

<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
  padding: 20px;
  font-family: Arial;
}

/* Center website */
.main {
  max-width: 10000px;
  margin: auto;
}

h1 {
  font-size: 50px;
  word-break: break-all;
}

.row {
  margin: 10px -16px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
  padding: 8px;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  display: none; /* Hide all elements by default */
}

/* Clear floats after rows */ 
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Content */
.content {
  background-color: white;
  padding: 20px;
}

/* The "show" class is added to the filtered elements */
.show {
  display: block;
}

/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: white;
  cursor: pointer;
}

.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #666;
  color: white;
}
a {
  color: green;
}
#p{text-indent:70em;}
</style>
</head>
<body>
<div class="nav">
    <a> <h1 id="i"  class="greenText">Parc animalier de la Barben </h1> </a>
    <p><a href="Barben_page_principale.html" class="link">Accueil </a></p>      
    <p><a  href="echo_services1.php" class="link">Nos services </a></p>
    <p><a  href="navigation.html" class="link">Navigation </a> </p>
    <p><a  href="page_de_connexion.php" class="link">Se connecter </a></p>
     <p><a  href="billetterie.html" class="link">Billeterie </a> </p>
     
</div>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Horaires de Repas d'un Animal</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .repas-list {
            margin-top: 10px;
        }
        .repas-list ul {
            list-style-type: none;
        }
        .repas-list li {
            margin-bottom: 5px;
        }
    </style>
    
</head>
<body>
  

    <form id="repasForm">
        <h4 id="p"><label for="animal">Choisir un animal :</label></h4>
        <h4 id="p"><input type="text" id="animal" name="animal" required></h4>

        <h4 id="p"><label for="horaire">Horaire du repas :</label></h4>
        <h4 id="p"><input type="time" id="horaire" name="horaire" required><br><br></h4>

        <h4 id="p"><button type="submit">Ajouter l'horaire</button></h4>
    </form>

    <div class="repas-list">
   
    <h4 id="p"> <div id="horairesAffiches"></div></h4>
    </div>

    <script>
        // Créer un objet pour stocker les repas par animal
        let repasData = {};

        // Fonction pour ajouter un horaire de repas
        document.getElementById('repasForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Empêcher l'envoi du formulaire

            const animal = document.getElementById('animal').value;
            const horaire = document.getElementById('horaire').value;

            // Vérifier si l'animal existe dans l'objet, sinon le créer
            if (!repasData[animal]) {
                repasData[animal] = [];
            }

            // Ajouter l'horaire à l'animal
            repasData[animal].push(horaire);

            // Afficher les horaires
            afficherHoraires();
            
            // Réinitialiser le formulaire
            document.getElementById('repasForm').reset();
        });

        // Fonction pour afficher les horaires des repas
        function afficherHoraires() {
            const horairesAffiches = document.getElementById('horairesAffiches');
            horairesAffiches.innerHTML = ''; // Effacer le contenu actuel

            for (const animal in repasData) {
                const horairesList = repasData[animal];
                const listHtml = `<h3>Repas de ${animal} :</h3>
                                  <ul>${horairesList.map(horaire => `<li>${horaire}</li>`).join('')}</ul>`;
                horairesAffiches.innerHTML += listHtml;
            }
        }
    </script>
</body>
</html>

</body>
  
        <div id="myBtnContainer">
       <button class="btn active" onclick="filterSelection('all')"> Tous les animaux</button>
      <button1 class="btn" onclick="filterSelection('Le plateau')"> Le Plateau</button1>
      <button6 class="btn" onclick="filterSelection('Le Belvedere')"> Le Belvedere</button6>
      <button2 class="btn" onclick="filterSelection('Le Vallon des cascades')"> Le Vallon des cascades</button2>
      <button3 class="btn" onclick="filterSelection('Les Clairieres')"> Les Clairieres</button3>
      <button4 class="btn" onclick="filterSelection('Le Bois des pins')"> Le Bois des pins</button4>
      <button5 class="btn" onclick="filterSelection('La Bergerie des reptiles')"> La Bergerie des reptiles</button5>

    </div>
      
 

<!-- Portfolio Gallery Grid -->
<div class="row">
  <div class="column Le plateau">
    <div class="content" data-animal="Lion">
      <img src="lion.jpg" alt="Lion" style="width:100%">
      <h4>Lion <div class="rate">
        <input type="radio" id="star5" name="rate" value="5" />
        <label for="star5" title="text">5 stars</label>
        <input type="radio" id="star4" name="rate" value="4" />
        <label for="star4" title="text">4 stars</label>
        <input type="radio" id="star3" name="rate" value="3" />
        <label for="star3" title="text">3 stars</label>
        <input type="radio" id="star2" name="rate" value="2" />
        <label for="star2" title="text">2 stars</label>
        <input type="radio" id="star1" name="rate" value="1" />
        <label for="star1" title="text">1 star</label>
        <br>
        <a href="description_enclos.html">description de l'enclos</a>
      </div></h4>
      </div>
  </div>
  <div class="column Le plateau">
    <div class="content" data-animal="hippopotame">
    <img src="hippopotame.jpg" alt="Hippopotame" style="width:95%">
      <h4>Hippopotame</h4>
    
    </div>
  </div>
  <div class="column Le plateau">
    <div class="content">
    <img src="zèbre.jpg"  style="width:85%">
      <h4>Zèbre</h4>
      
    </div>
  </div>
  
  <div class="column Le plateau">
    <div class="content">
      <img src="hyene.jpg"  style="width:100%">
      <h4>Hyène</h4>
    
    </div>
  </div>
  <div class="column  Le plateau">
    <div class="content">
    <img src="loup à crinière.jpg"  style="width:90%">
      <h4>loup à crinière</h4>
   
    </div>
  </div>
  <div class="column  Le plateau">
    <div class="content">
    <img src="elephant.jpg"  style="width:90%">
      <h4>elephant</h4>
  
    </div>
  </div>
  <div class="column  Le plateau">
    <div class="content">
    <img src="varan de komodo.jpg" style="width:100%">
      <h4>varan de komodo</h4>
  
    </div>
  </div>
  <div class="column  Le plateau">
    <div class="content">
    <img src="grivet cercopithèque.jpg" style="width:85%">
      <h4>grivet cercopithèque</h4>
 
    </div>
  </div>
  <div class="column  Le plateau">
    <div class="content">
    <img src="girafe.jpg" style="width:45%">
      <h4>girafe</h4>
    
    </div>
  </div>
  <div class="column  Le plateau">
    <div class="content">
    <img src="ouistiti.webp"  style="width:90%">
      <h4>ouistiti</h4>
      
    </div>
  </div>
  <div class="column  Le plateau">
    <div class="content">
    <img src="gibbon.jpg"  style="width:90%">
      <h4>gibbon</h4>
     
    </div>
  </div>
  <div class="column  Le plateau">
    <div class="content">
    <img src="tamarin.jpg"  style="width:80%">
      <h4>tamarin</h4>
    </div>
  </div>

  <div class="column Le plateau">
    <div class="content">
      <img src="capucin.jpg" style="width:100%">
      <h4>capucin</h4>
    
    </div>
  </div>

  <div class="column Le Vallon des cascades">
    <div class="content">
      <img src="ara.jpg" alt="Car" style="width:55%">
      <img src="perroquet.jpg" alt="Car" style="width:55%">
      <h4>Arra et perroquet</h4>
    
    </div>
  </div>
  <div class="column Le Vallon des cascades">
    <div class="content">
    <img src="grand hocco.jpg" alt="Car" style="width:100%">
      <h4>grand hocco</h4>
    
    </div>
  </div>
  <div class="column Le Vallon des cascades">
    <div class="content">
    <img src="panthere.jpg" alt="Car" style="width:100%">
      <h4>Panthère</h4>
    
    </div>
  </div>

  <div class="column Le Vallon des cascades">
    <div class="content">
      <img src="panda roux.jpg" alt="Car" style="width:100%">
      <h4>Panda roux</h4>
      
    </div>
  </div>
  <div class="column Le Vallon des cascades">
    <div class="content">
    <img src="lémurien.jpg" alt="Car" style="width:100%">
      <h4>Lémurien</h4>
      
    </div>
  </div>
  <div class="column Le Vallon des cascades">
    <div class="content">
    <img src="chèvre naine.jpeg" alt="Car" style="width:75%">
      <h4>Chèvre naine</h4>
     
    </div>
  </div>
  <div class="column Le Vallon des cascades">
    <div class="content">
    <img src="chèvre naine.jpeg" alt="Car" style="width:50%">
    <img src="tortue.jpg" alt="Car" style="width:50%">
      <h4>Chèvre naine et tortue</h4>
     
    </div>
  </div>
  <div class="column Le Vallon des cascades">
    <div class="content">
    <img src="mouflon.jpg" alt="Car" style="width:100%">
      <h4>Mouflon</h4>
   
    </div>
  </div>
  <div class="column Le Vallon des cascades">
    <div class="content">
    <img src="binturong.jpg" alt="Car" style="width:60%">
    <img src="loutre.jpg" alt="Car" style="width:60%">
      <h4>Binturong et Loutre</h4>
  
    </div>
  </div>
  <div class="column Le Belvedere">
  <div class="content">
  <img src="crocodile nain.jpg" alt="Car" style="width:100%">
    <h4>Crocodile nain</h4>

    </div>
  </div>
  <div class="column Le Belvedere">
  <div class="content">
  <img src="casoar.jpg" alt="Car" style="width:50%">
    <h4>Casoar</h4>

    </div>
  </div>
  <div class="column Le Belvedere">
  <div class="content">
  <img src="guépard.jpg" alt="Car" style="width:90%">
    <h4>Guépard</h4>

    </div>
  </div>
  <div class="column Le Belvedere">
  <div class="content">
  <img src="tapir.jpg" alt="Car" style="width:80%">
      <h4>Tapir</h4>

    </div>
  </div>
  <div class="column Le Belvedere">
  <div class="content">
  <img src="saimiri.jpg" alt="Car" style="width:50%">
  <img src="coati.jpg" alt="Car" style="width:50%">
    <h4>Saïmiri et Coati</h4>

  </div>

  </div>
  <div class="column Le Belvedere">
  <div class="content">
        <img src="fennec.jpg" alt="Car" style="width:90%">
    <h4>Fennec</h4>

    </div>
  </div>
  <div class="column Le Belvedere">
  <div class="content">
        <img src="suricate.jpg" alt="Car" style="width:90%">
    <h4>Suricate</h4>

    </div>
  </div>

<div class="column Le Belvedere">
  <div class="content">
  <img src="rhinoceros.jpg" alt="Car" style="width:70%">
  <img src="oryx beisa.jpg" alt="Car" style="width:70%">
  <img src="gnou.jpg" alt="Car" style="width:50%">
    <h4>Rhinocéros, Oryx Beisa et Gnou</h4>
</div>
</div>
<div class="column Le Belvedere">
        <div class="content">
        <img src="autruche.jpg" alt="Car" style="width:50%">
        <img src="gazelle.jpg" alt="Car" style="width:50%">
          <h4>Autruche et gazelle</h4>
        </div>
    </div>

<div class="column Les Clairieres">
    <div class="content">
      <img src="mouton noir.jpg" alt="Car" style="width:48%">
          <img src="yack.jpg" alt="Car" style="width:50%">
            <h4>Mouton noir et Yack</h4>
        </div>
  </div>

  <div class="column Les Clairieres">
  <div class="content">
  <img src="porc epique.jpg" alt="Car" style="width:80%">
    <h4>Porc epic</h4>
    </div>
  </div>
    <div class="column Les Clairieres">
      <div class="content">
      <img src="emeu.jpg" alt="Car" style="width:60%">
      <img src="wallaby.jpg" alt="Car" style="width:60%">
        <h4>Wallabi et Emeu</h4>
    </div>
  </div>

  <div class="column Les Clairieres">
      <div class="content">
      <img src="flamant rose.jpg" alt="Car" style="width:58%">
      <img src="nandou.jpg" alt="Car" style="width:40%">  
      <img src="tamanoir.jpg" alt="Car" style="width:60%">
        <h4>Flamant rose, Nandou et Tamanoir</h4>
    </div>
  </div>

  <div class="column Les Clairieres">
  <div class="content">
  <img src="pécari.jpg" alt="Car" style="width:90%">
<h4>Pécari</h4>

    </div>
  </div>

  <div class="column Les Clairieres">
  <div class="content">
        <img src="ibis.jpg" alt="Car" style="width:60%">  
<img src="tortue.jpg" alt="Car" style="width:60%">
    <h4>Tortue et Ibis</h4>
    </div>
  </div>

  <div class="column Les Clairieres">
  <div class="content">
  <img src="lynx.jpg" alt="Car" style="width:80%">
    <h4>Lynx</h4> 
    </div>
  </div>

  <div class="column Les Clairieres">
  <div class="content">
  <img src="serval.jpg" alt="Car" style="width:84%">
    <h4>Serval</h4>

    </div>
  </div>

  <div class="column Les Clairieres">
  <div class="content">
  <img src="chien des buissons.jpg" alt="Car" style="width:80%">
    <h4>Chien des buissons</h4>
    </div>
  </div>

  <div class="column Les Clairieres">
  <div class="content">
  <img src="tigre.jpg" alt="Car" style="width:95%">
    <h4>Tigre</h4>

    </div>
  </div>

  <div class="column Les Clairieres">
  <div class="content">
  <img src="bison.jpg" alt="Car" style="width:90%">
    <h4>Bison</h4>
    </div>
  </div>

  <div class="column Les Clairieres">
  <div class="content">
<img src="ane-provence.jpg" alt="Car" style="width:70%">  
<img src="dromadaire.jpg" alt="Car" style="width:70%">
    <h4>Ane de provence et Dromadaire</h4>

    </div>
  </div>

  <div class="column Les Clairieres">
  <div class="content">
        <img src="marabout.jpg" alt="Car" style="width:60%">  
<img src="cigogne.jpg" alt="Car" style="width:60%">
    <h4>Cigogne et Marabout</h4>

    </div>
  </div>

  <div class="column Les Clairieres">
  <div class="content">
  <img src="ane de somalie.jpg" alt="Car" style="width:60%">
  <img src="watusi.jpg" alt="Car" style="width:60%">  
<img src="oryx gazelle.jpg" alt="Car" style="width:60%">
    <h4>oryx gazelle, Ane de Somalie et Watusi</h4>

    </div>
  </div>

  <div class="column Le Bois des pins">
  <div class="content"> 
<img src="loup d'europe.jpg" alt="Car" style="width:100%">
    <h4>Loup d'Europe</h4>

    </div>
  </div>

  <div class="column Le Bois des pins">
  <div class="content">
<img src="cerf.jpg" alt="Car" style="width:85%">
    <h4>Cerf</h4>

    </div>
  </div>

  <div class="column Le Bois des pins">
  <div class="content">
<img src="vautour.jpg" alt="Car" style="width:90%">
    <h4>Vautour</h4>

    </div>
  </div>

  <div class="column Le Bois des pins">
  <div class="content">
  <img src="antilope.jpg" alt="Car" style="width:60%">
  <img src="nigault.jpg" alt="Car" style="width:60%">  
<img src="daim.jpg" alt="Car" style="width:60%">
    <h4>Antilope, Nilgaut et Daim</h4>

    </div>
  </div>

  <div class="column Le Bois des pins">
  <div class="content">
  <img src="macaque crabier.jpg" alt="Car" style="width:65%">
    <h4>Macaque crabier</h4>
  </div>
</div>
<div class="column La Bergerie des reptiles">
<div class="content" data-animal="iguane">
<img src="iguane.jpg" alt="Iguane" style="width:65%">
  <h4>Iguane</h4>

</div>
</div>


<div class="column La Bergerie des reptiles">
<div class="content" data-animal="python">
<img src="python.jpg" alt="Python" style="width:70%">
  <h4>Python</h4>

</div>
</div>

<div class="column La Bergerie des reptiles">
<div class="content" data-animal="tortue">
<img src="tortue.jpg" alt="Tortue" style="width:90%">
  <h4>Tortue</h4>

  
<!-- END GRID -->
</div>

<!-- END MAIN -->
</div>

<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}


// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>


<script>
        document.getElementById("searchForm").addEventListener("submit", function(event) {
            event.preventDefault(); // Empêche le rechargement de la page
            
            const animalName = document.getElementById("animalName").value.trim().toLowerCase();
            const allContent2 = document.querySelectorAll(".content2");

            let found = false;

            allContent2.forEach(content2 => {
                const dataAnimal = content2.getAttribute("data-animal").toLowerCase();
                if (dataAnimal.includes(animalName)) {
                    found = true;
                    content2.scrollIntoView({ behavior: "smooth" });
                    content2.style.border = "2px solid #4CAF50"; // Met en évidence l'animal trouvé
                    setTimeout(() => content2.style.border = "1px solid #ddd", 2000); // Réinitialise le style après un délai
                }
            });

            if (!found) {
                alert("Aucun animal trouvé pour ce nom !");
            }
        });
    </script>
</body>
</html>






