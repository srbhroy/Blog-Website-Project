<?php include "connect.php"?>
<html>
<head>
<style>
body {margin-top:0;margin-left:0;margin-right:0;margin-bottom:30px;}
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

textarea {
    width: 50%;
    height: 250px;
    padding: 12px 20px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
    resize: none;
margin-top:200px;
margin-left:50px;
}

input {
background-color: #4c004c;
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
	}
ul#up {
    list-style-type: none;
    margin:0px;
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
#tt {
    overflow: auto;
    border-left: 1px solid #555;

    list-style-type: none;
    margin-top:300px;
    padding: 0px;
    width: 5%;
    height: 30%;
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
    border: 10px solid black;
    margin-top: 0px;
    margin-bottom: 0px;
    margin-right: 50px;
    margin-left: 50px;
}
</style>
</head>		
	<body>
<go>
<header>
	<p>Quest 4 Ans</p>	
</header>
</body>
<ul id="up">
  <li id="pu"><a href="signout.php">Sign out</a></li>
  <li id="pu"><a href="home.php">Home</a></li>
</ul>
</go>
<div>
<form action="<?php $_PHP_SELF ?>" method="POST">
<select name="topic" required>
<option value="science">
       Science
</option>
<option value="arts">
Arts
</option>
<option value="food">
Food
</option>
<option value="travel">
Travel
</option>
</select>
<textarea name="ques" cols="50" rows="20" placeholder="Enter Your Question." required>
</textarea>
<input type="submit" class="button" value="Submit" name="ok"/>
</form>
</div>
</html>
<?php
if(isset($_POST['ok']))
{				$a=$_SESSION['usrname'];	
				if($i = mysql_query("INSERT INTO `ques_bank`(`ques_topic`,`ques`,`usrname`)VALUES('".$_POST['topic']."','".$_POST['ques']."','".$a."')"))
				{
							if($i)
							{
								?><script> alert('Question Posted Successfully');window.location.href = "profile2.php";</script><?php
								
							}
							else
							{
								?><script> alert('opps.....Retry');</script><?php
							}
						
				}		
}				
?>	