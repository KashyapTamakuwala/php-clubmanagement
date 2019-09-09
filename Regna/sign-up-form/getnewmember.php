<?php

if (isset($_POST['submit']))
{
    $name = $_POST["fname"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $gender = $_POST["gender"];
    
    $date = $_POST["yyyy"]."/".$_POST["mm"]."/".$_POST["dd"];
    
    try{
        $dbhandler = new PDO('mysql:host=127.0.0.1;dbname=CLUB','root','');
        echo "Connection is established...<br/>";
        $dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $sql="insert into pendingmember (name, emailid, phonenumber, address, dob, gender, password) values ('".$name."','".$email."','".$phone."','".$address."','".$date."','".$gender."','".$password."')";
        $query=$dbhandler->query($sql);
        echo "Data is inserted successfully";
        header('Location: /clubmanagement/Regna/');
	    die();
        
    }
    catch(PDOException $e){
        echo $e->getMessage();
        die();
    }
    
}

?>