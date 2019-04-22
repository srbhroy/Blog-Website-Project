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
	width: 0px;
font: italic 20px Georgia, serif;
background-color: #ffccff;
}
table#t {
	margin-left:2cm;
	width:80%;
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
    margin-right: 2px;
    margin-left: 2px;
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
  <li id="pu"><a href="profile2.php">Profile</a></li>
</ul>

</go>
<div>
<h1 align='center' style=' color:#660066; font: italic bold 40px Georgia, serif;'>Question & Answers posted by users</h1>
<?php		
$a=$_SESSION['usrname'];
if($k = mysql_query("SELECT `account`.`usrname`,`ques_id`,`ques_topic`,`ques`,`first_name`,`last_name` FROM `ques_bank`,`account` WHERE `ques_bank`.`usrname`=`account`.`usrname`"))
{
echo
"<table id='t'>
<tr>
<th id='a'>Question ID</th>
<th id='a'>Question Topic</th>
<th id='a'>Question</th>
<th id='a'>Name</th>
</tr>";							
while($row = mysql_fetch_array($k, MYSQL_ASSOC)) 
{
$cc="{$row['usrname']}";
$dd="{$row['ques_id']}";
echo
"<tr>
<td id='yy'>{$row['ques_id']}</td>
<td id='yy'>{$row['ques_topic']}</td>
<td id='yy'>{$row['ques']}</td>
<td id='yy'>{$row['first_name']} {$row['last_name']}</td>";




if(!($cc==$a))
{
echo "<td><a style='text-decoration: none;' href='post_ans.php'>Post your answer</a></td></tr>";
}
else
{
echo "</tr>";
}


if($w = mysql_query("SELECT `ques_id`,`ans`,`first_name`,`last_name` FROM `account`,`ans_bank` WHERE `ans_bank`.`usrname`=`account`.`usrname` and `ans_bank`.`ques_id`='$dd'"))
{
while($row1 = mysql_fetch_array($w, MYSQL_ASSOC))
{
echo "<tr>
<td>{$row1['ans']}</td>
<td>{$row1['first_name']} {$row1['last_name']}</td>
</tr>";
}
}
}
mysql_free_result($k);
}
echo "</table>";
?>
</div>
</body>
</html>