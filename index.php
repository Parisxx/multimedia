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
    <link rel="icon" href="test.png" type="image/png">
</head>

<body>
    <div class="header">
        <h1 class="title">Mediafyr</h1>
    </div>

    <button class="button"> Add </button>

    <div class="content1">
        <p class="text"> Songs </p>
    </div>

    <div class="content2">
        <p class="text"> Films </p>
    </div>
    
    <div class="content3">
        <p class="text"> Books </p>
        <?php
           $sql = "SELECT * FROM watchlist";
           $result = $conn->query($sql);
           while($row = $result->fetch(PDO::FETCH_ASSOC)){

        echo "<div class='carts'>";
        echo "<h1>" . $row['title'] . " - " . $row['maker'] . " </h1>";
        echo "<h3>" . $row['platform'] . "</h3>";
        echo "<p>" . $row['review'] . "</p>";
        echo "<p>" . $row['media'] . "</p>";
        echo "</div>";
           }
        ?>
    </div>


</body>

</html>