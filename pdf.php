<?php
	if(!empty($_POST['submit']))
	{
		$fullname= $_POST['fullname'];
		$emailaddress= $_POST['emailaddress'];
		$sandwiches= $_POST['sandwiches'];
		$momos= $_POST['momos'];
		$pizza= $_POST['pizza'];
		$burger= $_POST['burger'];
		$coke= $_POST['coke'];
		
		
		require("fpdf/fpdf.php");
		 
		 $pdf = new FPDF();
		 $pdf -> AddPage();
		 $pdf -> SetFont("Arial","B",16);
		 $pdf -> Cell(0,20,"Order Details",1,1,'C');
		 $pdf -> Cell(30,10,"Fullname:",0,1);
		 $pdf -> Cell(30,10,$fullname,0,1);
		 
		 $pdf -> Cell(35,10,"Emailaddress:",0,1);
		 $pdf -> Cell(35,10,$emailaddress,0,1);
		 
		 $pdf -> Cell(20,10,"Sandwiches",0,1);
		 $pdf -> Cell(20,10,$sandwiches,0,1);
		 
		 $pdf -> Cell(20,10,"Momos",0,1);
		 $pdf -> Cell(20,10,$momos,0,1);
		 
		 $pdf -> Cell(20,10,"Pizza",0,1);
		 $pdf -> Cell(20,10,$pizza,0,1);
		 
		 $pdf -> Cell(20,10,"Burger",0,1);
		 $pdf -> Cell(20,10,$burger,0,1);
		 
		  $pdf -> Cell(20,10,"Coke",0,1);
		  $pdf -> Cell(20,10,$coke,0,1);
				  
		 
		 
		 $file = time().'.pdf';
		 $pdf -> output($file,'D');
		
		
	}
?>