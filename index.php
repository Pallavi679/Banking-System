<?php
require "connection.php";
include "navbar.php";
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/style.css">
  <title>Dhan Bank| Home </title>
</head>

<body>
  
  <!-- Introsection of Bank -->
  <main>
    <div class="container introsection">
      <div class="row">
        <div class="col-md-4 ">
          <h2 class="h2 ">
            <p class="heading"> Online Money Transfer</p>
          </h2>
          <div class="shortintro">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque porro, dolores corporis sint neque eos
              fuga aliquid in ut asperiores quam nihil voluptas.</p>
          </div>
          <button type="button" class="btn btn-warning aboutbtn"> <a href="#aboutbank" style="text-decoration: none;">Learn more</a> </button>
        </div>
        <div class=" offset-md-1 col-md-7">
          <img src="./images/introimg.jpg" class="img-fluid introimg">
        </div>
      </div>
    </div>
    <!-- End of Introsection of Bank -->
    <!-- About section -->
    <section class="aboutbank" id="aboutbank">
      <div class="container">
        <h2 class="h2 text-center heading">About Us</h2>
        <div class="row">
          <div class="col-md-6">
            <!-- <img src="./images/aboutimg.jpg" class="img-fluid" width="550px"> -->
            <img src="./images/aboutimg.jpg" class=" img-fluid aboutimg" alt="...">

          </div>
          <div class="col-md-6">
            <p class="aboutus">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem qui magnam molestias, voluptate labore
              sed animi sint tenetur aliquid accusamus facere minima delectus porro perspiciatis inventore, vel
              laboriosam consequuntur vero odit iusto voluptatibus consectetur esse eius rerum. Debitis non quidem vitae
              modi ratione sint repellat, odit tempora magnam nihil. Rem.
            </p>
          </div>
        </div>


      </div>
    </section>
    <!-- End of About Section -->
    <!-- Services section  -->
    <section class="services container my-5 ">
      <h2 class="h2 heading text-center">Our Services</h2>
      <div class="row">
        <div class="card-group">
          <div class="card mx-2">
            <img src="./images/Mobile bank users transferring money.jpg" class="card-img-top img-fluid servicesimg" alt="...">
            <div class="card-body">
              <h5 class="card-title">Transfer Money</h5>
              <p class="card-text">Transfer money to your friends and family easily and with security.</p>
              <a href="transfer.php" class="btn btn-warning">Click to check</a>
            </div>
          </div>
          <div class="card mx-2">
            <img src="./images/history.jpg" class="img-fluid servicesimg" alt="...">
            <div class="card-body">
              <h5 class="card-title">Transaction History</h5>
              <p class="card-text">View your transaction history of you Account.</p>
              <a href="transactionhistory.php" class="btn btn-warning">Click to check</a>
              
            </div>
            
          </div>
          
          <div class="card mx-2">
            <img src="./images/20943991.jpg" class=" img-fluid servicesimg" alt="...">
            <div class="card-body">
              <h5 class="card-title">Customers</h5>
              <p class="card-text">See to whom you can transfer the amount with security.</p>
              <a href="customers.php" class="btn btn-warning">Click to check</a>
            </div>
          </div>
        </div>
      </div>
    </section>
<!-- Services section end -->
  </main>
  <!-- Footer Section -->
 <?php
 include "footer.php";
 ?>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
</body>

</html>