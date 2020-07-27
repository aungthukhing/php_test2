<!DOCTYPE html>
<html>
    <body>
        <ul>
        <li><a href="studentjsonform.php">Home</a></li>
            <li><a href="studentjson.php">Student List</a></li>
</ul>
<?php
    $myfile = fopen("studentjson.txt", "r") or die("Unable to open file!");

    echo "<table style='border:1px ' ; margin-top:90px;>";
    echo "<tr>";
    echo "<td style='border:1px solid'>Name</td>";
    echo "<td style='border:1px solid'>E-mail</td>";
    echo "<td style='border:1px solid'>Phone</td>";
    echo "<td style='border:1px solid'>Township</td>";
    echo "<td style='border:1px solid'>Grade</td>";
    echo "<td style='border:1ox solid'>Subject</td>";
    echo "</tr>";
    while(!feof($myfile)) {

        $st=fgets($myfile);
        if($st!=""){
            $obj=json_decode($st,true);
            echo "<tr>";
            array_walk($obj,"myfunction");

            echo "</tr>";
        }
    }
    function myfunction($value,$key)
    {
        echo "<td style='border:1px solid'>".$value."</td>";
    }
    fclose($myfile);
    echo "</table>";
?>
</body>
</html> 
