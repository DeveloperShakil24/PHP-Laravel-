<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Class Partice</title>
</head>

<body>
    <!-- Function Start -->
    <?php
    /**
     * Validation Massage Function
     */

    function validationMas($massage, $alartType = "danger")
    {
        return "<div class=\"alert alert-{$alartType} alert-dismissible fade show\" role=\"alert\">
    {$massage}!
    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
  </div>";
    }

    /**
     * Valid Email Check Function
     */
    function validEmail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Edu Email Cheker Function
     */
    function eduEmail($email, $eduEmail)
    {
        // $eduEmail = ['diu.edu.bd', 'brac.edu.bd', 'nsu.edu.bd'];
        $email_arr = explode('@', $email, 2);

        if (in_array($email_arr[1], $eduEmail)) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Age Calcloter Function
     */

    function ageCal($age)
    {
        if ($age < 18 || $age > 60) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Validation User Name Regular Expression
     */

    function validationUsername($username)
    {
        //\w => 0-9A-Za-z_
        if (preg_match('/^[0-9A-Za-z_]{5,20}$/', $username)) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Fild Old Value Show / Keep
     */
    function oldValue($oldvalue)
    {
        if (isset($_POST[$oldvalue])) {
            echo $_POST[$oldvalue];
        } else {
            echo '';
        }
    }

    /**
     * File Success After Don't Show
     */

    function successValo()
    {
        $_POST = '';
    }

    /**
     * Data Show Function 
     */
    // function shoData ($showValo) {
    //     if(isset($_POST[$showValo])){
    //         $userName  = $_POST['userName'];
    //     }
    // }

    ?>
    <!-- Function End -->
    <?php
    if (isset($_POST['submitBtn'])) {
        $userName  = $_POST['userName'];
        $userEmail = $_POST['email'];
        $userPhobe = $_POST['phone'];
        $userAge   = $_POST['age'];

        $gender    = '';
        if (isset($_POST['gender'])) {
            $gender    = $_POST['gender'];
        }

        $userAgree    = '';
        if (isset($_POST['agree'])) {
            $userAgree    = $_POST['agree'];
        }

        if (empty($userName) || empty($userEmail) || empty($userPhobe) || empty($userAge) || empty($userAge) || empty($gender) || empty($userAgree)) {
            $validationMas = validationMas('All Fild Requrid');
        } else if (validationUsername($userName) == false) {
            $validationMas = validationMas('Enter Valid User Name', 'warning');
        } else if (validEmail($userEmail) == false) {
            $validationMas = validationMas('Enter Valid Email', 'warning');
        } else if (eduEmail($userEmail, ['diu.edu.bd', 'brac.edu.bd', 'nsu.edu.bd']) == false) {
            $validationMas = validationMas('Enter Valid Edu Email', 'warning');
        } else if (ageCal($userAge)
            /** < 18 || $userAge > 60 */
        ) {
            $validationMas = validationMas('You are not for the perfect course', 'warning');
        } else if ($userAgree != 'Yes') {
            $validationMas = validationMas('Please agree terms and conditions', 'warning');
        } else {
            $validationMas = validationMas('Everything Ok!', 'success');
            //echo successValo();
        }
    }

    ?>

<!-- Nave Var Start -->
<div class="container-fluid bg-dark">
        <div class="container">
            <div class="row justify-content-center">
                <nav class="navbar navbar-expand-lg navbar-light text-light">
                    <div class="container-fluid">
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active text-light" href="index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="class.php">class Partice</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="#">Pricing</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="#" >Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Nave Var End -->

    <div class="container-fluid">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 mt-4">
                    <div class="card">
                        <div class="card-header">
                            <h4>Regestion Form</h4>
                            <?php
                            if (isset($validationMas)) {
                                echo $validationMas;
                            }
                            ?>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="" enctype="multipart/form-data">
                                <div class="mb-3 form-floating">
                                    <input type="text" value="<?php oldValue('userName')
                                                                /**if(isset($_POST['userName'])){echo $_POST['userName'];} else{'';};*/
                                                                ?>" name="userName" class="form-control foucas" id="floatingInput" placeholder="User Name">
                                    <label for="floatingInput" class="form-label">Username</label>
                                    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                                </div>
                                <div class="mb-3 form-floating">
                                    <input type="text" name="email" value="<?php oldValue('email');
                                                                            /**if (isset($_POST['email'])) {echo $_POST['email'];} else{'';};*/  ?>" class="form-control foucas" id="floatingInput" placeholder="User Name">
                                    <label for="floatingInput" class="form-label">User Email</label>
                                </div>
                                <div class="mb-3 form-floating">
                                    <input type="text" name="age" value="<?php oldValue('age');
                                                                            /**if(isset($_POST['age'])){echo $_POST['age'];} else{'';};*/ ?>" class="form-control foucas" id="floatingInput" placeholder="User Name">
                                    <label for="floatingInput" class="form-label">Age</label>
                                </div>
                                <div class="mb-3 form-floating">
                                    <input type="tel" name="phone" value="<?php oldValue('phone');
                                                                            /** if(isset($_POST['phone'])) {echo $_POST['phone'];} else{'';}; */ ?>" class="form-control foucas" id="floatingInput" placeholder="User Name">
                                    <label for="floatingInput" class="form-label">User Phone</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input foucas" type="radio" name="gender" id="inlineRadio1" value="Male">
                                    <label class="form-check-label" for="inlineRadio1">Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input foucas" type="radio" name="gender" id="inlineRadio2" value="Female">
                                    <label class="form-check-label" for="inlineRadio2">Female</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input foucas" type="radio" name="gender" id="inlineRadio3" value="Other">
                                    <label class="form-check-label" for="inlineRadio3">Other</label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input foucas" name="agree" type="checkbox" value="Yes" id="flexCheck">
                                    <label class="form-check-label" for="flexCheck">
                                        Are You Agree
                                    </label>
                                </div>



                                <div class="mb-2 mt-4 form-floating">
                                    <button type="submit" name="submitBtn" class="btn btn-info foucas">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Show Value Start -->
                <!-- <div class="col-md-6 mt-4">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="mb-0">Registration Form Data Show</h4>
                        </div>
                        <div class="card-body">
                            <span><strong>Userame: </strong> <?php //echo oldValue('userName'); 
                                                                ?> </span><br>
                            <span><strong>Email:</strong> <?php //echo oldValue('email'); 
                                                            ?> </span><br>
                            <span><strong>Phone:</strong> <?php //echo oldValue('age'); 
                                                            ?> </span><br>
                            <span><strong>Age:</strong> <?php //echo oldValue('phone'); 
                                                        ?> </span><br>
                            <span><strong>Gender:</strong> <?php //oldValue('gender');  
                                                            ?> </span>
                        </div>
                    </div>
                </div> -->
                <!-- Show Value End -->
            </div>
        </div>
    </div>


    <div class="container-fluid mt-5">
        <div class="container">
            <div class="row justify-content-center">

            </div>
        </div>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>