<?php session_start(); ?>
<?php
   $host="localhost"; // Host name 
   $username="root"; // Mysql username
   $password=""; // Mysql password  
   $db_name="online_exam"; // Database name
   $tbl_name="student"; // Table name 
   
// Connect to server and select databse.
    $con=mysqli_connect($host, $username, $password,$db_name)or die("cannot   connect");

	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
  
  // username and password sent from here 
  $myusername=$_POST['id']; 
  $mypassword=$_POST['pass']; 
  
  $sql="select * from $tbl_name where name='$myusername' and password='$mypassword'";
  $result=mysqli_query($con,$sql);
  $count=mysqli_num_rows($result);

  $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
// If result matched $myusername and $mypassword, table row must be 1 row

  if($count==1 && $row['appeared']==0)
  {
// store session data
  //$row = mysql_fetch_array($result);
  $_SESSION['student_id']= $row['student_id'];
  $_SESSION['name']= $row['name'] ;
  header("location:checkExamPassword.php");
  }
  else 
  {
  header("location:studentlogin.php");
  }
?>
