<html>
<title>My Home Page</title>
<body>

<style>
body{
background-image: url("bg.jpg");
}
table{
text-align:center;
color: gray;
}
#home{
font-weight:bold;
font-size:56px;
text-align:center;
font-family: san-serif;
color: gray;
}
td{
border:3px solid;
font-size:20px;
font-family:verdana;
font-weight:bold;
color: white;
}
.t{
font-family:sans-serif;
font-weight:bold;
font-size:18px;
color: lightblue;
}
#t{
font-family:sans-serif;
font-weight:bold;
font-size:16px;
color: lightblue;
}
.a{
font-family:sans-serif;
font-weight:bold;
font-size:18px;
color: lightblue;
}
h1{
font-size:20px;
font-family:verdana;
font-weight:bold;
color: white;
background-color:black;
}
</style>



<h2 id="home">My Home Page</h2>


<center>
<table >
<th>
  <tr>
    <td>Fullname</td>
    <td>Nickname</td> 
    <td>Hobbies/Interests</td>
    <td>Websites</td>
  </tr>
</th>

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

<h1>What was my favorite pet?</h1>

<p class = "a"id="one">My answer</p>

<button type="button" onclick="document.getElementById('one').innerHTML = 'My favorite pet was dog.'">Click Me!</button>


<h1>When is my birthday?</h1>

<p class ="a"id="two">My answer</p>

<button type="button" onclick="document.getElementById('two').innerHTML = 'October 10'">Click Me!</button>


<h1>Where did I grew?</h1>

<p class="a"id="three">My answer</p>

<button type="button" onclick="document.getElementById('three').innerHTML = 'In Valenzuela City.'">Click Me!</button>


<h1>My fathers name</h1>

<p class="a"id="four">My answer</p>

<button type="button" onclick="document.getElementById('four').innerHTML = 'Christopher borlongan'">Click Me!</button>

<h1>My mothers name</h1>

<p class="a"id="five">My answer</p>

<button type="button" onclick="document.getElementById('five').innerHTML = 'Elsa Carlos'">Click Me!</button><br>
</center>

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL"; 
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Website: <input type="text" name="website" value="<?php echo $website;?>">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

</body>
</html>