<!DOCTYPE html>
<html lang="en">
<head>
  <title>Herbo Organic Farming</title>
  <link rel="icon" href="images/logo.jpeg" type="image/icon type">
  <meta charset="utf-8">
  <link rel="stylesheet" href="stylecards.css">
  <link rel="stylesheet" href="stylemain.css">
  <link rel="stylesheet" href="footer.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="container-fluid">
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
    <div id="bg">
        <h1 class="mm">About</h1>
        <div class="about">
        <p >Getting involved in an extracurricular club could be one of the highlights of your time on campus. Whether you’re a head-of-the-class, perfect-GPA, volunteers-at-the-nursing-home-on-weekends kind of student, or a stay-out-late-on-Thursday, avoid-taking-classes-on-Friday-morning, in-it-for-the-personal-growth type of student, there’s an activity out there for you. And in many cases, that club could plug you into a national network of like-minded groups, individuals, and possibly even future employers. </p>
        </div>
    </div>
    <div id="bg">
        <h1 class="mm">Clubs</h1>
    </div>
    <!-- clubs-->

    <div class="card-deck">
  
  <div class="card">
    <img class="card-img-top" src="Images/space2.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Astro Club</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="Images/tech.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Computers Club</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="Images/photography.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Photography Club</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>

  <div class="card">
    <img class="card-img-top" src="Images/cultural.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Cultural Club</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
</div>

<!-- clubs finishes -->

</div>
<div>
  <p> </p>
</div>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
<?php include "footer.php"?>
</div>
</body>
</html>
