<?php
  include "connection.php";
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
          font-size:14px;  
        }
        body{
         background-color:#6abadeba;
        }
        table{
          width: 70%;
          height:75%;
          margin: 60px auto;
          border-collapse: collapse;
          text-align: center;
        }
        tr{
          border: 1px solid #155e91;
        }
        tr:nth-child(even){
          background-color: #c1d6e5;
        }
        th{
          padding-top: 12px;
          padding-bottom: 12px;
          padding-left:20px;
          text-align: center;
          background-color: #1c88a1;
          color: white;
        }
        td{
          border: 1px solid #ddd;
          padding: 8px;
          height: 30px;
          padding: 2px;
          margin:5px;
        }
        tr:hover {
          background: #F5F5F5;
        }

form {
    width: 45%;
    margin: 50px auto;
    text-align: left;
    padding: 20px; 
    border: 1px solid #bbbbbb; 
    border-radius: 5px;
}

.input-group {
    margin: 10px 0px 10px 0px;
}
.input-group label {
    display: block;
    text-align: left;
    margin: 3px;
}
.input-group input {
    height: 30px;
    width: 93%;
    padding: 5px 10px;
    font-size: 16px;
    border-radius: 5px;
    border: 1px solid gray;
}
.btn {
    padding: 10px;
    font-size: 15px;
    color: white;
    background: #5F9EA0;
    border: none;
    border-radius: 5px;
}
.edit_btn {
    text-decoration: none;
    padding: 2px 5px;
    background: #2E8B57;
    color: white;
    border-radius: 3px;
}

.del_btn {
    text-decoration: none;
    padding: 2px 5px;
    color: white;
    border-radius: 3px;
    background: #800000;
}
button {
      width: 100%;
      height:20px;
      background-color: #155e91;
      color: white;
      padding: 3%;
    }
.msg {
    margin: 30px auto; 
    padding: 10px; 
    border-radius: 5px; 
    color: #3c763d; 
    background: #dff0d8; 
    border: 1px solid #3c763d;
    width: 50%;
    text-align: center;
}
    </style>
</head>
<body>

<?php $results = mysqli_query($db, "SELECT * FROM dbmanage"); ?>

<table>
	<thead>
		<tr>
      <th>ID</th>
			<th>Username</th>
			<th>City</th>
      <th>Country</th>
      <th>Email ID</th>
			<th colspan="2">Action</th>
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
    <td><?php echo $row['id']; ?></td>
			<td><?php echo $row['username']; ?></td>
			<td><?php echo $row['city']; ?></td>
      <td><?php echo $row['country']; ?></td>
      <td><?php echo $row['email']; ?></td>
			<td>
				<a href="editting.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
			</td>
			<td>
				<a href="delete.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
			</td>
		</tr>
	<?php } ?>
</table>

<div class="a" style="align-items:center; margin-left:35%">
     <a href="dbmanage.php"><button class="btn" style="height:40px; width:40%; margin-top:10px; justify-content:center;background-color:  #1c88a1; margin-left:24px;" type="dbman" name="dbman" value="dbman">Go To Home Page</button></a>
        </div>
   
</body>
</html>


