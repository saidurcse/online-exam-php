<?php

$question_id=$_POST["question_id"];
if ($question_id == NULL)
 {
   echo "Question id  is not exist in the server";	 
 }
 else
 {
	 echo "update=".$question_id;
$fqid=$_POST["question_id"];
$faid=$_POST["admin_id"];
$flid=$_POST["level_id"];
$fqset=$_POST["question_set"];
$fques=$_POST["question"];
$fans1=$_POST["answer1"];
$fans2=$_POST["answer2"];
$fans3=$_POST["answer3"];
$fans4=$_POST["answer4"];
$fcoption=$_POST["correct_option"];
     
include("config.php");
    
$sql1 = "update question set level_id=$flid,question_set=$fqset ,question='$fques' ,answer1='$fans1' ,answer2='$fans2', answer3='$fans3' ,answer4='$fans4' ,correct_option='$fcoption'  where question_id=$question_id";
$result1 = mysqli_query($con,$sql1);

 }

    //Retrieving data from dtabases
    $sql = "select * from question";
    $result = mysqli_query($con,$sql);
echo "<table  border='1'>
<tr>
<th>Q.ID</th>
<th>A.ID</th>
<th>L.ID</th>
<th>Q.SET</th>
<th>Ques</th>
<th>Ans1</th>
<th>Ans2</th>
<th>Ans3</th>
<th>Ans4</th>
<th>Coption</th>

</tr>";

while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
  {
  echo "<tr>";
  echo "<td>" . $row['question_id'] . "</td>";
  echo "<td>" . $row['admin_id'] . "</td>";
  echo "<td>" . $row['level_id'] . "</td>";
  echo "<td>" . $row['question_set'] . "</td>";
  echo "<td>" . $row['question'] . "</td>";
  echo "<td>" . $row['answer1'] . "</td>";
  echo "<td>" . $row['answer2'] . "</td>";
  echo "<td>" . $row['answer3'] . "</td>";
  echo "<td>" . $row['answer4'] . "</td>";
  echo "<td>" . $row['correct_option'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysqli_close($con);
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "Question has successfully uploaded in the server";

?>