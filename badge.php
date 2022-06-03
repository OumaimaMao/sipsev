<!DOCTYPE html>
<head>
<style>
 #continaire_div{
     width: 460px;
     height: 700px;
     background-color: white;
     margin: auto;
     
 }
 #triangle{
    position: relative;
 }
 #img_triangle{
    width: 100%;
    height: 150px;
    position: relative;
    top: 0;
    left: 0;
}
#client_img {
    position: absolute;
  border-radius: 1%;
  width: 150px;
  height: 160px;
  top: 100px;
  left: 41%;
}
#img_2{
    position: absolute;
  top: 15px;
  left: 38%;
    width: 200px;
    height: 60px;
}

#img_triangle2{
    width: 100%;
    height: 80px;

}
#footer-img2{
    width: 100%;
    height: 20px;
}
#info{
    font-weight: bold;
    font-size: 16px;
}
#info_2{
    font-size: 16px;
}
.text_salon{
    position: absolute;
    top: 20%;
    left: 110px;
    color: white;
    font-family: 'Yellowtail', 'cursive';
font-size: 17px !important;

}
#point{
    font-weight: bold;
}
#generatePDF{

align-items: center;
background-color: #0F9347;
border-radius: 10px !important;
border: 2px solid #ffffff;
box-sizing: border-box;
color: white;
cursor: pointer;
display: inline-flex;
fill: #fff;
font-family: sans-serif;
height: 50px;
line-height: 24px;
min-width: 140px;
outline: 0;
padding: 0 17px;
transition: all .3s;
user-select: none;
-webkit-user-select: none;
touch-action: manipulation;
text-transform: uppercase; 
font-weight: 600!important;
letter-spacing: 0.1em;
font-size: 12px !important;

}
#generatePDF:focus {
color: #171e29;
}

#generatePDF:hover {
background-color: #13133E !important;
color: white;
}
</style>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Patua+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Grape+Nuts&family=Great+Vibes&family=Patua+One&family=Satisfy&family=Zen+Loop&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Libre+Barcode+39&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Libre+Barcode+39&family=Satisfy&display=swap" rel="stylesheet">
<!--Icon-->
<link rel="icon" href="images/solar-panel.png"/>

<title>Badge</title>
</head>
<body>
    <?php 
    include 'Connexion.php';
    include 'validation.php';
    $sql= "SELECT Id,nom,prenom,fonction,email,organisation,fonction,telephone,ville,activite FROM badge  WHERE Id = (SELECT MAX(Id) From badge)";
    $result=$cnx->query($sql);
    $data = $result->fetch();
  echo "<section id='continaire_div'>";
    echo "<head id='triangle'>";
        echo "<img src='images/head-img.png' id='img_triangle'/>";
        echo "<img src='images/logo_2.png' alt='Avatar' id='img_2'>";
        echo "<img src='images/blank_avatar.png' id='client_img'>";
    echo "</head>";

    echo "<div style='text-align: center;margin-top:120px'>";
    if($data){
        echo "<spam style='text-align: center;font-family: 'Patua One', cursive;font-size: 25px !important;'>".$data['nom']."\n</span>";
        echo "<span>".$data['prenom']."</span><br>";
        echo "<span style='font-size: 17px;font-style: italic;'>".$data['fonction']."</span><br><br>";
        echo "</div>";
        echo "<div style='float: left;width: 15%;margin-left: 80px;'>";
        echo "<span id='info'>Id</span><br><br>";
        echo "<span id='info'>Company</span><br><br>";
        echo "<span id='info'>Sector</span><br><br>";
        echo "<span id='info'>City</span><br><br>";
        echo "<span id='info'>E-mail</span><br><br>";
        echo "<span id='info'>Phone</span><br><br>";
        echo "</div>";
        echo "<div style='width: auto fit-content;float: left;margin-left: 10px;'>";
        echo "<span id='point'>:</span><br><br>";
        echo "<span id='point'>:</span><br><br>";
        echo "<span id='point'>:</span><br><br>";
        echo "<span id='point'>:</span><br><br>";
        echo "<span id='point'>:</span><br><br>";
        echo "<span id='point'>:</span><br><br>";
        echo "</div>";
        echo "<div style='float: right;width: 57%;margin-right: 20px;'>";
        echo "<span id='info_2'>".$data['Id']."</span><br><br>";
        echo "<span id='info_2'>".$data['organisation']."</span><br><br>";
        echo "<span id='info_2'>".$data['activite']."</span><br><br>";
        echo "<span id='info_2'>".$data['ville']."</span><br><br>";
        echo "<span id='info_2'>".$data['email']."</span><br><br>";
        echo "<span id='info_2'>".$data['telephone']."</span><br><br>";
        echo "</div>";
    }else{
        echo "Don't exict";
    }
    ?>
    <div>
        <img src="images/footer-img2.png" id="footer-img2"/>
    </div>
    <div style="position: relative;text-align: center;">
        <img src="images/footer-img.png" alt="Avatar" id="img_triangle2">
        <div class="text_salon">Salon International de<br> Pompage Solaire et des Energies Vertes</div>
    </div>
   </section>
 <div style="display: flex; align-items: center; justify-content: center;">
  <button id="generatePDF" onclick="download()">download Badge</button>
</div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        function download(){
            const element = document.getElementById("continaire_div");
            var opt = {
                filename: "badge.pdf",
            }
            html2pdf().from(element).set(opt).save();
        }
    </script>
</body>
</html>