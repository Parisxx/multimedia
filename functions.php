<?php
include("db_connect.php");

function delete($conn){
    $query = "DELETE FROM watchlist WHERE id =" . $_POST['carts_id'];
    $result = $conn->query($query);

}