<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form method="GET">
<table width="240" border="1" align="center">
  <tr>
    <td width="27">user</td>
    <td width="197">
      <label for="textfield"></label>
      <input type="text" name="user" id="textfield" />
      <label for="select"></label>
      <select name="select" id="select">
      </select>    </td>
  </tr>
  <tr>
    <td>pass</td>
    <td>
      <label for="label"></label>
      <input type="password" name="pass" id="label" />
      </td>
  </tr>
  <tr>
    <td colspan="2" align="center">
      <label for="Submit"></label>
      <input type="submit" name="login" value="login" id="Submit" />
      <label for="label2"></label>
      <input type="submit" name="INSERT" value="INSERT" id="label2" />    </td>
  </tr>
</table>
</form>
<?php
if(isset($_GET["login"]))
	{
		$user = $_GET["user"];
		$pass = $_GET["pass"];

				
			$x=0;
			$con = mysqli_connect("localhost","root","","MCA");
						$sql="select * from student where USER= '".$user."' and PASS = '".$pass."'";
			
						$result=mysqli_query($con,$sql);
						while($row=mysqli_fetch_array($result))
						{
									$x=1;
									
						}
						
						if($x==1)
						{
						echo "valid user";
						}
						else{
						echo "invalid user";
						}
						}
						
			if(isset($_GET["INSERT"]))
	{
		$user = $_GET["user"];
		$pass = $_GET["pass"];
		//echo $user;
		//echo $pass;
		$x=0;
			$con = mysqli_connect("localhost","root","","MCA");
			//echo $con;
						$sql="INSERT INTO `student`(`USER`, `PASS`) VALUES ('$user','$pass')";

 
						//echo $sql;
						mysqli_query($con,$sql);
						echo "Data has been inserted successfully";						
}
?>
</body>
</html>

