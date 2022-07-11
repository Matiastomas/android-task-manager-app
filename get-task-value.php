<?php
 
function TaskValue( ){
    
    global $taskValue;
if(isset($_POST['taskname'])){

$taskValue = $_POST ['taskname'];
}
    
}


?>