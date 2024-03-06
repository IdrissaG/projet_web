<?php
include "connexion.php"; 
session_start(); 
//if (isset($_SESSION['user_id'])) {
  //  header("Location: index.php");
    //exit();
//}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];   
    $sql = "SELECT * FROM utilisateur WHERE username = :username AND password = :password";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    $stmt->execute();
    if ($stmt->rowCount() > 0) {
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username']; 
        header("Location: index.php");
        exit();
    } else {
        $error_message = "Nom d'utilisateur ou mot de passe incorrect.";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<link rel="stylesheet" href="css/style.css">
<script src="js/script.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body {
            
            background-color: #f4f4f4;
        }

        .container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
            padding: 20px;
           
        }

        h1 {
            color: orangered;
        }

        .form-control {
            margin-bottom: 15px;
        }

        .btn-primary {
            background-color: #ff8c00;
            border-color: orangered;
        }

        .btn-primary:hover {
            background-color: #d47b00;
            border-color: #d47b00;
        }

        a {
            color: orangered;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
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
                    <a style="text-decoration:none;" href="buy.php" >Acheter</a>
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
                <a style="text-decoration:none;" href="login.php">Login</a>
                <a style="text-decoration:none;" href="signup.php" class="orange_link">Sign up</a>
            </div>
        </header>
        </section>
        <!-- menu -->
        <div class="container">
        <h1 class="display-4">Connexion</h1>
        <?php
        if (isset($error_message)) {
            echo '<div class="alert alert-danger" role="alert">' . $error_message . '</div>';
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
       <button style="background-color: orangered; border-color: orangered;" type="submit" class="btn btn-primary">Se connecter</button>

        </form>
        <p>Vous n'avez pas de compte ? <a href="signup.php">Inscrivez-vous ici</a></p>
    </div>
    </div>
</body>
</html>
