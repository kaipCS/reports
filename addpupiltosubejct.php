<?php
header("Location: pupilstudies.php");
array_map("htmlspecialchars", $_POST);
include_once("connection.php");


$stmt = $conn->prepare("INSERT INTO tblpupilstudies (subjectID, userID, classposition, classgrade, exammark, comment)
VALUES (:subjectname, :student, null, null, null, null)");

$stmt->bindParam(':subjectname', $_POST["subject"]);
$stmt->bindParam(':student', $_POST["student"]);
$stmt->execute();
?>