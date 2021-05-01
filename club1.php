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
  <div class = "welcome">Welcome to the Astronomy Club!</div>
  <div class="container-fluid grid">
  <div class="row">
    <div class="col-md-6 gridimg">
    </div>
    <div class="col-md-6">
      One of two columns
    </div>
   </div>
  </div> 
  <div class="form-group">
  <label for="Text">Text:</label>
  <textarea class="form-control" rows="5" id="comment"></textarea>
  </div>
  <div class = "logbtn col-md-12 text-center"><button type="submit" class="btn btn-primary" name = "login"><a href="">Link</a></button></div>
  </body>
  </html>