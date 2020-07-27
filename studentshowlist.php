<!DOCTYPE html>
<html>
    <body>
        <ul>
        <li><a href="studentRegform.php">Home</a></li>
            <li><a href="studentshowlist.php">Student List</a></li>
</ul>
<?php
    $myfile = fopen("student.txt", "r") or die("Unable to open file!");

    echo "<table style='border:1px ' ; margin-top:90px;>";
    echo "<tr>";
    echo "<td style='border:1px solid'>Name</td>";
    echo "<td style='border:1px solid'>E-mail</td>";
    echo "<td style='border:1px solid'>Phone</td>";
    echo "<td style='border:1px solid'>Township</td>";
    echo "<td style='border:1px solid'>Grade</td>";
    echo "<td style='border:1px solid'>Subject</td>";
    echo "</tr>";
    $stdlist=array();
    while(!feof($myfile)) {
    echo "<tr style='border:2px solid'>";
        $st=fgets($myfile);
        if($st!=""){
            $str_arr = explode (";", $st); 
        
            $name_arr=explode("=",$str_arr[0]);
            $email_arr=explode("=",$str_arr[1]);
            $phoneno_arr=explode("=",$str_arr[2]);
            $township_arr=explode("=",$str_arr[3]);
            $grade_arr=explode("=",$str_arr[4]);
            $subject_arr=exlode("=",$str_arr[5]);
        
            $student=array($name_arr,$email_arr,$phoneno_arr,$township_arr,$grade_arr,$subject_arr);
            
                for($x=o;$x<6;$x++){
                echo "<td style='border:1px solid'>".count($stdlist)."</td>";
            }
        }

        echo "</tr>";
    }
    fclose($myfile);
    echo "</table>";
?>
</body>
</html> 