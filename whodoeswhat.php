<!DOCTYPE html>
<html>
<head>
    
    <title>Page title</title>
    
</head>
<body>

<h2> Who does what? </h2>
<ul>

<?php
include_once ("connection.php");
$stmt = $conn -> prepare("SELECT tblsubjects.subjectname as sn, 
tblusers.forename as fn, 
tblusers.surname as ln
FROM tblpupilstudies 
INNER JOIN tblsubjects On tblsubjects.subjectid = tblpupilstudies.subjectid
INNER JOIN tblusers On tblusers.userid=tblpupilstudies.userid");
$stmt -> execute();
while ($row = $stmt -> fetch(PDO::FETCH_ASSOC))
{                                                     
#print_r($row);                                                       
echo("<li>". $row["sn"]. ": ". $row["ln"]. "</li>");                                                                                                              
}                           
?>     
</ul>                                                                                                                                                                                         
</body>
</html>


