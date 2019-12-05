<?php
session_start();
require('connect.php');

function dd($value){
    echo "<pre>", print_r($value,true), "</pre>";
    die();
}

function selectAll($table, $conditions =[]){
    global $conn;
    $sql = "select * from $table";
    
    if(empty($conditions)){
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;
    }
}


//function create($table, $data){
//    global $conn;
//    $sql = "insert into $table () values ()";
//}

$users = selectAll('Customer');
//dd($users);

    
?>
