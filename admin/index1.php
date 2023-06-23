 <?php  
 $connect = mysqli_connect("localhost", "root", "", "blood_donation");  
 $query ="SELECT * FROM donor_details ORDER BY donor_id desc";  
 $result = mysqli_query($connect, $query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Export Mysql Table Data to CSV file in PHP</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:900px;">  
                <h2 align="center">Export Mysql Table Data to CSV file in PHP</h2>  
                <h3 align="center">Donor Data</h3>                 
                <br />  
                <form method="post" action="export.php" align="center">  
                     <input type="submit" name="export" value="CSV Export" class="btn btn-success" />  
                </form>  
                <br />  
                <div class="table-responsive" id="employee_table">  
                     <table class="table table-bordered">  
                          <tr>  
                               
                               <th width="25%">Name</th>  
                               <th width="35%">Number</th>  
                               <th width="10%">Email</th>  
                               <th width="20%">Age</th>  
                               <th width="5%">Gender</th> 
                                <th width="5%">Donor Blood</th>
                          </tr>  
                     <?php  
                     while($row = mysqli_fetch_array($result))  
                     {  
                     ?>  

                          <tr>  
                               <td><?php echo $row["donor_name"]; ?></td>  
                               <td><?php echo $row["donor_number"]; ?></td>  
                               <td><?php echo $row["donor_mail"]; ?></td>  
                               <td><?php echo $row["donor_age"]; ?></td>  
                               <td><?php echo $row["donor_gender"]; ?></td>  
                               <td><?php echo $row["donor_blood"]; ?></td>  
                          </tr>  
                     <?php       
                     }  
                     ?>  
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  