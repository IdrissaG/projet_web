<?php
include "connexion.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Contact</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
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
					<a style="text-decoration:none;" href="index.php">Accueil</a>
                    <a style="text-decoration:none;" href="buy.php" class="orange_link">Acheter</a>
                    <a style="text-decoration:none;" href="louer.php">Louer</a>
                    <a style="text-decoration:none;" href="contact.php">Nous contacter</a>
                    <a style="text-decoration:none;" href="blog.php">Blog</a>
                    <a style="text-decoration:none;" href="login.php">Login</a>
                    <a style="text-decoration:none;" href="signup.php">Sign up</a>
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
   
    <div class="container">
        <h1 class="display-1">Contact</h1>
    <form class="form-control" method="post">
        <div class="mb-3">
        <label class="form-label">Votre email</label>
        <input type="email"class="form-control" name="email" required><br>
        </div>
        <div>
        <label class="form-label">Message</label>
        <textarea name="message" class="form-control" rows="3"  required></textarea><br>
        </div>
        <input type="submit" style="background-color:orangered;border-color:orangered;" class="btn btn-primary">
    </form>
    </div>
    <?php
    if (isset($_POST['message'])) {
        $retour = mail('destinataire@free.fr', 'Envoi depuis la page Contact', $_POST['message'], 'From: webmaster@monsite.fr' . "\r\n" . 'Reply-to: ' . $_POST['email']);
        if($retour)
            echo '<p>Votre message a bien été envoyé.</p>';
        }
        ?>
           </section>
    </body>
 
    </html>