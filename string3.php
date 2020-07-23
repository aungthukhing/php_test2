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
    $index=strlen($input)-1;
    $firchar=$input[0];
    $lastchar=$input[$index];
    $new =substr_replace($input, $firchar,$lastchar);
    $new=substr_replace($new, $lastchar,0,1);
    echo $new;
}
    ?>
    </body>
    </html>