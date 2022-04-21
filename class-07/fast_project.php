<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Fast Mini Project</title>
  </head>
  <body> 
  <?php
      $car_name = [
        ['name' => 'BMW',  'strock_qty' => '20', 'price' => '120000$'],
        ['name' => 'Rolls Royce', 'strock_qty' => 30, 'price' => '150000$'],
        ['name' => 'Toyota', 'strock_qty' => 40, 'price' => '130000$'],
        ['name' => 'Volvo', 'strock_qty' => 350, 'price' => '140000$'],
      ];

      // foreach( $car_name as $key => $car){
      //   echo ($car['name']);
      // }

  ?>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-3"></div>
      <div class="col-md-6">
    <table class="table table-bordered border-dark table-striped table-hover">
        <theah>
            <tr>
              <th>SL</th>
              <th>Name</th>
              <th>strock_qty</th>
              <th>Price</th>
            </tr>
        </theah>
        
        <tbody>
          <?php
          $total_qty = 0;
          foreach($car_name as $key => $value){
            $total_qty += $value ['strock_qty'];
          ?>
          <tr>
            <td class="text-center"><?php echo ++$key; ?></td>
            <td class="text-center"><?php echo $value['name']; ?></td>
            <td class="text-center"><?php echo $value['strock_qty']; ?></td>
            <td class="text-center"><?php echo $value['price']; ?></td>
          </tr>
          <?php } ?>
            <tr>
            <td class="text-center"><?php echo ++$key; ?></td>
            <td class="text-center"></td>
            <th >Total Qty :<?php echo $total_qty; ?></th>
            <td class="text-center"><?php ?></td>
            </tr>

        </tbody>
    </table>
      </div>
      <div class="col-md-3"></div>
    </div>
  </div>

  <?php
  $courses =[
     ['course_name' => 'Object Oriented PHP & MVC', 'author_name' => 'Shakil', 'total_enrolled' => 300, 'course_price' => 7000, 'thumnile' => '1 (1).jpg'],  
     ['course_name' => 'APIs in PHP: from Basic to Advanced', 'author_name' => 'Kamal', 'total_enrolled' => 350, 'course_price' => 5000, 'thumnile' => '1 (2).jpg'],  
     ['course_name' => 'PHP for Beginners to Inventory POS Sales Project - AdminLTE', 'author_name' => 'Azad', 'total_enrolled' => 150, 'course_price' => 5500, 'thumnile' => '1 (3).jpg'],  
  ];      
  ?>
  <div class="container my-4">
    <div class="row">
      <?php
        foreach($courses as $index => $course){
         
      ?>
      <div class="col-md-4">
        <div class="card">
            <img src="img/<?php echo $course['thumnile']; ?>" alt="Photo">
            <div class="card-header">
                <h4><?php echo $course['course_name']; ?></h4>
            </div>
            <div class="card-body">
              <p><strong>Course Author:</strong> <?php echo $course['author_name']; ?></p>
              <span>4.8</span>
            
              <span><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star-half"></i></span>
              <span>(120)</span>
              <p><strong>Course Price:</strong> <?php echo $course['course_price']; ?></p>
              <p><strong>Coucse Endrol:</strong> <?php echo $course['total_enrolled']; ?></p>
              <button type="button" class="btn btn-primary">Buy Now</button>
            </div>
        </div>
      </div>
          <?php } ?>
    </div>
  </div>



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
