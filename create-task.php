<?php

/* 

Save task value/name into database based on the given parameter

*/

include "database-settings/database-connection.php";
include "get-task-value.php";
global $response; 
TaskValue();

connectrDatabase();

function saveTask($taskValue){


  $sql = "INSERT INTO taskdetails (taskname) VALUES ('$taskValue')";
global $conn; 
 if (mysqli_query($conn, $sql)) {

    echo "New record created successfully";
    $response ="Task Saved Sucessfully";
  } else {

    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    $response ="Failed to Save Task";

  }
  
  mysqli_close($conn);
  

}

saveTask($taskValue);
echo json_encode($response); 


?>