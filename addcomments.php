<?php
print_r($_POST);
header("Location: comments.php");
array_map("htmlspecialchars", $_POST);

include_once("connection.php");
$stmt = $conn->prepare(" UPDATE tblpupilstudies  SET classposition = :classposition,  classgrade = :classgrade, exammark = :exammark, comment = :comment WHERE subjectid = :subjectid, userid = :userid");

$stmt->bindParam(':classposition', $_POST["classposition"]);
$stmt->bindParam(':classgrade', $_POST["classgrade"]);
$stmt->bindParam(':exammark', $_POST["exammark"]);
$stmt->bindParam(':comment', $_POST["comment"]);
$stmt->execute();
$conn=null;

?>