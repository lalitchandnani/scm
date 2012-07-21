<html>
<head>

<title>Login</title>
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
	<br><br><br><br><br><br> 

	<table>
		<tr hight=500>
			<td width="40%"><img src="login.jpg" width=210><br><br><br>
				<form method="POST" action="default.php">
					Username:<input type="text" name="username"><br><br><br>
					Password:<input type="password" name="password"><br><br><br>
					<input type="Submit" value="  login  ">
				</form><td>
			</td>
			<td width ="60%"><img dynsrc="beg.wmv" loop=infinite width=400 hight=400></td>
		</tr> 
	`	 
	</table><br><br> 
<b>&copy; All Right Reserved</b>
</body>
</html>