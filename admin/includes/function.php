<?php

//============= DATABASE HELPER =============// 

function query($query){
    global $connection;
    return mysqli_query($connection, $query);
}

function query2($query)
{
    global $connection;
    $result = mysqli_query($connection, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
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

function cari($keyword){
    $query = "SELECT * FROM berita 
            INNER JOIN category_berita ON category_berita.id_category_berita = berita.berita_category_id
            WHERE berita.berita_title LIKE '%$keyword%' OR
            berita.berita_description LIKE '%$keyword%' OR
            berita.berita_author LIKE '%$keyword%' ";
    return query2($query);
}
//============= END DASHBOARD HELPER =============// 
?>