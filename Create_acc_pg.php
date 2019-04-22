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
select {
margin-top:0px;
margin-left:80px;
    width: 15%;
    padding: 16px 20px;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f1f1f1;
}

input[type=text],input[type=email],input[type=password],input[type=number] {
    width: 45%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 15px solid #ccc;
    -webkit-transition: 0.5s;
    transition: 0.5s;
    outline: none;
}
input[type=text]:focus,input[type=email]:focus,input[type=number]:focus,input[type=password]:focus {
    border: 3px solid #4c004c;
}
input[type=submit] {
background-color: #4c004c;
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 15px 500px;
    cursor: pointer;
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
margin-top:5cm;
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
	<p><a style="text-decoration: none; color:#660066;" href="login2.php">Quest 4 Ans</a></p>	
</header>
<ul id="up">
  <li id="pu"><a href="about.php">About</a></li>
</ul>

</go>
<h1>XYZ Create Account...</h1>
<h2>Hello </h2>
<form action="<?php $_PHP_SELF ?>" method="POST">
<table id="t">
<tr>
	<th id='a'>First Name</td>
	<td align="center"><input type="text" name="First_Name" size="20" autofocus required/></td>
</tr>
<tr>
	<th id='a'>Last Name</td>
	<td align="center"><input type="text" name="Last_Name" size="20" required/></td>
</tr>
<tr>
	<th id='a'>Mobile Number</td>
	<td align="center"><input type="text" name="Mobile_number" size="20" required/></td>
</tr>
<tr>
	<th id='a'>Email ID</td>
	<td align="center"><input type="email" name="Email_ID" size="20" required/></td>
</tr>
<tr>
	<th id='a'>Username</td>
	<td align="center"><input type="text" name="Username" size="20" required/></td>
</tr>
<tr>
	<th id='a'>Password</td>
	<td align="center"><input type="password" name="Password" size="20" required/></td>
</tr>
<tr>
	<th id='a'>Re-enter Password</td>
	<td align="center"><input type="password" name="RePassword" size="20" required/></td>
</tr>
<tr>
	<th id='a'>Age</td>
	<td align="center"><input type="number" name="Age" min="5" max="100" size="20" required/></td>
</tr>
<tr>
	<th id='a'>Sex</td>
	<td align="center"><select name="Sex" required>
<option value="Male">
       Male
</option>
<option value="Female">
Female
</option>
</select></td>
</tr>
<tr>
	<th id='a'>Proffession</td>
	<td align="center"><select name="Proffession"required>
<option value="Working">
        Working
</option>
<option value="Student">
Student
</option>
</select>
</td>
</tr>
</table>
<input type="submit" value="I Confirm" name="ok"/>
</form>
</body>
</html>
<?php

if(isset($_POST['ok']))
{
$a=$_POST["First_Name"];
$b=$_POST["Last_Name"];
$c=$_POST["Mobile_number"];
$d=$_POST["Email_ID"];
$e=$_POST["Username"];
$f=$_POST["Password"];
$g=$_POST["RePassword"];
$h=$_POST["Age"];
$i=$_POST["Sex"];
$j=$_POST["Proffession"];
if($f != $g)
{
	?><script> alert('Password incorrect, type again'); window.location.href = "Create_acc_pg.php"; </script><?php		
}
else
{
	$Query=mysql_query("INSERT INTO account(`first_name`,`last_name`,`mobile_number`,`email_id`,`usrname`,`pswd`,`age`,`sex`,`proffession`)VALUES('$a','$b','$c','$d','$e','$f','$h','$i','$j')");
	if($Query==1)
	{
		?>             
                <script> alert('Registration Successfull! Now please login to continue'); window.location.href = "login2.php"; </script>
                <?php
	}
	else
	{
		echo mysql_error();
	}
	mysql_close($conn);
}
}

?>						