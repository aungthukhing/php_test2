<!DOCTYPE html>
<html>
<body>
<?php
echo " Divided by 3";
echo "<br>";
$i=1;
while ($i<=100){
    if($i%3==0){
        $i++;
    }
    echo $i."\t";
    $i++;
}
?>
</body>
</html>