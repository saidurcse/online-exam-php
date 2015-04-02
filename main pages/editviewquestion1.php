<?php

session_start();

if(isset($_SESSION['admin_id']))

 echo "welcome to .......admin " . $_SESSION['admin_id'];

else

 header("location:adminlogin.php"); 

 ?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Online Exam</title>
<style type="text/css"> 
<!-- 
body  {
	font: 100% Verdana, Arial, Helvetica, sans-serif;
	background: #666666;
	margin: 0; /* it's good practice to zero the margin and padding of the body element to account for differing browser defaults */
	padding: 0;
	text-align: center; /* this centers the container in IE 5* browsers. The text is then set to the left aligned default in the #container selector */
	color: #000000;
}
.twoColFixLtHdr #container { 
	width: 780px;  /* using 20px less than a full 800px width allows for browser chrome and avoids a horizontal scroll bar */
	background: #FFFFFF;
	margin: 0 auto; /* the auto margins (in conjunction with a width) center the page */
	border: 1px solid #000000;
	text-align: left; /* this overrides the text-align: center on the body element. */
} 
.twoColFixLtHdr #header { 
	background: #DDDDDD; 
	padding: 0 10px 0 20px;  /* this padding matches the left alignment of the elements in the divs that appear beneath it. If an image is used in the #header instead of text, you may want to remove the padding. */
} 
.twoColFixLtHdr #header h1 {
	margin: 0; /* zeroing the margin of the last element in the #header div will avoid margin collapse - an unexplainable space between divs. If the div has a border around it, this is not necessary as that also avoids the margin collapse */
	padding: 10px 0; /* using padding instead of margin will allow you to keep the element away from the edges of the div */
}
.twoColFixLtHdr #sidebar1 {
	float: left; /* since this element is floated, a width must be given */
	width: 200px; /* the actual width of this div, in standards-compliant browsers, or standards mode in Internet Explorer will include the padding and border in addition to the width */
	background: #EBEBEB; /* the background color will be displayed for the length of the content in the column, but no further */
	padding: 15px 10px 15px 20px;
	margin: 10px;
	
}
.twoColFixLtHdr #mainContent { 
	margin: 0 0 0 250px; /* the left margin on this div element creates the column down the left side of the page - no matter how much content the sidebar1 div contains, the column space will remain. You can remove this margin if you want the #mainContent div's text to fill the #sidebar1 space when the content in #sidebar1 ends. */
	padding: 0 20px; /* remember that padding is the space inside the div box and margin is the space outside the div box */
} 
.twoColFixLtHdr #footer { 
	padding: 0 10px 0 20px; /* this padding matches the left alignment of the elements in the divs that appear above it. */
	background:#DDDDDD; 
} 
.twoColFixLtHdr #footer p {
	margin: 0; /* zeroing the margins of the first element in the footer will avoid the possibility of margin collapse - a space between divs */
	padding: 10px 0; /* padding on this element will create space, just as the the margin would have, without the margin collapse issue */
}
.fltrt { /* this class can be used to float an element right in your page. The floated element must precede the element it should be next to on the page. */
	float: right;
	margin-left: 8px;
}
.fltlft { /* this class can be used to float an element left in your page */
	float: left;
	margin-right: 8px;
}
.clearfloat { /* this class should be placed on a div or break element and should be the final element before the close of a container that should fully contain a float */
	clear:both;
    height:0;
    font-size: 1px;
    line-height: 0px;
}

A:link  { text-decoration: none;}
A:active  { text-decoration: none;}
A:visited { text-decoration: none;}

A:hover {color: #C0FFC0; background-color: lightslategray; text-decoration: none;}
--> 
</style><!--[if IE 5]>
<style type="text/css"> 
/* place css box model fixes for IE 5* in this conditional comment */
.twoColFixLtHdr #sidebar1 { width: 230px; }
</style>
<![endif]--><!--[if IE]>
<style type="text/css"> 
/* place css fixes for all versions of IE in this conditional comment */
.twoColFixLtHdr #sidebar1 { padding-top: 30px; }
.twoColFixLtHdr #mainContent { zoom: 1; }
/* the above proprietary zoom property gives IE the hasLayout it needs to avoid several bugs */
</style>
<![endif]--></head>

<body class="twoColFixLtHdr">

<div id="container">
  <div id="header">
    <h1>KIIT ONLINE EXAMINATION CENTER </h1>
  <!-- end #header --></div>
  <div id="sidebar1">
    <table width="207" height="291" border="0" cellpadding="2">
      <tr>
        <td width="193"><a href="registerstudent.php">Register Student</a></td>
      </tr>
      <tr>
        <td><a href="generatereport.php">Generate Report</a></td>
      </tr>
      <tr>
        <td><a href="uploadquestion.php">Upload Question</a></td>
      </tr>
      <tr>
        <td><a href="editviewquestion.php">Edit/View Question</a></td>
      </tr>
      <tr>
        <td><a href="viewaccount.php">View Account</a></td>
      </tr>
      <tr>
        <td><a href="setexam.php">Set Exam</a></td>
      </tr>
      <tr>
        <td><a href="logout.php">Logout</a></td>
      </tr>
    </table>
<!-- end #sidebar1 --></div>
  <div id="mainContent">
    <?php
	
    include("config.php");
	
	//Retrieving data from dtabases
	$qid=$_GET["question_id"];
    $sql = "select * from question where question_id=".$qid;
    $result = mysqli_query($con,$sql);

    if (!$result) {
        printf("Error: %s\n", mysqli_error($con));
        exit();
    }

    //$result = mysql_query("select * from question where question_id=".$qid);

while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
  {
?>
   <form id="form1" name="form1" method="post" action="editviewquestion2.php">
      <input type='text' id='question_id' hidden name='question_id' value="<?php echo $row["question_id"] ?>" />
        <p>
          <label>QuestionId
            <input type="text" name="question_id" id="question_id"  value="<?php echo $row["question_id"] ?>"/>
          </label>
        </p>
        <br/>
        
        
        <p>
          <label >Question        
            <input type="text" name="question" id="question" value="<?php echo $row["question"] ?>"/>
          </label>
        </p>
        <p><br/>
          <label >Answer1
            <!--<input type="radio" name="ans1" id="ans1" value="radio" />-->
            <input type="text" name="answer1" id="answer1" value="<?php echo $row["answer1"] ?>"/>
          </label>
        </p>
        <p><br/>
          
          <label >Answer2
            <!--<input type="radio" name="ans2" id="ans2" value="radio" />-->
            <input type="text" name="answer2" id="answer2" value="<?php echo $row["answer2"] ?>"/>
          </label>
        </p>
        <p><br/>
          <label >Answer3
           <!-- <input type="radio" name="ans3" id="ans3" value="radio" />-->
            <input type="text" name="answer3" id="answer3" value="<?php echo $row["answer3"] ?>"/>
          </label>
        </p>
        <p><br/>
          <label >Answer4
            <!--<input type="radio" name="ans4" id="ans4" value="radio" />-->
            <input type="text" name="answer4" id="answer4" value="<?php echo $row["answer4"] ?>"/>
          </label>
        </p>
        <p><br/>
          <label >CorrectAns
            <!--<input type="radio" name="cans" id="cans" value="radio" /> -->        
            <input type="text" name="correct_option" id="correct_option" value="<?php echo $row["correct_option"] ?>"/>
          </label>
        </p>
        <p><br/>
          <label>
          <input type="submit" name="button" id="button" value="Update" />     <!--  
          <input type="submit" name="next" id="next" value="Next" />
          <input type="submit" name="prev" id="prev" value="Prev" />-->
          <input type="reset" name="reset" id="reset" value="Reset" />
    </form>
  
  <?php 
  }
  ?>
  <!-- end #mainContent --></div>
	<!-- This clearing element should immediately follow the #mainContent div in order to force the #container div to contain all child floats --><br class="clearfloat" />
  
<!-- end #container --></div>
</body>
</html>