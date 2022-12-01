<?php
        //Connect database server (create cennection obj)
        include_once ("dbConfig.php");

    if ($_POST['userInfo']) {
        $nickname = $_POST ['nickname'];
        $password = $_POST ['password'];
        $phone = $_POST ['phone'];
        $address = $_POST ['address'];
        $color = $_POST ['color'];
        $dateOfBirdth = $_POST ['dob'];

        //write query
        $query = "INSERT INTO user (nickname,password,phone,address,color,dob) 
                    VALUES(:nickname,:password,:phone,:address,:color,:dob)";

        //prepare query
        $prepare = $conn -> prepare($query);

        $prepare -> bindParam(':nickname',$nickname);
        $prepare -> bindParam(':password',$password);
        $prepare -> bindParam(':phone',$phone);
        $prepare -> bindParam(':address',$address);
        $prepare -> bindParam(':color',$color);
        $prepare -> bindParam(':dob',$dateOfBirdth);

        //execute query
        if($prepare -> execute()){
            echo "Your Input data Inserted Successfully!";
        }else {
            echo "Inserted failed";
        }

    }else {
        echo "You don't clicked Sumbit Buttton";
    } 

?>