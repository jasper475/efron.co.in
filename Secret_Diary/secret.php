<?php 

 if ($_POST['submit']) //enter loop if Submit button is pressed 
 	{
 		
    //check if email id is NULL, If true then throw error and if its a valid one 
 	if (!$_POST['email']) $error.="Please enter Email Id";
 		else if (!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) $error.="You must enter a valid email";
 		
 	
 	//check if password is NULL, If true then throw error and also check if its < 8 chars and has atleast Uppdet case valid one 		
 		if (!$_POST['password']) $error.="Please Enter the Password";
 		else 

 			{ 
 				if (strlen($_POST['password'])<8) $error.="Please Enter the Password atleast 8 characters";
 				if (!preg_match('`[A-Z]`', $_POST['password'])) $error.="Password must contain atleste Upper Case letter";
 			}

 	if ($error) echo "There were errors in your sign up Process :".$error;
 	else {
 		// check if there is a user exists in Database with that email ID
 		
 		$link = mysqli_connect("localhost","cl44-efrondba","nmDe3h.nV","cl44-efrondba"); // used to connect to DB
 		$query = "SELECT * FROM `USERS`"; //where emailid="'.mysqli_real_escape_string($link,$_POST['email']).'";
 		$result = mysqli_query($link,$query);
   echo $results = mysqli_num_rows($result);

 	} 


 	}

 ?>

<form  method="POST">
 	<input type="email" name="email" />
 	<input type="password" name="password"/>
 	<input type="submit" name="submit" value="Sign Up"/>
</form> 

