<!DOCTYPE html>
<html>
<body>
<form method="POST" action="#">
<label>Enter String</label>
<input type="text" name="str">
<button name="button" >Submit</button>
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $input=$_REQUEST['str'];
    $lastch=$input[strlen($input)-1];
    echo "Input string is $input." ;
    echo "<br>";
    echo "Last Chacter is $lastch. ";
    echo "<br>";
    $new =$lastch.$input.$lastch;
    echo $new;

}
?>
</body>
</html>