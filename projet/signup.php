<?php
include "connexion.php"; 
session_start(); 

/*if (isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}*/

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

   
    $sql = "INSERT INTO utilisateur (username, password) VALUES (:username, :password)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    
    try {
        $stmt->execute();
        $_SESSION['user_id'] = $pdo->lastInsertId(); // Récupère l'ID de l'utilisateur nouvellement inséré
        $_SESSION['username'] = $username;
        echo '<div class="alert alert-success" role="alert" style="background-color: #ffa500; color: #fff;">Inscription effectuée avec succès</div>';

        header("refresh:2;url=index.php");
        exit();
    } catch (PDOException $e) {
        $error_message = "Erreur lors de l'inscription : " . $e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css"> 
    <style>

        body {
            font-family: Arial, sans-serif;
            margin: 20px;
             background-color: #f4f4f4;
        }

        .container {
            background-color:white; 
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: orangered; 
        }

        .alert {
            background-color: #d9534f; 
            color: #fff; /* Texte en blanc */
        }

        .form-control {
            margin-bottom: 15px;
        }
        .btn-primary {
            background-color: orangered;
            
        }
        .btn-primary:hover {
            background-color: #d47b00;
            border-color: #d47b00;
        }

        button {
            background-color: #ffa500; 
            border-color: #ffa500; 
            color: #fff; 
        }

        a {
            color: orangered;
        }
        a:hover {
            text-decoration: underline;
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
                    <a href="buy.php">Acheter</a>
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
                <a style="text-decoration: none;" href="login.php"  >Login</a>
                <a style="text-decoration: none;" href="signup.php" class="orange_link">Sign up</a>
            </div>
        </header>
        <!-- menu -->
        </section>
        <div class="container">
        <h1 class="display-4">Inscription</h1>
        <?php
        if (isset($error_message)) {
            echo '<div class="alert alert-danger" role="alert">' . $error_message . '</div>';
        }
    else if (isset($inscription_reussie) && $inscription_reussie) {
        echo '<div class="alert alert-success" role="alert">Inscription effectuée avec succès!</div>';
    }
        ?>
        <form method="post" class="form-control">
            <div class="mb-3">
                <label class="form-label">Nom d'utilisateur</label>
                <input type="text" class="form-control" name="username" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Mot de passe</label>
                <input type="password" class="form-control" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">S'inscrire</button>
        </form>
        <p>Vous avez déjà un compte ? <a href="login.php">Connectez-vous ici</a></p>
    </div>
</body>
</html>
