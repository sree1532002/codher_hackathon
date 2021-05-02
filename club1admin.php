<!DOCTYPE html>
<html>
<?php
session_start();
if(isset($_SESSION["uname"]))
{
    include "db.php";
    $query = "SELECT * FROM club1";
    $result = mysqli_query($con,$query);
?>
<head>
<link rel="icon" href="favicon.ico" type="image/icon type">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
<title>Uniclub | Club1</title>
</head>
<body>
    <h1 style ="text-align:center">Astro club</h1>
<div class="container" style = "border-style: groove;border: 3px solid #495d87;">
  <table class="table table-hover">
  <thead>
  <br>
    <tr>
    <th>S.No.</th>
      <th>Username</th>
      <th>Interested</th>
      <th>Member</th>
      <th>Idea</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $i = 1;
    while($row = mysqli_fetch_assoc($result)){
    ?>
    <tr>
    <td><?php echo $i;?></td>
      <td><?php echo $row['uname'];?></td>
      <td><?php echo $row['interested'];?></td>
      <td><?php echo $row['member'];?></td>
      <td><?php echo $row['idea'];?></td>
      <td>
          <form action = "update.php" method = "post">
                <input type = "hidden" name = "uname" value ="<?php echo $row['uname'];?>">
                <input type = "hidden" name = "clubno" value ="1">
                <td><button type="submit" class="btn btn-primary" name = "update">Accept invitation</button></td>
          </form>
    </tr>
    <?php
    $i++;
    }
    ?>
  </tbody>
</table>
</div>
</body>
</html>

<?php
mysqli_close($con);
}
else
{
    echo "<script>";
    echo "alert('Access denied');";
    echo "window.location.href='main.php';";
    echo "</script>";

}?>
