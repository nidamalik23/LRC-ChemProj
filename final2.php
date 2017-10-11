<!DOCTYPE html>
<link rel="stylesheet" href="style.css" />
<html>
<head>

<body background="https://pbs.twimg.com/media/DEkewQiXgAI33u2.jpg" onload="typeof google==='object'&amp;&amp;google.aft&amp;&amp;google.aft(this)" width="415" height="393" style="margin-top: 0px;" alt="Image result for la roche college instagram"></body>

<form method="post" action="final2.php">
<img class="irc_mi" src="http://www.aitp-pgh.org/wp-content/uploads/2015/02/LRC-alt-logo1.jpg" onload="typeof google==='object'&amp;&amp;google.aft&amp;&amp;google.aft(this)" width="236" height="82" style="margin-top: 156px;" alt="Related image">
<input type="hidden" name="submitted" value="true"/>
<h3> <center>La Roche College
<br> Department of Chemistry
    <br> Course Assessment Form</center></h3>
<label>
<font color="red">Course Sec:</font>
    <select name= "coursecode">
    <option value="Select a course">Select a course</option>    
    <option value="Chem1001">Chem1001 </option>
    <option value="Chem2015">Chem2015</option>
      
    </select>
    </label>
<input type = "submit" />
</form>
    </head>
</html>

<?php
  
if(isset($_POST["submitted"])){
    
include('connection.php');
$coursecode = $_POST["coursecode"];
$CourseSec = 'CourseSec';
$id='ID';
$query = "SELECT * FROM table2 WHERE '$coursecode' = $id";    
$result = mysqli_query($conn, $query) or die("error: $query");

while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
   echo"<br>ID: ";
    echo"<input id='s' type='text'  name='ID' value={$row['ID']} size='20' />";
    
   echo"<br>CourseTitle: ";
    echo"<input type='text'  name='CourseTitle' value={$row['CourseTitle']} size='20' />";
    
    echo"<br>Semester: ";
    echo"<input id='s' type='text'  name='semester' value={$row['Semester']} size='20' />";
    
    echo"Instructor: ";
      echo "<input type='text' id='' name='Instructor' value={$row['Instructor']} size='20' />";
}
}

?>