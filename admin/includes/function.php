<?php

//============= DATABASE HELPER =============// 

function query($query){
    global $connection;
    return mysqli_query($connection, $query);
}

function confirmQuery($result){
    global $connection;
    if(!$result){
        die('QUERY FAILED ' . mysqli_error($connection));
    }
}

function escape($value){
    global $connection;
    return mysqli_real_escape_string($connection, $value);
}

function redirect($url){
    return header('Location: ' . $url);
}

//============= END DATABASE HELPER =============// 

//============= DASHBOARD HELPER =============// 

// function getCountPosts(){
//     $query = query("SELECT COUNT('*') AS 'total_artikel' FROM posts");
//     confirmQuery($query);
//     $count = mysqli_fetch_array($query);
//     $result = $count['total_artikel'];
//     return $result;
// }

//============= END DASHBOARD HELPER =============// 
