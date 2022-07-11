<?php


// Get Parameter (task value) from android client 
 
function TaskValue( ){
    
    global $taskValue;
if(isset($_POST['taskname'])){

$taskValue = $_POST ['taskname'];
}
    
}


?>