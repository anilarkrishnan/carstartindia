<html>
<head>
<title>New cars </title>
<script>
function car1()
{
	var x=new XMLHttpRequest;
	var a=document.getElementById('company').value;
	x.open("GET","model1.php?id1="+a,true);
	x.send();
	x.onreadystatechange=function()
	{
		if(x.readyState==4 && x.status==200)
		{
			
			document.getElementById("m1").innerHTML=x.responseText;
		}
	}
}
</script>
</head>
 <?php
include "my_connection.php";
?>
<body>
<?php
include "include.php";
?>
<p>&nbsp;</p>
  <!--<p class="style18"><strong><em>Enter your choices to find the best new cars in India</em></strong></p>-->
</p>
<p>SEECT CAR BY COMPANY</p>
<p>COMPANY:
  <select id="company" onChange="car1()" >
    <option value="" >SELECT YOUR CHOICE    </option>
    <?php
$qry=mysql_query("select distinct(company) from model")or die(mysql_error());
while($row=mysql_fetch_array($qry))
{
?>
    
    <option value="<?php echo $row['company']?>">
    <?php echo $row['company'];?>    </option>
    <?php
}
?>
  </select>
</p>
<p>&nbsp;</p>
<p>SELECTY CAR BY BRAND</p>
<table width="1061" height="1005" border="0">
  <tr>
    <td width="8" height="23">&nbsp;</td>
    <td width="1030">&nbsp;</td>
    <td width="8">&nbsp;</td>
  </tr>
  <tr>
    <td height="949">&nbsp;</td>
    <td><table width="1017" height="898" border="0">
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
<div id="m1"></div>
</body>
</html>


