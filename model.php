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
<style type="text/css">
<!--
.style4 {	font-size: 24px;
	font-weight: bold;
	font-style: italic;
}
-->
</style>
</head>
 <?php
include "my_connection.php";
?>
<body>
<p>&nbsp;</p>
<p>
  <?php
include "include.php";
?>
  <!--<p class="style18"><strong><em>Enter your choices to find the best new cars in India</em></strong></p>-->
</p>
<p class="style4">SEECT CAR BY COMPANY</p>
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
<p class="style4">SELECT BY BRANDS</p>
<table width="886" height="185" border="0" bordercolor="#C3C8CC">
  <tr>
    <td width="159"><a href="ofmahindra.php"><img src="../amopa/shyami/logos/85cd2ff9cee6097e0f9f6f39580b8824_th_1.jpeg" width="239" height="109"></a></td>
    <td width="150"><img src="../amopa/shyami/logos/834a4c5fbc0262666ed6bef13f4202de.jpg" width="190" height="115"></td>
    <td width="148"><img src="../amopa/shyami/logos/361435-tata-motors.jpg" width="190" height="158"></td>
    <td width="137"><img src="../amopa/shyami/logos/audi-logo.gif" width="208" height="98"></td>
    <td width="122"><img src="../amopa/shyami/logos/bmw_logo_1.jpg" width="194" height="191"></td>
    <td width="130"><img src="../amopa/shyami/logos/download (1).jpg" width="184" height="149"></td>
  </tr>
  <tr>
    <td><img src="../amopa/shyami/logos/download (2).jpg" width="195" height="170"></td>
    <td><img src="../amopa/shyami/logos/download (3).jpg" width="192" height="171"></td>
    <td><img src="../amopa/shyami/logos/download (4).jpg" width="246" height="145"></td>
    <td><img src="../amopa/shyami/logos/d18cf135a8e967d021a344132de91336.jpg" width="198" height="172"></td>
    <td><img src="../amopa/shyami/logos/images (2).jpg" width="206" height="155"></td>
    <td><img src="../amopa/shyami/logos/images (3).jpg" width="187" height="126"></td>
  </tr>
  <tr>
    <td height="75"><img src="../amopa/shyami/logos/images (4).jpg" width="230" height="115"></td>
    <td><p><img src="../amopa/shyami/logos/images.jpg" width="243" height="158"></p></td>
    <td><img src="../amopa/shyami/logos/logo_cars_hires.png" width="259" height="131"></td>
    <td><img src="../amopa/shyami/logos/maruti suzuki.jpg" width="197" height="119"></td>
    <td><img src="../amopa/shyami/logos/images (6).jpg" width="182" height="189"></td>
    <td><img src="../amopa/shyami/logos/images (5).jpg" width="189" height="187"></td>
  </tr>
</table>
<p>&nbsp;</p>
<div id="m1"></div>
</body>
</html>


