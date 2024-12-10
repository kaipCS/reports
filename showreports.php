<!DOCTYPE html>
<html>
<head>
    
    <title>Page title</title>
    
</head>
<body>

<form action="displayreports.php" method="POST">
    <select name ="userid">
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
    <input type="submit" value="Show reports">
</form>

                                                                                                                                                                                       
</body>
</html>


