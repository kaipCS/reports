<!DOCTYPE html>
<html>
<head>
    
    <title>Page title</title>
    
</head>
<body>
<form action="addsubjects.php" method = "POST" >
  Subject:<input type="text" name="subjectname"><br>
  Teacher:<input type="text" name="teacher"><br>
  <input type="submit" value="subject">
</form>

<h2>Current classes</h2>
<?php
include_once ("connection.php");
$stmt = $conn -> prepare("SELECT * FROM tblsubjects");
$stmt -> execute();
while ($row = $stmt -> fetch(PDO::FETCH_ASSOC))
{                                                     
#print_r($row);                                                       
echo($row["subjectname"]. " ". $row["teacher"]. "<br>");                                                                                                              
}                           
?>   

</body>
</html>
