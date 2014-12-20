<?php session_start(); ?>
<?php
   $host="localhost"; // Host name 
   $username="saidur_saidur2"; // Mysql username
   $password="yeamin99"; // Mysql password  
   $db_name="saidur_onlineexam"; // Database name
   $tbl_name="student"; // Table name 
   
// Connect to server and select databse.
  mysql_connect("$host", "$username", "$password")or die("cannot   connect"); 
  mysql_select_db("$db_name")or die("cannot select DB");
  
// username and password sent from here 
  $myusername=$_POST['id']; 
  $mypassword=$_POST['pass']; 

  $sql="select * from $tbl_name where name='$myusername' and password='$mypassword'";
  $result=mysql_query($sql);
  $count=mysql_num_rows($result);
  $row=mysql_fetch_array($result);
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
