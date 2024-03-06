<?php
include "connexion.php";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/popup.css">
    <title>Blog des Avis</title>
    <style>
       /* body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }

        h2 {
            text-align: center;
            color: #333;
        }*/

        .avis {
            border: 1px solid #ffa500; /* Couleur orange ...oui j'ai utilise chat pour les couleurs haha...*/
            margin-bottom: 20px;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff; 
        }

        .avis h3 {
            color: orangered;
        }

        .avis p {
            color: #555;
        }

        .avis strong {
            font-weight: bold;
        }
        .rating {
            unicode-bidi: bidi-override;
            direction: rtl;
            text-align: center;
        }

        .rating > span {
            display: inline-block;
            position: relative;
            width: 1.1em;
            color: #ffa500; /* Couleur orange */
        }
        .rating > span:before,
        .rating > span:hover:before,
        .rating > span:hover ~ span:before {
            content: "\2605";
            position: absolute;
            color: #ffd700; /* Couleur jaune */
        }
    </style>
    <script src="js/script.js" crossorigin="anonymous"></script>
</head>
<body>
<section class="header-home">
        <!-- menu -->
        <header>
            <div class="logo_link">
                <a href="index.php" class="logo">Real Estate</a>
                <div class="menu_link">
                    <a style="text-decoration:none;" href="index.php">Accueil</a>
                    <a style="text-decoration:none;" href="buy.php">Acheter</a>
                    <a style="text-decoration:none;" href="louer.php">Louer</a>
                    <a style="text-decoration:none;" href="contact.php">Nous contacter</a>
                    <a style="text-decoration:none;" href="blog.php">Blog</a>
                </div>
            </div>
             
            <!-- responsive menu -->
                 <div class="sidebar" id="mySidebar">
                    <div class="closebtn"  onclick="closeNav()">
                        <img src="images/close.png">
                    </div>
					<a href="index.php">Accueil</a>
                    <a href="buy.php" >Acheter</a>
                    <a href="louer.php">Louer</a>
                    <a href="contact.php">Nous contacter</a>
                    <a href="blog.php">Blog</a>
                    <a href="login.php">Login</a>
                    <a href="signup.php">Sign up</a>
                 </div>

                 <div id="main">
                    <button class="openbtn" onclick="openNav()">
                        <img src="images/menu.png">
                        Menu
                    </button>
                 </div>
            <!-- responsive menu -->

            <div class="link_buttons">
                <a href="login.php">Login</a>
                <a href="signup.php" class="orange_link">Sign up</a>
            </div>
        </header>
           <!-- menu -->
           <div class="container">
    <h1 class="display-1">Les Avis de nos clients</h1>
    <div class="avis">
        <h3>Expérience Incroyable!</h3>
        <p>Notre collaboration avec l'équipe d'Immobilier a été incroyable. Ils ont créé un design intérieur exceptionnel pour notre maison. Merci pour votre excellent travail!</p>
        <p><strong>Auteur :</strong> Taha Elmazouz</p>
        <div class="rating">
            <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
        </div>
    </div>
    <div class="avis">
        <h3>Service Exceptionnel</h3>
        <p>Le service client est exceptionnel. Ils ont répondu rapidement à toutes nos questions et ont fourni des solutions créatives pour nos projets de décoration. Nous les recommandons vivement!</p>
        <p><strong>Auteur :</strong> Traore Steve</p>
        <div class="rating">
            </span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
        </div>
    </div>
    <div class="avis">
        <h3>Professionnalisme à son meilleur</h3>
        <p>Nous sommes ravis du professionnalisme de l'équipe d'Immobilier. Ils ont terminé notre projet de décoration intérieure à temps et ont dépassé nos attentes. Un grand merci!</p>
        <p><strong>Auteur :</strong> babacar Sy</p>
        <div class="rating">
            <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
        </div>
    </div>

    <div class="avis">
        <h3>Couteux </h3>
        <p>Un peu cher mais dans l'ensemble le travail est bien fait et l'équipe a respecté le temps</p>
        <p><strong>Auteur :</strong> Amadou Siby</p>
        <div class="rating">
           </span><span>☆</span><span>☆</span>
        </div>
    </div>
    <div class="avis">
        <h3>Service impecable </h3>
        <p>Le personnel etait dévoué et respectueux ;tres belles expérience</p>
        <p><strong>Auteur :</strong> Asmaa DIAKITE</p>
        <div class="rating">
        <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
        </div>
    </div>
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Entrer votre message</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  <input type="submit"  style="border-color: orangered; background-color: orangered" class="btn btn-primary">
</div>
<div class="popup" onclick="myFunction()">Click me!
  <span class="popuptext" id="myPopup">Popup text...</span>
</div>
</body>
</html>
