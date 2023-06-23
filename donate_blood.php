<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
<?php
$active ='donate';
 include('head.php') ?>

<div id="page-container" style="margin-top:50px; position: relative;min-height: 84vh;">
  <div class="container">
  <div id="content-wrap" style="padding-bottom:50px;">
<div class="row">
    <div class="col-lg-12">
        <h1 class="mt-4 mb-3"><center>Donate Blood </center></h1><br><br>
      </div>
</div>
<form name="donor" action="savedata.php" method="post">
<div class="row">
<div class="col-lg-4 mb-4">
<div >Full Name<span style="color:red">*</span></div>
<div><input type="text" name="fullname" style="border: 1px solid black;" class="form-control" required></div>
</div>
<div class="col-lg-4 mb-4">
<div >Mobile Number<span style="color:red">*</span></div>
<div><input type="text" name="mobileno" style="border: 1px solid black;" class="form-control" required></div>
</div>
<div class="col-lg-4 mb-4">
<div >Email Id</div>
<div><input type="email" name="emailid" style="border: 1px solid black;" class="form-control"></div>
</div>
</div>
<div class="row">
<div class="col-lg-4 mb-4">
<div >Age<span style="color:red">*</span></div>
<div><input type="text" name="age" style="border: 1px solid black;" class="form-control" required></div>
</div>
<div class="col-lg-4 mb-4">
<div >Gender<span style="color:red">*</span></div>
<div><select name="gender" style="border: 1px solid black;" class="form-control" required>
<option value="">Select</option>
<option value="Male">Male</option>
<option value="Female">Female</option>
</select>
</div>
</div>
<div class="col-lg-4 mb-4">
<div >Blood Group<span style="color:red">*</span></div>
<div><select name="blood" style="border: 1px solid black;" class="form-control" required>
  <option value=""selected disabled>Select</option>
  <?php
    include 'conn.php';
    $sql= "select * from blood";
    $result=mysqli_query($conn,$sql) or die("query unsuccessful.");
  while($row=mysqli_fetch_assoc($result)){
   ?>
   <option value=" <?php echo $row['blood_id'] ?>"> <?php echo $row['blood_group'] ?> </option>
  <?php } ?>
</select>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-4 mb-4">
<div >Address<span style="color:red">*</span></div>
<div><textarea class="form-control" style="border: 1px solid black;" name="address" required></textarea></div></div>
</div>
<div class="row">
  <div class="col-lg-4 mb-4">
  <div><input type="submit" name="submit" class="btn btn-primary" value="Submit" style="cursor:pointer"></div>
  </div>
</div>
</div>
<!-- </div>
<?php include('footer.php') ?>
</div> -->
</body>
</html>
