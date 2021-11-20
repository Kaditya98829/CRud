<?php
require 'config.php';

if ($con) {

    if (isset($_POST['done'])) {
        $id=$_GET['update'];
        $tit=$_POST['title'];
        $desc=$_POST['desc'];
        $q="update notes set title='$tit',description='$desc' where srno='$id'";
        $res=mysqli_query($con,$q);
        header('location:index.php');
    }

}
else
{
    echo "error";
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
     <!-- Required meta tags -->
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

    
</head>
<body>
<div class="container my-4">
          <h2>Update a note</h2>
          <form action="" method="POST">
            <div class="mb-3">
              <label for="title" class="form-label">Note Title</label>
              <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
              
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Note Description</label>
                <textarea class="form-control" id="desc"  name="desc"></textarea>
              </div>
           
            <button type="submit" name="done" class="btn btn-primary">Update</button>
            </form>
      </div>
</body>
</html>