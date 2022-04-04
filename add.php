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

    <div class="content4">

    <div class="content5">
        <h1>Add a book/film/song </h1>
        <form class="form" action="/add.php" method="get">
            <label for="title">Title:</label>
            <input type="text" name="title" required autofocus>
            <label for="maker">Maker:</label>
            <input type="text" name="maker" required>
            <br>
            <br>
            <label for="company">Company:</label>
            <input type="text" name="company" required>
            <br>
            <br>
            <label for="image">Image:</label>
            <input type="file" name="image" accept="image/png, image/jpeg" required>
            <label for="link">Link to media:</label>
            <input id="link" type="url" name="link">
            <br>
            <br>
            <label for="media"> Which media:</label>
            <select name="media" required>
                <option value="book">Book</option>
                <option value="song">Song</option>
                <option value="film">Film</option>
            </select>
            <br>
            <br>
            <label maxlength="80" for="review">Review:</label>
            <br>
            <textarea name="review" cols="40" rows="5" required></textarea>
            <br>
            <br>
            <label for="seen">Seen:</label>
            <input required class="radio_color" type="radio" name="seen" value="0">Yes</input>
            <input required class="radio_color" type="radio" name="seen" value="1">No</input>
            <br>
            <br>
            <button class="button2" name="confirm" type="button">Confirm</button>
           

        </form>
</div>
    </div>


</body>

</html>