<?php
include("db_connect.php");


function delete($conn){
    $sql = "DELETE FROM watchlist WHERE id =" . $_POST['carts_id'];
    $result = $conn->query($sql);

}

function add($conn){

    if(isset($_POST['submit']))
    {
        $title= $_POST['title'];
        $maker = $_POST['maker'];
        $link = $_POST['link'];
        $media = $_POST['media'];
        $platform = $_POST['platform'];
        $review = $_POST['review'];
        $watched = $_POST['watched'];

        $sql = "INSERT INTO watchlist (title, maker, link, media_type, platform, review, watched) VALUES ('$title','$maker','$link','$media','$platform','$review','$watched')";
        $result = $conn->query($sql);
        
  
    } 
  

}

function edit($conn){
    if(isset($_POST['submit'])){
        
        $title= $_POST['title'];
        $maker = $_POST['maker'];
        $link = $_POST['link'];
        $media = $_POST['media'];
        $platform = $_POST['platform'];
        $review = $_POST['review'];
        $watched = $_POST['watched'];

        $sql = "UPDATE watchlist SET title = " . $title . ", maker = " . $maker .", link = " . $link . ", media = " . $media . ", platform = " . $platform . " WHERE id =" . $_POST['id'] ."";
        $result = $conn->query($sql);
    }
}