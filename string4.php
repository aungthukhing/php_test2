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
    $len=strlen($input);
    if($len>3){
        $del=substr($input,0,3);
        echo "Result:" .$del.$input.$del;
    }
}
?>
</body>
</html>
