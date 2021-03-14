<?php
 
  
   
 if(isset($_POST['number']) ||  isset($_POST['password']) || isset($_POST['repassword'])   || isset($_POST['name'])|| isset($_POST['usertype']) )
    {
		
        $number = $_POST['number'];
        $password = $_POST['password'];
        $repassword = $_POST['repassword'];
		 $name = $_POST['name'];
		 $usertype = $_POST['usertype'];
		 
       

    if($number=="" || $password=="" || $repassword=="" || $name=="" || $usertype=="" ){
		  
		  echo "Null submission";
	  }
	  else
	  {
		  if($password==$repassword)
		  {
			/* $user=[
				'username'=>$username,
				'password'=>$password,
				'email'=>$email
					]; */
			 //$_SESSION['current_user']=$user;
			 // $_SESSION['username']=$username;
			 // $_SESSION['password']=$password;
			 
		  setcookie('username',$username,time()+3600,'/');
		  setcookie('password',$password,time()+3600,'/');
		  
		  header('location:login.html');
		  }else{
			  echo "password & confirm password mismatch";
		  }
	  }
	  
	  
	  
  }
	 
	 




?>