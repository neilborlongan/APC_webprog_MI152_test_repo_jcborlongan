<?php
include_once 'dbconfig.php';

// delete condition
if(isset($_GET['delete_id']))
{
 $sql_query="DELETE FROM users WHERE user_id=".$_GET['delete_id'];
 mysqli_query($link, $sql_query);
 header("Location: $_SERVER[PHP_SELF]");
}
// delete condition
?>

<html>

<head>

<title> My Home Page </title>

<link rel="stylesheet" type="text/css" href="Css.css">

<h1><a href="mydata.php">SQL</a></h1>
<style>
#form {
	font-size: 18px;
	font-weight: bold;
	color: white;
}
.error {
	color: red;
}
table { color : white;
}

div.container {
    width: 99%;
    height: 100%;
    border: 10px solid black;
}
header, footer {
    padding: 1em;
    color:lightblue;
    background-color: black;
    clear: left;
    text-align: center;

article {
    margin-left: 170px;
    border-left: 1px solid gray;
    padding: 2em;
    overflow: hidden;
	}
	.center {
		 height: 200px;
		 width: 200px;
	}
</style>
<script type="text/javascript">
function edt_id(id)
{
 if(confirm('Sure to edit ?'))
 {
  window.location.href='edit_data.php?edit_id='+id;
 }
}
function delete_id(id)
{
 if(confirm('Sure to Delete ?'))
 {
  window.location.href='mydata.php?delete_id='+id;
 }
}
</script>
</head>
<hr>
<body style="background-image: url(bg.jpg);">
<table border="0">
  <tr>
    <th>Name</th>
    <th></th>
    <th></th>
    <th></th>
    <td>John Neil Borlongan</td>
    <th></th>
    <th></th>
    <th></th>
   </tr>
   <tr>
   </tr>
   <tr>
   </tr>
   <tr>
    <th>Nickname</th>
    <th></th>
    <th></th>
    <th></th>
    <td>Neil</td>
    <th></th>
    <th></th>
    <th></th>
   </tr>
   
   <tr>
   </tr>
   <tr>
   </tr>
   
   <tr>
    <th>Hobbies</th>
    <th></th>
    <th></th>
    <th></th>
    <td>Playing guitar<br>
    <img src="cook.jpg" style="width:400px;height:300px;" height: 200px; weight : 200px;> <br>
    </td>
    <th></th>
    <th></th>
    <th></th>
    <td>Watching movies<br>
    <img src="travel.jpg" style="width:400px;height:300px;"height: 200px; weight : 200px;> <br>
    </td>
    <th></th>
    <th></th>
    <th></th>
   </tr>
   
   <tr>
   </tr>
   <tr>
   </tr>
   
   <tr>
    <th>Interest</th>
    <th></th>
    <th></th>
    <th></th>
    <td>Mind games<br>
    <img src="discover.jpg" style="width:400px;height:300px;" height: 200px; weight : 200px;> <br>
    </td>
    <th></th>
    <th></th>
    <th></th>
    <td>Singing<br>
    <img src="learn.jpg" style="width:400px;height:300px;" height: 200px; weight : 200px;> <br>
    </td>
    <th></th>
    <th></th>
    <th></th>
   </tr>
   <tr>
   </tr>
   <tr>
   </tr>
   <tr>
    <th>Favorite Websites</th>
    <th></th>
    <th></th>
    <th></th>
    <td><a href="http://www.youtube.com"><img src="youtube.png" width="42" height="42">
    Youtube.com</a></td>
    <th></th>
    <th></th>
    <th></th>
    <td><a href="http://www.facebook.com"><img src="facebook.png" width="42" height="42">
    Facebook.com</font></td>
    <th></th>
    <th></th>
    <th></th>
    <td><a href="http://www.stackoverflow.com"><img src="sflow.png" width="42" height="42">
    Stackoverflow.com</a></td>
    <th></th>
    <th></th>
    <th></th>
   </tr>
   <tr>
   </tr>   
</table>

<h3>What was my favorite pet?</h3>	
<p id="t1" style="display:none">
<br>My favorite pet was dog.
</p>
<button type="button" onclick="document.getElementById('t1').style.display='block'">CLICK THIS!</button>

<h3>When is my birthday?</h3>	
<p id="t2" style="display:none">
<br> October 10
</p>
<button type="button" onclick="document.getElementById('t2').style.display='block'">CLICK THIS!</button>

<h3>Where did I grew?</h3>	
<p id="t3" style="display:none">
<br> In Valenzuela City.
</p>
<button type="button" onclick="document.getElementById('t3').style.display='block'">CLICK THIS!</button>

<h3>My fathers name</h3>	
<p id="t4" style="display:none">
<br> Christopher borlongan
</p>
<button type="button" onclick="document.getElementById('t4').style.display='block'">CLICK THIS!</button>

<h3>My mothers name</h3>
<p id="t5" style="display:none">
<br> Elsa Carlos
<button type="button" onclick="document.getElementById('t5').style.display='block'">CLICK THIS!</button>

<div id="form">

</div>

<center>
<div id="header">
 <div id="content">
    <label>Database</label>
    </div>
</div>
<div id="body">
 <div id="content">
    <table align="center">
    <tr>
    <th colspan="9"><a href="add_data.php">add data here.</a></th>
    </tr>
    <th>Complete Name</th>
    <th>Nickname</th>
    <th>Email Address</th>
	<th>Address</th>
	<th>Gender</th>
	<th>Cellphone Number</th>
	<th>Comment</th>
    <th colspan="2">Operations</th>
    </tr>
    <?php
 $sql_query="SELECT * FROM users";
 $result_set=mysqli_query($link, $sql_query);
 while($row=mysqli_fetch_row($result_set))
 {
  ?>
        <tr>
        <td><?php echo $row[1]; ?></td>
        <td><?php echo $row[2]; ?></td>
        <td><?php echo $row[3]; ?></td>
		<td><?php echo $row[4]; ?></td>
		<td><?php echo $row[5]; ?></td>
		<td><?php echo $row[6]; ?></td>
		<td><?php echo $row[7]; ?></td>
  <td align="center" ><a href="javascript:edt_id('<?php echo $row[0]; ?>')" ><img src="b_edit.png" align="EDIT" height="40s" width="40" /></a></td>
  <td align="center" ><a href="javascript:delete_id('<?php echo $row[0]; ?>' )"><img src="b_drop.png" align="DELETE" height="40" width="40" /></a></td>
        </tr>
        <?php
 }
 ?>
    </table>
    </div>
</div>

</center>
</body>

</html>