<?php
include "connexion.php";
 $immo=$connexion->query("select * from biens_immobilier");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acheter votre premiere maison</title>
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
                <a style="text-decoration: none;" href="login.php">Login</a>
                <a style="text-decoration: none;" href="signup.php" class="orange_link">Sign up</a>
            </div>
        </header>
        <!-- menu -->


        <!-- home -->
           <section class="home">
               <div class="left">
                   <h1>Best Interior design for your home.</h1>
                   <p>Lorem ipsum, dolor sit amet consectetur adipisicing. Dolores reprehenderit nihil dolore vitae necessitatibus veniam voluptatibus asperiores quis cupiditate  asperiores quis cupiditate  asperiores quis cupiditate.</p>
                   <a href="buy.php" class="orange_link">Get Started</a>
               </div>
               <div class="right">
                    <img src="images/img1.jpg">
               </div>
               <div class="statistiques">
                   <span>
                        <h2>450+</h2>
                        <p>project Finished</p>
                   </span>
                   <span>
                        <h2>120+</h2>
                        <p>professionnal designer</p>
                  </span>
                  <span>
                        <h2>160+</h2>
                        <p>project ongoing</p>
                  </span>
               </div>
           </section>
        <!-- home -->
    </section>

     <!-- about -->
    <section class="about">
        <div class="image">
            <img src="images/img2.jpg">
        </div>
        <div class="content">
            <h1>About company</h1>
            <h2>We create functionnal beautiful <br> Interior for client since 1858.</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing. Eius, iure quas? Non sed doloribus placeat laboriosam eos dolorem exercitationem, porro sint assumenda sequi, nemo dolores obcaecati quibusdam nihil aliquid quam?</p>
        </div>
              
    </section>
     <!-- about -->

    <!-- choice -->
    <section class="why_us">
        <h1>Why Choose us</h1>
        <div class="list_box">
            <div class="box">
                <img src="images/customer-service.png">
                <h2>support</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing. Harum, consectetur nihil aut dicta fugiat deserunt.</p>
            </div>
            <div class="box">
                <img src="images/experience.png">
                <h2>experience</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing. Harum, consectetur nihil aut dicta fugiat deserunt.</p>
            </div>
            <div class="box">
                <img src="images/creative-brain.png">
                <h2>creative</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing. Harum, consectetur nihil aut dicta fugiat deserunt.</p>
            </div>
            <div class="box">
                <img src="images/puzzle.png">
                <h2>solution</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing. Harum, consectetur nihil aut dicta fugiat deserunt.</p>
            </div>

        </div>
    </section>
    <!-- choice -->

    <!-- decoration -->
    <section class="decoration">
        <h1>Decoration list</h1>
        <div class="deco-list">
            <div class="deco">
                <img src="images/deco1.jpg">
                <p>decoration chamber</p>
                <span>Lorem ipsum dolor sit amet consectetur adipisicing. <br></span>
                <button class="orange_link">Order the deco</button>
            </div>
            <div class="deco">
                <img src="images/deco4.png">
                <p>decoration chamber</p>
                <span>Lorem ipsum dolor sit amet consectetur adipisicing.<br></span>
                <button class="orange_link">Order the deco</button>
            </div>
            <div class="deco">
                <img src="images/deco3.jpg">
                <p>decoration chamber</p>
                <span>Lorem ipsum dolor sit amet consectetur adipisicing.<br></span>
                <button class="orange_link">Order the deco</button>
            </div>
            <div class="deco">
                <img src="images/deco4.png">
                <p>decoration chamber</p>
                <span>Lorem ipsum dolor sit amet consectetur adipisicing.<br></span>
                <button class="orange_link">Order the deco</button>
            </div>
            <div class="deco">
                <img src="images/deco5.jpg">
                <p>decoration chamber</p>
                <span>Lorem ipsum dolor sit amet consectetur adipisicing.<br></span>
                <button class="orange_link">Order the deco</button>
            </div>
            <div class="deco">
                <img src="images/deco6.jpg">
                <p>decoration chamber</p>
                <span>Lorem ipsum dolor sit amet consectetur adipisicing.<br></span>
                <button class="orange_link">Order the deco</button>
            </div>
        </div>
    </section>
     <!-- decoration -->
     <!-- footer -->
    <footer>
        <div class="footer-content">
            <h1>Real estate</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, cum. Vero, explicabo illum. Repudiandae.</p>
            <h4>contact us</h4>
            <ul class="socials">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
            </ul>
        </div>
        <div class="footer-bottom">
            <p>Copyright &copy;2022 idy Dev. Designed by <span>idy</span></p>
        </div>
        
    </footer>
    <script src="script.js"></script>
</body>
</html>