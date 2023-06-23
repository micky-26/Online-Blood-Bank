<html>
<head> <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<h1 style="color:white;background-color:black;font-size:50px;text-align:center;padding:7px;">Blood Bank Management System</h1>


<form class="" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">

<section class="vh-100">

  <div class="container-fluid h-custom" style="height: 666px;">

    <div class="row d-flex justify-content-center align-items-center h-100">

      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="admin_image/login.jpg"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form>
          <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">

            <p class="lead fw-normal mb-0 me-3"><h2>Welcome to Admin Login</h2></p>
            <button type="button" class="btn btn-link">
              <i class="fab fa-facebook-f"></i>
            </button>

            <button type="button" class="btn btn-link">
              <i class="fa fa-twitter"></i>
            </button>

            <button type="button" class="btn btn-link">
              <i class="fab fa-linkedin-in"></i>
            </button>
          </div>

          <div class="divider d-flex align-items-center my-4">
            <p class="text-center fw-bold mx-3 mb-0"></p>
          </div>

          <!-- Email input -->
          <div class="form-outline mb-4">
            <label class="form-label" for="username"><b>Email address</b></label>
            <input type="text" name="username" style="border: 1px solid black;" class="form-control form-control-lg"
              placeholder="Enter a valid email address" />
            
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <label class="form-label" for="password"><b>Password</b></label>
            <input type="password" name="password" style="border: 1px solid black;" class="form-control form-control-lg"
              placeholder="Enter password" />
            
          </div>

          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mb-0">
              <!-- <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" /> -->
              <label class="form-check-label" for="form2Example3"><b>
                </b>
              </label>
            </div>
            <a href="#!" class="text-body"><b></b></a>
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <input type="submit" name="login" class="btn btn-primary" value="LOGIN" style="cursor:pointer">
            <!-- <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="#!" -->
                <!-- class="link-danger">Register</a></p> -->
          </div>

        </form>
      </div>
    </div>
  </div>
  <div class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-dark">
    
    <div>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-google"></i>
      </a>
      <a href="#!" class="text-white">
        <i class="fab fa-linkedin-in"></i>
      </a>
    </div>
    <!-- Right -->
  </div>
</section>
    
<br>
  <?php
    include 'conn.php';

  if(isset($_POST["login"])){

    $username=mysqli_real_escape_string($conn,$_POST["username"]);
    $password=mysqli_real_escape_string($conn,$_POST["password"]);

    $sql="SELECT * from admin_info where admin_username='$username' and admin_password='$password'";
    $result=mysqli_query($conn,$sql) or die("query failed.");

    if(mysqli_num_rows($result)>0)
    {
      while($row=mysqli_fetch_assoc($result)){
       session_start(); 
         $_SESSION['loggedin'] = true;
        $_SESSION["username"]=$username;
        header("Location: dash1.php");
      }
    }
    else {
      echo '<div class="alert alert-danger" style="font-weight:bold"> Username and Password are not matched!</div>';
    }
// '<script type="text/javascript">
//         alert("Username/Password not matched"); // Use this for checking if your script is reaching here or not
      
//     </script>';
  }
   ?>
 </form>
</body>
</html>
