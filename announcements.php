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
    <!-- navigation bar-->
    
    <div class="bg-img" class="container-fluid">
      <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#b8b5ff;">
      <div id = "p" class="float-child">
        <ul class="nav justify-content-end">
        <li class="nav-item" >
            <a class="nav-link"  id = "item" href="#">Home</a>
          </li>
          <li class="nav-item" >
            <a class="nav-link"  id = "item" href="#about1">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id = "item" href="#clubs">Clubs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id = "item" href="ann.php">Announcements</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id = "item" href="#contact">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id = "item" href="logout.php">Logout</a>
          </li>
          <li class="nav-item">
            <img src="logo.jpeg" style="height:100%;width:100px;float:left;margin-left:620px">
          </li>
        </ul>
      </div>
    </div>
<!-- Section: Social newsfeed v.2 -->
<section class="my-5">

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-lg-6">

      <!-- Newsfeed -->
      <div class="mdb-feed">

        <!-- First news -->
        <div class="news">

          <!-- Label -->
          <div class="label">
            <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-1-mini.jpg" class="rounded-circle z-depth-1-half">
          </div>

          <!-- Excerpt -->
          <div class="excerpt">

            <!-- Brief -->
            <div class="brief">
              <a class="name">John Doe</a> added you as a friend
              <div class="date">1 hour ago</div>
            </div>

            <!-- Feed footer -->
            <div class="feed-footer">
              <a class="comment" data-toggle="collapse" href="#collapseExample-1" aria-expanded="false"
                aria-controls="collapseExample-1">Comment</a> &middot;
              <span>
                <a>7</a>
              </span>
              <a class="thumbs" data-toggle="tooltip" data-placement="top" title="I like it">
                <i class="fas fa-thumbs-up"></i>
              </a>
              <a class="thumbs" data-toggle="tooltip" data-placement="top" title="I don't like it">
                <i class="fas fa-thumbs-down"></i>
              </a>
              <div class="collapse" id="collapseExample-1">
                <div class="card card-body mt-1">

                  <!-- Add comment -->
                  <div class="md-form mt-1 mb-1">
                    <textarea type="text" id="form7" class="form-control md-textarea" rows="3"></textarea>
                    <label for="form7">Add comment</label>
                  </div>
                  <div class="d-flex justify-content-end">
                    <button type="button" class="btn btn-flat waves-effect" data-toggle="collapse" data-target="#collapseExample-1"
                      aria-expanded="false" aria-controls="collapseExample-1">Cancel</button>
                    <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#collapseExample-1"
                      aria-expanded="false" aria-controls="collapseExample-1">Reply</button>
                  </div>

                </div>
              </div>
            </div>
            <!-- Feed footer -->

          </div>
          <!-- Excerpt -->

        </div>
        <!-- First news -->

        <!-- Second news -->
        <div class="news">

          <!-- Label -->
          <div class="label">
            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(17)-mini.jpg" class="rounded-circle z-depth-1-half">
          </div>

          <!-- Excerpt -->
          <div class="excerpt">

            <!-- Brief -->
            <div class="brief">
              <a class="name">Anna Smith</a> added
              <a> 2 new illustrations</a>
              <div class="date">4 hours ago</div>
            </div>

            <!-- Added images -->
            <div class="added-images">
              <img src="https://mdbootstrap.com/img/Photos/Others/images/50.jpg" class="z-depth-1 rounded mb-md-0 mb-2">
              <img src="https://mdbootstrap.com/img/Photos/Others/images/52.jpg" class="z-depth-1 rounded">
            </div>

            <!-- Feed footer -->
            <div class="feed-footer">
              <a class="comment" data-toggle="collapse" href="#collapseExample-2" aria-expanded="false"
                aria-controls="collapseExample-2">Comment</a> &middot;
              <span>
                <a>31</a>
              </span>
              <a class="thumbs" data-toggle="tooltip" data-placement="top" title="I like it">
                <i class="fas fa-thumbs-up"></i>
              </a>
              <a class="thumbs" data-toggle="tooltip" data-placement="top" title="I don't like it">
                <i class="fas fa-thumbs-down"></i>
              </a>
              <div class="collapse" id="collapseExample-2">
                <div class="card card-body mt-1">

                  <!-- Add comment -->
                  <div class="md-form mt-1 mb-1">
                    <textarea type="text" id="form7" class="form-control md-textarea" rows="3"></textarea>
                    <label for="form7">Add comment</label>
                  </div>
                  <div class="d-flex justify-content-end">
                    <button type="button" class="btn btn-flat waves-effect" data-toggle="collapse" data-target="#collapseExample-2"
                      aria-expanded="false" aria-controls="collapseExample-2">Cancel</button>
                    <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#collapseExample-2"
                      aria-expanded="false" aria-controls="collapseExample-2">Reply</button>
                  </div>

                </div>
              </div>
            </div>
            <!-- Feed footer -->

          </div>
          <!-- Excerpt -->

        </div>
        <!-- Second news -->

        <!-- Third news -->
        <div class="news">

          <!-- Label -->
          <div class="label">
            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(9)-mini.jpg" class="rounded-circle z-depth-1-half">
          </div>

          <!-- Excerpt -->
          <div class="excerpt">

            <!-- Brief -->
            <div class="brief">
              <a class="name">Danny Moore</a> added you as a friend
              <div class="date">7 hours ago</div>
            </div>

            <!-- Feed footer -->
            <div class="feed-footer">
              <a class="comment" data-toggle="collapse" href="#collapseExample-3" aria-expanded="false"
                aria-controls="collapseExample-3">Comment</a> &middot;
              <span>
                <a>12</a>
              </span>
              <a class="thumbs" data-toggle="tooltip" data-placement="top" title="I like it">
                <i class="fas fa-thumbs-up"></i>
              </a>
              <a class="thumbs" data-toggle="tooltip" data-placement="top" title="I don't like it">
                <i class="fas fa-thumbs-down"></i>
              </a>
              <div class="collapse" id="collapseExample-3">
                <div class="card card-body mt-1">

                  <!-- Add comment -->
                  <div class="md-form mt-1 mb-1">
                    <textarea type="text" id="form7" class="form-control md-textarea" rows="3"></textarea>
                    <label for="form7">Add comment</label>
                  </div>
                  <div class="d-flex justify-content-end">
                    <button type="button" class="btn btn-flat waves-effect" data-toggle="collapse" data-target="#collapseExample-3"
                      aria-expanded="false" aria-controls="collapseExample-3">Cancel</button>
                    <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#collapseExample-3"
                      aria-expanded="false" aria-controls="collapseExample-3">Reply</button>
                  </div>

                </div>
              </div>
            </div>
            <!-- Feed footer -->

          </div>

        </div>
        <!-- Third news -->

        <!-- Fourth news -->
        <div class="news">

          <!-- Label -->
          <div class="label">
            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(18)-mini.jpg" class="rounded-circle z-depth-1-half">
          </div>

          <!-- Excerpt -->
          <div class="excerpt">
            <!-- Brief -->
            <div class="brief">
              <a class="name">Lili Rose</a> posted on his page
              <div class="date">2 days ago</div>
            </div>
            <!-- Added text -->
            <div class="added-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero inventore,
              iste quas libero eius? Vitae sint neque animi alias sunt dolor, accusantium ducimus, non placeat
              voluptate.</div>
            <!-- Feed footer -->
            <div class="feed-footer">
              <a class="comment" data-toggle="collapse" href="#collapseExample-4" aria-expanded="false"
                aria-controls="collapseExample-4">Comment</a> &middot;
              <span>
                <a>25</a>
              </span>
              <a class="thumbs" data-toggle="tooltip" data-placement="top" title="I like it">
                <i class="fas fa-thumbs-up"></i>
              </a>
              <a class="thumbs" data-toggle="tooltip" data-placement="top" title="I don't like it">
                <i class="fas fa-thumbs-down"></i>
              </a>
              <div class="collapse" id="collapseExample-4">
                <div class="card card-body mt-1">
                  <!-- Add comment -->
                  <div class="md-form mt-1 mb-1">
                    <textarea type="text" id="form7" class="form-control md-textarea" rows="3"></textarea>
                    <label for="form7">Add comment</label>
                  </div>
                  <div class="d-flex justify-content-end">
                    <button type="button" class="btn btn-flat waves-effect" data-toggle="collapse" data-target="#collapseExample-4"
                      aria-expanded="false" aria-controls="collapseExample-4">Cancel</button>
                    <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#collapseExample-4"
                      aria-expanded="false" aria-controls="collapseExample-4">Reply</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!-- Fourth news -->

        <!-- Fifth news -->
        <div class="news">

          <!-- Label -->
          <div class="label">
            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(20)-mini.jpg" class="rounded-circle z-depth-1-half">
          </div>

          <!-- Excerpt -->
          <div class="excerpt mb-0">

            <!-- Brief -->
            <div class="brief">
              <a class="name">Kate Harrison</a> added
              <a> 2 new photos</a> of you
              <div class="date">3 days ago</div>
            </div>

            <!-- Added images -->
            <div class="added-images">
              <img src="https://mdbootstrap.com/img/Photos/Others/images/81.jpg" class="z-depth-1 rounded mb-md-0 mb-2">
              <img src="https://mdbootstrap.com/img/Photos/Others/images/86.jpg" class="z-depth-1 rounded">
            </div>

            <!-- Feed footer -->
            <div class="feed-footer">
              <a class="comment" data-toggle="collapse" href="#collapseExample-5" aria-expanded="false"
                aria-controls="collapseExample-5">Comment</a> &middot;
              <span>
                <a>47</a>
              </span>
              <a class="thumbs" data-toggle="tooltip" data-placement="top" title="I like it">
                <i class="fas fa-thumbs-up"></i>
              </a>
              <a class="thumbs" data-toggle="tooltip" data-placement="top" title="I don't like it">
                <i class="fas fa-thumbs-down"></i>
              </a>
              <div class="collapse" id="collapseExample-5">
                <div class="card card-body mt-1">

                  <!-- Add comment -->
                  <div class="md-form mt-1 mb-1">
                    <textarea type="text" id="form7" class="form-control md-textarea" rows="3"></textarea>
                    <label for="form7">Add comment</label>
                  </div>
                  <div class="d-flex justify-content-end">
                    <button type="button" class="btn btn-flat waves-effect" data-toggle="collapse" data-target="#collapseExample-5"
                      aria-expanded="false" aria-controls="collapseExample-5">Cancel</button>
                    <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#collapseExample-5"
                      aria-expanded="false" aria-controls="collapseExample-5">Reply</button>
                  </div>

                </div>
              </div>
            </div>
            <!-- Feed footer -->

          </div>
          <!-- Excerpt -->

        </div>
        <!-- Fifth news -->

      </div>
      <!-- Newsfeed -->

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</section>
<!-- Section: Social newsfeed v.2 -->
</body>