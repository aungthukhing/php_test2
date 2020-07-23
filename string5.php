<!DOCTYPE html>
<html>
<body>
<form method="POST" action="#">
<label>Enter String</label>
<input type="text" name="str">
<button name="button" >Submit</button>
</form>
<?php
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $input = $_REQUEST['str'];
            $firchar = strtoupper($input[0]);
            $new = substr_replace($input, $firchar, 0, 1);
            echo $new; 
        }
    ?>
    </body>
    </html>