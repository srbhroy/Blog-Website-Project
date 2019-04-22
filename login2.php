<?php include "connect.php"?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" media="screen" type="text/css" href="mmmm.css">
<body>
<div>
<h2>&nbsp&nbspQuest 4 Ans</h2>
<form action="<?php $_PHP_SELF ?>" method="post">
  <div class="container">
<table>
<tr>
    <td><input type="text" placeholder="Enter Username" name="username" required></td></tr>
<tr>
    <td><input type="password" placeholder="Enter Password" name="pswd" required></td>
 </tr> 
</table>  
<button type="submit" name="ok">Login</button>
<a href="create_acc_pg.php" target="_blank"><b>Not a Member?  Create Account.</b></a>
  </div>

 </div>
<footer>
  <p align="center"><b>
  Developed BY </b><a href="srbhroy5@gmail.com" target="_blank"><b>Sourabh Roy And Souradeep Roy</b></a>
  </p>
</footer>
</body>
</html>
<?php
if(isset($_POST['ok']))
{
			if($i = mysql_query("SELECT * FROM `account` WHERE usrname = '".$_POST['username']."' AND pswd = '".$_POST['pswd']."'"))
				{
							if(mysql_num_rows($i)>0)
						{		$_SESSION['usrname']=$_POST['username'];
								mysql_free_result($i);
								?><script> alert('Welcome');window.location.href = "profile2.php";</script><?php
								
							}
							else
							{
								?><script> alert('Oops! Please check your Email & passwordd!');</script><?php
							}
				}
				else
				{
					?><script> alert('Oops! Please check your Email & passwordd0!');</script><?php
					}
}										
?>		