<?php
    $flag=0;
    if(isset($_POST["username"])&&isset($_POST["pass"]))
    {
        try
        {
            $dbhandler = new PDO('mysql:host=127.0.0.1;dbname=CLUB','root','');
            $dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $stmt= $dbhandler->prepare("SELECT password FROM admin WHERE username = ?");
            $stmt->execute([$_POST["username"]]);
            while($a=$stmt->fetchAll(PDO::FETCH_ASSOC))
            {
                echo"in while";
                if($a["password"]=$_POST["pass"])
                {
                    session_start();
                    $_SESSION["username"] = $_POST["username"];
                    $flag=1;
                    break;
                }
            }

            $stmt2= $dbhandler->prepare("SELECT password FROM member WHERE name=?");
            $stmt2->execute([$_POST["username"]]);
            
            while($a=$stmt2->fetchAll(PDO::FETCH_ASSOC))
            {

                if($a["password"]=$_POST["pass"])
                {
                    session_start();
                    $_SESSION["username"] = $_POST["username"];
                    $flag=2;
                    break;
                }
            }


            if($flag==1)
            {
                header("Location:/clubmanagement/concept/");
            }
            else if ($flag==2)
            {
                header("Location:/clubmanagement/regna/");
            }
            else
            {
                
                header("Location:/clubmanagement/Login/");
            }







        }
        catch(PDOException $e){
            echo $e->getMessage();
            die();
        }
    }
?>