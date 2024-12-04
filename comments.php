<!DOCTYPE html>
<html>
<title>Comments </title>
    
</head>
<body>
    <form action="addcomments.php" method="post">
    <select name ="student">
    <?php
        include_once("connection.php");
        $stmt = $conn->prepare("SELECT * FROM tblusers WHERE role=0 ORDER BY surname ASC");
        $stmt->execute();
        while ($row =$stmt->fetch(PDO::FETCH_ASSOC))
            {
                #print_r($row);
                echo("<option value=".$row['userid'].">".$row['surname']." , ".$row['forename']."</option>"); 
            }
    ?>
    </select>
    <select name ="subject">
    <?php
        $stmt = $conn->prepare("SELECT * FROM tblsubjects ORDER BY subjectname ASC");
        $stmt->execute();
        while ($row =$stmt->fetch(PDO::FETCH_ASSOC))
            {
                #print_r($row);
                echo("<option value=".$row["subjectid"].">".$row["subjectname"]."</option>"); 
            }
    ?>
    </select>
    <br>
    Grade:<input type="number" name="classgrade"><br>
    Class position:<input type="number" name="classposition"><br>
    Exam mark:<input type="number" name="exammark"><br>
    Comment: <input type= "text" name= "comment">

    <input type="submit" value="Add comment">
</form>

</body>
</html>