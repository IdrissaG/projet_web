<?php
    include "connexion.php";
   
    if(isset($_POST['titre_annonce']) && isset($_POST['prix']) && isset($_POST['ville']) && isset($_POST['addresse']) && isset($_POST['description']) && isset($_POST['type_bien']) && isset($_FILES['URL'])) {
        $titre=$_POST['titre_annonce'];
        $prix=$_POST['prix'];
        $ville=$_POST['ville'];
        $adresse=$_POST['addresse'];
        $description=$_POST['description'];
        $disponibilte=$_POST['disponibilite'];
        $type_bien=$_POST['type_bien'];
        $nom_photo=$_FILES['URL']['name'];
        $chemin_source=$_FILES['URL']['tmp_name'];
        $chemin_dest="images/" . $nom_photo;
    move_uploaded_file($chemin_source,$chemin_dest);
    $res=$connexion->query("insert into biens_immobilier (titre_annonce,prix,ville,addresse,description,disponibilite,type_bien) values ('$titre',$prix,'$ville','$adresse','$description','$disponibilte','$type_bien')");
    $bien_id = $connexion->lastInsertId();
     $res2=$connexion->query("INSERT INTO images (URL, bien_id) VALUES ('$nom_photo', $bien_id)");
    }
 /*if (!$res) {
        die("Error: " . $connexion->error);
    }
    
    
   /*if(isset($_POST['titre_annonce']))
    {
       
    }*/
    
?>  
<html>
    <head>
         <title>Acheter un bien immobilier</title>
         <link rel="stylesheet" href="css/style.css">
         <link rel="stylesheet" href="css/bootstrap.min.css">
         <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
					<a style="text-decoration:none;"  href="index.php">Accueil</a>
                    <a style="text-decoration:none;" href="buy.php">Acheter</a>
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
                 </section>
                 <section>
                    <div class="container">
                    <h1 class="display-1">Louer ou vendre un bien immobilier</h1>
                    <form action="louer.php" method="post" enctype="multipart/form-data">
                    Titre: <input class="form-control" name="titre_annonce" type="text" placeholder="Titre de votre annonce" aria-label="default input example">
                        Type de bien:    
                        <select name="type_bien" class="form-select" aria-label="Default select example">
                          <option selected>Faite un choix dans le menu</option>
                          <option value="Appartement">Appartement</option>
                          <option value="Maison">Maison</option>
                          <option value="Terrain">Terrain</option>
                        </select>
                        Prix: <input name="prix" class="form-control" type="number" placeholder="Donner le prix de votre bien" aria-label="default input example">
                      <!--  <label for="exampleDataList" class="form-label"> ville:</label>-->
                      Ville:  <input name="ville" class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Rechercher...">
                        <datalist id="datalistOptions">
                            <option value="San Francisco">
                            <option value="New York">
                            <option value="Seattle">
                            <option value="Los Angeles">
                            <option value="Chicago">
                        </datalist>
                        Adresse: <input name="addresse" class="form-control" type="text" placeholder="Donner l'adresse de votre bien" aria-label="default input example">
                        Description: <input name="description" class="form-control" type="text" placeholder="Donner une description de votre bien" aria-label="default input example">
                        Disponibilité: <select name="disponibilite" id="" class="form-select" id="">
                        <option selected>Faite un choix dans le menu</option>
                            <option value="disponible">Disponible</option>
                            <option value="indisponible">Indisponible</option>
                        </select>
                        <div class="mb-3">
                       <label for="formFile" class="form-label">Photo: </label>
                       <input name="URL" class="form-control" type="file" id="formFile">
                      </div>
                       <!-- <input type="file"><br>-->
                        <input type="submit" value="Publier" style="background-color: orangered; border-color: orangered" class="btn btn-primary">
                    </form>
                    <?php
                    if(empty($_POST['titre_annonce']) || empty($_POST['prix']) || empty($_POST['ville']) || empty($_POST['addresse']) || empty($_POST['description']) || empty($_POST['disponibilite'] || empty($_POST['type_bien'])))
                    {
                        echo "<br>";
                        echo "*Veuillez remplir tous les champs*";
                    }else{
                        echo "Bien ajouter avec succes !!!";    
                    }
                    ?>
                    </div>
                    </section>
                 </html>