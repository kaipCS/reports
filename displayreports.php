<?php
include_once ("connection.php");

$stmt = $conn->prepare("
    SELECT tblusers.userid, tblusers.surname, tblpupilstudies.comment
    FROM tblusers
    INNER JOIN tblpupilstudies ON tblusers.userid = tblpupilstudies.userid
    WHERE tblusers.userid = :userid
");

$stmt->bindParam(':userid', $_POST['userid'], PDO::PARAM_INT);

$stmt -> execute();
while ($row = $stmt -> fetch(PDO::FETCH_ASSOC))
{                                                     
#print_r($row);                                                       
echo($row["surname"]. ": ". $row["comment"]."<br>");                                                                                                              
}                           
?>     