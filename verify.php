<?php

include('db.php');

 

if (isset($_GET['code'])) {

  $id = $_GET['code'];

 

$sql = "UPDATE `verification`.`users` SET is_verified='1' WHERE code =$id";

$result = mysqli_query($connection,$sql);

 

if ($result) {

    echo "Your account is verified";

  }

}

else {

  $message = "Wrong url";

}

 

?>

<!DOCTYPE html>

<html lang="en">

<head>

  <title>Bootstrap Example</title>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<body>

 

<div class="container">

  <?php

    echo $message;

  ?>

</div>

 

</body>

</html>