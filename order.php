<!DOCTYPE html>
<html>
  <head>
    <title>Order Now</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet"
    </head>
    <body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">KOHLI HANDLOOM</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="products.php">Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
              </li>
              
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search Products" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Go</button>
            </form>
          </div>
        </div>
      </nav>

<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$itemcode = $_POST['itemcode'];
$numberitems = $_POST['itemnumbers'];
      
      // Connecting to the Database
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "orderinfo";

      // Create a connection
      $conn = mysqli_connect($servername, $username, $password, $database);
      // Die if connection was not successful
      if (!$conn){
          die("Sorry we failed to connect: ". mysqli_connect_error());
      }
      else{ 
        // Submit these to a database
        // Sql query to be executed 
        $sql = "INSERT INTO `orderinfo` (`name`, `email`, `address`, `itemcode`, `numberitems`) VALUES ('$name', '$email', '$address', '$itemcode','$numberitems')";
        $result = mysqli_query($conn, $sql);
 
        if($result){
          echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> Your order has been accepted. Kohli handloom will complete your order soon
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
        }
        else{
            // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
        }

      }

    }

    
?>

<div class="container mt-3">
<h2 style="color:#77045A ;text-align:center"><b><u>Complete your order</u></b></h2>
    <form action="order.php" method="post">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp"> 
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>

    <div class="form-group">
        <label for="address">Address</label>
        <textarea class="form-control" name="address" id="address" cols="30" rows="10"></textarea> 
    </div>
    <div class="form-group">
        <label for="itemcode">Itemcode</label>
        <input type="text" name="itemcode" class="form-control" id="itemcode" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="itemnumbers">Number of item you need</label>
        <input type="number" name="itemnumbers" class="form-control" id="itemnumbers" aria-describedby="emailHelp">
    </div>
    
    <button type="submit" class="btn btn-primary">Order Now</button>
    </form>
</div>

<br>
<footer>
  <P class="p-2 bg-light text-dark "> KOHLI HANDLOOMS &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <a href="https://maps.mapmyindia.com/place-janta+market-phase+3b1-sector+60-mohali-punjab-160062-4AC7TE@zdata=MzAuNzE0Mis3Ni43MjUzNjIrMTcrNEFDN1RFKys=ed">SCO 541 JANTA MARKET PHASE 3B1, SECTOR 60, MOHALI, PUNJAB</a> &emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;   MOBILE: 9416551325</P>
</footer>

















        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      </body>
    </html>