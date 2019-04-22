<?php include "connect.php"?>
<html>
<head>
<style>
body {margin:0;}
go {position:fixed;width:100%;}
header {
background-color:white;
font: italic bold 40px Georgia, serif; 
	color:#660066;
padding-top:1px;	
padding-bottom:1px;
padding-left:50px;
padding-right:30px;
}

	#a {
    text-align: left;
    padding-bottom: 1cm;
	width: 50px;
font-size: 125%;
}
#yy {
    text-align: center;
    padding-bottom: 1cm;
	width: 50px;
}
table#t {
	margin-left:6cm;
	width:60%;
	}

ul#up {
    list-style-type: none;
    margin: 0px 0px;
    padding: 0;
    overflow: hidden;
    background-color: #660066;
    top: 0;
    width: 100%;
    left:0;
}

#pu {
    float: right;
}

#pu a {
	border-bottom: 1px solid #555;
    display: block;
	white-space: nowrap;
    color: white;
    text-align: center;
    padding: 14px 170px;
    text-decoration: none;
}

#pu a:hover:not(.active) {
    background-color: #4c004c;
}

#pu .active {
    background-color: #4c004c;
}
#b {
    overflow: auto;
    border-left: 1px solid #555;
    list-style-type: none;
    margin: 0px 0px;
    padding: 0px;
    width: 25%;
    height: 100%;
    background-color: #660066;
}

 #n a{
    display: block;
border-bottom: 1px solid #555;
padding-left:1cm;
padding-right: 3.5cm;
padding-top: 1cm;
padding-bottom: 1cm;
font: italic 20px Georgia, serif;
    text-decoration: none;
color:white;
}

#n.active {
    background-color:#555;
    color: white;
}

#n:hover:not(.active) {
    background-color: #4c004c;
    color: white;
}
div {
    border: 3px solid black;
    padding-top: 4cm;
    margin-top: 0px;
    margin-bottom: 0px;
    margin-right: 0px;
    margin-left: 350px;
}
</style>
</head>		
	<body>
<go>
<header>
	<p>Quest 4 Ans</p>	
</header>
<ul id="up">
  <li id="pu"><a href="signout.php">Sign out</a></li>
  <li id="pu"><a href="home.php">Home</a></li>
</ul>
<ul id="b">
  <li id="n"><a class="active" href="post_ques.php">Post a question</a></li>
  <li id="n"><a href="ques_posted.php">Question posted</a></li>
<li id="n"><a href="ans_posted.php">Answer posted</a></li>
</ul>
</go>
<div>
<?php
$a=$_SESSION['usrname'];
date_default_timezone_set("Asia/Kolkata");
$hrs = date("G",time());
$msg = "";
if ($hrs <  12) 
$msg = "Good Mornin'!"; // REALLY early
else if ($hrs <=  14) 
$msg = "Good Afternoon";      // After 6am
else if ($hrs <= 24) 
$msg = "Good Evening";    // After 12pm
else
{
$msg="ERROR";
}
if($i = mysql_query("SELECT * FROM `account` WHERE usrname = '".$a."'"))
{
	if(mysql_num_rows($i)>0)
{
while($row = mysql_fetch_array($i, MYSQL_ASSOC))
{
echo "<h1 style='color:#660066; font: italic bold 60px Georgia, serif;'>$msg  {$row['first_name']} {$row['last_name']}</h1>";
echo "<h2 style='color:#660066;'>User Info</h2>";			
echo "<table id='t'>
<tr>
<th id='a'>Age :</th>
<td id='yy'>{$row['age']}</td>
</tr>
<tr>
<th id='a'>Sex :</th>
<td id='yy'>{$row['sex']}</td>
</tr>
<tr>
<th id='a'>Proffession :</th>
<td id='yy'>{$row['proffession']}</td>
</tr>
<tr>
<th id='a'>Contact Number :</th>
<td id='yy'>{$row['mobile_number']}</td>
</tr>
<tr>
<th id='a'>Email :</th>
<td id='yy'>{$row['email_id']}</td>
</tr>
</table>
";
}
mysql_free_result($i);
}}
?>
</div>
	</body>
</html>