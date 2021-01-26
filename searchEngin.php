<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Search-Engine</title>
</head>
<body>
    
<form action="url.php" method="get">
 <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Inter your url</label>
    <input type="url" class="form-control"  style="width:30%;" id="exampleInputPassword1" name="url" >
  </div>
  <button type="submit" class="btn btn-primary">Go</button>


</form>
<?php
if(isset($_GET['url'])) {
    $URL = $_GET['url'];
    header("Location:$URL");
}

?>

</body>
</html>



