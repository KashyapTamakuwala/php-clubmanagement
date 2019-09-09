<?php
try{
	$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=CLUB','root','');
	echo "Connection is established...<br/>";
    $dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
    //PENDING MEMBER
	$sql="create table pendingmember (
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
        name VARCHAR(30) NOT NULL,
        emailid varchar(50) NOT NULL,
        phonenumber  int(10) NOT NULL,
        address varchar(60) NOT NULL,
        dob date
		)";
    $query=$dbhandler->query($sql);

    //MEMBER TABLE
    $sql2="create table member (
		mid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
        name VARCHAR(30) NOT NULL,
        emailid varchar(50) NOT NULL,
        phonenumber  int(10) NOT NULL,
        address varchar(60) NOT NULL,
        password varchar(10) NOT NULL,
        dob date
		)";
	echo "Table is created successfully";
    $query=$dbhandler->query($sql2);	


    //ROOM REQUEST
    $sql3="create table roomrequest (
		bid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
        name VARCHAR(30) NOT NULL,
        emailid varchar(50) NOT NULL,
        phonenumber  int(10) NOT NULL,
        checkindate date,
        checkoutdate date,
        address varchar(60) NOT NULL,
        dob date,
        mid INT(6) UNSIGNED ,
        FOREIGN KEY (mid) REFERENCES member(mid)
		)";
		$query=$dbhandler->query($sql3);
        echo "Table is created successfully";



    // SPORTS TABLES

        //SwimReq
        //sid is for referring non-members
        $sql4="create table swimreq (
            sid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
            name VARCHAR(30) NOT NULL,
            emailid varchar(50) NOT NULL,
            phonenumber  int(10) NOT NULL,
            timing datetime,
            mid INT(6) UNSIGNED,
            FOREIGN KEY (mid) REFERENCES member(mid)
            )";
            $query=$dbhandler->query($sql4);
            echo "swim Table is created successfully";
        

            
        //gymReq
        //gid is for referring non-members
        $sql5="create table gymreq (
            gid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
            name VARCHAR(30) NOT NULL,
            emailid varchar(50) NOT NULL,
            phonenumber  int(10) NOT NULL,
            timing datetime,
            mid INT(6) UNSIGNED,
            FOREIGN KEY (mid) REFERENCES member(mid)
            )";
            $query=$dbhandler->query($sql5);
            echo "gym Table is created successfully";


    //ADMIN TABLES
    // use CURRENT_TIMESTAMP to get the last login
    $sql6="create table admin (
        aid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        username varchar(20) NOT NULL, 
        emailid varchar(50) NOT NULL,
        password varchar(20),
        lastlgn datetime
        )";
        $query=$dbhandler->query($sql6);
        echo "admin Table is created successfully";


    //restaurant
    $sql8="create table rest (
        rid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
          
        name VARCHAR(30) NOT NULL,
        emailid varchar(50) NOT NULL,
        phonenumber  int(10) NOT NULL,
        start_time Time,
        end_time time,
        res_date date,
        mid INT(6) UNSIGNED ,
        FOREIGN KEY (mid) REFERENCES member(mid)
        )";
        $query=$dbhandler->query($sql8);
        echo "restaurant Table is created successfully";

    //PYD
    $sql7="create table PYD (
        pydid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
        name VARCHAR(30) NOT NULL,
        emailid varchar(50) NOT NULL,
        phonenumber  int(10) NOT NULL,
        plan_date datetime,
        mid INT(6) UNSIGNED,
        gid INT(6) UNSIGNED,
        sid INT(6) UNSIGNED,
        bfid INT(6) UNSIGNED,
        dnid INT(6) UNSIGNED,
        FOREIGN KEY (mid) REFERENCES member(mid),
        FOREIGN KEY (gid) REFERENCES gymreq(gid),
        FOREIGN KEY (sid) REFERENCES swimreq(sid),
        FOREIGN KEY (bfid) REFERENCES rest(rid),
        FOREIGN KEY (dnid) REFERENCES rest(rid)
        )";
        $query=$dbhandler->query($sql7);
        echo "admin Table is created successfully";


    

}
catch(PDOException $e){
	echo $e->getMessage();
	die();
}

?>