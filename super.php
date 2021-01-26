<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>form using superglobal</title>
</head>
<body>
<!-- <-----Task part-one----> 
<!-- Q-1 -->
<h3> Q-1</h3>
<form action="control.php" method="get">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" style="width:30%;" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control"  style="width:30%;" id="exampleInputPassword1"  name="password" >
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<br>
<br>

<!-- Q-2 -->
<h3> Q-2</h3>
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