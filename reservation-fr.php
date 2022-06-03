
<!DOCTYPE html>
<head>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<!-- MDB -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
   <!--fontawesome---->

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

     <!--bootstrap-5--->  
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!--Animation-->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /> 


           <!--Folder Css-->
           <link rel="stylesheet" href="css/stylecommun.CSS" />
    <link rel="stylesheet" href="css/Style-3.css" />
    <!---jquery-->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<!--Icon-->
<link rel="icon" href="images/solar-panel.png"/>
   
        <title>Réservation</title>
</head>
<style>
  input::placeholder {
    padding-left: 10px;
    font-size: 15px;
    text-align: left;
}
*{
    margin:0;
    padding:0;
}
</style>
<body>
<header>
                <!-- Navbar -->
                <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: transparent;">
                <div class="container-fluid ">
                    <button
                    class="navbar-toggler"
                    type="button"
                    data-mdb-toggle="collapse"
                    data-mdb-target="#navbarExample01"
                    aria-controls="navbarExample01"
                    aria-expanded="false"
                    aria-label="Toggle navigation" style="border: white solid 1px;">
                    <i class="fas fa-bars" style="color: white;"></i>
                    </button>
                    <!--Logo-->
            <div style="float: left !important;">
            <img src="images/logo_2.png" style="width: 150px;height:50px"/>
            </div>
                    <div class="collapse navbar-collapse" id="navbarExample01" style="margin-right: 100px;">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item active px-4">
                        <a class="nav-link" aria-current="page" href="Page-FR-1.php">SALON</a>
                        </li>
                        <li class="nav-item px-4">
                        <a class="nav-link" href="Page-FR-2.php">EXPOSANTS</a>
                        </li>
                        <li class="nav-item px-4">
                        <a class="nav-link" href="Page-FR-3.php">VISITEURS</a>
                        </li>
                        <li class="nav-item px-4">
                        <a class="nav-link" href="programme-FR.php">PROGRAMMES</a>
                        </li>
                        <li class="nav-item px-4">
                        <a class="nav-link" href="blog-fr.php">ACTUALITES</a>
                        </li>
                        <li class="nav-item px-4">
                        <div class="dropdown">
                            <button class="dropbtn" id="select_lang">FR</button>
                            <div class="dropdown-content">
                            <a href="reservation-fr.php" id="Fr" style="font-size: 11px;text-transform: uppercase;font-weight: 600!important;letter-spacing: 0.1em;text-decoration: none;"><img src="images/fr.png" style="height: 20px;width: 20px;margin-right: 10px !important;">FR</a>
                                <a href="reservation.php" id="Eng" style="font-size: 11px;text-transform: uppercase;font-weight: 600!important;letter-spacing: 0.1em;text-decoration: none;"><img src="images/eng.png" style="height: 20px;width: 20px;margin-right: 10px !important;">EN</a>
                              </div>
                        </div>
                    </li>
                    </ul>
                    </div>
                </div>
                </nav>
                <!-- Navbar -->
                <div class="p-5 text-center bg-light" style="background-image: linear-gradient(rgba(0,0,0,0.527),rgba(0,0,0,0.6)),url(https://images.radio-canada.ca/q_auto,w_1250/v1/ici-info/16x9/panneaux-solaires-travailleur.jpg);background-repeat: no-repeat; height: 840px;background-size: cover;height: auto;flex-basis: 45%;background-attachment: fixed;">
                    <div class="container px-lg-5">
                        <div class="row mx-lg-n5">
                        <div class="col py-3 px-lg-5" id="div_header">
                            <div style="margin-top: 200px;height: auto;" id="div_h1">
                            <h1 style="font-weight: bold;color: #FDCE07;text-align: center;">A propos de nous</h1>
                            <p id="parag_1" style="text-align: center;color: #fff; font-size: 18px;font-family:Roboto,sans-serif">DU 17 AU 19 DECEMBER 2022, AGADIR - MAROC</p>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <!-- Jumbotron -->
</header>
  




<section  style=" background-color:  transparent !important;">
  <div class="container">
  <p style="font-size: 15px ;color: black;font-family:Ubuntu, sans-serif;padding-top: 100px ;"class="text-center">Ce formulaire est destiné uniquement à une demande d’informations pour exposer.</p>

  <div class="row justify-content-center text-align-center" style="text-align: center;" id="div_inputs">
          <div class="col-md-6">
          <?php include 'ticket.php'?>
                <form action="" method="POST">
                <span style="color: red;float:left"><?php echo $nameErr;?></span>
                <input type="text" name="firstName" id="inputs_ticket" placeholder="Nom" value="<?php echo $name; ?>"><br><br>
                <span style="color: red;float:left"><?php echo $lastnameErr;?></span>
                <input type="text" name="lastName" id="inputs_ticket" placeholder="Prénom" value="<?php echo $lastname; ?>"><br><br>
                <span style="color: red;float:left"><?php echo $reasonErr;?></span>
                <input type="text" name="reason" id="inputs_ticket" placeholder="Raison social" value="<?php echo $reason; ?>"><br><br>
                <span style="color: red;float:left"><?php echo $activityErr;?></span>
                <input type="text" name="activity" id="inputs_ticket" placeholder="Secteur d'activité" value="<?php echo $activity; ?>"><br><br>
                <span style="color: red;float:left"><?php echo $functionErr;?></span>
                <input type="text" name="function" id="inputs_ticket" placeholder="Fonction" value="<?php echo $function; ?>"><br><br>
                <span style="color: red;float:left"><?php echo $emailErr;?></span>
                <input type="text" name="email" id="inputs_ticket" placeholder="Adresse e-mail" value="<?php echo $email; ?>"><br><br>
                <span style="color: red;float:left"><?php echo $phoneErr;?></span>
                <input type="tele" name="phone" id="inputs_ticket" placeholder="Téléphone" value="<?php echo $phone; ?>"><br><br>
                <span style="color: red;float:left"><?php echo $requestErr;?></span>
                <input type="text" name="request" id="inputs_ticket" placeholder="Précisez votre demande" value="<?php echo $request; ?>"><br><br>
                    <button id="btn_env_ticket" name="btn_env_ticket">Envoyer</button>
                    
                </form>

          </div>  
    </div>
        
    </div>
</section>




 <!--Map-->
<section class="container" >
  <div id="div-maps"  data-aos="fade-up" data-aos-duration="1500">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d860.2676152482239!2d-9.59944397063904!3d30.405742700000012!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xea3e364d304c6403!2sPalais%20Des%20Congres%20Les%20Dunes%20D%20Or!5e0!3m2!1sfr!2sma!4v1651059532684!5m2!1sfr!2sma"  width="1000w" height="450" style="border:0;" ></iframe>
  </div>
</section>
   <!--Footer-->

   <section class="body">
<footer class="footer ">
  <div class="waves">
      <div class="wave" id="wave1"></div>
      <div class="wave" id="wave2"></div>
      <div class="wave" id="wave3"></div>
      <div class="wave" id="wave4"></div>
  </div>
  <div class="container  ">
      <div class="row  text-md-left">
          <div class="footer-col col-md ">
              <ul>
                  <li> <img class="img-responsive-footer" src="images/5cd9526e23722-logo-removebg-preview.png"></li>
                  <li>
                      <p>salon international de pompage solaire et des energies vertes <br> Copyright @ 2022. All rights reserved.</p>
                  </li>
              </ul>
          </div>
          <div class="footer-col col-md">
              <h4>CONTACT US</h4>
              <ul>
                  <li><a href="#">Email: info@emarketsexpo.ma</a></li>
                  <li><a href="#">Téléphone: +212 (0) 5 29 29 45 69 </a></li>
                  <li><a href="#">Adresse: 
                   <span>Hay salam, Rue 926 Imm 11,
                bureau 4 au 1ère étage, Agadir 80070</span> </a> </li>
              </ul>
          </div>
          <div class="footer-col col-md">
              <h4>S'abonner</h4>
              <ul>





                  <form action="Reservation.php" method="POST">
                  <?php
            $userEmail="";//leave this field blank
            if(isset($_POST['subscribe'])){//if subscribe btn cliked
                $userEmail=$_POST['email'];//getting user email
                if(filter_var($userEmail, FILTER_VALIDATE_EMAIL)){//VALIDATING USER ENTERED EMAIL
                    $subject=" Thanks for subscribing us-SSAM Partners";
                    $message="Thanks for subscribing to our web site, we'll always recieve latest updates from us.and we won't share or sell your informations to anyone.";
                    $sender="From: r.elkhatibi.ssampartners@gmail.com";//email that we use to configure xampp 
                    if(mail($userEmail,$subject, $message, $sender)){//php function to send mails
                    ?>
                    <!--  show a success message if email sent successfully--> 
                    <div class="alert success">Thanks for subscribing us.</div>
                    <?php
                        $userEmail="";//leave this field blank  
                    }else{
                    ?>
                    <!--  show an error message if email can't be sent --> 
                    <div class="alert error">Failed while sending your email!</div>
                    <?php
                    }

                }else{
                    ?>
                   <!--  show an error message user email is not valid--> 
                   <div class="alert error"><?php echo $userEmail ?> is not a valid email!</div>
                    <?php
                }
                
            }
            ?>

               <input  type="email" name="email" class="input" placeholder="Your Email Address"required value="<?php echo "$userEmail" ?>"><br>
                     
              <button type="submit" name="subscribe" value="Subscribe" class="button-sub" style="margin-top: 10px;">
                  <span class="shadow"></span>
                  <span class="edge"></span>
                  <span  class="front text"> S'INSCRIRE
                  </span>
                </button>
                  </form>

              </ul>
          </div>
          <div class="footer-col col-md">
              <h4>Réseau social</h4>
              <ul>
                  <div class="social-links">
                      <a href="#"><i class="fab fa-twitter"></i></i></a>
                      <a href="https://m.facebook.com/SSAMPartners/"><i class="fab fa-facebook"></i></a>
                      <a href="#"><i class="fab fa-instagram"></i></a>
                      <a href="#"><i class="fab fa-google-plus-g"></i></a>
                      <a href="#"><i class="fab fa-youtube"></i></a>
                      <a href="#"><i class="far fa-envelope"></i> </a>
                      <a href="#"> <i class="fab fa-vimeo-v"></i></a>
                      <a href="#"><i class="fab fa-tumblr"></i></a>

                  </div>
              </ul>
          </div>
      </div>
  </div>
</footer>
    </section>


<script src="js/scripts.js"></script>
  <!--Animaton-->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
<!--Script TESTIMONIALS-->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/script.js"></script>


<script src="translation.JS"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.js"></script>
