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

// Tidak Ada Video Penambahan tentang Script Function escape() dan Function redirect()

//============= END DATABASE HELPER =============// 

//============= DASHBOARD HELPER =============// 

function getCountPosts(){
    $query = query("SELECT COUNT('*') AS 'total_artikel' FROM posts");
    confirmQuery($query);
    $count = mysqli_fetch_array($query);
    $result = $count['total_artikel'];
    return $result;
}

function getCountCategory(){
    $query = query("SELECT COUNT('*') AS 'total_category' FROM category");
    confirmQuery($query);
    $count = mysqli_fetch_array($query);
    $result = $count['total_category'];
    return $result;
}

function getCountComments(){
    $query = query("SELECT COUNT('*') AS 'total_comments' FROM comments");
    confirmQuery($query);
    $count = mysqli_fetch_array($query);
    $result = $count['total_comments'];
    return $result;
}

function getCountUsers(){
    $query = query("SELECT COUNT('*') AS 'total_users' FROM users");
    confirmQuery($query);
    $count = mysqli_fetch_array($query);
    $result = $count['total_users'];
    return $result;
}

//============= END DASHBOARD HELPER =============// 
?>