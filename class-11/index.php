<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Registration Form</title>
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
     * validation Username function
     */
    function validationUsername ($username) {
        if (preg_match('/^[0-9A-Za-z_]{5,20}$/', $username)) {
            return true;
        } else {
            return false;
        }
        
    }

    function oldvalue ($showValo) {
        if(isset($_POST[$showValo])){
            echo $_POST[$showValo];
        } else {
            echo '';    
        }
    }
    /**
     * old value Clear Function
     */
    function oldvalueClear () {
        $_POST = '';
    }

    ?>
    <!-- Function End -->

    <?php
    if (isset($_POST['submitBtn'])) {
        $userName  = $_POST['username'];
        $userEmail = $_POST['email'];
        $userPhobe = $_POST['phone'];
        $userAge = $_POST['age'];

        if (empty($userName) || empty($userEmail) || empty($userPhobe) || empty($userAge)) {
            $validationMas = validationMas('All Fild Requrid');
        } else if (validationUsername($userName) == false) {
            $validationMas = validationMas('Enter Valid Username', 'warning');
        } else if (validEmail($userEmail) == false) {
            $validationMas = validationMas('Enter Valid Email', 'warning');
        } else if (eduEmail($userEmail, ['diu.edu.bd', 'brac.edu.bd', 'nsu.edu.bd']) == false) {
            $validationMas = validationMas('Enter Valid Edu Email', 'warning');
        } else {
            $validationMas = validationMas('Everything Ok!', 'success');
            oldvalueClear();
        }
    }

    ?>
    <!-- Nave Var Start -->
    <div class="container-fluid bg-info">
        <div class="container">
            <div class="row justify-content-center">
                <nav class="navbar navbar-expand-lg navbar-light+">
                    <div class="container-fluid">
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="class.php">class Partice</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Pricing</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" >Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Nave Var End -->

    <div class="container-fluid test_color py-4">
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
                            <form method="POST" action="">
                                <div class="mb-3 form-floating">
                                    <input type="text" name="username" value=" <?php oldvalue('username') ?> "class="form-control foucas" id="floatingInput" placeholder="User Name">
                                    <label for="floatingInput" class="form-label">Username</label>
                                    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                                </div>
                                <div class="mb-3 form-floating">
                                    <input type="email" name="email"  value=" <?php oldvalue('email') ?> " class="form-control foucas" id="floatingInput" placeholder="">
                                    <label for="floatingInput" class="form-label">User Email</label>
                                </div>
                                <div class="mb-3 form-floating">
                                    <input type="text" name="age"  value=" <?php oldvalue('age') ?>" class="form-control foucas" id="floatingInputs" placeholder="User Age">
                                    <label for="floatingInputs" class="form-label">Age</label>
                                </div>
                                <div class="mb-3 form-floating">
                                    <input type="tel" name="phone"  value=" <?php oldvalue('phone') ?>" class="form-control foucas" id="floatingInput" placeholder="User Phone">
                                    <label for="floatingInput" class="form-label">User Phone</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input foucas" type="radio" name="gender" id="inlineRadio1" value="Male">
                                    <label class="form-check-label" for="inlineRadio1">Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input foucas"  type="radio" name="gender" id="inlineRadio2" value="Female">
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

                                <div class="mb-3 form-floating mt-4">
                                    <button type="submit" name="submitBtn" class="btn btn-info foucas">Submit</button>
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