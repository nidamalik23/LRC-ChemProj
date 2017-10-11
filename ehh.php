<!DOCTYPE html>
<html>  
<head>  
<title>ehh</title>
</head>
<link rel="stylesheet" type="text/css" href="css/style.css" />

  <body background="https://www.xmple.com/wallpaper/linear-red-highlight-gradient-black-2732x2048-c2-000000-ff0000-l-50-a-210-f-21.svg" onload="typeof google==='object'&amp;&amp;google.aft&amp;&amp;google.aft(this)" width="524" height="393" style="margin-top: 0px;" alt="Related image"></body>



<div id="container">
    <div id="header">
<h1>La Roche College<br>Department of Chemistry<br>Course Assessment Form</h1>
</div>
    
<img class="irc_mi" src="http://www.aitp-pgh.org/wp-content/uploads/2015/02/LRC-alt-logo1.jpg" onload="typeof google==='object'&amp;&amp;google.aft&amp;&amp;google.aft(this)" width="236" height="82" style="margin-top: 156px;" alt="Related image">
<?php include('connection.php'); ?>
    
<div id="content">
    <div id ="nav">
<h3>
    <form action="ehh.php" method="post">
    <input type="hidden" name="submitted1" value="true" />
    <select name= "coursecode" onchange ='this.form.submit()'>
    <option value="Select a Year/Sec">Select a Year/Section</option>    
    <?php while($row = mysqli_fetch_array($resultdrop)):;?>
    <option value = "<?php echo $row[0];?>"><?php echo $row[0];?></option>
    <?php endwhile;?>
    </select>
    <noscript><input type="submit" value="Submit"></noscript>  
</form>
</h3>
</div>    


<div id = "main">
<?php  
if(isset($_POST["submitted1"])){    
include('connection.php');
$coursecode = $_POST["coursecode"];
$ID = 'ID';
$query = "SELECT * FROM table2 WHERE '$coursecode' = $id";    
$result = mysqli_query($dbcon, $query) or die("error: $query");   
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
    
<?php
    
    if (isset($_POST['submitted2'])){
        
    include('connection.php');
        
    $SLOID = $_POST['SLOID'];
    $Knowledge_Base = $_POST['Knowledge_Base'];
    $Lab_Skills = $_POST['Lab_Skills'];
    $Practice = $_POST['Practice'];
    $Societal_Connects = $_POST['Societal_Connects'];
    $Capstone = $_POST['Capstone'];
    $sqlinsert = "INSERT INTO test3(SLOID, Knowledge_Base, Lab_Skills, Practice, Societal_Connects, Capstone) VALUES ('$SLOID', '$Knowledge_Base', '$Lab_Skills', '$Practice', '$Societal_Connects', '$Capstone')";
     
        if(!mysqli_query($conn,$sqlinsert)){
            die('error inserting');
        }
    }
    ?>
    <form action="ehh.php" method="post">
    <input type="hidden" name="submitted2" value="true" />
    <fieldset>
    <legend>Student Learning Outcomes (SLOs) addressed in this course (Please input Yes or No):</legend>
        <label>SLOID: <input type = text name = "SLOID" /></label>
        <label>Knowledge_Base: <input type = text name = "Knowledge_Base" /></label>
        <label>Lab_Skills: <input type = text name = "Lab_Skills" /></label><br>
        <label>Practice: <input type = text name = "Practice" /></label>
        <label>Societal_Connects: <input type = text name = "Societal_Connects" /></label>
        <label>Capstone: <input type = text name = "Capstone" /></label>
    </fieldset>
    <input type= "submit" value="Update SLO" />
    
    
</div>
</div>   
</div>
</body>