<?php
ob_start();
include 'Connexion.php';
$nameErr = $lastnameErr = $organisationErr = $fonctionErr = $genreErr =  $civiliteErr =  $secteurErr = $teleErr = $commentErr = $emailErr = $villeErr = $ageErr = $pictureErr = $badgeErr ="";
$name = $lastname = $organisation = $fonction = $secteur = $tele = $email = $ville = $genre = $civilite = $comment = $age  = $success = $badge = "";
/*if(isset($_POST['btn_download'])){
        $badgeErr = "Register first";
}*/
if(isset($_POST['btn_register'])){
    $name = $_POST["nom"];
    $lastname = $_POST["prenom"];
    $organisation = $_POST["organisme"];
    $fonction = $_POST["fonction"];
    $secteur = $_POST["secteur"];
    $ville = $_POST["ville"];
    $tele = $_POST["tele"];
    $civilite = $_POST["civilite"];
    $email = $_POST["email"];
    $comment = $_POST["comment"];
    $age = $_POST["age"];
    $genre = $_POST["genre"];
    //Verify if the Email already exist in the data base
    $query_2 = "SELECT COUNT(*) AS num FROM `badge` WHERE email = :email";
    $stmt = $cnx->prepare($query_2);
    $stmt->bindValue(':email', $email);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    //Verify if the phone number already exist in the data base
    $query_3 = "SELECT COUNT(*) AS num_2 FROM `badge` WHERE telephone = :telephone";
    $stmt_2 = $cnx->prepare($query_3);
    $stmt_2->bindValue(':telephone', $tele);
    $stmt_2->execute();
    $row_2 = $stmt_2->fetch(PDO::FETCH_ASSOC);


    if(isset($_POST['btn_download'])){
        header("Location:badge.php");
        ob_end_flush();
    } 
    if(empty($_POST["nom"])){
        $nameErr = "Enter your first name";
    }else if(!preg_match("/^[a-zA-Z-' ]*$/", $name)){
        $nameErr = "Only letters and white space allowed";
    }
    if(empty($_POST['prenom'])){
        $lastnameErr = "Enter your last name";
    }else if(!preg_match("/^[a-zA-Z-' ]*$/", $_POST["prenom"])){
        $lastnameErr = "Only letters and white space allowed";
    }
    if(empty($_POST['organisme'])){
        $organisationErr = "Enter name of the organisation";
    }else if(!preg_match("/^[a-zA-Z-' ]*$/", $_POST["organisme"])){
        $organisationErr = "Only letters and white space allowed";
    }
    if(empty($_POST['fonction'])){
        $fonctionErr = "Enter your function";
    }else if(!preg_match("/^[a-zA-Z-' ]*$/", $_POST["fonction"])){
        $fonctionErr = "Only letters and white space allowed";
    }
    if(empty($_POST['genre'])){
        $genreErr = "Select your gender";
    }
    if(empty($_POST['secteur'])){
        $secteurErr = "Enter your area activity";
    }else if(!preg_match("/^[a-zA-Z-' ]*$/", $_POST["secteur"])){
        $secteurErr = "Only letters and white space allowed";
    }
    if(empty($_POST['civilite'])){
        $civiliteErr = "Select your civility";
    }
    if(empty($_POST['tele'])){
        $teleErr = "Enter your phone number";
    }else if(!preg_match('/^[0-9]{10}+$/', $_POST['tele'])){
        $teleErr = "Invalid Phone Number";
    }else if($row_2['num_2'] > 0){
        $teleErr = "Phone number already exist";
   }
    if(empty($_POST['age'])){
        $ageErr = "Select your age";
    }
    if(empty($_POST['ville'])){
        $villeErr = "Enter your city";
    }else if(!preg_match("/^[a-zA-Z-' ]*$/", $_POST["ville"])){
        $villeErr = "Only letters and white space allowed";
    }
    if(empty($_POST['email'])){
        $emailErr = "Enter your e-mail";
    }else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $emailErr = "Invalid email format";         
    }else if($row['num'] > 0){
        $emailErr = "Email already exist";
   }
    if(empty($_POST['comment'])){
        $commentErr = "Select one choice";
    }
    if($commentErr == '' && $emailErr == '' && $villeErr == '' && $ageErr == '' && $teleErr == '' && $civiliteErr == '' && $secteurErr == '' && $genreErr == '' && $fonctionErr == '' && $organisationErr == '' && $lastnameErr == '' && $nameErr == '' ){
    $query = "INSERT INTO badge (nom,prenom,civilite,email,age,connaissance,organisation,fonction,activite,telephone,ville,genre) VALUES ('$name','$lastname','$civilite','$email','$age','$comment','$organisation','$fonction','$secteur','$tele','$ville','$genre')";
    $cnx->exec($query);
    header("Location:badge.php");
    $name = $lastname = $organisation = $fonction = $genre = $civilite =  $secteur = $tele = $comment = $email = $ville = $age = $image = "";
    }
}
?>