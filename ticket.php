<?php 
include 'Connexion.php';
$nameErr = $lastnameErr = $reasonErr = $activityErr = $functionErr = $emailErr = $phoneErr =  $requestErr ="";
$name = $lastname = $reason = $activity = $function = $email = $phone =  $request = "";
if(isset($_POST['btn_env_ticket'])){
    $name = $_POST["firstName"];
    $lastname = $_POST["lastName"];
    $reason = $_POST["reason"];
    $function = $_POST["function"];
    $activity = $_POST["activity"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $request = $_POST["request"];

    //Verify if the Email already exist in the data base
    $query_2 = "SELECT COUNT(*) AS num FROM `ticket` WHERE email = :email";
    $stmt = $cnx->prepare($query_2);
    $stmt->bindValue(':email', $email);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    //Verify if the phone number already exist in the data base
    $query_3 = "SELECT COUNT(*) AS num_2 FROM `ticket` WHERE telephone = :telephone";
    $stmt_2 = $cnx->prepare($query_3);
    $stmt_2->bindValue(':telephone', $phone);
    $stmt_2->execute();
    $row_2 = $stmt_2->fetch(PDO::FETCH_ASSOC);

    if(empty($_POST["firstName"])){
        $nameErr = "Enter your first name";
    }else if(!preg_match("/^[a-zA-Z-' ]*$/", $name)){
        $nameErr = "Only letters and white space allowed";
    }
    if(empty($_POST['lastName'])){
        $lastnameErr = "Enter your last name";
    }else if(!preg_match("/^[a-zA-Z-' ]*$/", $lastname)){
        $lastnameErr = "Only letters and white space allowed";
    }
    if(empty($_POST['reason'])){
        $reasonErr = "Enter your reason";
    }else if(!preg_match("/^[a-zA-Z-' ]*$/", $_POST["reason"])){
        $reasonErr = "Only letters and white space allowed";
    }
    if(empty($_POST['function'])){
        $functionErr = "Enter your function";
    }else if(!preg_match("/^[a-zA-Z-' ]*$/", $_POST["function"])){
        $functionErr = "Only letters and white space allowed";
    }
    if(empty($_POST['activity'])){
        $activityErr = "Enter your area activity";
    }else if(!preg_match("/^[a-zA-Z-' ]*$/", $_POST["activity"])){
        $activityErr = "Only letters and white space allowed";
    }
    if(empty($_POST['phone'])){
        $phoneErr = "Enter your phone number";
    }else if(!preg_match('/^[0-9]{10}+$/', $_POST['phone'])){
        $phoneErr = "Invalid Phone Number";
    }else if($row_2['num_2'] > 0){
        $phoneErr = "Phone number already exist";
   }
    if(empty($_POST['request'])){
        $requestErr = "Enter your request";
    }else if(!preg_match("/^[a-zA-Z-' ]*$/", $_POST["request"])){
        $requestErr = "Only letters and white space allowed";
    }
    if(empty($_POST['email'])){
        $emailErr = "Enter your e-mail";
    }else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $emailErr = "Invalid email format";
    }else if($row['num'] > 0){
        $emailErr = "Email already exist";
   }
    if($requestErr  == '' && $emailErr == '' && $phoneErr == '' && $activityErr == '' && $reasonErr == ''  && $functionErr == '' && $lastnameErr == '' && $nameErr == ''){
    $query = "INSERT INTO ticket (nom,prenom,email,fonction,demande,raison,secteur,telephone) VALUES ('$name','$lastname','$email','$function','$request','$reason','$activity','$phone')";
    $cnx->exec($query);
    echo "Done";
    $name = $lastname = $reason = $activity = $function = $email = $phone =  $request = "";
    }   

}

?>