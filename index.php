<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="icon" href="logo.jpeg" type="image/icon type">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Uniclub | Login</title>

    <!--CSS Style-->
    <link rel = "stylesheet" href = "styling.css">
  </head>
  <body>
    <div class = "form">
        <div class = "home">
            <form action = "login_send.php" method = "post">
                <div class = "logtxt">Login</div>
                <div class="form-group">
                    <!--<label for="exampleInputEmail1">We need your Username!</label>-->
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username" name = "uname">
                </div>
                <div class="form-group pw">
                    <!--<label for="exampleInputPassword1">And Password (Dw, it's safe with us!)</label>-->
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name = "pword">
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Remember me</label>
                </div>
                <div class = "logbtn col-md-12 text-center"><button type="submit" class="btn btn-primary" name = "login">Submit</button></div>
                <div class = "signtxt">New user?  <a href = "signup.php">Signup</a></div>
            </form>
        </div>
    </div>
  </body>
</html>
