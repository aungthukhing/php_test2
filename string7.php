<!DOCTYPE html>
<html>
    <body>

        <?php
    
            for($x=0; $x<100; $x++){
                if(strlen((string)$x)<2){
                    echo "0";
                    echo $x;
                    echo ",";
                    echo "\t";
                }
                else{
                    echo $x;
                    echo ",";
                    echo "\t";
                }  
            }
        ?>
    </body>
</html> 