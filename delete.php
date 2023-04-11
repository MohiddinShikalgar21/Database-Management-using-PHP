<?php
  include "connection.php";
  $id=$_GET['del'];
  mysqli_query($db,"DELETE from dbmanage where id=$id");
?>
<script type="text/javascript">
     alert("Record Deleted Successfully!");
    window.location="edit.php";
</script>