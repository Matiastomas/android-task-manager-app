<?php


/*
Delete task from database based on the received parameters received from android client
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