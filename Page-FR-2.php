
<!DOCTYPE html>
<head>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<!-- MDB -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
   <!--fontawesome---->

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>

     <!--bootstrap-5--->  
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!--Animation-->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /> 


           <!--Folder Css-->
    <link rel="stylesheet" href="css\stylecommun.CSS" />
    <link rel="stylesheet" href="css\Style-2.CSS" />
    <!---jquery-->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <!--OWL-carousel--->
        <script src="js/owl.carousel.min.js"></script>
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <!--Icon-->
    <link rel="icon" href="images/solar-panel.png"/>
        <title>Exposants</title>
</head>
<style>

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
                  <a class="nav-link" href="#">EXPOSANTS</a>
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
                        <a href="Page-FR-2.php" id="Fr" style="font-size: 11px;text-transform: uppercase;font-weight: 600!important;letter-spacing: 0.1em;text-decoration: none;"><img src="images/fr.png" style="height: 20px;width: 20px;margin-right: 10px !important;">FR</a>
                        <a href="Page-2.php" id="Eng" style="font-size: 11px;text-transform: uppercase;font-weight: 600!important;letter-spacing: 0.1em;text-decoration: none;"><img src="images/eng.png" style="height: 20px;width: 20px;margin-right: 10px !important;">EN</a>
                        
                      </div>
                  </div>
              </li>
              </ul>
            </div>
          </div>
    </nav>        <div class="p-5 text-center bg-light" style="background-image: linear-gradient(rgba(0,0,0,0.527),rgba(0,0,0,0.6)),url(https://uploads.mwp.mprod.getusinfo.com/uploads/sites/29/2021/08/renewable_energy.jpg);background-repeat: no-repeat; height: 840px;background-size: cover;height: auto;flex-basis: 45%; background-position: bottom !important;
        background-attachment: fixed;">
            <div class="container px-lg-5">
                <div class="row mx-lg-n5">
                  <div class="col-md-6 py-3 px-lg-5" id="div_header">
                      <div style="margin-top: 200px;height: auto;" id="div_h1">
                    <h1 style="font-weight: bold;color: #FDCE07;text-align: left;text-transform: uppercase;">SALON INTERNATIONAL DE POMPAGE SOLAIRE ET DES ENERGIES VERTES</h1>
                    <p id="parag_1" style="text-align: left;color: #fff; font-size: 18px;font-family:Roboto,sans-serif">SIPSEV 2022 est reportée en raison de la situation sanitaire, afin de préserver la santé des visiteurs et des exposants et la qualité des manifestations commerciales. L'édition 2022 aura lieu du 17 au 19 Décembre 2019 Agadir - Maroc.</p>
                    </div>
                  </div>
                  <div class="col-md-6 py-3 px-lg-5" id="div2_header">
                    <div style="text-align: center;margin-top: 100px;" id="div_inputs" class="form1">
                    <?php include 'ticket.php'?>
                    <form action="" method="POST" >
                    <span style="color: red;float : left"><?php echo $nameErr;?></span>
                        <input style="text-align: left !important;padding-left:10px !important;" type="text" name="firstName" id="inputs_ticket" placeholder=" Nom" value="<?php echo $name; ?>">
                        <span style="color: red;float : left"><?php echo $lastnameErr;?></span>
                        <input style="text-align: left !important;padding-left:10px !important;" type="text" name="lastName" id="inputs_ticket" placeholder="Prénom " value="<?php echo $lastname; ?>">
                        <span style="color: red;float : left"><?php echo $reasonErr;?></span>
                        <input style="text-align: left !important;padding-left:10px !important;" type="text" name="reason" id="inputs_ticket" placeholder="Raison social " value="<?php echo $reason; ?>">
                        <span style="color: red;float : left"><?php echo $activityErr;?></span>
                        <input style="text-align: left !important;padding-left:10px !important;" type="text" name="activity" id="inputs_ticket" placeholder="Secteur d'activité " value="<?php echo $activity; ?>">
                        <span style="color: red;float : left"><?php echo $functionErr;?></span>
                        <input style="text-align: left !important;padding-left:10px !important;" type="text" name="function" id="inputs_ticket" placeholder="Function" value="<?php echo $function; ?>">
                        <span style="color: red;float : left"><?php echo $emailErr;?></span>
                        <input style="text-align: left !important;padding-left:10px !important;" type="text" name="email" id="inputs_ticket" placeholder="Adresse e-mail  " value="<?php echo $email; ?>">
                        <span style="color: red;float : left"><?php echo $phoneErr;?></span>
                        <input style="text-align: left !important;padding-left:10px !important;" type="text" name="phone" id="inputs_ticket" placeholder="Téléphone" value="<?php echo $phone; ?>">
                        <span style="color: red;float : left"><?php echo $requestErr;?></span>
                        <input style="text-align: left !important;padding-left:10px !important;" type="text" name="request" id="inputs_ticket" placeholder="Précisez votre demande" value="<?php echo $request; ?>">
                        <button id="btn_env_ticket" name="btn_env_ticket" style="color: white;">Envoyer</button>
                    </form>
                      </div>
                  </div>
                </div>
              </div>
          </div>
          <!-- Jumbotron -->
  </header>
  <!--REASONS-->
  <div id="reasons-div">
    <div style="margin-bottom: 20px;">
    <h3 id="text_1_h3" style="text-align: center;color: black;margin-top: 20px;margin-bottom: 10px;font-family:Ubuntu, sans-serif;
    font-weight: bold;">6 BONNES RAISONS D'EXPOSER</h3>
    <small id="small-concept" style="margin:0 auto;"></small></div>

    <div class="container">
            <div class="row g-4">
              <div class="col-md-4">
                <div id="icon" data-aos="fade-up" data-aos-duration="1000">
                    <span id="span_icon" class="vc_icon_element-icon fas fa-chart-line"></span>
                </div>
                <div class="card-body" data-aos="fade-up" data-aos-duration="1500">
                    <h5 id="text_1_h5" class="card-title" style="text-align: center;color:black; ">DÉVELOPPER VOTRE RÉSEAU</h5>
                    <p id="parag_2" class="card-text" style="text-align: center;">
                    Avec un événement niche, vous aurez recours à divers prestataires à forte valeur ajoutée qui vous permettra de développer votre business.                    </p>
                  </div>              
            </div>

              <div class="col-md-4">
                <div id="icon" data-aos="fade-up" data-aos-duration="1000">
                    <span id="span_icon" class="vc_icon_element-icon fas fa-user-clock" ></span>
                </div>
                <div class="card-body" data-aos="fade-up" data-aos-duration="1500">
                    <h5 id="text_2_h5" class="card-title" style="text-align: center;color: black;">PROSPECTER EN TEMPS-RÉEL</h5>
                    <p id="parag_3" class="card-text"style="text-align: center;">Une mise en relation directe avec vos prospects, favorise l’achat des produits/services et justifie une hausse, forte probable, de votre capital client.</p>
                  </div>
                        </div>
              <div class="col-md-4">
                <div id="icon" data-aos="fade-up" data-aos-duration="1000">
                    <span id="span_icon" class="vc_icon_element-icon fas fa-users"></span>
                </div>
                <div class="card-body" data-aos="fade-up" data-aos-duration="1500">
                    <h5 id="text_3_h5" class="card-title" style="text-align: center;color: black;">ACCROÎTRE VOS VENTES</h5>
                    <p id="parag_4" class="card-text" style="text-align: center;">
                    
                     contact direct avec vos prospects incite à l'achat de produits/services et justifie une augmentation, très probable, de votre capital client.                    </p>
                  </div>
                </div>
            </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div id="icon" data-aos="fade-up" data-aos-duration="1000">
                    <span id="span_icon" class="vc_icon_element-icon fab fa-sellsy"></span>
                </div>
                    <div class="card-body" data-aos="fade-up" data-aos-duration="1500">
                  <h5 id="text_4_h5" class="card-title" style="text-align: center;color:black; ">AMÉLIORER VOTRE POSITIONNEMENT</h5>
                  <p id="parag_5" class="card-text" style="text-align: center;">
                  Un contact réel avec le client, vous permet de mieux contrôler votre image de marque, ce qui aide dans l’amélioration, par proxy, de vos commandes et de votre importance en tant qu’acteur de marché.
                  </p>
                </div>            
            </div>
  
            <div class="col-md-4">
                <div id="icon" data-aos="fade-up" data-aos-duration="1000">
                    <span id="span_icon" class="vc_icon_element-icon fas fa-users-cog"></span>
                </div>
                <div class="card-body" data-aos="fade-up" data-aos-duration="1500">
                  <h5 id="text_5_h5" class="card-title" style="text-align: center;color: black;">STIMULER VOTRE ÉQUIPE</h5>
                  <p id="parag_6" class="card-text" style="text-align: center;">
                    Responsabiliser votre capital humain en leurs accordant le rôle d’ambassadeurs de vos produits/services vous permettra de créer un meilleur environnement interne ou le rendement et la motivation règne.</p>
              </div>
            </div>
                <div class="col-md-4">
                    <div id="icon" data-aos="fade-up" data-aos-duration="1000">
                        <span id="span_icon" class="vc_icon_element-icon fas fa-eye"></span>
                    </div>
                    <div class="card-body" data-aos="fade-up" data-aos-duration="1500">
                      <h5 id="text_6_h5" class="card-title" style="text-align: center;color: black;">FAVORISER VOTRE VISIBILITÉ</h5>
                      <p id="parag_7" class="card-text" style="text-align: center;">
                      Avec divers partenaires au niveau national tant qu’international, le Salon vous accorde un taux de visibilité accrue, qui s’amortisse dans le temps par une facilité d’accès au divers marchés nationaux, continentaux et internationaux.                      </p>
                    </div>
                 
                </div>
              </div>
    </div>


<!--SECTEURS-->
<div id="secteur-div">
  <div style="margin-bottom: 70px;">
    <h3 id="text_2_h3" style="text-align: center;color: white;margin-top: 10px;margin-bottom: 10px;font-family:Ubuntu, sans-serif;
    font-weight: bold;">LE SALON ABRITE PLUSIEURS SECTEURS</h3>
    <small id="small-concept" style="margin:0 auto;border:1px solid white;"></small></div>
    <div class="container">
    <div class="row row-cols-1 row-cols-md-4 row-cols-sm-2 g-4" >
            <div class="col">
                <div style="text-align: center;" data-aos="fade-up" data-aos-duration="1500">
                  <span id="icon2_span" class="fas fa-solar-panel"></span>
                </div>
                    <div class="card-body">
                  <p id="secteur_1" class="card-title" style="text-align: center;color:white;font-weight: bold;font-size: 15px; ">Energie solaire</p>
                </div>
            </div>
            <div class="col">
                <div style="text-align: center;" data-aos="fade-up" data-aos-duration="1500">
                  <span id="icon2_span" class="fas fa-wind"></span>
                </div>
                <div class="card-body">
                  <p id="secteur_2" class="card-title" style="text-align: center;color: white;font-weight: bold;font-size: 15px;">Energie éolienne</p>
              </div>
            </div>
            <div class="col">
                <div style="text-align: center;" data-aos="fade-up" data-aos-duration="1500">
                  <span id="icon2_span" ><i class="fa-solid fa-water"></i></span>
                </div>
                <div class="card-body">
                  <p id="secteur_3" class="card-title" style="text-align: center;color: white;font-weight: bold;font-size: 15px;">Energie hydraulique, Hydroélectricité

</p>
                </div>
              </div>
              <div class="col">
                <div style="text-align: center;" data-aos="fade-up" data-aos-duration="1500">
                  <span id="icon2_span" class="fa-solid fa-fan"></span>
        </div>
        <div class="card-body">
          <p id="secteur_4" class="card-title" style="text-align: center;color: white;font-weight: bold;font-size: 15px;">Energie marine</p>
        </div>
      </div>
      <div class="col">
        <div style="text-align: center;" data-aos="fade-up" data-aos-duration="1500">
          <span id="icon2_span" class="fa-solid fa-leaf"></span>
      </div>
        <div class="card-body">
          <p id="secteur_5" class="card-title" style="text-align: center;color: white;font-weight: bold;font-size: 15px;">Energie biomasse</p>
        </div>
      </div>
      <div class="col">
        <div style="text-align: center;" data-aos="fade-up" data-aos-duration="1500">
          <span id="icon2_span" class="fa-solid fa-fire"></span>
      </div>
        <div class="card-body">
          <p id="secteur_6" class="card-title" style="text-align: center;color: white;font-weight: bold;font-size: 15px;">Bois énergie</p>
        </div>
      </div>
      <div class="col">
        <div style="text-align: center;" data-aos="fade-up" data-aos-duration="1500">
          <span class="fa-solid fa-fire-flame-simple" id="icon2_span"></span>
      </div>
        <div class="card-body">
          <p id="secteur_7" class="card-title" style="text-align: center;color: white;font-weight: bold;font-size: 15px;">Biogaz</p>
        </div>
      </div>
      <div class="col">
        <div style="text-align: center;" data-aos="fade-up" data-aos-duration="1500">
          <span class="fa-solid fa-charging-station" id="icon2_span"></span>
      </div>
        <div class="card-body">
          <p id="secteur_8" class="card-title" style="text-align: center;color: white;font-weight: bold;font-size: 15px;">Biocarburants</p>
        </div>
      </div>
      <div class="col">
        <div style="text-align: center;" data-aos="fade-up" data-aos-duration="1500">
          <span class="fa-solid fa-plug" id="icon2_span"></span>
      </div>
        <div class="card-body">
          <p id="secteur_9" class="card-title" style="text-align: center;color: white;font-weight: bold;font-size: 15px;">Géothermie</p>
        </div>
      </div>
      <div class="col">
        <div style="text-align: center;" data-aos="fade-up" data-aos-duration="1500">
          <span class="fa-solid fa-lightbulb" id="icon2_span"></span>
      </div>
        <div class="card-body">
          <p id="secteur_10" class="card-title" style="text-align: center;color: white;font-weight: bold;font-size: 15px;">Efficacité énergétique</p>
        </div>
      </div>
      <div class="col">
        <div style="text-align: center;" data-aos="fade-up" data-aos-duration="1500">
          <span class="fas fa-chalkboard-teacher" id="icon2_span"></span>
      </div>
        <div class="card-body">
          <p id="secteur_11" class="card-title" style="text-align: center;color: white;font-weight: bold;font-size: 15px;">Conseil et formation
</p>
        </div>
      </div>
      <div class="col">
        <div style="text-align: center;" data-aos="fade-up" data-aos-duration="1500">
          <span class="fa-solid fa-battery-three-quarters" id="icon2_span"></span>
      </div>
        <div class="card-body">
          <p id="secteur_12" class="card-title" style="text-align: center;color: white;font-weight: bold;font-size: 15px;">Economie d’énergie</p>
        </div>
      </div>
      <div class="col">
        <div style="text-align: center;" data-aos="fade-up" data-aos-duration="1500">
          <span class="vc_icon_element-icon fas fa-money-check" id="icon2_span"></span>
      </div>
        <div class="card-body">
          <p id="secteur_13" class="card-title" style="text-align: center;color: white;font-weight: bold;font-size: 15px;">Banques et assurances</p>
        </div>
      </div>
      <div class="col">
        <div style="text-align: center;" data-aos="fade-up" data-aos-duration="1500">
          <span class="vc_icon_element-icon fas fa-hand-holding-usd" id="icon2_span"></span>
      </div>
        <div class="card-body">
          <p id="secteur_14" class="card-title" style="text-align: center;color: white;font-weight: bold;font-size: 15px;">Services d’investissements
 </p>
        </div>
      </div>
      <div class="col">
        <div style="text-align: center;" data-aos="fade-up" data-aos-duration="1500">
          <span class="vc_icon_element-icon fas fa-hands-helping" id="icon2_span"></span>
      </div>
        <div class="card-body">
          <p id="secteur_15" class="card-title" style="text-align: center;color: white;font-weight: bold;font-size: 15px;">Coopératives agricoles </p>
        </div>
      </div>
      <div class="col">
        <div style="text-align: center;" data-aos="fade-up" data-aos-duration="1500">
          <span class="fa-solid fa-seedling" id="icon2_span"></span>
      </div>
        <div class="card-body">
          <p id="secteur_16" class="card-title" style="text-align: center;color: white;font-weight: bold;font-size: 15px;">Energies renouvelables</p>
        </div>
      </div>
      <div class="col">
        <div style="text-align: center;" data-aos="fade-up" data-aos-duration="1500">
          <span class="fa-solid fa-earth-africa" id="icon2_span"></span>
      </div>
        <div class="card-body">
          <p id="secteur_16" class="card-title" style="text-align: center;color: white;font-weight: bold;font-size: 15px;">Environnement et climat
</p>
        </div>
      </div>
      <div class="col">
        <div style="text-align: center;" data-aos="fade-up" data-aos-duration="1500">
          <span class="fa-solid fa-magnifying-glass-dollar" id="icon2_span"></span>
      </div>
        <div class="card-body">
          <p id="secteur_16" class="card-title" style="text-align: center;color: white;font-weight: bold;font-size: 15px;">Recherche et développement</p>
        </div>
      </div>
      <div class="col">
        <div style="text-align: center;" data-aos="fade-up" data-aos-duration="1500">
          <span class="vc_icon_element-icon fas fa-award" id="icon2_span"></span>
      </div>
        <div class="card-body">
          <p id="secteur_16" class="card-title" style="text-align: center;color: white;font-weight: bold;font-size: 15px;">Certification</p>
        </div>
      </div>
      <div class="col">
        <div style="text-align: center;" data-aos="fade-up" data-aos-duration="1500">
          <span class="fa-solid fa-building" id="icon2_span"></span>
      </div>
        <div class="card-body">
          <p id="secteur_16" class="card-title" style="text-align: center;color: white;font-weight: bold;font-size: 15px;">Bureaux d’étudest</p>
        </div>
      </div>
          </div>
        </div>
  </div>

</div>

<!--EXPOSITION HYBRIDE-->
<div style="margin-bottom: 70px;">
    <h3 id="text_3_h3" style="text-align: center;color: black;margin-top: 10px;margin-bottom: 10px;font-family:Ubuntu, sans-serif;
    font-weight: bold;text-transform: uppercase;">UNE EXPOSITION HYBRIDE</h3>
    <small id="small-concept" style="margin:0 auto;"></small></div>
  
        <div id="exposition" >
            <div style="margin-bottom:50px;">
                <h3 id="text_4_h3" style="text-align: center;color: white;margin-top: 20px;margin-bottom: 10px;font-family:Ubuntu, sans-serif;
              font-weight: bold;text-transform: uppercase;">PLAN DU SALON</h3>
              <small id="small-concept"style="margin:0 auto;border:1px solid #fff;"></small>
            </div>
            <img srcset="images\Plan.PNG 480w,
            images\Plan.PNG 700w"
                 sizes="(max-width: 600px) 480px,
                        800px"
                 src="images\Plan.PNG" alt="Elva dressed as a fairy">         
                     </div>
          </div>
<!--FORMULES DE SPONSORING-->
<div class="container " style="margin-bottom: 70px;margin-top: 70px;" id="formule_spn">
      <div style="margin-bottom: 80px;">
      <h3 id="text_5_h3" style="text-align: center;color: black;margin-top: 20px;margin-bottom: 10px;font-family:Ubuntu, sans-serif;
      font-weight: bold;">3 FORMULES DE SPONSORING</h3>
      <small id="small-concept" style="margin:0 auto;"></small></div>
      <div class="row row-cols-1 row-cols-md-4 g-4 justify-content-center text-align-center ">
          <div class="col" style=" margin:0 auto; width:430px; display:flex;align-items:flex-end;" id="div_formule">
              <div class="card-body" style=" background-color: #f2f2f2;">
                <p class="card-text" style="text-align: center;font-size: 15px; padding:25px 0px;">
                <span>Espace d’exposition nu de</span><br>
                  <span>Emplacement préférentiel sur allée central</span><br>
                <span>1 page de publicité en catalogue officiel</span><br>
                <span>1 page de publicité intérieur dans le catalogue officiel</span><br>
                  <span>Insertion du logo sur les supports de communication</span><br>
                  <span>Bannière sur le site du salon pendant 12 mois</span><br>
                  <span>Invitation et intervention </span><br>
                  <span>Remerciements et citation lors de la conférence presse</span><br>
                  <span>Publi-reportage en pages actualités </soan><br>
                  <span>Cartes d’invitation</soan><br></p>
              </div>
          </div>
        <div class="col" style="width: 260px; margin-right: 30px;" >
          <div class="card h-100" style="height: 120px;width: 260px;" id="div_copper">
            <div style="background-color: #B87333;height: 120px;width: 260px;text-align: center;" id="div2_copper">
              <i class='fa fa-star' style="color: white;margin-top: 40px;"></i>
              <i class='fa fa-star' style="color: white;margin-top: 40px;"></i>
              <i class='fa fa-star' style="color: white;margin-top: 40px;"></i>
            <p style="color: white;font-weight: bold;text-align: center;">Platinum</p>
            </div>
            <div class="card-body" style="width: 260px;" id="div3_copper">
              <p class="card-text" style="text-align: center;font-size: 15px;">
              <span>54m²</span><br>
              <span>Oui</span><br>
              <span>4ème couverture</span><br>
              <span>Oui</span><br>
              <span>Oui</span><br>
              <span>Oui</span><br>
              <span>Oui</span><br>
              <span>Oui</span><br>
              <span>Oui</span><br>
              <span>1 000 cartes/VIP 10.</span><br></p>
            </div>
            <div class="card-footer" style="background-color: #B87333; text-align: center;">
            <a href="reservation-fr.php" style=" text-decoration: none;"><small class="text-muted" style="color: white !important;">Reserver</small>
              <i class="vc_btn3-icon fas fa-chevron-circle-right" style="color: white;"></i></a> 
            </div>
          </div>
        </div>
      
        <div class="col" style="width: 260px; margin-right: 30px;">
          <div class="card h-100" style="height: 120px;width: 260px;"id="div_gold">
            <div style="background-color: #FFD700;height: 120px;width: 260px;text-align: center;"id="div2_gold">
              <i class='fa fa-star' style="color: white;margin-top: 40px;"></i>
              <i class='fa fa-star' style="color: white;margin-top: 40px;"></i>
              <p style="color: white;font-weight: bold;text-align: center;">Gold</p></div>
            <div class="card-body"style="width: 260px;"id="div3_gold">
              <p class="card-text" style="text-align: center;font-size: 15px;">
                <span>36m²</span><br>
              <span>Oui</span><br>
              <span>3ème couverture</span><br>
              <span>Oui</span><br>
              <span>Oui</span><br>
              <span>Oui</span><br>
              <span>_</span><br>
              
              <span>_</span><br>
              <span>Oui</span><br>
              <span>700 cartes/VIP 7</span><br>
              </p>
            </div>
            <div class="card-footer" style="background-color: #FFD700;text-align: center;">
              <a href="reservation-fr.php" style=" text-decoration: none;"><small class="text-muted" style="color: white !important;">Reserver</small>
                <i class="vc_btn3-icon fas fa-chevron-circle-right" style="color: white;"></i></a> 
            </div>
          </div>
        </div>
        <div class="col" style="width: 260px; margin-right: 30px;">
          <div class="card h-100" style="height: 120px;width: 260px;"id="div_silv">
            <div style="background-color: #C0C0C0;height: 120px;width: 260px;text-align: center;"id="div2_silv">
              <i class='fa fa-star' style="color: white;margin-top: 40px;"></i>
              <p style="color: white;font-weight: bold;text-align: center;">Silver</p></div>
            <div class="card-body" style="width: 260px;"id="div3_silv">
              <p class="card-text" style="text-align: center;font-size: 15px;">
                <span>18m²</span><br>
              <span>Oui</span><br>
              <span>_</span><br>
              <span>Oui</span><br>
              <span>Oui</span><br>
              <span>_</span><br>
              <span>_</span><br>
              <span>_</span><br>
              <span>Oui</span><br>
              <span>400 cartes/VIP 4</span><br>
              </p>
            </div>
            <div class="card-footer" style="background-color: #C0C0C0;text-align: center;">
              <a href="reservation-fr.php" style=" text-decoration: none;"><small class="text-muted" style="color: white !important;">Reserver</small>
                <i class="vc_btn3-icon fas fa-chevron-circle-right" style="color: white;"></i></a> 
            </div>
          </div>
        </div>
      </div>
</div>


<!--FORMULES DE PARTICIPATION-->
<section style="margin-bottom: 70px;margin-top: 70px;" id="formule_prtc">
    <div style="margin-bottom: 80px;">
          <h3 id="text_6_h3" style="text-align: center;color: white;margin-top: 20px;margin-bottom: 10px;font-family:Ubuntu, sans-serif;
          font-weight: bold;">4 FORMULES DE PARTICIPATION
</h3>
          <small id="small-concept" style="margin:0 auto;border:1px solid white;"></small>
    </div>
        <div  class="container">
        <div class="row row-cols-1 row-cols-md-4 g-4 justify-content-center text-align-center">
        <div class="col" style="margin:0 auto; width:430px; display:flex;align-items: flex-end;" id="div_formule_2">
            <div class="card-body" style="background-color: #f2f2f2;">
              <p class="card-text" style="text-align: center;font-size: 15px;padding:25px 0;">
              <span>Superficie du stand</span><br>
                <span>Structure en aluminium</span><br>
                <span>Panneaux stratidecor</span><br>
                <span>Enseigne</span><br>
              <span>Revêtement du sol avec moquette</span><br>
              <span>Comptoirs</span><br>
              <span>Tables</span><br>
                <span>Chaise</span><br>
                <span>Corbeilles</span><br>
                <span>Prise de courant d’électricité</span><br>
                <span>Spots de 100 W</soan><br>
                <span>Cartes d’invitations</soan><br>
                <span>Invitations VIP</span><br></p>
            </div>
        </div>
      <div class="col" style="width: 260px; margin-right: 30px;" >
          <div class="card h-100" style="height: 120px;width: 260px;" id="div_stand36" >
                    <div style="background-color: #2379db;height: 120px;width: 260px;text-align: center;" id="div2_stand36" >
                        <p style="color: white;font-weight: bold;text-align: center;margin-top: 25% !important;">STAND 36</p>
                    </div>
                    <div class="card-body" style="width: 260px;"  id="div3_stand36">
                      <p class="card-text" style="text-align: center;font-size: 15px;">
                      <span>9m²</span><br>
                      <span>Oui</span><br>
                      <span>Oui</span><br>
                      <span>Oui</span><br>
                      <span>Oui</span><br>
                      <span>Oui</span><br>
                      <span>Oui</span><br>
                      <span>3</span><br>
                      <span>1</span><br>
                      <span>1</span><br>
                      <span>3</span><br>
                      <span>60</span><br>
                      <span>2</span><br></p>
                    </div>
                    <div class="card-footer" style="background-color: #2379db; text-align: center;">
                      <a href="reservation-fr.php" style=" text-decoration: none;"><small class="text-muted" style="color: white !important;">Reserver</small>
                      <i class="vc_btn3-icon fas fa-chevron-circle-right" style="color: white;"></i></a> 
                    </div>
          </div>
      </div>
      
      <div class="col" style="width: 260px; margin-right: 30px;">
        <div class="card h-100" style="height: 120px;width: 260px;" id="div_stand9">
            <div style="background-color: #2379db;height: 120px;width: 260px;text-align: center;" id="div2_stand9">
                <p style="color: white;font-weight: bold;text-align: center;margin-top: 25% !important;">STAND 09</p></div>
                    <div class="card-body"style="width: 260px;"id="div3_stand9">
                      <p class="card-text" style="text-align: center;font-size: 15px;">
                      <span>09m²</span><br>
                      <span>Oui</span><br>
                      <span>Oui</span><br>
                      <span>1</span><br>
                      <span>3</span><br>
                      <span>1</span><br>
                      <span>1</span><br>
                      <span>1</span><br>
                      <span>3</span><br>
                      <span>3</span><br>
                      <span>3</span><br>
                      <span>1</span><br>
                      <span>Oui</span><br></p>
                      </p>
                    </div>
                    <div class="card-footer" style="background-color: #2379db;text-align: center;">
                      <a href="reservation-fr.php" style=" text-decoration: none;"><small class="text-muted" style="color: white !important;">Reserver</small>
                        <i class="vc_btn3-icon fas fa-chevron-circle-right" style="color: white;"></i></a> 
                    </div>
            </div>
        </div>
        <div class="col" style="width: 260px; margin-right: 30px;">
              <div class="card h-100" style="height: 120px;width: 260px;" id="div_essen">
                      <div style="background-color: #2379db;height: 120px;width: 260px;text-align: center;"id="div2_essen">
                        <p style="color: white;font-weight: bold;text-align: center;margin-top: 25% !important;text-transform: uppercase;">ESSENTIAL</p>
                      </div>
                      <div class="card-body"style="width: 260px;"id="div3_essen">
                        <p class="card-text" style="text-align: center;font-size: 15px;">
                          <span>06m²</span><br>
                        <span>Oui</span><br>
                        <span>Oui</span><br>
                        <span>1</span><br>
                        <span>3</span><br>
                        <span>1</span><br>
                        <span>0</span><br>
                        <span>0</span><br>
                        <span>1</span><br>
                        <span>2</span><br>
                        <span>3</span><br>
                        <span>1</span><br>
                        <span>Oui</span><br></p>
                        </p>
                      </div>
                    <div class="card-footer" style="background-color: #2379db;text-align: center;">
                      <a href="reservation-fr.php" style=" text-decoration: none;"><small class="text-muted" style="color: white !important;">Reserver</small>
                        <i class="vc_btn3-icon fas fa-chevron-circle-right" style="color: white;"></i></a> 
                    </div>
              </div>
        </div>
    </div>
        </div>
    
</section>

  <!--PROCÉDURE DE RÉSERVATION-->
  <div style="margin-bottom: 10px;margin-top: 70px;" id="procedure" class="container">
    <div style="margin-bottom: 50px;">
    <h3 id="text_7_h3" style="text-align: center;color: black;margin-top: 20px;margin-bottom: 10px;font-family:Ubuntu, sans-serif;
    font-weight: bold;">PROCÉDURE DE RÉSERVATION</h3>
    <small id="small-concept" style="margin:0 auto;"></small></div>
    <div class="row row-cols-1 row-cols-md-4 g-4">
      <div class="col">
          <div id="icon_squar" data-aos="fade-up" data-aos-duration="500">
              <span id="icon3_span" class="vc_icon_element-icon fas fa-edit" ></span>
          </div>
              <div class="card-body">
            <h5 class="card-title" style="text-align: center;color:black;font-size: 15px;font-weight: bold; ">Inscription en ligne</h5>
            <p class="card-text" style="text-align: center;font-size: 14px;">Pour réserver veuillez remplir le formulaire en ligne, pour recevez le plan et les emplacements disponibles.</p>
          </div>
        </div>
      <div class="col">
          <div id="icon_squar" data-aos="fade-up" data-aos-duration="500">
              <span id="icon3_span" class="vc_icon_element-icon fas fa-store" ></span>
          </div>
          <div class="card-body">
            <h5 class="card-title" style="text-align: center;color:black;font-size: 15px;font-weight: bold; ">Emplacement du stand</h5>
            <p class="card-text" style="text-align: center;font-size: 14px;">Choisissez l’emplacement de votre entreprise sur le plan du salon, un stand nu ou aménagé.</p>
          </div>
        </div>
      <div class="col">
          <div id="icon_squar" data-aos="fade-up" data-aos-duration="500">
              <span class="vc_icon_element-icon far fa-file-alt" id="icon3_span"></span>
          </div>
          <div class="card-body">
            <h5 class="card-title" style="text-align: center;color:black;font-size: 15px;font-weight: bold; ">Bulletin de réservation</h5>
            <p class="card-text" style="text-align: center;font-size: 14px;"> Envoyez-nous votre formulaire de réservation complété au plus tard un mois avant le début du salon.</p>
          </div>
      </div>
      <div class="col">
        <div id="icon_squar" data-aos="fade-up" data-aos-duration="500">
            <span class="vc_icon_element-icon far fa-thumbs-up" id="icon3_span"></span>
        </div>
        <div class="card-body">
          <h5 class="card-title" style="text-align: center;color:black;font-size: 15px;font-weight: bold; ">Validation, Approbation</h5>
          <p class="card-text" style="text-align: center;font-size: 14px;">Après la validation, vous recevrez d’autres documents afin de compléter votre participation au salon</p>
        </div>
    </div>
      </div>
</div>
  <!--Date de limite-->
  <div style="margin-bottom: 70px;">
    <h3 style="text-align: center;color: #FDCE07;margin-bottom: 10px;font-family:Ubuntu, sans-serif;
    font-weight: bold;">Date limite de réservation : 29 May 2022</h3>
    </div>
 <!--PARTNERS & SPONSORS-------------------------------------------------------------------------->
 <div class="text-center text-white" style="padding-bottom: 50px !important;background-image: linear-gradient(rgba(0,0,0,80%),rgba(0,0,0,80%)),url(http://demo.ovathemes.com/mitup/wp-content/uploads/2016/08/bg2.jpeg);flex-basis: 45%;background-attachment: fixed;">
      
      <!--SPONSORS-->
          <section class="sponsors" style="margin-top: 10px; padding-top: 20px;">
          <div class="container ">
              <h3 id="text_7_h3">SPONSORS</h3>
              <small id="small-concept" style=" border: 1px solid white;margin: 0 auto;"></small>
              
              <div class="row row-cols-1 row-cols-md-3 g-3" style="display: flex;align-items: center;justify-content: center;">
                  <div class="col" >
                      <div class="card-body"  data-aos="fade-up" data-aos-duration="1500" >
                          <h6 id="text_8_h3" >GOLD SPONSORS</h6>
                      </div>
                          <img src="images\AMEE-Concours.jpg" class="card-img-top" alt="..." data-aos="fade-up" data-aos-duration="1000">
                      </div>
                  <div class="col" >
                          <div class="card-body"  data-aos="fade-up" data-aos-duration="1500" >
                              <h6 id="text_8_h3" >SILVER SPONSORS</h4>
                          
                          </div>
                          <img src="images\brand-logo-5.jpg" class="card-img-top" alt="..." data-aos="fade-up" data-aos-duration="1000">
                  </div>
                  <div class="col" >
                          <div class="card-body"  data-aos="fade-up" data-aos-duration="1500">
                              <h6 id="text_8_h3" >SPONSOR PLATINUM</h6>
                      
                          </div>
                          <img src="images\brand-logo-3.jpg" class="card-img-top" alt="..." data-aos="fade-up" data-aos-duration="1000">
                  </div>
              </div>
          
          </div>
      
          </section>

      <!--PARTENAIRES ---------------------------------------------------------------------------->
          <section class="partenaires1" style="margin-top: 40px;">
              <div class="container">
          <div>
              <h3 id="text_7_h3" style="text-align: center; color: white;margin-top: 20px;font-family:Ubuntu, sans-serif;font-weight: bold;">PARTENAIRES </h3>
              <small id="small-concept" style=" border: 1px solid white;margin: 0 auto;"></small>
          </div>
          <div class="owl-carousel owl1">
          
              <div class="img-022">
                  <a href="http://www.abhsm.ma/"target="_blank">
                      <img src="images\ABHSMD.jpg" alt="faculty" >
                  </a>
              </div>
              <div class="img-022">
                  <a href=""target="_blank">
                      <img src="images\chawad.jpg" alt="faculty" >
                  </a>
              </div>
              <div class="img-022">
                  <a href="http://creation.crimarrakech.ma/"target="_blank">

              <img src="images\CRI-.jpg" alt="faculty" >
          </a>
              </div>
              
              <div class="img-022">
                  <a href="https://www.alsa.ma/agadir/alsa-agadir"target="_blank">

              <img src="images\file.jpg" alt="faculty" >
          </a>
              </div>
              
              <div class="img-022">
                  <a href="https://www.uiz.ac.ma/"target="_blank">

              <img src="images\ibn zohr.jpg" alt="faculty" >
          </a>
              </div> 
              <div class="img-022">
              <a href="https://www.soussmassa.ma/fr"target="_blank">
                  <img src="images\crsm.png" alt="faculty" >
              </a>
              </div>
              <div class="img-022">
                  <a href="http://www.anapec.org/sigec-app-rv/"target="_blank">

                  <img src="images\Logo-ANAPEC.png" alt="faculty" >
              </a>
              </div>
                  <div class="img-022">
                      <a href="https://www.thegef.org/"target="_blank">

                  <img src="images\gef-logo.jpg" alt="faculty" >
                  </a>
                  </div>
                  <div class="img-022">
                      <a href="http://chambreagriculturesm.com/"target="_blank">

                      <img src="images\logos CDRS.png" alt="faculty" >
                  </a>
                  </div>
                  <div class="img-022">
                      <a href=""target="_blank">

                      <img src="images\resovert.png" alt="faculty" >
                  </a>
                  </div>
                  <div class="img-022">
                      <a href=""target="_blank">

                      <img src="images\un.jpg" alt="faculty" >
                  </a>
                  </div>
          
              </div>
              </div>
              
          </section>
<!--PARTENAIRES STRATÉGIQUES----------------------------------------------------->
          <section class="partenaires2" style="margin-top: 40px; ">
                  <div class="container">
              <div>
                  <h3 id="text_7_h3" style="text-align: center; color: white;margin-top: 20px;font-family:Ubuntu, sans-serif;font-weight: bold;">PARTENAIRES STRATÉGIQUES</h3>
                  <small id="small-concept" style=" border: 1px solid white;margin: 0 auto;"></small>
              </div>
                  <div class="owl-carousel owl2">
                  
                  <div class="img-022">
                      <a href="http://www.amisole.ma/"target="_blank">
                          <img src="images\PARTENAIRES STRATÉGIQUES1.png" alt="faculty" >
                      </a>
                  </div>
                  <div class="img-022">
                      <a href="http://www.giac-btp.com/"target="_blank">
                          <img src="images\PARTENAIRES STRATÉGIQUES2.png" alt="faculty" >
                      </a>
                  </div>
                  <div class="img-022">
                      <a href="https://www.camacoes-casablanca.com/"target="_blank">

                  <img src="images\PARTENAIRES STRATÉGIQUES3.png" alt="faculty" >
              </a>
                  </div>
                  
                  <div class="img-022">
                      <a href="https://marokko.ahk.de/fr/"target="_blank">

                  <img src="images\PARTENAIRES STRATÉGIQUES4.jpg" alt="faculty" >
              </a>
                  </div>
              </div>
              </div>
          
          </section>
    <!--PARTENAIRES MEDIAS------------------------------------------------------------------------>
        <section class="partenaires3" style="margin-top: 40px;">
              <div class="container">
          <div>
              <h3 id="text_7_h3" style="text-align: center; color: white;margin-top: 20px;font-family:Ubuntu, sans-serif;font-weight: bold;">PARTENAIRES MEDIAS</h3>
              <small id="small-concept" style=" border: 1px solid white;margin: 0 auto;"></small>
          </div>
              <div class="owl-carousel owl1">
              
              <div class="img-022">
              <a href="https://souss24.com/"target="_blank">
                  <img src="images\24SOUSS.jpg" alt="faculty" >
                  </a>
              </div>
              <div class="img-022">
                  <a href="https://agadir24.info/"target="_blank">
                      <img src="images\Agadir24.jpg" alt="faculty" >
                  </a>
              </div>
              <div class="img-022">
              <a href="https://www.mapnews.ma/ar/"target="_blank">
              <img src="images\seeklogo.com.png" alt="faculty" >
          </a>
              </div>
              
              <div class="img-022">
              <a href="https://rimaltv.com/"target="_blank">
                  <img src="images\rimaltv.jpg" alt="faculty" >
          </a>
              </div>
              
              <div class="img-022">
              <a href="http://resagro.com/"target="_blank">
              <img src="images\resagro-logo-c1.jpg" alt="faculty" >
          </a>
              </div>
              <div class="img-022">
              <a href="https://www.facebook.com/%D8%A7%D8%B0%D8%A7%D8%B9%D8%A9-%D8%A7%D9%83%D8%A7%D8%AF%D9%8A%D8%B1-%D8%A7%D9%84%D8%AC%D9%87%D9%88%D9%8A%D8%A9-123900049006695/"target="_blank">
                  <img src="images\radioagadir.png" alt="faculty" >
              </a>
              </div>
              
                  <div class="img-022">
                  <a href="https://oxfordbusinessgroup.com/"target="_blank">
                      <img src="images\oxford-business-group-vector-logo.png" alt="faculty" >
                  </a>
                  </div>
                  <div class="img-022">
                      <a href="https://www.mfmradio.ma/"target="_blank">
                      <img src="images\mfm.png" alt="faculty" >
                  </a>
                  </div>
                  <div class="img-022">
                      <a href="https://medias24.com/"target="_blank">
                      <img src="images\MEDIA-242-1.png" alt="faculty" >
                  </a>
                  </div>
                  <div class="img-022">
                      <a href="https://www.levert.ma/"target="_blank">
                      <img src="images\logo-portable-levert.jpg" alt="faculty" >
                  </a>
                  </div>
                  <div class="img-022">
                      <a href="https://www.heuredujournal.com/logo-hdj-2/"target="_blank">
                      <img src="images\logo-hdj.jpg" alt="faculty" >
                  </a>
                  </div>
                  <div class="img-022">
                      <a href="http://www.snrt.ma/?lang=fr"target="_blank">
                      <img src="images\logo-aloula.png" alt="faculty" >
                  </a>
                  </div>
                  <div class="img-022">
                      <a href="https://2m.ma/ar/"target="_blank">
                      <img src="images\LOGO-2M.jpg" alt="faculty" >
                  </a>
                  </div>
                  <div class="img-022">
                      <a href="https://energiemines.ma/"target="_blank">
                      <img src="images\energie.jpg" alt="faculty" >
                  </a>
                  </div>
          
                  <div class="img-022">
                      <a href="https://industries.ma/"target="_blank">
                      <img src="images\channels4_profile.jpg" alt="faculty" >
                  </a>
                  </div>
                  <div class="img-022">
                      <a href="https://aujourdhui.ma/"target="_blank">
                      <img src="images\aujourd-hui-le-maroc-logo.jpg" alt="faculty" >
                  </a>
                  </div>
              </div>
              </div>
        </section>
</div>
    <!--FAQ-->

    <section class="accord1" style=" background-color:  #f9f9f9 !important;padding-top: 60px;"> 
        <div class="container">
            
            <div class="row"  data-aos="fade-up" data-aos-duration="1500">
                     
                    <div class="col-md-6">
                        <h3 style="color: #13133E;margin-top: 20px;margin-bottom: 20px;font-family:Ubuntu, sans-serif;
                        font-weight: bold;">Faq's events   <small id="small-concept"></small> </h3> 
                        <div class="accordion">
                            <button class="btnaccordion">
                                How to register event ?
                                <i class="accordion_icon fas fa-angle-down"></i>
                            </button>
                            <div class="accordion_content">         
                                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry</p>
                            </div>
                        </div>
                        
                        <div class="accordion">
                            <button  class="btnaccordion">
                                How to make extra fields in register form ?
                               <i class="accordion_icon fas fa-angle-right"></i>
                            </button>
                            <div class="accordion_content">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry</p>

                            </div>           
                        </div>                       
                        <div class="accordion">
                            <button  class="btnaccordion">
                                How to buy this theme ?                 

                                <i class="accordion_icon fas fa-angle-right"></i>
                            </button>
                            <div class="accordion_content"> 
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry</p>

                            </div>
                        </div>
                        <div class="accordion">
                            <button  class="btnaccordion">
                                Lorem ipsum dolor sit amet ?                
                                <i class="accordion_icon fas fa-angle-right"></i>
                            </button>
                            <div class="accordion_content">         
                                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry</p>
                            </div>
                        </div>
                        <div class="accordion">
                            <button  class="btnaccordion">
                                How to export registration to csv file ?
                                <i class="accordion_icon fas fa-angle-right"></i>
                            </button>
                            <div class="accordion_content">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry</p>

                            </div>
                        </div>
                    </div>
        <div class="col-md-6">
                         <!--Ticket-->
                            <div id="ticket-div">
                                <h3 style="color: #13133E;margin-top: 20px;margin-bottom: 20px;font-family:Ubuntu, sans-serif;
                            font-weight: bold;">OPEN TICKET  <small id="small-concept"></small></h3>
                            </div>
                            <div  id="div_inputs">
  <?php include 'ticket2.php'?>
  <form action="" method="POST">
  <span style="color: red;"><?php echo $nameErr;?></span>

    <input style="text-align: left; " type="text" name="firstName" id="inputs_ticket" placeholder="First name" value="<?php echo $name; ?>"><br><br>
    <span style="color: red;"><?php echo $lastnameErr;?></span>
    <input style="text-align: left;"  type="text" name="lastName" id="inputs_ticket" placeholder="Last name" value="<?php echo $lastname; ?>"><br><br>
    <span style="color: red;"><?php echo $reasonErr;?></span>
    <input style="text-align: left;"  type="text" name="reason" id="inputs_ticket" placeholder="Social reason" value="<?php echo $reason; ?>"><br><br>
    <span style="color: red;"><?php echo $activityErr;?></span>
    <input style="text-align: left;"  type="text" name="activity" id="inputs_ticket" placeholder="Activity area" value="<?php echo $activity; ?>"><br><br>
    <span style="color: red;"><?php echo $functionErr;?></span>
    <input style="text-align: left;"  type="text" name="function" id="inputs_ticket" placeholder="Function" value="<?php echo $function; ?>"><br><br>
    <span style="color: red;"><?php echo $emailErr;?></span>
    <input style="text-align: left;"  type="text" name="email" id="inputs_ticket" placeholder="Email address" value="<?php echo $email; ?>"><br><br>
    <span style="color: red;"><?php echo $phoneErr;?></span>
    <input style="text-align: left;"  type="tele" name="phone" id="inputs_ticket" placeholder="Phone number" value="<?php echo $phone; ?>"><br><br>
    <span style="color: red;"><?php echo $requestErr;?></span>
    <input style="text-align: left;"  type="text" name="request" id="inputs_ticket" placeholder="Specify your request" value="<?php echo $request; ?>"><br><br>
    <button id="btn_env_ticket" name="btn_env_ticket">Send</button>
    </form>
</div>          
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
                      <p>Le Salon international de pompage solaire et des énergies vertes<br> Copyright @ 2022. All rights reserved.</p>
                  </li>
              </ul>
          </div>
          <div class="footer-col col-md">
              <h4>Contact</h4>
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





                  <form action="#footer" method="POST">
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

               <input  type="email" name="email" class="input" placeholder="Votre Address Email"required value="<?php echo "$userEmail" ?>"><br>
                     
              <button type="submit" name="subscribe" value="Subscribe" class="button-sub" style="margin-top: 10px;">
                  <span class="shadow"></span>
                  <span class="edge"></span>
                  <span  class="front text"> S'inscrire
                  </span>
                </button>
                  </form>

              </ul>
          </div>
          <div class="footer-col col-md">
              <h4>Reseaux socieux</h4>
              <ul>
                  <div class="social-links">
                  <a href="https://www.linkedin.com/company/ssampartners/?originalSubdomain=ma"><i class="fab fa-linkedin"></i></i></a>
                      <a href="https://m.facebook.com/SSAMPartners/"><i class="fab fa-facebook"></i></a>
                      <a href="https://www.instagram.com/ssampartners/?hl=fr"><i class="fab fa-instagram"></i></a>
                      <a href="#"><i class="fab fa-google-plus-g"></i></a>
                      <a href="#"><i class="fab fa-youtube"></i></a>
                      <a href="info@ssampartners.com"><i class="far fa-envelope"></i> </a>
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
