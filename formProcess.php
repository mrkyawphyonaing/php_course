<?php

    if ($_POST['userInfo']) {
        $nickname = $_POST ['nickname'];
        $password = $_POST ['password'];
        $phone = $_POST ['phone'];
        $address = $_POST ['address'];
        $color = $_POST ['color'];
        $dateOfBirdth = $_POST ['dob'];
        echo "Your Name is " .$nickname ."<br>"."<br>";
        echo "Your Password is " .$password ."<br>"."<br>";
        echo "Your Phone Number is " .$phone ."<br>"."<br>";
        echo "Your Address is " .$address ."<br>"."<br>";
        echo "Your Color is " .$color ."<br>"."<br>";
        echo "Your Date of Birdth is " .$dateOfBirdth ."<br>"."<br>";
    }else {
        echo "You don't clicked Sumbit Buttton";
    } 

?>