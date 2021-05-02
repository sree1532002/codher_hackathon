<?php
if(isset($_POST['addann'])){
    session_start();
    include('db.php');
    $ann = $con->real_escape_string($_POST['ann']);
    $ann = stripcslashes($ann);
    $sql = "INSERT INTO ann (feed) VALUES ('$ann')";
    if(mysqli_query($con, $sql)){
        echo "<script>";
        echo "alert('Announcement added');";
        echo "window.location.href='main.php';";
        echo "</script>";
        }
        else{
            echo "Error: " . $sql . "<br>" . $con->error;
        }
}
else{
    echo "<script>";
    echo "alert('Access denied');";
    echo "window.location.href='main.php';";
    echo "</script>";
}
?>