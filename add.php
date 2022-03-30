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

    <a href="index.php" class="button"> Home </a>

    <div class="content">

        <form class="form">
            <label for="title">Title:</label>
            <input type="text" name="title">
            <label for="maker">Maker:</label>
            <input type="text" name="maker">
            <br>
            <br>
            <label for="company">Company:</label>
            <input type="text" name="company">
            <br>
            <br>
            <label for="image">Image:</label>
            <input type="file" name="image" accept="image/png, image/jpeg">
            <label for="link">Link to media:</label>
            <input type="url" name="link">
            <br>
            <br>
            <label for="media"> Which media:</label>
            <select name="media">
                <option value="book">Book</option>
                <option value="song">Song</option>
                <option value="film">Film</option>
            </select>
            <br>
            <br>
            <label for="review">Review:</label>
            <input type="text" name="review">
            <br>
            <br>
            <label for="seen">Seen:</label>
            <input type="radio" name="iseen" value="yes">Yes</input>
            <input type="radio" name="iseen" value="no">No</input>
            <br>
            <br>
            <button type="button">Confirm</button>

        </form>

    </div>


</body>

</html>