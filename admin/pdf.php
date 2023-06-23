<?php  
      //export.php  
 if(isset($_POST["pdf"]))  
 {  
      require "conn.php";
      $query = "SELECT * from donor_details";
      $data = mysqli_query($conn,$query);  
      require("fpdf185/fpdf.php");
      



      $pdf = new FPDF('p','mm','a4');
      $pdf->AddPage();

      $pdf->SetFont("Arial","B",16);
      $pdf->Cell(0,10,"Donor List",1,1,'C');

      $pdf->Cell(10,10,"Id",1,0);
      $pdf->Cell(20,10,"Name",1,0);
      $pdf->Cell(35,10,"Number",1,0);
      $pdf->Cell(55,10,"Email",1,0);
      $pdf->Cell(12,10,"Age",1,0);
      $pdf->Cell(25,10,"Gender",1,0);
      // $pdf->Cell(20,10,"BG No.",1,0);
      $pdf->Cell(33,10,"Address",1,1);

      $pdf->SetFont("Arial","",16);

      while($row = mysqli_fetch_assoc($data))
      {
         $pdf->Cell(10,10,$row['donor_id'],1,0); 
         $pdf->Cell(20,10,$row['donor_name'],1,0);
         $pdf->Cell(35,10,$row['donor_number'],1,0);
         $pdf->Cell(55,10,$row['donor_mail'],1,0);
         $pdf->Cell(12,10,$row['donor_age'],1,0);
         $pdf->Cell(25,10,$row['donor_gender'],1,0);
         // $pdf->Cell(20,10,$row['donor_blood'],1,0);
         $pdf->Cell(33,10,$row['donor_address'],1,1);
      }

      $pdf->output();
  }    
 ?> 