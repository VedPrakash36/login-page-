<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
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
        $conn=mysqli_connect("localhost","root","","snapbase");
        if($conn){
            echo " connected successfully ";
        }
        else{
            echo " not connected successfully ";
        }
        $sql="DELETE FROM snaptable WHERE id=$id";
        $result=mysqli_query($conn,$sql);
        if($result){
            echo " delete successfully ";
        }
        else{
            echo " not deleted ";
        }

    }

    ?>
    </div>



<div class="sq1">
    <form action="delete.php" method="post">
    <h1>Enter your username</h1>
    <input type="text" name="username" placeholder="enter your username">
    <h1>Enter your password</h1>
    <input type="password" name="password" placeholder="enter your password">
    <h1>Enter your id</h1>
    <input type="text" name="id" palceholder="enter your id">
    <br>
    <br>
    <input type="submit" name="submit" class="s1" value="delete">
    </form>
    <div>
</body>
</html>