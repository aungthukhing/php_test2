<!DOCTYPE html>
<html>
<?php
$arr=array(13,4,7,19,2,3,8,10,20,14,16);
sort($arr);
foreach($arr as $k){
    echo $k. "\t";
}
echo "Large number=" .$arr[count($arr)-1];
echo "<br>";
echo "Second Large number=" .$arr[count($arr)-2];
echo "<br>";
echo "Small number=" .$arr[0];
echo "<br>";
echo "Second small number=" .$arr[1];
?>
</html>

