<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Submit Form</title>

    <style>
      selector .tm-image{
        transform: translateY(50%);
        z-index: 3;
        transition: ease-in-out 0.6s;
      }
      selector .datails{
        z-index: 2;
        transform: translateY( -50%);
        transition: ease-in-out 0.6s;
        opacity: 0;
      }
      selector:hover .tm-image , selector:hover .datails{
        transform: translateY(0);
        opacity: 1;
      }

    </style>

  </head>
  <body>
    <h1>Hello, world!</h1>

    <?php 
    // echo"<pre>";
    // print_r($_POST);
    
    $Name   = $_POST['Name'];
    $Email  = $_POST['Email'];
    $Number = $_POST['Number'];

    if($Name == '' || $Email == '' || $Number == ''){
      echo '<script>alert("All Fields Are Required!!")</script>';
    }else{
      echo "You Have Success Login" . "<br>";
      echo "<pre>";
      print_r($_POST);
    }

    ?>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
