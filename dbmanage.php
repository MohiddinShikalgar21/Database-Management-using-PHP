<?php
include "connection.php";
?>

<?php

	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM dbmanage WHERE id=$id");

		$n = mysqli_fetch_array($record);
		$username = $n['username'];
		$city = $n['city'];
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         @import url("https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600&display=swap");
   *{
       font-family: 'Nunito', sans-serif;
       
    }
        body{
            background-color:#6abadeba;
        }
        .login{
          width: 350px;
          align-items:center;
          justify-content:center;
          overflow: hidden;
          margin: auto;
          margin-top:5%;
          margin: 10 0 0 450px;
          padding: 50px;
          background: #23463f;
          border-radius: 15px ;
        }
    button {
      width: 100%;
      height:20px;
      background-color: #155e91;
      color: white;
      padding: 3%;
    } 
    button:hover {
      opacity: 0.6;
      cursor: pointer;
    }
    input{
      width: 85%;
      padding-left:20%;
      margin: 5px 0;
      border-radius: 15px;
      padding: 10px 18px;
      box-sizing: border-box;
  }
    </style>
</head>
<body>
<div class="login" style="justify-content:center;">
    <h2 style="color:white; margin-left:30px;font-size:18px;">Database Management using PHP</h2>
    <form action="" method="post" id="quiz-form">
        <div style="margin-left:25px;">
           <input type="text" name="username" placeholder="Username" required= "">        
           <input type="text" name="city" placeholder="City" required= "">
            <input type="text" name="country" placeholder="Country" required= "">
            <input type="text" name="email" placeholder="Email Address" required= "">
            <input type="password" name="password" placeholder="Password" required= "">
            <input class="btn btn-default" style="background-color:#155e91; color:white; margin-top:10px;" type="submit" name="submit" value="Submit">
        </div>
    </form>

        <div>
            <a href="edit.php"><button class="btn" style="height:40px; width:80%; margin-top:10px;margin-left:24px;" type="edit" name="edit" value="Edit">Edit</button></a>
        </div>

</body>
</html>

<?php

if(isset($_POST['submit'])){
   mysqli_query($db,"INSERT INTO `dbmanage`(`username`,`city`,`country`,`email`, `password`) VALUES('$_POST[username]','$_POST[city]','$_POST[country]','$_POST[email]','$_POST[password]');");
}

?> 

