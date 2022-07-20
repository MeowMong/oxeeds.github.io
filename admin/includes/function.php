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

function getSumAlumni(){
    $query = query("SELECT SUM(jumlah_lulusan) AS 'total_alumni' FROM alumni");
    confirmQuery($query);
    $count = mysqli_fetch_array($query);
    $result = $count['total_alumni'];
    return $result;
}

function getSumAlumniLanjut(){
    $query = query("SELECT SUM(jumlah_lanjut) AS 'total_alumni_lanjut' FROM alumni");
    confirmQuery($query);
    $count = mysqli_fetch_array($query);
    $result = $count['total_alumni_lanjut'];
    return $result;
}

function getCountGuru(){
    $query = query("SELECT COUNT('*') AS 'total_guru' FROM guru_karyawan");
    confirmQuery($query);
    $count = mysqli_fetch_array($query);
    $result = $count['total_guru'];
    return $result;
}

function getCountComments(){
    $query = query("SELECT COUNT('*') AS 'total_comments' FROM comments");
    confirmQuery($query);
    $count = mysqli_fetch_array($query);
    $result = $count['total_comments'];
    return $result;
}
//============= END DASHBOARD HELPER =============// 
?>