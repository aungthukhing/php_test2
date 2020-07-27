<!DOCTYPE html>
<html>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        <label>Name</label>
        <input type="text" name="name"><br><br>
        <label>Email</label>
        <input type="text" name="email"><br><br>
        <label>PhoneNo</label>
        <input type="text" name="phno"><br><br>
        <label>Township</label>
        <select id="Towm" name="towmship">
            <option value="yangon">Yangon</option>
            <option value="mandalay">mandalay</option>
            <option value="monywa">Monywa</option>
        </select><br><br>
        <label>Grade</label>
        <input type="radio" name="grade" value=Final Year>
        <label>Final Year</label>
        <input type="radio" name="grade" value=Fourth Year>
        <label>Fourth Year</label><br><br>
        <label>Subjects</label>
        <input type="checkbox" name="check[]" value=5o4>
        <label>5o4</label>
        <input type="checkbox" name="check[]" value=5o5>
        <label>5o5</label>
        <input type="checkbox" name="check[]" value=5o6>
        <label>5o6</label><br><br>
        <button name="button" value="submit">Submit</button>
    </form>
    
    
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=($_POST['name']);
    $email=($_POST['email']);
    $phoneno=($_POST['phno']);
    $township=($_POST['towmship']);
    $gde=($_POST['grade']);
    $subject=($_POST['check']);
    if(empty($subject)){
        echo "Subject is Empty";
    }
    else{
          foreach($subject as $k){
        
          }
        }
        $arr=array("Name"=>$name,"Email"=>$email,"Phoneno"=>$phoneno,"Township"=>$township,"Grade"=>$gde,"Subject"=>$subject);
            $res=json_encode($arr);
            echo $res;
        $f=fopen("studentjson.txt",'a');
        fwrite($f,$res. "\n");
        fclose($f);

}

?>