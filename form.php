<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Form</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>

</head>
<body>
    <h2>User Information</h2>
    <form action="formProcess.php" method="POST">
        Nickname : <input type="text" name="nickname" placeholder="Enter Your Nick Name" required /> <br> <br>
        Password : <input type="password" name="password" placeholder="Enter Password" required/> <br> <br>
        Phone : <input type="tel" name="phone" placeholder="Enter Phone Number" required/> <br> <br>
        Address : <textarea name="address" cols="50" rows="10" required></textarea> <br> <br>
        Color : <input type="color" name="color" /> <br> <br>
        Date of Birdth : <input type="date" name="dob"/> <br> <br>
        <input type="submit" name="userInfo"/>
    </form>
    
</body>
</html>