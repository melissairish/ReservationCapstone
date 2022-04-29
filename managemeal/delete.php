<?php

include('../includes/dbcon.php');


if (isset($_POST['del'])) {
    $id = $_POST['id'];
    
    $sql = "DELETE FROM pmenu WHERE id = '$id'";
    $result = mysqli_query($con, $sql);

    if($result) {
        header("location:combomeal.php");
    }
}
?>