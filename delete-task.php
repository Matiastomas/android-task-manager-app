<?php

//Delete tasks from database based on parameter received from android client  
// Method Posts

/* 

1- Get Parameter
2- Delete task from database based on the received parameter
s
*/

include "database-settings/database-connection.php";
include "get-task-value.php";

TaskValue();
connectrDatabase();
function deleteTask($taskValue){
   
    $sql = "DELETE FROM TaskDetails WHERE taskname = '$taskValue'";
    global $conn;
    if (mysqli_query($conn, $sql)) {
      echo "Record deleted successfully";
    } else {
      echo "Error deleting record: " . mysqli_error($conn);
    }
    
    mysqli_close($conn);
}


deleteTask($taskValue);



?>