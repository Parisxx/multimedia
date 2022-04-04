<?php
include("db_connect.php");


function delete($conn){
    $query = "DELETE FROM watchlist WHERE id =" . $_POST['carts_id'];
    $result = $conn->query($query);

}

function add($conn){
    // if(isset($_POST['submit']))
    // {    
        // $title= $_POST['title'];
        // $maker = $_POST['maker'];
        // $company = $_POST['company'];
        // $link = $_POST['link'];
        // $media = $_POST['media'];
        // $platform = $_POST['platform'];
        // $review = $_POST['review'];
        // $watched = $_POST['watched'];

        // $sql = "INSERT INTO watchlist (title, maker, company, link, media, platform, review, watched) VALUES ('$title','$maker','$company','$link','$media','$platform','$review','$watched')";
        // $stmt = $conn ->prepare($sql);
        // if(!$stmt){
        //     echo "<p> Succesfully added </p>";
        // } else {
        //    echo "<p> Unsuccesfully added </p>" ;
        // }

    // }

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $title= $_POST['title'];
        $maker = $_POST['maker'];
        $company = $_POST['company'];
        $link = $_POST['link'];
        $media = $_POST['media'];
        $platform = $_POST['platform'];
        $review = $_POST['review'];
        $watched = $_POST['watched'];

        $sql = "INSERT INTO watchlist (title, maker, company, link, media, platform, review, watched) VALUES ('$title','$maker','$company','$link','$media','$platform','$review','$watched')";
        $stmt = $conn ->prepare($sql);
        if(!$stmt){
            echo "<p> Succesfully added </p>";
        } else {
           echo "<p> Unsuccesfully added </p>" ;
        }
  
    } 
  
  


}

