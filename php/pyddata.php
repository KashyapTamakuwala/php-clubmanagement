<?php
session_start();
if($_SESSION["username"])
{
  $bffrom = $_POST["bffrom"];
  $bfto = $_POST["bfto"];
  $dinnerfrom = $_POST["dinnerfrom"];
  $dinnerto = $_POST["dinnerto"];
  $swimfrom = $_POST["swimfrom"];
  $gymfrom = $_POST["gymfrom"];

  try{

  
  $dbhandler = new PDO('mysql:host=127.0.0.1;dbname=CLUB','root','');
  echo "Connection is established...<br/>";
  $dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  $date = date('Y-m-d H:i:s');

  $select = "select * from member where name = ?";
  $stmt= $dbhandler->prepare($select);
  $stmt->execute([$_SESSION["username"]]);
  
    while($row =$stmt->fetch())
    {
      $swim="insert into swimreq (name,emailid,phonenumber,timing,mid,swim_date) values ('".$row["name"]."','".$row["emailid"]."','".$row["phonenumber"]."','".$swimfrom."','".$row["mid"]."','".$date."')"; 
      $gym="insert into gymreq (name,emailid,phonenumber,timing,mid,gym_date) values ('".$row["name"]."','".$row["emailid"]."','".$row["phonenumber"]."','".$swimfrom."','".$row["mid"]."','".$date."')";
    
      $brf="insert into rest (name, emailid, phonenumber,start_time, end_time,res_date, mid) values ('".$row["name"]."','".$row["emailid"]."','".$row["phonenumber"]."','".$bffrom."','".$bfto."','".$date."','".$row["mid"]."')";
      $dnr="insert into rest (name, emailid, phonenumber,start_time, end_time,res_date, mid) values ('".$row["name"]."','".$row["emailid"]."','".$row["phonenumber"]."','".$dinnerfrom."','".$dinnerto."','".$date."','".$row["mid"]."')";

      $squery=$dbhandler->exec($swim);
        // $swimid = $squery->lastInsertId();
        $swimid = $dbhandler->lastInsertId();

      $gquery=$dbhandler->exec($gym);
      $gymid = $dbhandler->lastInsertId();

      $bquery=$dbhandler->exec($brf);
      $bid = $dbhandler->lastInsertId();

      $dquery=$dbhandler->exec($dnr);
      $did = $dbhandler->lastInsertId();

      $pydadd = "insert into PYD (name, emailid, phonenumber, plan_date, mid, gid, sid, bfid, dnid) values ('".$row["name"]."','".$row["emailid"]."','".$row["phonenumber"]."','".$date."','".$row["mid"]."','".$gymid."','".$swimid."','".$bid."','".$did."')";
      $pquery=$dbhandler->exec($pydadd);

    }
  } //end of try
  catch(PDOException $e){
    echo $e->getMessage();
    die();
  }
  

}


?>