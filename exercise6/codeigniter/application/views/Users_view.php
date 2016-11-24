<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>My Home Page</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">

<script type="text/javascript">
function show_confirm(act,gotoid)
{
if(act=="Users_edit")
var r=confirm("Do you really want to edit?");
else
var r=confirm("Do you really want to delete?");
if (r==true)
{
window.location="<?php echo base_url();?>index.php/users/"+act+"/"+gotoid;
}
}
</script>
</head>

<body>
<div id="body">
	<div id="content">
		<table align="center">
			<tr>
				<td colspan="9" align="center"> <a href="<?php echo base_url();?>index.php/users/add_form">Add user here.</a></td>
			</tr>
			<tr>
				<th>Complete Name</th>
				<th>Nickname</th>
				<th>Email Address</th>
				<th>Home Address</th>
				<th>Gender</th>
				<th>Cellphone Number</th>
				<th>Comment</th>
				<th colspan="2">Operations</th>
			</tr>
			
		<?php foreach ($user_list as $u_key){ ?>

			<tr>

				<td><?php echo $u_key->complete_name; ?></td>

				<td><?php echo $u_key->nickname; ?></td>

				<td><?php echo $u_key->Email_Address; ?></td>

				<td><?php echo $u_key->Home_Address; ?></td>
				
				<td><?php echo $u_key->gender; ?></td>
				
				<td><?php echo $u_key->cellphone; ?></td>
				
				<td><?php echo $u_key->comment; ?></td>

				<td width="40" align="left" ><a href="#" onClick="show_confirm('Users_edit',<?php echo $u_key->user_id;?>)">EDIT</a></td>

				<td width="40" align="left" ><a href="#" onClick="show_confirm('delete',<?php echo $u_key->user_id;?>)">DELETE</a></td>

			</tr>

<?php }?>
			
			
		</table>
	</div>
</div>

<center>
<table >
  <tr>
    <td>Fullname</td>
    <td>Nickname</td> 
    <td>Hobbies/Interests</td>
    <td>Websites</td>
  </tr>

  <tr>
    <td class="t"> John Neil Carlos Borlongan </td>
    <td class="t"> Neil </td>
    <ul><td class="t">
	<li>Playing</li>
	<li>Guitar</li>
	<li>Singing</li>
	</td></ul>
    <td id="t">www.facebook.com/neilborlongan </td>
  </tr>
	
</table>

<h1>My favorite pet?</h1>

<p class = "a"id="one"Answer</p>

<button type="button" onclick="document.getElementById('one').innerHTML = 'My favorite pet was dog.'">Click Me!</button>


<h1>When is my birthday?</h1>

<p class ="a"id="two">Answer</p>

<button type="button" onclick="document.getElementById('two').innerHTML = 'October 10'">Click Me!</button>


<h1>Where did I grew?</h1>

<p class="a"id="three">Answer</p>

<button type="button" onclick="document.getElementById('three').innerHTML = 'In Valenzuela City.'">Click Me!</button>


<h1>My fathers name</h1>

<p class="a"id="four">Answer</p>

<button type="button" onclick="document.getElementById('four').innerHTML = 'Christopher Ola borlongan'">Click Me!</button>

<h1>My mothers name</h1>

<p class="a"id="five">Answer</p>

<button type="button" onclick="document.getElementById('five').innerHTML = 'Elsa Carlos'">Click Me!</button><br>
</center>

</body>

</html>	