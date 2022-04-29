<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Form</title>
    <style>
        .f_focus:focus {
            box-shadow: none;
        }
    </style>
</head>

<body>
    <?php

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";

if(isset($_POST['submit'])){
    $Fast_Name = $_POST['f_name'];
    $Last_Name = $_POST['l_name'];
    $Email     = $_POST['email'];
    $Phone     = $_POST['phone'];
    $Password  = $_POST['password'];
    $Check     = $_POST['check'];

    if($Fast_Name == '' || $Last_Name == '' || $Email == '' || $Phone == '' || $Password == '' || $Check == ''){
        echo '<script>alert("All is Field Required")</script>';
    }else{
        echo "You Have Success Login" . "<br>";
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
    }
        
    
}

//============================================
    // if(isset($_POST['bac_btn'])){

    // }

    // if(isset($_POST['sunmit_btn'])){

    //     $Name   = $_POST['Name'];
    //     $Email  = $_POST['Email'];
    //     $Number = $_POST['Number'];
    
    //     if($Name == '' || $Email == '' || $Number == ''){
    //       echo '<script>alert("All Fields Are Required!!")</script>';
    //     }else{
    //       echo "You Have Success Login" . "<br>";
    //       echo "<pre>";
    //       print_r($_POST);
    //       echo "</pre>";
    //     }
    // }

    ?>



    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Practice Class-09 Form</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="index.php">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" placeholder="Name" name="Name" id="name" class="form-control f_focus">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" placeholder="Email" name="Email" id="email" class="form-control f_focus">
                            </div>
                            <div class="form-group">
                                <label for="tel">Phone Number</label>
                                <input type="tel" name="Number" placeholder="Phone Number" id="tel" class="form-control f_focus">
                            </div>
                            <div class="form-group">
                                <button name="sunmit_btn" class="btn btn-outline-info f_focus mt-2">submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- <div class="card-footer">
                        <form method="POST" action="index.php">
                            <button name="bac_btn" class="btn btn-success f_focus mt-2">Back To Home Page</button>
                        </form>
                    </div> -->
                </div>
            </div>
        </div>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>