<?php
include "my_connection.php";
?>
<html>
<head>
</head>
<body>
<p>VARIANT: 
  <select name="model" id="model">
    <option value="" >SELECT YOUR CHOICE </option>
    <?php
$i=$_GET['id1'];
$qry1=mysql_query("select model from model where company='$i'") or die(mysql_error());
while($row=mysql_fetch_array($qry1))
{
?>
    <option value="<?php echo $row['model'];?>"> <?php echo $row['model'];?></option>
    <?php
}
?>
  
</p>
<p>&nbsp; </p>
<p>
  <input name="btngo" type="button" value="Go">
</p>
</body>
</html>