<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {font-size: 36px}
-->
body {

	background-image:url(images/Rainbow-Background-Images-173.jpg);
	background-repeat:repeat-y;
	
}
</style>
</head>
       <?php
       include "my_connection.php";
       $qry=mysql_query("select distinct * from  maruticiazvariants") or die(mysql_error());
      while($row=mysql_fetch_array($qry))
         {
          ?> 	  
<body>
<table width="1162" height="450" border="1">
  <tr>
    <td width="145" height="104">&nbsp;</td>
    <td width="887"><div align="center"><span class="style1"><?php echo $row['vname']?> Specifications and Features</span></div></td>
    <td width="108">&nbsp;</td>
  </tr>
  <tr>
    <td height="203">&nbsp;</td>
    <td><table width="672" height="286" border="1">
      <tr>
        <td><p>Dimension &amp; Weights</p>
          <table width="515" border="1">
          <tr>
            <td width="250">Overall Length</td>
            <td width="249"><?php echo $row['length']?></td>
          </tr>
          <tr>
            <td>Overall Width</td>
            <td><?php echo $row['width']?></td>
          </tr>
          <tr>
            <td>Overall Height</td>
            <td><?php echo $row['height']?></td>
          </tr>
          <tr>
            <td>Ground Clearance</td>
            <td><?php echo $row['clearance']?></td>
          </tr>
        </table></td>
        <td><p>Engine</p>
          <table width="515" border="1">
          <tr>
            <td>Torque</td>
            <td><?php echo $row['torque']?></td>
          </tr>
          <tr>
            <td>Displacement</td>
            <td><?php echo $row['displacement']?></td>
          </tr>
          <tr>
            <td>Power</td>
            <td><?php echo $row['power']?></td>
          </tr>
          <tr>
            <td>No of Cylinders</td>
            <td><?php echo $row['cylinders']?></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="118"><p>Fuel Efficiency</p>
          <table width="515" border="1">
          <tr>
            <td>Mileage Highway</td>
            <td><?php echo $row['mhighway']?></td>
          </tr>
          <tr>
            <td>Mileage City</td>
            <td><?php echo $row['mcity']?></td>
          </tr>
          <tr>
            <td>Mileage Overall</td>
            <td><?php echo $row['moverall']?></td>
          </tr>
        </table></td>
        <td><p>Wheels &amp; Tyres</p>
          <table width="515" border="1">
          <tr>
            <td>Tyres</td>
            <td><?php echo $row['tyres']?></td>
          </tr>
          <tr>
            <td>Wheel Size</td>
            <td><?php echo $row['wsize']?></td>
          </tr>
          <tr>
            <td>Wheel Type</td>
            <td><?php echo $row['wtype']?></td>
          </tr>
         
         

        </table>
         
         
        </td>
      </tr>
    </table>
     <?php
		  }
		  ?></td>
    <td>&nbsp;</td>
    
  </tr>

  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  </table>
 
</body>

</html>
