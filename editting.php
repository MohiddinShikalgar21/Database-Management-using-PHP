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
            $country = $n['country'];
            $email = $n['email'];

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
    <h2 style="color:white; margin-left:30px;font-size:18px;">Database Management Using PHP</h2>
    <form action="" method="post" id="quiz-form">
        <div style="margin-left:25px;">
           <input type="text" name="username" value="<?php echo $username; ?>">
           <input type="text" name="city" value="<?php echo $city; ?>">
           <input type="text" name="country" value="<?php echo $country; ?>">
           <input type="text" name="email" value="<?php echo $email; ?>">    
           <input class="btn btn-default" style="background-color:#155e91; margin-top:15px; color:white;" type="submit" name="submit" value="Update">     
        </div>
	</form>

        
</body>
</html>

<?php

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$city = $_POST['city'];
    $country = $_POST['country'];
    $email = $_POST['email'];

	mysqli_query($db, "UPDATE dbmanage SET username='$username', city='$city', country='$country', email='$email' WHERE id=$id");
?>
<script type="text/javascript">
     alert("Record Updated Successfully!");
    window.location="edit.php";
</script>
<?php

}
?>



<?php
if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM dbmanage WHERE id=$id");
	$_SESSION['message'] = "Data Deleted!"; 
}

if(isset($_POST['update'])){
   mysqli_query($db,"INSERT INTO `dbmanage`(`username`,`city`,`country`,`email`, `password`) VALUES('$_POST[username]','$_POST[city]','$_POST[country]','$_POST[email]','$_POST[password]');");
}

?> 
