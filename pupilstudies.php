<!DOCTYPE html>
<html>
<head>
    
    <title>Page title</title>
    
</head>
<body>
<form action="addpupiltosubject.php" method = "POST" >
<select name = "student">
<?php
include_once("connection.php");                                                          
$stmt = $conn -> prepare("SELECT * FROM tblusers WHERE role = 0 ORDER BY surname ASC");
$stmt -> execute();
while ($row = $stmt -> fetch(PDO::FETCH_ASSOC))
{                                                     
#print_r($row);                                                       
echo("<option value = ".$row["userd"].">". $row["forename"]. " ". $row["surname"]. "</option>");                                                                                                              
}                                                                                                                                                                                                                     

?>
</select>

<select name = "subject">
<?php
$stmt = $conn -> prepare("SELECT * FROM tbsubjects ORDER BY subjectname ASC");
$stmt -> execute();
while ($row = $stmt -> fetch(PDO::FETCH_ASSOC))
{                                                     
#print_r($row);                                                       
echo("<option value = ".$row["subjectid"].">". $row["subjectname"]. " </option>");                                                                                                              
}                                                                                                                                                                                                                     

?>
</select>


<input type="submit" value="Enter">
</form>

 
</body>
</html>
