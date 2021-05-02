<?php
    session_start();
    include 'db.php';
    $uname = $_POST['uname'];
    $sql = "SELECT name,email FROM signup WHERE uname = '$uname'";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($result);
    $email = $row['email'];
    $name = $row['name'];
    mysqli_query($con,"insert into club1 (uname,interested) values ('$uname',1)") or die(mysqli_error());
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require 'C:\xampp\composer\vendor\autoload.php';


    $mail = new PHPMailer(true); 

    $mail->From = $email;
    $mail->FromName = $name;

    $mail->addAddress($email, $name);

    $mail->addReplyTo("collegeclubs446@gmail.com", "Reply");

    $mail->isHTML(true);

    $mail->Subject = "Thank you";
    $mail->Body = "We will contact you soon for the auditions";

    try {
        $mail->send();
        echo "<script>";
        echo "alert('Mail has been sent successfully!');";
        echo "window.location.href='index.php';";
        echo "</script>";
    } catch (Exception $e) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    }
?>