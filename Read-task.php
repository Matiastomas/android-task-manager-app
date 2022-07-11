<?php
/* 

Get task list  from  database and return to android client in json format, 

1- Get the tasks from database
2- Loop Through the database result
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