<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>ToDo</title>
</head>
<body>
<!-- <-----Task part-one----> 
<!-- Q-1 -->
<h3> Q-3</h3>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="text" class="form-control"  style="width:30%;" id="exampleInputPassword1"  name="username" >
  </div>
 <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
<br>
<br>
<?php 

echo"<ul>";
if(isset($_POST['submit'])){
     $title = $_POST['username'];
     echo "<li>".$title."</li>";

}
echo "</ul>";
?>

<!-- Q-2 -->
<!-- <form action="control.php" method="get">
 
<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="url" class="form-control"  style="width:30%;" id="exampleInputPassword1"  name="Password" >
  </div>

  <button type="submit" class="btn btn-primary">Go</button>

</form> -->


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>