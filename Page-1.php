<?php 
include "validation.php";
?>
<!DOCTYPE html>
<head>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<!-- MDB -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    
     <!--bootstrap-5--->  
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!--Animation-->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /> 

<!--fontawesome---->
<link rel="stylesheet" href="fontawesome-free-5.15.3-web\css\fontawesome.css">
        <script src="https://kit.fontawesome.com/a8c9638164.js" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/a8c9638164.js" crossorigin="anonymous"></script>
           <!--Folder Css-->
    <link rel="stylesheet" href="css/stylecommun.CSS" />
    <link rel="stylesheet" href="css/Style-1.CSS" />
    <!---jquery-->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <!--OWL-carousel--->
        <script src="js/owl.carousel.min.js"></script>
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
        <!--Icon-->
        <link rel="icon" href="images/solar-panel.png"/>
        <title>Salon</title>
<style>
  
.carousel-control-next-icon:after,.carousel-control-prev-icon:after {
    content: "";
}
</style>
</head>

<body>
<header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top"><!--navbar-light -->
        <!--div style="float: left;margin-left: 100px;">
            <img src="https://emarketsexpo.com/wp-content/uploads/2022/03/LOGO-05.png" alt="">
      </div-->
        <div class="container-fluid " style="float: right;">
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01" aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation" style="border: solid 1px white;">
        <i class="fas fa-bars" style="color: white;"></i>
      </button>
      <!--Logo-->
      <div style="float: left !important;">
      <img src="images/logo_2.png" style="width: 150px;height:50px"/>
      </div>
            <div class="collapse navbar-collapse" id="navbarExample01" style="margin-right: 100px;">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item active px-4">
                        <a class="nav-link" aria-current="page" href="#">SALON</a>
                    </li>
                    <li class="nav-item px-4">
                        <a class="nav-link" href="Page-2.php">EXPOSANTS</a>
                    </li>
                    <li class="nav-item px-4">
                        <a class="nav-link" href="Page-3.php">VISITEURS</a>
                    </li>
                    <li class="nav-item px-4">
                        <a class="nav-link" href="Programme.php">PROGRAMMES</a>
                    </li>
                    <li class="nav-item px-4">
                        <a class="nav-link" href="blog.php">ACTUALITES</a>
                    </li>
                    <li class="nav-item px-4">
                        <!--small style="border: 1px solid white;text-align: center;display: inline;border-top: 20px !important;border-bottom: 50px !important;"></small-->
                        <div class="dropdown">
                            <button class="dropbtn" id="select_lang">EN</button>
                            <div class="dropdown-content">
                            <a href="Page-1.php " id="Eng" style="font-size: 11px;text-transform: uppercase;font-weight: 600!important;letter-spacing: 0.1em;text-decoration: none;"><img src="images/eng.png" style="height: 20px;width: 20px;margin-right: 10px !important;">EN</a>
                              <a href="Page-FR-1.php" id="Fr" style="font-size: 11px;text-transform: uppercase;font-weight: 600!important;letter-spacing: 0.1em;text-decoration: none;"><img src="images/fr.png" style="height: 20px;width: 20px;margin-right: 10px !important;">FR</a>
                            </div>
                        </div>
                       </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar -->
    <!-- Carousel wrapper -->
    <div id="carouselMaterialStyle" class="carousel slide carousel-fade" data-mdb-ride="carousel" style="height: 700px !important;">
        <!-- Indicators -->
        <div class="carousel-indicators">
            <button type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide-to="1" aria-label="Slide 2"></button>
        </div>
        <!-- Inner -->
        <div class="carousel-inner  shadow-4-strong" style="height: 700px !important;">
            <!-- Single item -->
            <div class="carousel-item active " id="img1_header">
              <div style="background-image: url(https://unimagec.ma/wp-content/uploads/2021/05/Slider-Serv3.jpeg);height: 700px;background-repeat: no-repeat;background-size: cover;" class="d-block w-100" alt="Sunset Over the City" id="img-header"></div>
                <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <div id="sub-div2" style=" width: fit-content; margin: auto;">
                            <h1 id="head-title">INTERNATIONAL PUMPING EXHIBITION <br>SOLAR AND GREEN ENERGIES</h1>
                            <p class="mb-3" id="subheading">The first international exhibition of solar pumping and green energies in Morocco is a meeting place for companies that will come<br> to maintain relations with entrepreneurs and projects.<br></p>
                            <!--a class="btn btn-outline-light btn-lg" href="#!" role="button" style="margin-top: 20px !important;"><span id="head_btn" style="font-size: 12px !important;">Face-to-face</span><i class="fa fa-chevron-circle-right" style="margin-left: 7px;"></i></a>
                            <a class="btn btn-outline-light btn-lg" href="#!" role="button" style="margin-top: 20px !important;"><span id="head_btn_2" style="font-size: 12px !important;">Virtual</span><i class="fa fa-chevron-circle-right" style="margin-left: 7px;"></i></a-->
                            <div id="sub-div2" style=" width: fit-content; margin: auto;">
                                <a  class="btn btn-outline-light btn-lg" href="#get-ur-badge" role="button"><span id="head_btn_3" style="font-size: 12px !important;">Get your badge</span><i class="fa fa-chevron-circle-right" style="margin-left: 7px;"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single item -->
            <div class="carousel-item" id="img2_header">
                <div style="background: url(https://www.lopinion.ma/photo/art/grande/60154444-44059483.jpg?v=1636543678);height: 700px;background-size: cover;background-repeat: no-repeat;" class="d-block w-100" alt="Canyon at Nigh" id="img-header">
                </div>
                <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <div class="text-white">
                            <h1 class="mb-3" id="head-title">INTERNATIONAL PUMPING EXHIBITION <br>SOLAR AND GREEN ENERGIES</h1>
                            <div id="sub-div">
                                <p class="mb-3" id="subheading_2">From 17 to 19 December 2022, Agadir, Souss Massa, Maroc.</p>
                            </div>
                            <div id="sub-div2" style=" width: fit-content; margin: auto;">
                                <a class="btn btn-outline-light btn-lg" href="#get-ur-badge" role="button"><span id="head_btn_3" style="font-size: 12px !important;">Get your badge</span><i class="fa fa-chevron-circle-right" style="margin-left: 7px;"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Inner -->

        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide="prev" id="btn-prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <!--span class="visually-hidden">Previous</span-->
    </button>
            <button class="carousel-control-next" type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide="next" id="btn-next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
    </button>
        </div>
        <!-- Carousel wrapper -->
</header>
 <!--CountDown-->
 <section id="counttime ">
   
    <div id="countdown" class="countdown">
        <div class="time">
            <h2 id="days"></h2>
            <span style="font-weight: bold;color: #121244;" id="text_day">Days</span> 
        </div>
        <div class="double_point">
          <h2>:</h2>           
      </div>
        <div class="time">
            <h2 id="hours"></h2>
            <span style="font-weight: bold;color: #121244;" id="text_hour">Hours</span>
        </div>
        <div class="double_point">
          <h2>:</h2>           
      </div>
        <div class="time">
            <h2 id="minutes"></h2>
            <span style="font-weight: bold;color: #121244;" id="text_minute">Minutes</span>
        </div>
        <div class="double_point">
          <h2>:</h2>           
      </div>
        <div class="time">
            <h2 id="seconds"></h2>
            <span style="font-weight: bold;color: #121244;" id="text_second">Seconds</span>
        </div>
    </div>
    <script src="app.js"></script>
</section>

 <!-- CONCEPT-->
 <div id="concept-div" class="container">
    <h3 id="text_1_h3" class="title_h3">EVENT CONCEPT</h3>
    <small id="small-concept"  style="margin: 0 auto;"></small>
    <p id="text_parag" style="margin-top: 40px;size: 5px !important;text-align: center;font-weight: bold;">The International Exhibition of Solar Pumping and Green Energies –SIPSEVen
        is in its 5th edition, and this is a sign of its success and the interest
        companies for the solar pumping sector and the great potential
        of development represented by this market. He established himself as the
        major meeting for exchanges on the development opportunities of
        water pumping systems, and renewable energy technologies.
        The show has just been named to meet a real need in terms of
        of sustainable development. It is also part of the action
        community necessary in the face of the harmful effects and the alarming prospects
        of the lack of management of natural and energy resources, and advocates
        urgent action to deal with it.
        The International Exhibition of Solar Pumping and Green Energies displays its
        demand for quality and its desire to develop professionalism in
        service for exhibitors and visitors. Each edition should be a place of
        discovery and satisfaction. We would like to welcome, for this 5th
        publishing, more professionals, both national and international, in the
        water pumping systems, renewable energy and trades
        of the environment.</p>
</div>
 <!--card tk-date-->
 <div class="card-group">
  <div class="card" style="background-color: #13133E; height: 176px;">
      <div id="icon">
          <i class="fa fa-ticket" style="justify-content: center;display: flex; width: 60px;height: auto; display: block;margin-left: auto;margin-right: auto;"></i>
      </div>
      <div class="card-body" style="background-color:  #13133E; text-align: center;">
          <h5 class="card-title" style="color: white;" id="text_1_h5">TICKETS</h5>
          <p class="card-text" style="color: white;"><small>Maximum 100 tickets</small></p>
      </div>
  </div>
  <div class="card" style="background-color: #13133E; height: 176px;">
      <div id="icon">
          <i class="fa fa-calendar" style="justify-content: center;display: flex; width: 60px;height: auto; display: block;margin-left: auto;margin-right: auto;"></i>
      </div>
      <div class="card-body" style="background-color:  #13133E; text-align: center;">
          <h5 class="card-title" style="color: white;" id="text_3_h5">SAVE THE DATE</h5>
          <p class="card-text" style="color: white;"><small>14 - 06 - 2022</small></p>
      </div>
  </div>
  <div class="card" style="background-color: #13133E; height: 176px;">
      <div id="icon">
          <i class="fa fa-solid fa-align-center" style="justify-content: center;display: flex; width: 60px;height: auto; display: block;margin-left: auto;margin-right: auto;"></i>
      </div>
      <div class="card-body" style="background-color:  #13133E; text-align: center;">
          <h5 class="card-title" style="color: white;" id="text_2_h5">FORMATION</h5>
      </div>
  </div>
</div>
 
<!--A propos de l'evenement-->
<div id="propos-div" class="container">
    <h3 id="text_2_h3" class="title_h3">ABOUT THE EVENT</h3>
    <small id="small-concept" style="margin: 0 auto;"></small>
    <div class="row row-cols-1 row-cols-md-3 g-4" style="margin-top: 30px;">
        <div class="col">
            <div class="card h-100">
                <img src="https://www.planete-energies.com/sites/default/files/styles/media_full_width_940px/public/thumbnails/image/41885_1240x800_0.jpg?itok=NszKW-hg" class="card-img-top" alt="..." data-aos="fade-up" data-aos-duration="1000">
                <div class="card-body"  data-aos="fade-up" data-aos-duration="1500">
                    <h5 id="text_4_h5" class="card-title" style="text-align: center;color: #333;font-family:Ubuntu, sans-serif;font-weight: bold;">Exposure</h5>
                    <p id="parag_2" class="card-text" style="text-align: center;">Each exhibitor will be able to present its services to visitors at stand level.</p>
                </div>

            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="https://images.neventum.com/photos/2019/132/1400/5cd952bce4839-3.jpeg" class="card-img-top" alt="..." data-aos="fade-up" data-aos-duration="1000">
                <div class="card-body"  data-aos="fade-up" data-aos-duration="1500">
                    <h5 id="text_5_h5" class="card-title" style="text-align: center;color: #333;font-family:Ubuntu, sans-serif;font-weight: bold;">Trainings</h5>
                    <p id="parag_3" class="card-text" style="text-align: center;">A training program on solar pumping and green energies, for the benefit of visitors.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="https://images.neventum.com/photos/2019/132/1400/5cd952b364493-2.jpeg" class="card-img-top" alt="..." data-aos="fade-up" data-aos-duration="1000">
                <div class="card-body"  data-aos="fade-up" data-aos-duration="1500">
                    <h5 id="text_6_h5" class="card-title" style="text-align: center;color: #333;font-family:Ubuntu, sans-serif;font-weight: bold;">Conferences</h5>
                    <p id="parag_4" class="card-text" style="text-align: center;">A series of virtual lectures from practical advice on the solar pumping sector.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Inscreption-->
<section id="inscription">
  <div class="inscription">
      <div class="container-fluid bg-1">
          <div class="container ">
              <div class="row ">
                  <div class="col-lg-9 col-md-12" data-aos="fade-up" data-aos-duration="1000">
                      <h2 id="text_1_h2">Hybrid event</h2>
                      <p id="parag_1">register for the event for free.</p>
                  </div>

                  <div class="col-lg-3 col-md-12 mt-lg-12"  data-aos="fade-up" data-aos-duration="1000">

                      <a style="text-decoration:none" href="#ticket-div"><button class="button-59" role="button">Register now</button></a>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>

<!--Resultats-->
<div id="result-div" class="container">
    <h3 id="text_3_h3" class="title_h3">EXPECTED RESULTS</h3>
    <small id="small-concept" style="margin:0 auto;"></small>
    <div class="row row-cols-1 row-cols-md-3 g-4" style="margin-top: 30px;">
            <div class="col">
                <div data-aos="fade-up" data-aos-duration="1000" style="justify-content: center;display: flex; width: 60px;height: 50px; display: block;margin-left: auto;margin-right: auto;max-width: 100%!important;">
                    <span class="fa fa-share" style="color:#13133E !important;justify-content: center;width: 100px;height: 100px;font-size: 30px;"></span>
                </div>
                <h4 id="text_1_h4" data-aos="fade-up" data-aos-duration="1500" class="card-title" style="text-align: center;color: #0F9347;font-family:Ubuntu, sans-serif;font-weight: bold;margin-top: 30px;">Business networking</h4>
                <div data-aos="fade-up" data-aos-duration="1000" style="justify-content: center;display: flex; width: 60px;height: 50px; display: block;margin-left: auto;margin-right: auto;max-width: 100%!important;">
                    <span class="vc_icon_element-icon fas fa-hands-helping" style="color:#13133E !important;justify-content: center;margin-top: 40px;font-size: 30px;"></span>
                </div>
                <h4 id="text_2_h4" data-aos="fade-up" data-aos-duration="1500" class="card-title" style="text-align: center;color: #0F9347;font-family:Ubuntu, sans-serif;font-weight: bold;margin-top: 70px;">Creation of partnerships</h4>
                <div data-aos="fade-up" data-aos-duration="1000" style="justify-content: center;display: flex; width: 60px;height: 50px; display: block;margin-left: auto;margin-right: auto;max-width: 100%!important;">
                    <span class="fas fa-briefcase" style="color:#13133E !important;justify-content: center;margin-top: 40px;font-size: 30px;"></span>
                </div>
                <h4 id="text_3_h4" data-aos="fade-up" data-aos-duration="1500" class="card-title" style="text-align: center;color: #0F9347;font-family:Ubuntu, sans-serif;font-weight: bold;margin-top: 70px;">Job creation</h4>
            </div>
            <div class="col justify-content-cenetr text-align-center" data-aos="fade-up" data-aos-duration="1000">
                    <img src="images/bulb.png" class="card-img-top" >
            </div>
                <div class="col">
                    <div data-aos="fade-up" data-aos-duration="1000" style="justify-content: center;display: flex; width: 60px;height: 50px; display: block;margin-left: auto;margin-right: auto;max-width: 100%!important;">
                        <span class="vc_icon_element-icon fas fa-sort-amount-up" style="color:#13133E !important;justify-content: center;font-size: 30px;"></span>
                    </div>
                    <h4 id="text_4_h4" data-aos="fade-up" data-aos-duration="1500" class="card-title" style="text-align: center;color: #0F9347;font-family:Ubuntu, sans-serif;font-weight: bold;margin-top: 30px;">Sector development</h4>
                    <div data-aos="fade-up" data-aos-duration="1000" style="justify-content: center;display: flex; width: 60px;height: 50px; display: block;margin-left: auto;margin-right: auto;max-width: 100%!important;">
                        <span class="vc_icon_element-icon fas fa-globe" style="color:#13133E !important;justify-content: center;margin-top: 40px;font-size: 30px;"></span>
                    </div>
                    <h4 id="text_5_h4" data-aos="fade-up" data-aos-duration="1500" class="card-title" style="text-align: center;color: #0F9347;font-family:Ubuntu, sans-serif;font-weight: bold;margin-top: 70px;">Encourage digitalization</h4>
                    <div data-aos="fade-up" data-aos-duration="1000" style="justify-content: center;display: flex; width: 60px;height: 50px; display: block;margin-left: auto;margin-right: auto;max-width: 100%!important;">
                        <span class="vc_icon_element-icon far fa-building" style="color:#13133E !important;justify-content: center;margin-top: 40px;font-size: 30px;"></span>
                    </div>
                    <h4 id="text_6_h4" data-aos="fade-up" data-aos-duration="1500" class="card-title" style="text-align: center;color: #0F9347;font-family:Ubuntu, sans-serif;font-weight: bold;margin-top: 70px;">Encourage entrepreneurship</h4>
                </div>

    </div>
</div>


<!--Exposotion-->
<div id="result-div">
    <h3 id="text_4_h3" class="title_h3">A HYBRID EXHIBITION</h3>
    <small id="small-concept" style="margin:0 auto;"></small>
</div>
<!--OBTENEZ VOTRE BADGE-->
<!--Contacter-->
<div class="container-fluid bg1">
    <div class="text-center" style="margin-bottom: 50px;">
        <h3 Id="get-ur-badge" class="event_heading section-title white_text ">
        <span id="text_5_h3" id="text" class="title" style="color: #ffffff;">GET YOUR BADGE</span>
        </h3>
    </div>
        <div class="myform">
                <form action="" method="POST">
                    <div class="row" >
                        <div class="col-lg-6" >
                        <input value="<?php echo $name; ?>" type="text" name="nom" placeholder="First name*" id="inputs_tc"/>
                        <span style="color: red;" id="msgerr"> <?php echo $nameErr;?></span>
                            </div>
                            <div class="col-lg-6">
                                <input value="<?php echo $organisation; ?>" type="text" name="organisme" placeholder="Company/Organization*" id="inputs_tc"/>
                                <span style="color: red;"> <?php echo $organisationErr;?></span>
                            </div>
                    </div>
                    <div class="row" >
                        <div class="col-lg-6">
                        <input value="<?php echo $lastname; ?>" type="text" name="prenom" placeholder="Last name*" id="inputs_tc"/>
                        <span style="color: red;"> <?php echo $lastnameErr;?></span>
                        </div>
                        <div class=" col-lg-6">
                            <input value="<?php echo $fonction; ?>" type="text" name="fonction"  placeholder="Function*" id="inputs_tc"/>
                            <span style="color: red;"> <?php echo $fonctionErr;?></span>
                        </div>
                    </div>
                    <div class="row" >
                    <div class="col-lg-6">
                        <select name="genre" id="inputs_tc" style="padding-left:10px !important;">
                        <option selected="selected" value="<?php echo $genre; ?>">Select Gender*</option>
                        <option value="homme">Male</option>
                        <option value="femme">Female</option>
                        </select>
                        <span style="color: red;"> <?php echo $genreErr ?></span>
                    </div>
                        <div class="col-lg-6">
                            <input value="<?php echo $secteur;?>" type="text" name="secteur" placeholder="Activity area*" id="inputs_tc"/> 
                            <span style="color: red;"> <?php echo $secteurErr;?></span>        
                        </div>
                    </div>
                    <div class="row" >
                    <div class="col-lg-6">
                    <select name="civilite" id="inputs_tc" style="padding-left:10px !important;">
                        <option selected value="<?php echo $civilite ?>">Select Civility*</option>
                        <option value="monsieur">Sir</option>
                        <option value="madame">Mrs</option>
                        <option value="mademoiselle">Miss</option>
                    </select>
                    <span style="color: red;"> <?php echo $civiliteErr;?></span> 
                    </div>
                        <div class="col-lg-6">
                            <input type="tel" name="tele" value="<?php echo $tele; ?>" placeholder="Phone*" id="inputs_tc"/>
                            <span style="color: red;"> <?php echo $teleErr;?></span>
                        </div>
                    </div>
                    <div class="row" >
                        <div class="col-lg-6">
                            <select name="age" id="inputs_tc" style="padding-left:10px !important;">
                                <option  selected="selected" value="<?php echo $age; ?>">Select age*</option>
                                <option  value="10-18" >10 - 18</option>
                                <option  value="19-30">19 - 30</option>
                                <option  value="31-45">31 - 45</option>
                                <option  value="46-60">46 - 60</option>
                                <option  value="plus 61">More than 61</option>
                            </select>   
                            <span style="color: red;"> <?php echo $ageErr;?></span>         
                        </div>
                        <div class="col-lg-6">
                            <input  type="text" name="ville" value="<?php echo $ville; ?>" placeholder="City*" id="inputs_tc"/>
                            <span style="color: red;"> <?php echo $villeErr;?></span>
                        </div>
                    </div>
                    <div class="row " >
                        <div class="col-lg-6 ">
                            <input  type="text" name="email" value="<?php echo $email; ?>" placeholder="Email address*" id="inputs_tc"/> 
                            <span style="color: red;"> <?php echo $emailErr;?></span>                      
                        </div>
                        <div class="col-lg-6">
                        <select style="padding-left:10px !important;" title="Comment nous avez-vous connu ?" placeholder="Comment nous avez-vous connu ?" name="comment" id="inputs_tc">
                        <option  selected="selected" value="<?php echo $comment; ?>">How did you know us ?*</option>
                        <option  value="media">Media</option>
                        <option  value="reseau social">Social networks</option>
                        <option  value="bouche a oreille">Word of mouth</option>
                        <option  value="affichage">Display</option>
                        <option  value="autre">Other</option>
                    </select>
                    <span style="color: red;"> <?php echo $commentErr;?></span>
                    </div>
                    </div>
                    <div class="text-center">
                       <a style="text-decoration:none" href="#text_5_h3"> <button name="btn_register" class="btn btn-theme btn-theme-xl submit-button" id="submit" type="submit" text_color = "#ffffff" border_color="#ffffff"><span> Register Now </span><i style="margin-left: 10px;" class="fa fa-arrow-circle-right"></i></button></a>
                    </div>     
                </form>

        </div>    
</div>
<!--SPEAKERS-->
    <section class="speakers">
        <div class="wrapper">
                <div class="owl0 owl-carousel">
                    <div class="card card-spk">
                        <div class="thefront">
                            <img src="images\M. RABBAH Aziz.jpg"alt="" class="profile">
                            <div class="pt-2 text-uppercase name"> M. RABBAH Aziz</div>
                            <span class="designation">  Ministre de l’Energie, des Mines et du Développement durable   </span>
                        </div>
                    
                        <div class="theback">
                        <span class="fas fa-quote-left"></span>
                            <div class=" testimonial">
                                ... Nous sommes fiers de cette initiative aux niveaux national et international, une des activités
                                que nous encourageons à créer une prise de conscience collective, un engagement collectif,
                                un dynamisme collectif et des résultats très honorables</div>
                            <span class="fas fa-quote-right"></span>     
                        </div>
                    
                    </div>
                    <div class="card card-spk">
                        <div class="thefront">
                            <img src="images\MOULINE Saïd.jpg"alt="" class="profile">
                                <div class="pt-2 text-uppercase name">  M. MOULINE Saïd </div>
                                <span class="designation"> Directeur général de l’AMEE  </span>    
                        </div>
                    
                        <div class="theback">
                            <span class="fas fa-quote-left"></span>
                            <div class="testimonial">
                                Nous sommes très heureux aujourd'hui d'avoir eu l’occasion de participer à cet évènement,
                                et je tiens à féliciter les organisateurs, parce que c'est le premier salon du pompage solaire au
                                Maroc, c'est la quatrième édition. 
                                Bravo pour cette édition et Bravo à la région </div>
                            <span class="fas fa-quote-right"></span>      
                        </div>
                    </div>
                    <div class="card card-spk">
                        <div class="thefront">
                            <img src="images\Capture d’écran 2022-05-24 165754.png "
                            alt="" class="profile">
                                <div class="pt-2 text-uppercase name"> M. MOUL Alexandar </div>
                                <span class="designation"> Représentant groupe Zecca - Italie </span>
                        </div> 
                        <div class="theback">
                            <span class="fas fa-quote-left"></span>
                            <div class="testimonial">Le pompage solaire est une solution pour tout le monde,pas seulement pour le Maroc mais
                                pour tout le continent africain, et nous sommes déterminés à travailler et à produire ici au
                                Maroc, je tiens a remercie les organisateurs du salon d'avoir honoré notre société </div>
                            <span class="fas fa-quote-right"></span>
                        </div>
                    </div>
                </div>
            </div>
    </section>
<!--BLOG-->
<div id="blog-div" data-aos="fade-up" data-aos-duration="1500" class="container">
  <h3 id="text_11_h3" class="title_h3">LATEST BLOG</h3>
  <small id="small-concept" style="margin: 0 auto;"></small>
 
  <div class="row gy-6 " style="margin-top: 50px;">
      <div class="col-md-3 col-sm-6" >
          <div class="card h-100">
              <img src="images/G4_n.jpg" class="card-img-top" alt="Skyscrapers" />
              <div class="card-body">
                  <h5 id="text_7_h5" class="card-title" id="card-title">RECUSANDAE EIUS MAXIME ILLUM ET DOLORE</h5>
                  <p id="parag_8" class="card-text">
                      Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown.
                  </p>
              </div>
              <div class="card-footer">
                  <small id="text_small_4" class="text-muted">Read more</small>
              </div>
          </div>
      </div>
      <div class="col-md-3 col-sm-6 ">
          <div class="card h-100">
              <img src="https://www.levert.ma/wp-content/uploads/2019/06/pompage-solaire-agadir-2019-678x381.png" class="card-img-top" alt="Los Angeles Skyscrapers" />
              <div class="card-body">
                  <h5 id="text_8_h5" class="card-title" id="card-title">WHY DO WE USE IT ?</h5>
                  <p id="parag_5" class="card-text">Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown.</p>
              </div>
              <div class="card-footer">
                  <small id="text_small_1" class="text-muted">Read more</small>
              </div>
          </div>
      </div>
      <div class="col-md-3 col-sm-6 ">
          <div class="card h-100">
              <img src="images/G1_n.jpg" class="card-img-top" alt="Palm Springs Road" />
              <div class="card-body">
                  <h5 id="text_9_h5" class="card-title" id="card-title">ODIT QUIA ET LABORUM VERO</h5>
                  <p id="parag_6" class="card-text">
                      Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown.
                  </p>
              </div>
              <div class="card-footer">
                  <small id="text_small_2" class="text-muted">Read more</small>
              </div>
          </div>
      </div>
      <div class="col-md-3 col-sm-6 ">
          <div class="card h-100">
              <img src="https://www.alfilaha.com/wpalfilaha/wp-content/uploads/2013/09/irrigationsolar.jpg" class="card-img-top" alt="Palm Springs Road" />
              <div class="card-body">
                  <h5 id="text_10_h5" class="card-title" id="card-title">ACCUSAMUS EXPEDITA ET A AD ERT</h5>
                  <p id="parag_7" class="card-text">
                      Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown.
                  </p>
              </div>
              <div class="card-footer">
                  <small id="text_small_3" class="text-muted">Read more</small>
              </div>
          </div>
      </div>
  </div>
  <div class="btn_view" style="text-align: center; margin-top: 20px;border: 1px solid black; width: 150px; margin-right: auto;margin-left: auto;border-radius: 5px;height: var(--height);  line-height: var(--height);padding-top: 0; padding-bottom: 0; --height: 45px;">
      <a  href="blog.php" target="_parent" style="color: black;font-size: 11px;text-transform: uppercase;font-weight: 600!important;letter-spacing: 0.1em;text-align: center;text-decoration: none;">
          <span> VIEW BLOG</span>
  <i class="fa fa-archive" style="color: black;"></i>
  </a>
  </div>
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
              <h3 id="text_7_h3" style="text-align: center; color: white;margin-top: 20px;font-family:Ubuntu, sans-serif;font-weight: bold;">PARTNERS</h3>
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
                  <h3 id="text_7_h3" style="text-align: center; color: white;margin-top: 20px;font-family:Ubuntu, sans-serif;font-weight: bold;">STRATEGIC PARTNERS</h3>
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
              <h3 id="text_7_h3" style="text-align: center; color: white;margin-top: 20px;font-family:Ubuntu, sans-serif;font-weight: bold;">MEDIA PARTNERS</h3>
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
                <?php include 'ticket.php'?>
                <form action="" method="POST">
                <span style="color: red;"><?php echo $nameErr;?></span>
                <input type="text" name="firstName" id="inputs_ticket" placeholder="First name" value="<?php echo $name; ?>"><br><br>
                <span style="color: red;"><?php echo $lastnameErr;?></span>
                <input type="text" name="lastName" id="inputs_ticket" placeholder="Last name" value="<?php echo $lastname; ?>"><br><br>
                <span style="color: red;"><?php echo $reasonErr;?></span>
                <input type="text" name="reason" id="inputs_ticket" placeholder="Social reason" value="<?php echo $reason; ?>"><br><br>
                <span style="color: red;"><?php echo $activityErr;?></span>
                <input type="text" name="activity" id="inputs_ticket" placeholder="Activity area" value="<?php echo $activity; ?>"><br><br>
                <span style="color: red;"><?php echo $functionErr;?></span>
                <input type="text" name="function" id="inputs_ticket" placeholder="Function" value="<?php echo $function; ?>"><br><br>
                <span style="color: red;"><?php echo $emailErr;?></span>
                <input type="text" name="email" id="inputs_ticket" placeholder="Email address" value="<?php echo $email; ?>"><br><br>
                <span style="color: red;"><?php echo $phoneErr;?></span>
                <input type="tele" name="phone" id="inputs_ticket" placeholder="Phone number" value="<?php echo $phone; ?>"><br><br>
                <span style="color: red;"><?php echo $requestErr;?></span>
                <input type="text" name="request" id="inputs_ticket" placeholder="Specify your request" value="<?php echo $request; ?>"><br><br>
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
                      <p>International Exhibition of Solar Pumpig and Green Energies <br> Copyright @ 2022. All rights reserved.</p>
                  </li>
              </ul>
          </div>
          <div class="footer-col col-md">
              <h4>CONTACT US</h4>
              <ul>
                  <li><a href="#">Email: info@emarketsexpo.ma</a></li>
                  <li><a href="#">Phone: +212 (0) 5 29 29 45 69 </a></li>
                  <li><a href="#">Address: 
                   <span>Hay salam, Rue 926 Imm 11,
                bureau 4 au 1ère étage, Agadir 80070</span> </a> </li>
              </ul>
          </div>
          <div class="footer-col col-md">
              <h4>Subscribe</h4>
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

               <input  type="email" name="email" class="input" placeholder="Your Email Address"required value="<?php echo "$userEmail" ?>"><br>
                     
              <button type="submit" name="subscribe" value="Subscribe" class="button-sub" style="margin-top: 10px;">
                  <span class="shadow"></span>
                  <span class="edge"></span>
                  <span  class="front text"> SIGN UP
                  </span>
                </button>
                  </form>

              </ul>
          </div>
          <div class="footer-col col-md">
              <h4>Social Network</h4>
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



</body>