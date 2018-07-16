<?php

  $user='admin';
  $pass='admin';
  if(isset($_POST['login']))
  {
    if($_POST['uname']==$user)
    {
    	if($_POST['password']==$pass)
    	{    		
    	  setcookie('user',$user,time()+10);
    	  echo "<script>location.replace('http://localhost/form/home.php');</script>";
      }
    	else
    	{
    		header("location:Login.php?message=Invalid User Password");
    	}
    }  
    else {
    		header("location:Login.php?message=Invalid User Name");
    }
  }
  else 
  {
  	header("location:Login.php");
  }

?>