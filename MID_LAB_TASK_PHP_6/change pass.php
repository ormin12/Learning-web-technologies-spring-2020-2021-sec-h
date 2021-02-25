<?php

    if(isset  ($_POST['current']) && isset($_POST['new']) && isset($_Post['confirmnew']))
	{
	
	 if($_POST['current'] == $_POST['new']
	 {
	 echo"new password is different from current password<br>";
	 }
	 
	 if($_POST['new'] != $_POST['confirmnew'])
	 {
	 echo"new password must match with the retyped password<br>";
	 }
	 }
	 ?>
	 
<body>



	<fieldset>
	<legend>CHANGE PASSWORD</legend>
	
	<form  action="#" method="POST">
	<table>
	<tr>

	 <td>Current Password</td>
	 <td>:<input type="password" name="password" value=""/></td>
	</tr>
	<tr>
	<td>New Password</td>
	 <td>:<input type="password" name="password" value=""/></td>
	</tr>
	<tr>
	<td>Retype Password</td>
	 <td>:<input type="password" name="password" value=""/></td>
	</tr>


	<tr>
	
	
<td><input type="submit" name="submit" value="Submit"/></td>
<td></td>


</tr>

</table>
	
	
	</fieldset>


	
</form>


</body>