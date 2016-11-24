<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-save']))
{
 // variables for input data
 $complete_name = $_POST['complete_name'];
 $nickname = $_POST['nickname'];
 $email = $_POST['email'];
  $address = $_POST['address'];
   $gender = $_POST['gender'];
   $cellnumber = $_POST['cellnumber'];
   $comment = $_POST['comment'];
 // variables for input data

 // sql query for inserting data into database
 $sql_query = "INSERT INTO users(first_name,last_name,user_city) VALUES('$complete_name','$nickname','$email','$address','$gender','$cellnumber','$comment')";
 // sql query for inserting data into database
 
 // sql query execution function

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CRUD Operations With PHP and MySql - By Cleartuts</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

<div id="header">
 <div id="content">
    <label>CRUD Operations With PHP and MySql - By Cleartuts</label>
    </div>
</div>
<div id="body">
 <div id="content">
    <form method="post">
    <table align="center">
    <tr>
    <td align="center"><a href="index.php">back to main page</a></td>
    </tr>
    <tr>
    <td><input type="text" name="complete_namename" placeholder="complete_nameName" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="nickname" placeholder="nickName" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="email" placeholder="email" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="gender" placeholder="gender" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="address" placeholder="address" required /></td>
    </tr><tr>
    <td><input type="text" name="cellnumber" placeholder="cellnumber" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="comment" placeholder="comment" required /></td>
    </tr>
    <tr>
    <td><button type="submit" name="btn-save"><strong>SAVE</strong></button></td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>