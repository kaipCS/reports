<?php
print_r($_POST);
header("Location: subjects.php");
array_map("htmlspecialchars", $_POST);

include_once("connection.php");
$stmt = $conn->prepare("INSERT INTO tblsubjects (subjectID,subjectname,teacher)
VALUES (null,:subjectname, :teacher)");

$stmt->bindParam(':subjectname', $_POST["subjectname"]);
$stmt->bindParam('teacher', $_POST["teacher"]);
$stmt->execute();
$conn=null;

?>