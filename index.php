<?php
session_start();
include("functions.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Watchlist</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="photos/vuur.png" type="image/png">
</head>

<body>
    <div class="header">
        <h1 class="title">Mediafyr</h1>
    </div>

    <a href="add.php" class="button"> Add </a>


    <div class="content1">
        <p class="text"> Songs </p>
        <?php
           $sql = "SELECT * FROM watchlist WHERE media_type= '2'";
           $result = $conn->query($sql);
           while($row = $result->fetch(PDO::FETCH_ASSOC)){
            $watched = $row['watched'];

        echo "<div class='carts'>";
        echo "<h1>" . $row['title'] . " - " . $row['maker'] . " </h1>";
        echo "<h3>" . $row['platform'] . "</h3>";
        echo "<p>" . $row['review'] . "</p>";
        echo "<a target='_blank' href='" . $row['link'] ."'>";
        echo "<img src='" . $row['photo']."' height='200px' width='200px'>";
        echo "</a>";
        echo "<p> Listened: &nbsp";   

        if ($watched == "0"){
            echo"<td>Yes</td>";
        } else {
            echo "<td>No</td>";
        }
        echo "</div>";
        }
        ?>
    </div>


    <div class="content2">
        <p class="text"> Films </p>
        <?php
           $sql = "SELECT * FROM watchlist WHERE media_type= '3'";
           $result = $conn->query($sql);
           while($row = $result->fetch(PDO::FETCH_ASSOC)){
            $watched = $row['watched'];

        echo "<div class='carts'>";
        echo "<h1>" . $row['title'] . " - " . $row['maker'] . " </h1>";
        echo "<h3>" . $row['platform'] . "</h3>";
        echo "<p>" . $row['review'] . "</p>";
        echo "<a target='_blank' href='" . $row['link'] ."'>";
        echo "<img src='" . $row['photo']."' height='200px' width='150px'>";
        echo "</a>";
        echo "<p> Seen: &nbsp";   

        if ($watched == "0"){
            echo"<td>Yes</td>";
        } else {
            echo "<td>No</td>";
        }
        echo "</div>";
        }
        ?>
    </div>


    
    <div class="content3">
        <p class="text"> Books </p>
        <?php
           $sql = "SELECT * FROM watchlist WHERE media_type= '1'";
           $result = $conn->query($sql);
           while($row = $result->fetch(PDO::FETCH_ASSOC)){
            $watched = $row['watched'];

        echo "<div class='carts'>";
        echo "<h1>" . $row['title'] . " - " . $row['maker'] . " </h1>";
        echo "<h3>" . $row['platform'] . "</h3>";
        echo "<p>" . $row['review'] . "</p>";
        echo "<a target='_blank' href='" . $row['link'] ."'>";
        echo "<img src='" . $row['photo']."' height='200px' width='150px'>";
        echo "</a>";
        echo "<p> Read: &nbsp";   

        if ($watched == "0"){
            echo"<td>Yes</td>";
        } else {
            echo "<td>No</td>";
        }
        echo "</div>";
        }
        ?>
    </div>


</body>

</html>



<!-- 
TO DO
-scroll bar
-add page insert data with database and php
-edit button index
-edit page update data with database and php 
-->