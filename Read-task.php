<?php

//Serve to do list tasks to android client  
// Method get

/* 

Select tasks from the database and return to android client 
as json, 

1- Get the tasks
2- Loop Through the tasks
3- Store all the task in a data structure
4- Convert the data into a json 

*/

include "database-settings/database-connection.php";
connectrDatabase();
global $result_array;

function displayTasks(){
   
    $sql = "SELECT taskname FROM TaskDetails";
    global $conn;
    $res = mysqli_query($conn, $sql);
    $result = [];
    while ($array = mysqli_fetch_array($res)) {
       
        $result[] = $array['taskname'];

}
echo json_encode($result, JSON_PRETTY_PRINT);    

    mysqli_close($conn);
    

}

displayTasks();


?>