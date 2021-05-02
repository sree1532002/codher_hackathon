<?php 
session_start();
include 'db.php';
$uname = $_SESSION['uname'];
$sql = "SELECT idea FROM club1";
$result = mysqli_query($con,$sql);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Login</title>

    <!--CSS Style-->
    <link rel = "stylesheet" href = "clubs.css">
  </head>
  <body>
  <div class="bg-img" class="container-fluid">
      <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#b8b5ff;">
      <div id = "p" class="float-child">
        <ul class="nav justify-content-end">
        <li class="nav-item" >
            <a class="nav-link"  id = "item" href="#about">Home</a>
          </li>
          <li class="nav-item" >
            <a class="nav-link"  id = "item" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id = "item" href="gallery.html">Clubs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id = "item" href="blog.html">Announcements</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id = "item" href="#contact">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id = "item" href="#">Logout</a>
          </li>
        </ul>
      </div>
  </div>
  <div class="card mb-3" style="max-width: 100%;">
    <div class="row no-gutters">
      <div class="col-md-4">
        <img src="Images/galaxy.jpg" class="card-img" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">Welcome to the Astronomy Club!</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <div class = "ideas">
            <div class = "card-title">We believe you've got great ideas, Share em with us.</div>
          </div>
          <div class="input-group mb-3">
          <form action = "addidea.php" method = "post">
            <div class="input-group-append container-fluid">
            <input type="text" class="form-control" name = 'idea' placeholder="Add your Idea here" aria-label="Recipient's idea" aria-describedby="basic-addon2">
           <button type="submit" class="btn btn-primary" name = "addidea"> Add</button>  
            </div>
            <div class="input-group-append">
                <input type = "hidden" name = "uname" value ="<?php echo $uname;?>">
                <input type = "hidden" name = "clubno" value ="1">
                
              </div>
          </form>
           
          </div>
          </div>
          <div class = "card-title">Here are some ideas posted by enthusiastic members</div>
          <div class="card container-fluid">
              <ul class="list-group list-group-flush">
              <div class="card-header">
                Featured Ideas</div>
              <?php
                while($row = mysqli_fetch_assoc($result)){
              ?>
                <li class  ="list-group-item"><?php echo $row['idea'];?></li>
               <?php } ?>
              </ul>
            </div>
          </div>
          <div class = "card-title">Found us interesting? Come be a part of this family!</div>
          <a href = ''><div class = "logbtn col-md-12"><button type="submit" class="btn btn-primary" name = "login">Join the club</button></div></a>
        </div>
      </div>
    </div>
  </div>
  </body>
  </html>