<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Registration Frorm</title>
    <style>
        .focus_No:focus {
            box-shadow: none;
        }
        .test_form{
            background-image: linear-gradient(#7d46b8, #39add6);
        }
        .card_bg{
            background-image: linear-gradient(#2c2b69, #6d95cb);
        }
    </style>
</head>

<body>

<?php

if(isset($_POST['bac_btn'])){

}

if(isset($_POST['sunmit_btn'])){

    $Name   = $_POST['Name'];
    $Email  = $_POST['Email'];
    $Number = $_POST['Number'];

    if($Name == '' || $Email == '' || $Number == ''){
    //   echo '<script>alert("All Fields Are Required!!")</script>';
    }else{
      echo "You Have Success Login" . "<br>";
      echo "<pre>";
      print_r($_POST);
      echo "</pre>";
    }
}

//===============================
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";

// if(isset($_POST['submit'])){
//     $Fast_Name = $_POST['f_name'];
//     $Last_Name = $_POST['l_name'];
//     $Email     = $_POST['email'];
//     $Phone     = $_POST['phone'];
//     $Password  = $_POST['password'];
//     $Check     = $_POST['check'];

//     if($Fast_Name == '' || $Last_Name == '' || $Email == '' || $Phone == '' || $Password == '' || $Check == ''){
//         echo '<script>alert("All is Field Required")</script>';
//     }else{
//         echo "You Have Success Login" . "<br>";
//         echo "<pre>";
//         print_r($_POST);
//         echo "</pre>";
//     }
        
    
// }


?>

    <div class="container-fluid test_form py-5">
        <div class="container mt-4">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="card border border-light card_bg">
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8 text-center my-3">
                                <img class="rounded-circle" src="./img/3.png" alt="Logo">
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                        <div class="card-header">
                            <h4 class="mb-0 text-center text-light">Registration Form</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="class_partice_form.php">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" name="f_name" class="form-control focus_No" id="name" placeholder="Fast Name">
                                            <label for="name">Fast Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" name="l_name" class="form-control focus_No" id="l_name" placeholder="Last Name">
                                            <label for="l_name">Last Name</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="email" name="email" class="form-control focus_No" id="email" placeholder="Email">
                                    <label for="email">Email</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="tel" name="phone" class="form-control focus_No" id="Nomber" placeholder="Phone">
                                    <label for="Nomber">Phone Nomber</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" name="password" class="form-control focus_No" id="pass" placeholder="Password">
                                    <label for="pass">Password</label>
                                </div>
                                <div class="form-check mb-3">
                                    <input type="checkbox" name="check" class="form-check-input focus_No" id="check" placeholder="Password">
                                    <label for="check">I am accepting registration.</label>
                                </div>
                                <div class="form-check mb-3 me-3">
                                    <input type="Submit" name="submit" class="btn btn-info focus_No w-100">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>