<?php
 
$conn = mysqli_connect("localhost:3307", "root", "","carcompare");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 session_start(); 
//function start

 function SignIn() { 
$conn=$GLOBALS['conn'];
$ID = $_POST["email"];
$Password = $_POST["pass"]; 
$Username = $_POST["username"];
$Confirmpass = $_POST["confirmpass"]; 

if($Confirmpass==$Password){
  //unset($_SESSION['error']);
  $sql="INSERT INTO `user`(`name`, `email`, `password`, `loginType`) VALUES ('$Username', '$ID', '$Password', '0')";
  //$query=mysqli_query($conn, $sql);
  if (!mysqli_query($conn, $sql)){
    echo("Error &nbsp description: " . mysqli_error($conn));
  } 
  else{
    header('Location:login.php');
  }
}
else
{$_SESSION['error']=1;
  header('Location:signup.php');
}















}



//function end
if(isset($_POST['submit'])) { 
    
    SignIn();

  }
  else{
    echo "not call";
  }
  






  ?>
