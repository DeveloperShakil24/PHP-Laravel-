<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .foucas:focus {
            box-shadow: none;
        }
    </style>
    <title>Class partice Form</title>
</head>

<body>
<!-- ====================================================== -->
<!-- Function Start -->
    <?php
    /**
     * Validation massage For Function
     * Paramitar= massage, alartType
     */

    function validate ($massage, $alartType="danger") {
       return "<div class=\"alert alert-{$alartType} alert-dismissible fade show\" role=\"alert\">
            {$massage}!
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
          </div>";
    }

    /**
     * validation Email Check For Valid Email Or Not Valid 
     */

    function validateEmail($email){
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        } else {
            return false;
        }
        
    }

    /**
     * Filter EduMail For Filtering institution Email Address / Filter Edu Maile
     */

    function filterEduMail($email) {
        $validemail = ['diu.edu.bd', 'brac.edu.bd', 'nsu.edu.bd'];
        $email_array = explode('@', $email, 2);
        
        if (in_array($email_array[1], $validemail)) {
            return true;
        } else {
            return false;
        }
        
    }

//<!-- Function End -->
//=====================================================

    if (isset($_POST['submit'])) {
        $Name   = $_POST['name'];
        $Email  = $_POST['email'];
        $Number = $_POST['number'];


        if (empty($Name) ||  empty($Email) || empty($Number)) {
            $validetionMsg = validate('All Fild Requred');
        } else if (validateEmail($Email) == false) {
            $validetionMsg = validate('Not valid Eamil', 'warning ');
        } else if (filterEduMail($Email) == false) {
            $validetionMsg = validate('Email is a not edu email', 'warning ');
        } else {
            $validetionMsg = validate('Everythink ok', 'success');
        }
    }


    ?>

    <div class="container-fluid mt-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="mb-2">Regestion Form</h4>
                            <?php
                            if (isset($validetionMsg)) {
                                echo $validetionMsg;
                            }
                            ?>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="">
                                <div class="mb-3 form-floating">
                                    <input type="text" name="name" class="form-control foucas" id="floatingInput" placeholder="User Name">
                                    <label for="floatingInput" class="form-label">User Name</label>
                                    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="email" name="email" class="form-control foucas" id="floatingInput" placeholder="name@example.com" required="required">
                                    <label for="floatingInput">Email</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="tel" name="number" class="form-control foucas" id="floatingInput" placeholder="phone">
                                    <label for="floatingInput">Phone</label>
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary foucas">Submit</button>
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