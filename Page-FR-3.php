
<!DOCTYPE html>
<head>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<!-- MDB -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.css" rel="stylesheet" />
<!--Folder Css-->
<link rel="stylesheet" href="css\stylecommun.css" />
    <link rel="stylesheet" href="css\Style-3.css" />    
<!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
   <!--fontawesome---->

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

     <!--bootstrap-5--->  
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!--Animation-->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /> 


           <!--Icon-->
        <link rel="icon" href="images/solar-panel.png"/>
    <!---jquery-->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

        <title>Visiteurs</title>
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
                  <a class="nav-link" href="Page-FR-2.php">EXPOSANTS</a>
                </li>
                <li class="nav-item px-4">
                  <a class="nav-link" href="#">VISITEURS</a>
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
                        <a href="Page-FR-3.php" id="Fr" style="font-size: 11px;text-transform: uppercase;font-weight: 600!important;letter-spacing: 0.1em;text-decoration: none;"><img src="images/fr.png" style="height: 20px;width: 20px;margin-right: 10px !important;">FR</a>
                        <a href="Page-3.php" id="Eng" style="font-size: 11px;text-transform: uppercase;font-weight: 600!important;letter-spacing: 0.1em;text-decoration: none;"><img src="images/eng.png" style="height: 20px;width: 20px;margin-right: 10px !important;">EN</a>
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
                    <h1 style="font-weight: bold;color: #FDCE07;text-align: center;">?? propos de nous</h1>
                    <p id="parag_1" style="text-align: center;color: #fff; font-size: 18px;font-family:Roboto,sans-serif">DU 17 AU 19 DECEMBER 2022,AGADIR - MAROC</p>
                    </div>
                  </div>
                </div>
              </div>
          </div>
          <!-- Jumbotron -->
  </header>
  

<section id="debut-event">
    <h3 style="text-align: center; color: black;margin-top: 50px;margin-bottom: 50px;font-family:Ubuntu, sans-serif;font-weight: bold;">
    D??BUT DE L'??V??NEMENT
<small id="small-concept" style="margin:8px auto;"></small> </h3>     
        
    <div class="container ">
        
<div class="row  ">
<div class="col-md-6 justify-content-center text-align-center">
<div id="container text-center">
  <div class="block"><i class="fa fa-location-arrow icon2"></i>
<div class="txt">
 <h5 id="text_h5">AGADIR, MAROC</h5>
</div></div>
  <div class="block"><i  class="fa fa-calendar-check icon2 "></i>
 <div class="txt">
 <h5>FROM 17 TO 19 DECEMBER 2022</h5>
</div>

  </div>
  <div class="block"><i class="fa fa-location-arrow icon2"></i>
<div class="txt">
 <h5 id="text_h5">AGADIR, MAROC</h5>
</div></div>
  <div class="block"><i  class="fa fa-calendar-check icon2 "></i>
 <div class="txt">
 <h5>FROM 17 TO 19 DECEMBER 2022</h5>
</div></div>
</div>
</div>
<div class="col-md-6 ">

 <div class="row counttime justify-content-center text-align-center">
     <div class="col-md-3  time ">
         <h2 id="days"></h2>
       <span style="font-weight: 900;font-size: 19px;">Jours</span>  
     </div>
     
     <div class="col-md-3  time">
         <h2 id="hours"></h2>
         <span style="font-weight: 900;font-size: 19px;">Houres</span> 
        </div>
      
        <div class="col-md-3  time">
         <h2 id="minutes"></h2>
       <span style="font-weight: 900;font-size: 19px;">Minutes</span>  
        </div>
      
        <div class="col-md-3  time">
         <h2 id="seconds"></h2>
        <span style="font-weight: 900;font-size: 19px;">Seconds</span> 
        </div>
         </div>     
</div>         
</div>

</div>
</section>




  <div id="event_div">
    <div class="container">
    <h3 style="text-align: center;color: #FDCE07;margin-top: 40px !important;">UN ??V??NEMENT INNOVANT
</h3>
    <p style="text-align: center;margin-top: 30px !important;color: white">Le Salon International De Pompage Solaire Et Des Energies Verts SIPSEV c???est l?? un signe de sa r??ussite et de l???int??r??t des entreprises pour le secteur de pompage solaire et du grand potentiel de d??veloppement que repr??sente ce march??.
</p>
    <p style="text-align: center;margin-top: 30px !important;color: #FDCE07">C???est l???endroit id??al pour partager vos connaissances.
</p>
</div>
</div>

 <!--REASONS-->
 <div id="reasons-div">
    <div style="margin-bottom: 20px;">
    <h3 id="text_1_h3" style="text-align: center;color: black;margin-top: 20px;margin-bottom: 10px;font-family:Ubuntu, sans-serif;
    font-weight: bold;">POURQUOI VISITER SIPSEV?</h3>
    <small id="small-concept" style="margin:0 auto;"></small></div>

    <div class="container">
            <div class="row g-4">
              <div class="col-md-4">
                <div id="icon" data-aos="fade-up" data-aos-duration="1000">
                    <span id="span_icon" class="vc_icon_element-icon fas fa-chart-line"></span>
                </div>
                <div class="card-body" data-aos="fade-up" data-aos-duration="1500">

              <p class="card-text" style="text-align: center;">
              Entretenir et d??velopper son r??seau de fournisseurs.</p>
            </div>              
            </div>

              <div class="col-md-4">
                <div id="icon" data-aos="fade-up" data-aos-duration="1000">
                    <span id="span_icon" class="vc_icon_element-icon fas fa-business-time" ></span>
                </div>
                <div class="card-body" data-aos="fade-up" data-aos-duration="1500">
                    <p id="parag_3" class="card-text"style="text-align: center;">D??couvrir les solutions les plus adapt??s aux besoins du projet.</p>
                  </div>
                        </div>
              <div class="col-md-4">
                <div id="icon" data-aos="fade-up" data-aos-duration="1000">
                    <span id="span_icon" class="vc_icon_element-icon fas fa-bell"></span>
                </div>
                <div class="card-body" data-aos="fade-up" data-aos-duration="1500">
                    <p id="parag_4" class="card-text" style="text-align: center;">
                    Conna??tre les derni??res tendances du march??.                    </p>
                  </div>
                </div>
            </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div id="icon" data-aos="fade-up" data-aos-duration="1000">
                    <span id="span_icon" class="vc_icon_element-icon fas fa-cart-arrow-down"></span>
                </div>
                    <div class="card-body" data-aos="fade-up" data-aos-duration="1500">
                  <p id="parag_5" class="card-text" style="text-align: center;">
                  Avoir la possibilit?? de se tenir inform?? sur les derni??res actualit??s.</p>
                </div>            
            </div>
  
            <div class="col-md-4">
                <div id="icon" data-aos="fade-up" data-aos-duration="1000">
                    <span id="span_icon" class="vc_icon_element-icon fas fa-industry"></span>
                </div>
                <div class="card-body" data-aos="fade-up" data-aos-duration="1500">
                  <p id="parag_6" class="card-text"style="text-align: center;">Augmenter la visibilit?? de l???entreprise.

</p>
              </div>
            </div>
                <div class="col-md-4">
                    <div id="icon" data-aos="fade-up" data-aos-duration="1000">
                        <span id="span_icon" class="vc_icon_element-icon fas fa-handshake"></span>
                    </div>
                    <div class="card-body" data-aos="fade-up" data-aos-duration="1500">
                      <p id="parag_7" class="card-text" style="text-align: center;">
                      Etablir de nouveaux contacts.                      </p>
                    </div>
                 
                </div>
              </div>
    </div>
</div>
<!--LA STRAT??GIE ??NERG??TIQUE NATIONALE--->
<section  class="profil-div">
    <div style="margin-bottom: 20px;">
    <h3 id="text_1_h3" style="text-align: center;color: white;margin-top: 20px;margin-bottom: 10px;font-family:Ubuntu, sans-serif;font-weight: bold;text-transform: uppercase;">LA STRAT??GIE ??NERG??TIQUE NATIONALE</h3>
    </div>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-5 g-4">
            <div class="col">
                <div id="icon" data-aos="fade-up" data-aos-duration="1000">

                    <span class="far fa-lightbulb" id="icom_span"></span>
                </div>
                    <div class="card-body" data-aos="fade-up" data-aos-duration="1500">

                <p id="parag_2" class="card-text" >
                Diversification de l???offre ??nerg??tique                </p>
                </div>
            </div>
            <div class="col">
                <div id="icon" data-aos="fade-up" data-aos-duration="1000">

                    <span class="fas fa-bullseye" id="icom_span">
                </div>
                    <div class="card-body" data-aos="fade-up" data-aos-duration="1500">

                <p id="parag_2" class="card-text" >
                D??veloppement des ressources ??nerg??tiques nationales.                </p>
                </div>
            </div>
            <div class="col">
                <div id="icon" data-aos="fade-up" data-aos-duration="1000">
                    <span class="vc_icon_element-icon fas fa-hand-holding-usd" id="icom_span"></span>
                </div>
                    <div class="card-body" data-aos="fade-up" data-aos-duration="1500">

                <p id="parag_2" class="card-text" style="text-align: center;">
                Exploitation du potentiel d???efficacit?? ??nerg??tique.                </p>
                </div>
            </div>
            <div class="col">
                <div id="icon" data-aos="fade-up" data-aos-duration="1000">

                    <span class="bi-currency-exchange" id="icom_span"></span>
                </div>
                <div class="card-body" data-aos="fade-up" data-aos-duration="1500">
                <p id="parag_2" class="card-text"style="text-align: center;">Int??gration des march??s r??gionaux et internationaux.</p>
                </div>
            </div>
            <div class="col">
                <div id="icon" data-aos="fade-up" data-aos-duration="1000">
                    <span class="	fa fa-line-chart" id="icom_span"></span>
                </div>
                <div class="card-body" data-aos="fade-up" data-aos-duration="1500">
                <p id="parag_2" class="card-text" style="text-align: center;">
                Int??gration industrielle des EnR et de l???EE.
                </p>
                </div>
            </div>
        </div>
    </div>

</section>


<!--QUESTIONS-->
<section  style=" background-color:  #f9f9f9 !important; padding-top: 50px !important;margin-top:150px;"> 
        <div class="container ">
            <div class="row">
                <div class="col-md-6 px-4">
                        <h4 style="color: black;margin-top: 20px;margin-bottom: 20px;font-family:Ubuntu, sans-serif;
                        font-weight: bold;margin-bottom: 75px; text-align: center;">FOIRE AUX QUESTIONS</h4>    
                        <div class="accordion">
            
                            <div class="btnaccordion" >
                                <i class="fas fa-minus icon"  style="margin-right: 10px;"></i> Je suis journaliste, ?? qui dois-je m'adresser pour l'accr??ditation ?
                            </div>
                         <div class="accordion_content ">
                                 <p>Demande votre accr??ditation aupr??s de notre agence de relation passe: Agence FLAG: Laur??ne SERVANT: laurene@agenceflag.com</p>
                         </div>
                    
                         </div>
                                      
                        <div class="accordion">
                            <div class="btnaccordion " >
                                <i class="fas fa-plus icon"  style="margin-right: 10px;"></i> O?? peut-on trouver la liste des exposants du salon SIPSEV 2022 ?
                            </div>
                         <div class="accordion_content ">
                            <p>La liste des exposants est actualis??e r??guli??rement et disponible sur la page Exposants de notre site internet.</p>             </div>
                    
                         </div>
                                      
                        <div class="accordion">
                            <div class="btnaccordion " >
                                <i class="fas fa-plus icon"  style="margin-right: 10px;"></i> Peut-on d??jeuner sur le salon ?
                            </div>
                         <div class="accordion_content ">
                                 <p>Des points de restauration seront ?? votre disposition pendant toute la dur??e de l?????v??nement.</p>
                         </div>
                    
                         </div>
                                      
                        <div class="accordion">
                            <div class="btnaccordion " >
                                <i class="fas fa-plus icon"  style="margin-right: 10px;"></i> Comment obtenir une invitation pour l'??v??nement ?
                            </div>
                         <div class="accordion_content ">
                                 <p>Vous pouvez obtenir votre invitation en vous inscrivant sur notre site internet:</p>
                         </div>
                    
                         </div>
                                      
                        <div class="accordion">
                            <div class="btnaccordion " >
                                <i class="fas fa-plus icon"  style="margin-right: 10px;"></i>Je n'ai pas re??u d'e-mail avec mon invitation, que faire ?
                            </div>
                         <div class="accordion_content ">
                             <p>
                                Si vous avez proc??d?? ?? la demande d???invitation en ligne, vous devriez recevoir votre invitation dans votre bo??te mail. Si ce n???est pas le cas, nous vous incitons fortement ?? v??rifier dans vos SPAM/ Dans le cas 
                             </p>
                                 </div>
                    
                         </div>
                                      
                        <div class="accordion">
                            <div class="btnaccordion " >
                                <i class="fas fa-plus icon"  style="margin-right: 10px;"></i> Vous n'arrivez pas ?? imprimer votre invitation, que faire ?
                            </div>
                         <div class="accordion_content ">
                                 <p>Les invitations ??lectroniques sont accept??es sur le salon. Vous pouvez donc charger directement votre invitation sur mobile ou tablette.</p>
                         </div>
                    
                         </div>
                                      
                        <div class="accordion">
                            <div class="btnaccordion " >
                                <i class="fas fa-plus icon"  style="margin-right: 10px;"></i> Peut-on utiliser la m??me invitation pour venir plusieurs jours ?
                            </div>
                         <div class="accordion_content ">
                                 <p>Vous avez la possibilit?? d???utiliser votre invitation ??lectronique plusieurs jours d???affil??e. En revanche les invitations cartonn??es ne sont valables qu???une seule fois.</p>
                         </div>
                    
                         </div>
                                      
                        <div class="accordion">
                            <div class="btnaccordion " >
                                <i class="fas fa-plus icon"  style="margin-right: 10px;"></i> Les conf??rences sont-elles gratuites ?
                            </div>
                         <div class="accordion_content ">
                                 <p>L???acc??s aux conf??rences est gratuit. Cependant, vous devrez imp??rativement pr??senter votre pr??-inscription afin d???y acc??der. Nous vous recommandons fortement de vous pr??senter un quart d???heure avant la conf??rence afin de vous en garantir l???acc??s.</p>
                         </div>
                    
                         </div>
                                      
                        <div class="accordion">
                            <div class="btnaccordion " >
                                <i class="fas fa-plus icon"  style="margin-right: 10px;"></i> Comment faire pour exposer au salon ?
                            </div>
                         <div class="accordion_content ">
                                 <p>Si vous souhaitez exposer sur E-markets Expo, nous vous invitons ?? remplir notre formulaire de Contact en n???oubliant pas de nous laisser vos coordonn??es, un membre de notre ??quipe vous recontactera dans les plus brefs d??lais. Vous pouvez ??galement nous joindre directement au num??ro suivant: 06 00 00 00 00.</p>
                         </div>
                    
                         </div>
                              
                    </div>
                <div class="col-md-6 px-4 ">
                    <div id="ticket-div">
                        <h4 style="text-align:center;color: black;margin-top: 20px;margin-bottom: 20px;font-family:Ubuntu, sans-serif;
                        font-weight: bold;">VISITOR BADGE REQUEST </h4> 
                        <h5 style="margin-top: 5px;font-family: Roboto, sans-serif bold;">SIPSEV is a Salon reserved for professionals.</h5>
                        <span style="font-size: 16px;font-family: Roboto, sans-serif;color: #333;">Thanks for complete the following form (fields marked with * are required)</span>
                    </div>
                        <div  id="div_inputs">
                        <?php include 'validation.php'?>
                            <form action="" method="POST">
                            <span style="color: red;"> <?php echo $nameErr;?></span>
                            <input value="<?php echo $name; ?>" type="text" name="nom" placeholder="Nom name*" id="inputs_ticket" style="text-align: left !important;padding-left:10px !important;"/>
                            <span style="color: red;"> <?php echo $lastnameErr;?></span>
                            <input value="<?php echo $lastname; ?>" type="text" name="prenom" placeholder="Pr??nom*" id="inputs_ticket" style="text-align: left !important;padding-left:10px !important;"/>
                            <span style="color: red;"> <?php echo $civiliteErr;?></span> 
                                <select  name="civilite"  id="inputs_ticket" style="padding-left:10px !important;">
                                    <option value="<?php echo $civilite ?>" selected="selected" value="">Civilit??*</option>
                                    <option  value="monsieur  ">Monsieur</option>
                                    <option  value="madame">Madame</option>
                                    <option  value="mademoiselle">Mademoiselle</option>
                                </select>
                                <span style="color: red;"> <?php echo $organisationErr;?></span>
                                <input value="<?php echo $organisation; ?>" type="text" name="organisme" placeholder="Soci??t??/Organisme*" id="inputs_ticket" style="text-align: left !important;padding-left:10px !important;"/>
                                <span style="color: red;"> <?php echo $fonctionErr;?></span>
                                <input value="<?php echo $fonction; ?>" type="text" name="fonction" placeholder="Function*" id="inputs_ticket" style="text-align: left !important;padding-left:10px !important;"/>
                                <span style="color: red;"> <?php echo $secteurErr;?></span>
                                <input value="<?php echo $secteur;?>" type="text" name="secteur" placeholder="Secteur d'activit??*" id="inputs_ticket" style="text-align: left !important;padding-left:10px !important;"/> 
                                <span style="color: red;"> <?php echo $emailErr;?></span>        
                                <input  type="email" name="email" value="<?php echo $email; ?>" placeholder="Adresse e-mail*" id="inputs_ticket" style="text-align: left !important;padding-left:10px !important;"/>
                                <span style="color: red;"> <?php echo $teleErr;?></span>         
                                <input type="tel" name="tele" value="<?php echo $tele; ?>" placeholder="T??l??phone*" id="inputs_ticket" style="text-align: left !important;padding-left:10px !important;"/>
                                <span style="color: red;"> <?php echo $ageErr;?></span>  
                                <select  name="age"  id="inputs_ticket" style="padding-left:10px !important;">
                                    <option  selected="selected" value="<?php echo $age; ?>">S??lectionnez l'??ge*</option>
                                    <option  value="10-18">10 - 18</option>
                                    <option  value="19-30">19 - 30</option>
                                    <option  value="31-45">31 - 45</option>
                                    <option  value="46-60">46 - 60</option>
                                    <option  value="plus 61">Plus de 61</option>
                                </select>
                                <span style="color: red;"> <?php echo $villeErr;?></span>
                                <input  type="text" name="ville" value="<?php echo $ville; ?>" placeholder="Ville*" id="inputs_ticket" style="text-align: left !important;padding-left:10px !important;"/>
                                <span style="color: red;"> <?php echo $commentErr;?></span>
                                <select style="padding-left:10px !important;" title="Comment nous avez-vous connu ?" placeholder="Comment nous avez-vous connu ?*" name="comment" id="inputs_ticket"  >
                                    <option  selected="selected" value="<?php echo $comment; ?>">Comment nous avez-vous connu ?*</option>
                                    <option  value="media">M??dia</option>
                                    <option  value="reseau social">R??seaux sociaux</option>
                                    <option  value="Bouche ?? oreille">Word of mouth</option>
                                    <option  value="affichage">Affichage</option>
                                    <option  value="autre">Autre</option>
                                  </select>  
                                  <span style="color: red;"> <?php echo $genreErr ?></span> 
                                <select title="Select Gender" name="genre" id="inputs_ticket" style="padding-left:10px !important;">
                                    <option  selected="selected" value="<?php echo $genre; ?>">S??lectionnez Genre</option>
                                    <option  value="home">Homme</option>
                                    <option  value="femme">Femme</option>
                                </select>  
                                <div class="text-center">
                                    <button id="registerNowBtn" name="btn_register">REGISTER NOW
                                        <i style="margin-left: 10px;" class="fa fa-arrow-circle-right">
                                        </i>
                                    </button>
        </form>
          </div>
                                
                                
                    
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
                      <p>Le Salon international de pompage solaire et des ??nergies vertes<br> Copyright @ 2022. All rights reserved.</p>
                  </li>
              </ul>
          </div>
          <div class="footer-col col-md">
              <h4>Contact</h4>
              <ul>
                  <li><a href="#">Email: info@emarketsexpo.ma</a></li>
                  <li><a href="#">T??l??phone: +212 (0) 5 29 29 45 69 </a></li>
                  <li><a href="#">Adresse: 
                   <span>Hay salam, Rue 926 Imm 11,
                bureau 4 au 1??re ??tage, Agadir 80070</span> </a> </li>
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
