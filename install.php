<?php
include_once("connection.php");

$statement = $conn->prepare("DROP TABLE IF EXISTS tblusers;
CREATE TABLE tblusers 
(userid INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
gender VARCHAR(1) NOT NULL,
surname VARCHAR(20) NOT NULL,
forename VARCHAR(20) NOT NULL,
password VARCHAR(20) NOT NULL,
house VARCHAR(20) NOT NULL,
year INT(2) NOT NULL,
role TINYINT(1))");
$statement->execute ();
$statement ->closeCursor();


$statement = $conn->prepare("DROP TABLE IF EXISTS tblsubjects;
CREATE TABLE tblsubjects
CREATE TABLE TblSubjects(SubjectID INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Subjectname VARCHAR(20) NOT NULL,
Teacher VARCHAR(20) NOT NULL");
$statement->execute ();
$statement ->closeCursor();


$statement = $conn->prepare("DROP TABLE IF EXISTS tblpupilstudies;
CREATE TABLE TblPupilStudies(Subjectid INT(4),
Userid INT(4),
Classposition INT(2),
Classgrade  CHAR(1),
Exammark INT(2),
Comment TEXT,
PRIMARY KEY(Subjectid,Userid))");
$statement->execute ();
$statement ->closeCursor();

?>