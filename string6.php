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
    $x=1;
    if($input==0){
        echo "Result is: 1" ;


    }else{
        for($i=1; $i<$input; $i++){
            $x=$x*$i;


        }
        echo "Result is:" .$x;
    }
}
?>
</body>
</html>