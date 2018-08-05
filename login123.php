<?php
 
$conn = mysqli_connect("localhost:3307", "root", "","carcompare");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$ID = $_POST["email"];
$Password = $_POST["pass"]; 
 session_start(); 
   function SignIn() { 


   	$conn=$GLOBALS['conn'];
    
     if(!empty($_POST['email']))      //checking the 'user' name which is from Sign-In.html, is it empty or have some text 
     	{
     		$query=mysqli_query($conn, "SELECT * FROM user where email = '$_POST[email]' AND password = '$_POST[pass]'"); 
     	 $row = mysqli_fetch_array($query,MYSQLI_NUM);
     	 
     	 if(!empty($row[2]) AND !empty($row[3])) 
     	 	{ $_SESSION['pass'] = $row[3];
					$_SESSION['uid'] = $row[0];
					if($row[4] == 1){
						$_SESSION['logintype'] = $row[4];
					}
						
					 header('Location:home.php');
     	 	 }
     	 else 
     	 {
     	 	 header('Location:signup.html');
     	 }
     	}
   	}
    if(isset($_POST['submit'])) { 
    
    SignIn();

 	}
 	else{
 		echo "not call";
 	}
  ?>
