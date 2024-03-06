<?php
	include "connexion.php";
        $img=$connexion->query("select *  from images");
       if(isset($_GET['motcle'])){
        $motcle=$_GET['motcle'];
        $immo = $connexion->query("select * from biens_immobilier where titre_annonce like '%$motcle%'");
       }else
        $immo=$connexion->query("select * from biens_immobilier");
       
     /*  if(isset($_GET['motcle'])){	
		$motcle=$_GET['motcle'];
		$articles=$connexion->query("select * from article where designation like '%$motcle%'");
		}
	else
		$articles=$connexion->query("select * from article");*/
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
                    <a style="text-decoration:none;"  href="index.php" class="nav_link">Accueil</a>
                    <a style="text-decoration:none;" href="buy.php"  class="nav_link">Acheter</a>
                    <a style="text-decoration:none;" href="louer.php" class="nav_link">Louer</a>
                    <a style="text-decoration:none;" href="contact.php"  class="nav_link">Nous contacter</a>
                    <a style="text-decoration:none;" href="blog.php"  class="nav_link">Blog</a>
                </div>
            </div>
             
            <!-- responsive menu -->
                 <div class="sidebar" id="mySidebar">
                    <div class="closebtn"  onclick="closeNav()">
                        <img src="images/close.png">
                    </div>
					<a style="text-decoration:none;"  href="index.php">Accueil</a>
                    <a style="text-decoration:none;"  href="buy.php">Acheter</a>
                    <a style="text-decoration:none;"  href="louer.php">Louer</a>
                    <a style="text-decoration:none;"  href="contact.php">Nous contacter</a>
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
                 <section class="decoration">
                 <form action="buy.php" method="get" class="row g-3">
                 <div class="col-auto">
                 <input name="motcle" class="form-control" type="text" placeholder="appartement brahim..." aria-label="default input example">
                 </div>
                 <div class="col-auto">
                 <input type="button" style="background-color: orangered; border-color: orangered" value="Rechercher" class="btn btn-primary mb-3">
                 </div> 
                 </form>
  
        <h1>Listes des biens immobiliers</h1>
        <div class="deco-list">
        <?php

while($ligne = $immo->fetch()) {
    ?>
    
        <div class="deco">
            <img src="images/<?php echo $img->fetch()['URL']; ?>">
            <p><?php echo $ligne['titre_annonce']; ?>  <span><?php echo $ligne['prix']; ?>DH</span></p> 
            <span><?php echo $ligne['type_bien']; ?><br></span>
            <button class="orange_link">Acheter</button>
        </div>
   
    <?php
}
?>
 </div>
</section>

    </body>

</html>