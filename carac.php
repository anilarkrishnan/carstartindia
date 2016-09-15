

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
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
<style type="text/css">
<!--
.style1 {
	font-size: 36px;
	font-weight: bold;
}
.style6 {font-size: 18px}
.style7 {
	color: #9900FF;
	font-weight: bold;
}
.style8 {
	color: #CC00FF;
	font-weight: bold;
}
.style10 {
	font-size: 18px;
	font-weight: bold;
	color: #0000FF;
}
body {

	background-image:url(images/Rainbow-Background-Images-173.jpg);
	background-repeat:repeat-y;
	
}
.style11 {
	font-size: 24px;
	font-style: italic;
}
-->
</style>
<?php
$nerror="";
$eerror="";
$merror="";
$a="";
$b="";
$c="";
if(isset($_POST['s1']))
 {
  $a=$_POST['n1'];
  $b=$_POST['e1'];
  $c=$_POST['u1'];
  
  if(empty($a))
 {
  $nerror="Name required";
 }
else if(empty($b))
 {
  $eerror="Email required";
  }
else if(!preg_match("/^[a-z]+[0-9]*(@)[a-z]+(.)[a-z]+$/",$b))
{
  $eerror="Invalid email id";
 }
 else if(empty($c))
{
	 $merror="Mobile no required";
}
 else if(!preg_match("/^[0-9]{10}$/",$c))
	 {
		 $merror="Invalid mobile no";
	 }
else
 {
  echo "Success";
 }
}
?>
</head>

<body>
<?php
include "include.php";
?>
<div style="background-color:#99FFFF;">
<table width="1161" height="305" border="0">
  <tr>
    <td width="6" height="43">&nbsp;</td>
    <td width="726"><div align="center">
      <p class="style1">&nbsp;</p>
      <p class="style1">Excisting Car Service</p>
      <p align="left" class="style1"><span class="style6"><a href="excistservice.php">Back</a>&nbsp;</span></p>
    </div></td>
    <td width="415">&nbsp;</td>
  </tr>
  <tr>
    <td height="223">&nbsp;</td>
    <td><p><span class="style11"><strong>FREE AC CHECK UP OFFER</strong><strong> </strong></span></p>
      <p><img src="1.jpg" alt="1" width="624" height="331" /></p>
<p>It’s time to make your  car’s AC summer ready.<br />
            <span class="style7">We are offering FREE AC check up for all brands of  car. Grab this offer NOW!</span> <br />
        FREE AC check up and  Inspection includes:<br />
        1. AC check for  leakage, pressure, effectiveness &amp; noise<br />
        2. Complete AC Unit Inspection &amp; report<br />
        3. AC condenser cleaning<br />
        4. Blower motor and fan speed check</p>
      <p>Besides the above FREE  offer we also have the Summer Packs starting at&nbsp;<strong>Rs.1999</strong>&nbsp;Rs.999 in select cities.&nbsp;</p>
      <p><span class="style8">Book Online  and SAVE 50% NOW!</span><br />
  &nbsp;<br />
        Get your car ready to beat the heat with special Summer Pack. A  package of services that will make your car clean &amp; fresh to help you drive  cool this summer.<br />
        <strong>Summer Packs include additional services like:</strong><br />
        <br />
        1. 25 Point Check up<br />
        2. AC Disinfectant and deodorize treatment<br />
        3. AC check up:<br />
        (a). AC compressor check for leak, pressure and noise<br />
        (b). Condenser &amp; evaporator check or choking, blockages and cooling power<br />
        (c). Dust removal and circulation cleaning<br />
        (d). Blower motor and fan speed check<br />
        4. Complete car wash<br />
        5. Interior dry cleaning<br />
        <br />
        <br />
        For Bangalore, Hyderabad, Mumbai, Chennai &amp; Pune, Price starts at&nbsp;<strong>Rs.2399</strong>&nbsp;Rs.1199.&nbsp;<strong>Book Online and SAVE 50% NOW!</strong><br />
        HURRY UP! Offer valid till 31st July 2014.</p>
      <p><strong>Terms and Conditions :</strong> <br />
        1. Taxes Extra.<br />
        2. The offer is non transferable.<br />
        3. Offer not valid on taxis and commercial vehicles.<br />
        4. Cannot be combined with other existing offers and cannot be redeemed for  cash.<br />
        5. Pick &amp; Drop is not part of the offer but the discretion of Unit Head.</p></td>
    <td><table width="291" height="207" border="1">
      <tr>
        <td height="23"><span class="style10">Get this Offer</span></td>
      </tr>
      <tr>
        <td><form id="form1" name="register" method="post" action="carac.php">
            <label>Name<br />
            <input type="text" name="n1" value="<?php echo $a;?>"><span><?php echo $nerror;?></span><br>
            </label>
            <p>
              <label>Email<br />
              <input type="email" name="e1" value="<?php echo $b;?>"><span><?php echo $eerror;?></span><br>
              </label>
            </p>
          <p>
              <label>Mobile<br />
              <input type="text" name="u1" value="<?php echo $c;?>"><span><?php echo $merror;?></span><br>
              </label>
            </p>
          <p>
              <label>Select Make<br/>
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
              </label>
              <label>Select Model
                <select name="lmodel" id="lmodel">
              </select>
              </label>
            </p>
          <p>
              <label>Hub
                <select name="lhub" id="lhub">
                <option value="35">Bangalore Marathahalli</option>
                <option value="36">Chandigarh Industrial Area Phase 1</option>
                <option value="37">Chennai Carnation Kunaal Auto Solution Ambattur</option>
                <option value="38">New Delhi Carnation SS Automobiles Dwarka</option>
                <option value="39">Hyderabad Maula Ali</option>
                <option value="40">Hyderabad Sanat Nagar</option>
                <option value="41">Jaipur Carnation Brooklyn Jaipur</option>
                <option value="42">Jalandhar Garha Road</option>
                <option value="43">Kochi Maradu</option>
                <option value="44">Mumbai Chembur</option>
                <option value="45">Noida Carnation Brooklyn Noida</option>
                <option value="46">Noida Sec 63</option>
                <option value="47">Pune Tathawade</option>
                <option value="48">Ghaziabad Carnation Brooklyn Sahibabad</option>
                <option value="49">Gurgaon Carnation SS Automobiles Gurgaon</option>
                <option value="50">Chennai Carnation Cuuro Motors Guindy</option>
                <option value="60">Greater Noida Carnation Shreeram Auto Greater Noida</option>
                <option value="91">New Delhi Carnation Ashok Motors Yamuna Vihar</option>
                <option value="95">Ghaziabad Carnation Supertech Automobiles</option>
                <option value="101">Meerut Carnation Kailash Motor Baghpat</option>
                <option value="100">Meerut Carnation Car Care</option>
                <option value="103">New Delhi Carnation MT Automobile</option>
                <option value="108">Gurgaon Carnation Rising Automobiles Gurgaon</option>
                <option value="109">Palwal Carnation Aggarwal Motors Palwal</option>
                <option value="110">Noida Carnation Vinayak Automobile</option>
                <option value="111">Mumbai Carnation Auto Expert Andheri East Mumbai</option>
                <option value="113">Faridabad Carnation Radiant Car Service</option>
                <option value="114">Ghaziabad Carnation New Jai Automobiles</option>
                <option value="116">Mumbai Carnation Ganesh Motors Kandivali West Mumbai</option>
                <option value="119">Yamunanagar Carnation Raj Motors Jagadhari</option>
                <option value="120">Karnal Carnation Arpita Motors</option>
                <option value="121">Nagaur Carnation Goodluck Autos</option>
                <option value="122">Jaipur Carnation Vansh Chandel Motors Chomu Jaipur</option>
                <option value="123">Bahadurgarh Carnation M-T-Automobiles Bahadurgarh Jajjar</option>
                <option value="124">Greater Noida Carnation Alpha Automobiles Greater Noida</option>
                <option value="125">New Delhi Carnation Pandit Motors main kanjhawala road delhi</option>
                <option value="126">Jaipur Carnation Mahi Motor Nirman nagar Jaipur</option>
                <option value="127">Jodhpur Carnation Dev Enterprises jhalamund circle Jodhpur</option>
                <option value="128">Ajmer Carnation Shri Karni Automobile</option>
                <option value="129">Mumbai Carnation SNS Motors Mira Road Thane</option>
                <option value="130">Sonipat Carnation Friends Motors Sonipat</option>
                <option value="131">Bareilly Carnation Zeal Motors</option>
                <option value="132">Gwalior Carnation Neha India Automobiles Gwalior</option>
                <option value="133">Mathura Carnation Amit Enterprises</option>
                <option value="135">Gurgaon Carnation Rising Automobiles Jharsa - Gurgaon</option>
              </select>
              </label>
            </p>
          <p>
              <label>
              <input type="checkbox" name="check" id="check" />
              </label>
            I accept & understand that Carnation.in or its partners may call/ send text messages to this number, in order to service my requests or send me reminders. </p>
          <p>
              <input type="submit" name="s1" value="REGISTER">
            </p>
          <div class="form-group ">
              <label for="dp3"></label>
            </div>
        </form></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</div>
</body>

</html>
