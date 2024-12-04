<?php
array_map("htmlspecialchars", $_POST);

include_once("connection.php");
$stmt = $conn->prepare(" UPDATE tblpupilstudies  SET classposition = :classposition,  classgrade = :classgrade, exammark = :exammark, comment = :comment WHERE subjectid = :subjectid AND userid = :userid");
$stmt->bindParam(':classposition', $_POST["classposition"]);
$stmt->bindParam(':classgrade', $_POST["classgrade"]);
$stmt->bindParam(':exammark', $_POST["exammark"]);
$stmt->bindParam(':comment', $_POST["comment"]);
$stmt->bindParam(':subjectid', $_POST['subjectid']);
$stmt->bindParam(':userid', $_POST['userid']);
$stmt->execute();
header("Location: comments.php");
$conn=null;

?>