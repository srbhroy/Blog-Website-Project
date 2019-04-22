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
    text-align: center;
    padding-bottom: 1cm;
	width: 50px;
font-size: 125%;
}
#yy {
    text-align: center;
    padding-bottom: 1cm;
	width: 50px;
font: italic 20px Georgia, serif;
}
table#t {
	margin-left:2cm;
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
<h1 style='color:#660066; font: italic bold 60px Georgia, serif;'>Question posted by you</h1>
<?php		
$a=$_SESSION['usrname'];
if($k = mysql_query("SELECT `ques_topic`,`ques` FROM `ques_bank` WHERE `ques_bank`.`usrname`='$a'"))
{
echo
"<table id='t'>
<tr>
<th id='a'>Topic</th>
<th id='a'>Question</th>
</tr>";							
while($row = mysql_fetch_array($k, MYSQL_ASSOC)) 
{
echo
"<tr>
<td id='yy'>{$row['ques_topic']}</td>
<td id='yy'>{$row['ques']}</td>
</tr>";
}
mysql_free_result($k);
}
else
{
echo "You did'nt posted any Question yet.";
}
echo "</table>";
?>
</div>
</body>
</html>