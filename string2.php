<!DOCTYPE html>
<html>
<body>
<form method="POST" action="#">
<label>Enter String</label>
<input type="text" name="str"><br>
<label>Enter char position delete</label>
<input type="number" name="position"><br>
<button name="button" >Submit</button>
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $input=$_REQUEST['str'];
    $position=$_REQUEST['position'];
    $new= substr_replace($input," ", $position,-1);
    echo $new;
}
    ?>
    </body>
    </html>