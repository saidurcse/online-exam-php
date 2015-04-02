<?php session_start(); ?>
<?php
   $host="localhost"; // Host name 
   $username="root"; // Mysql username
   $password=""; // Mysql password  
   $db_name="online_exam"; // Database name
   $tbl_name="examdetails"; // Table name 
   
// Connect to server and select databse.
    $con=mysqli_connect($host, $username, $password,$db_name)or die("cannot   connect");

	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
  
// username and password sent from here 
  $myusername=$_POST['exam_password']; 
  

  $sql="select epassword  from $tbl_name where epassword ='$myusername' ";
  
  $result=mysqli_query($con,$sql);
  //if($result == $myusername)
  //{
  $count=mysqli_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row

  if($count==1)
 {
// store session data
  //$row = mysql_fetch_array($result);
  //$_SESSION['student_id']= $row['student_id'];
  //$_SESSION['name']= $row['name'] ;
  header("location:exam.php");
  }
  else 
  {
  header("location:checkExamPassword.php");
  }
?>
