<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="style.css">
    <title>Assignments</title>
  </head>
  <body>
  <!-- Function Start -->
  <?php
  /**
   * Aleart Massage Function
   */

  function alartMsa ($massage, $alartType="danger") {
    return "<div class=\"alert alert-{$alartType} alert-dismissible fade show\" role=\"alert\">
         {$massage}!
         <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
       </div>";
 }

  /**
   * Validation Email Function
   */
  function validationEmail($email){
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
      return true;
    } else {
      return false;
    }
    
  }

  /**
   * diu.edu.bd Email Cheker
  */

  function eduEmail ($email) {
    $valideduemail = ['diu.edu.bd', 'brac.edu.bd', 'nsu.edu.bd'];
    $emailArray = explode('@', $email, 2);

    if (in_array($emailArray[1], $valideduemail)) {
      return true;
    } else {
      return false;
    }
    
  }



  ?>
  <!-- Function End -->
  <?php
  if (isset($_POST['submit'])){
  $UserName  = $_POST['UserName'];      
  $UserEmail = $_POST['UserEmail'];
  $UserPhone = $_POST['UserPhone'];
  $UserMassage = $_POST['massage'];

  if (empty($UserName) || empty($UserEmail) || empty($UserPhone) || empty($UserMassage)) {
    $validationSmg = alartMsa('All Fild Requrid', );
 
  } else if(validationEmail($UserEmail) == false) {
    $validationSmg = alartMsa('Enter Valid Email');
  } else if (eduEmail($UserEmail) == false) {
    $validationSmg = alartMsa('Enter Edu Email', 'warning');
  } else {
    $validationSmg = alartMsa('Everything is ok', 'success') ;
  }
}

  ?>

  <div class="wrapper">
    <div class="nav-bar">
      <p class="brand">Assignments Form</p>
    </div>
    <div class="box-wrapper">
     <div class="box">
      <h2>Registetion Form</h2> 
      <?php
      if(isset($validationSmg)){
        echo $validationSmg;
      }
      ?>
        <form method="POST" action="">
    
          <div>
            <input for="sagationname" type="text" name="UserName" id="name" placeholder=" ">
            <label for="sagationname">Name: </label>
          </div>
          <div>
            <input for="sagetionemail" type="text" name="UserEmail" placeholder=" " />
            <label for="sagetionemail">Ude Email </label>
          </div>
          <div>
            <input for="pno" type="text" name="UserPhone" placeholder=" ">
            <label for="pno">Phone</label>
          </div>
          <div>
            <textarea name="massage" placeholder=" "></textarea>
            <label >Message</label>
          </div>
          <input id="submit" type="submit" name="submit" value="Submit">
        </form>  
  </div>
    </div>
</div>
<footer class="footer">
   <p class="copyright"> © 2022 </p>
    <ul>
      <li> <a href="https://github.com/wandersonsc"><span class="git"> </span> </a></li>
      <li> <a href="https://twitter.com/wandersondsc"><span class='twitter'> </span> </a></li>        
  </ul>
</footer>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>
