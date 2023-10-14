<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ved's Website</title>
    <style>
        body{
            display: flex;
            flex-direction: center;
            justify-content: center;
            align-items: center;
            margin-top: 60px;
            background-color: lightseagreen;
        }
        .nav-item{
            margin-top: 30px;
            font-size: 30px;
            list-style-type: none;
            border: 1px solid black;
            background-color: lightslategray;
           
            
        }
        .nav-bar{
            border: 3px solid peru;
            width: 210px;
            padding: 25px;
            margin-top: 30px;
           background-color: yellowgreen;
           
        }
        h1{
            font-size: 35px;
        }
        a{
        text-decoration:none;
        }
        .clink{
          list-style-type: none;
        }
    </style>
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    
    <ul class="nav-bar">
     <h1 >WELCOME</h1>
      <li class="nav-item">
        <a class="nav-link" href="/sqlformpp/insert.php">Signup</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/sqlformpp/insert.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/sqlformpp/delete.php">Logout</a>
      </li>
      
    </ul>
    
  </div>
</nav>
</body>
</html>