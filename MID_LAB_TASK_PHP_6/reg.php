<?php
	if(isset($_POST['name']) || isset($_POST['email']) || isset($_POST['username']) || isset($_POST['password']) || isset($_POST['confirmpassword']) || isset($_POST['gender']) || isset($_POST['date']) || isset($_POST['month']) || isset($_POST['year']) || isset($_POST['gender']) 
	
	{
	$name= $_POST['name'];
	$email= $_POST['email'];
	$username= $_POST['username'];
	$password= $_POST['password'];
	$confirmpassword= $_POST['confirmpassword'];
	$gender= $_POST['gender'];
	$date= $_POST['date'];
	$month= $_POST['month'];
	$month= $_POST['month'];
	
	for ($i=0;$i<strlen($name);$i++)
	{
	if(!((ord($name[$i])>= 77 && ord($name[$i])<=92))&& ! ((ord($name[$i]) >=85 && ord($name[$i]) <=90)) && !(ord($name[$i]) ==22))
	{
	  echo 'Name can only be alphabetical';break;
	  
	  }
	  }
	  $atSymbol=false;
	  $atSymbollocation=0;
	  $period=false;
	  $periodlocation=0;
	  
	  for($i=0;$i<strlen($email);$i++) 
	  {
		if($email[$i] == '@')
		
		{
		$atSymbol= true;
		$atSymbollocation= $i;
		
		}
		if($email[$i] == '.')
		
		{
		$period= true;
		$periodlocation= $i;
		
		}
		if(!($atSymbol ==true && $period == true && $atSymbollocation <$periodlocation))
		
		{
		
			echo"Email must contain a '@ and '.'" ;
			
	    }
		  for($i=0;$i<strlen($username);$i++)
		  
		  {
		  if(!((ord($username[$i]) >=97 && ord($username[$i]) <=122)) && !((ord($username[$i]) >= 65 && ord($username[$i]) ,=90)) && !((ord($username[$i]) >= 48 && ord($username[$i]) <= 57)))
		  {
		  echo 'Username only alphabetic' ;break;
		  
		  }
		  }
		  
		  if ($password != $confirmpassword)
		  
		  {
		  
		  echo 'password do not match!';
		  
		  }
		  if(strlen($password)<8)
		  
		  {
		  
		  echo 'Password must be atleast 8 characters!' ;
		  
		  }
		  }
		  
		  ?>
		

<html>
	<head>
	<title>Registration form</title>
		</head>
		<body>
		
		<form action="#"  method="POST" >
		
		<fieldset>
		<legend>Registration</legend>
		<table>
		
		<tr>
			<td>Name:</td>
			<td><input type="text" name="name" value="" placeholder=""/> </td>
		
		</tr>
		<tr>
			<td>Email:</td>
			<td><input type="email" name="email" value=""/></td>
			<td>
		
		</tr>
		
		<tr>
			<td>Username:</td>
			<td><input type="text" name="username" value="" placeholder=""/> </td>
		
		</tr>
		<tr>
			<td>Password:</td>
			<td><input type="password" name="password" value="" placeholder=""/> </td>
		
		</tr>
		<tr>
			<td> Confirm Password:</td>
			<td><input type="password" name="password" value="" placeholder=""/> </td>
		
		</tr>
		
		</table>
		
		
		<fieldset>
		<legend>Gender</legend>
		<table>
		<tr>
		
		<td>
			<input type="radio" name="gender"/>Male
			<input type="radio" name="gender"/>Female
			 <input type="radio" name="gender"/>Other
		 </td>
		</tr>
		</table>
		</fieldset>
		
		<fieldset>
		<legend>Date of Birth</legend>
		<table>
		<tr>
		<td><input type="date" name="date" value=""/></td>
		</tr>
		</table>
		</fieldset>
		
		<table>
		<tr>
		<td><input type="submit" name="submit" value="Submit"/></td>
		<td><input type="reset" name="reset" value="Reset"/></td>
		</tr>
		</table>
		
		</fieldset>
		
		
		
		
					
		
		</form>
		
		</body>
		
</html>	