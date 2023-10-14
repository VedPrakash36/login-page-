<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert</title>
    <link rel="stylesheet" href="style1.css">
    
</head>
<body>
    <div class="sq2">
    <?php
    if(isset($_POST['submit'])){
        echo " SUBMIT BUTTON PRESSED ";
        echo "<br>";
        $username=$_POST['username'];
        $password=$_POST['password'];
        $id=$_POST['id'];
        echo " WELCOME TO THIS SITE " . $username . " YOUR PASSWORD IS " . $password . " YOUR ID IS " . $id;
        $conn=mysqli_connect("localhost","root","","SNAPBASE");
        if($conn){
            echo " connected successfully ";
        }
        else{
            echo " not connected successfully ";
        }

       /* $sql="CREATE DATABASE SNAPBASE";
        $result=mysqli_query($conn,$sql);
        if($result){
            echo " created database successfully ";
        }
        else{
            echo " not created database ";
        }
        */
       /* $sql="CREATE TABLE SNAPTABLE(ID INT(10) , USERNAME VARCHAR(15) , PASSWORD VARCHAR(15))";
        $result=mysqli_query($conn,$sql);
        if($result){
            echo " created table successfully ";
        }
        else{
            echo " not created table ";

        }
        */
        
        //dicourageing sql injaction
        /*$username=mysqli_real_escape_string($conn,$username);
        $password=mysqli_real_escape_string($conn,$password);

        //Encrypt our password
        $hashformat="$2y$10$";
        $salt= "hghggsgvbgbhbhsfddns22";

        $hash_and_salt = $hashformat . $salt;


        $password=crypt($password,$hash_and_salt);
*/


        


        //query to data base 
       $sql="INSERT INTO SNAPTABLE(ID,USERNAME,PASSWORD) VALUES ('$id','$username','$password')";
        $result=mysqli_query($conn,$sql);
        if($result){
            echo " inserted table successfully ";
        }
        else{
            echo " not inserted table ";
        }
        
    }
?>
</div>
     <div class="container">
    <div class="box">
    <form action="insert.php" method="post">
    <h1>Enter your username</h1>
    <input type="text" name="username" placeholder="enter your username">
    <h1>Enter your password</h1>
    <input type="password" name="password" placeholder="enter your password">
    <h1>Enter your id</h1>
    <input type="text" name="id" palceholder="enter your id">
    <br>
    <br>
    <input class="sb" type="submit" name="submit" class="s1">
    </form>
</div>
</div>
</body>
</html>