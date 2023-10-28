<?php  
 
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "test");  
	  $aeid=intval($_GET['id']);
      $sql = "SELECT * FROM bonafide where id=$aeid";  
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
      {          
        $fname=$row["fname"];
		$department=$row["department"];
	    $sem=$row["semester"];
	    $enroll=$row["enroll"];
		$dob=$row["dob"];
		$category=$row["category"];
		$sterm=$row["sterm"];
		$eterm=$row["eterm"];
		$purpose=$row["purpose"];                   
      }  
      
      require_once('tcpdf/tcpdf.php');  
      $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
	  $pagelayout = array(100,100);
	  $obj_pdf->setPageOrientation('L');
      $obj_pdf->SetCreator(PDF_CREATOR); 
      			
      $obj_pdf->SetTitle("S.S. Agarwal Institute of Engineering and Technology, Navsari");  
      $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
      $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
      $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
      $obj_pdf->SetDefaultMonospacedFont('helvetica');  
      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
      $obj_pdf->SetMargins('47', '15', '30');  
	  $obj_pdf->SetLineStyle( array( 'width' => 15, 'color' => array(0,0,0)));
	  $obj_pdf->SetFillColor(255,255,127);
	  $obj_pdf->SetTextColor(0,0,128);
	  
      $obj_pdf->setPrintHeader(false);  
      $obj_pdf->setPrintFooter(false);  
      $obj_pdf->SetAutoPageBreak(TRUE, 10);  
      $obj_pdf->SetFont('helvetica', '', 13);  
      $obj_pdf->AddPage();  
      $content = '';  
      $content .= '
      
      <table border="0" cellspacing="0" cellpadding="5" style="border-left: 1px solid #orange;border-top: 1px solid #orange;border-right: 1px solid #orange;border-bottom: 1px solid #orange" >  
      
	  <tr>
      <td align="center"><img src="ssaiet_logo.jpg" width="100" height="100" ></td>
	  <td colspan="3"><h3 align="center">Agrawal Education Foundation Managed</h3>
      <h2 align="center">S.S. AGRAWAL COLLEGE OF COMMERCE AND MANAGEMENT,NAVSARI</h2>
	  <h4 align="center">Campus : S.S. Agrawal College Campus, Veeranajali Marg,</h4>   
	  <h4 align="center"> Near Devina Park Society, Gandevi Road, Navsari-396445, Gujarat. <br/>Phone No.: 02637-232667/232857 </h4>
	  </td>
	  </tr>
	  
	  <tr><td colspan="8"><h4 style="border-top-width: 1px #000; border-bottom-width: 1px #000;" align="center">Affiliated to Veer Narmad South Gujarat University,Surat</h4></td></tr>
	  
	  <tr><td colspan="3" ><h4 align="left">Bonafide No.:</h4></td> <td colspan="4"><h4 align="left">Date: </h4></td></tr>  
	  
	  <tr><td colspan="8" style="line-height: 25.5em;">
	  This is to certify that Mr./Miss. <b><u>' .$fname.' </u></b> is a bonafide student of our college studying in <b><u> '.$sem.' </u></b> semester of BBA/BCA/B.Com/B.Sc. <b><u> '.$department.' </u></b>  having 
      Enrollment No.: <b><u> '.$enroll.'</u></b>  and his/her date of birth is  <b><u> '.$dob.' </u></b> & belongs to SC / ST / OBC / General  <b><u> '.$category.' </u></b> category as per documents presented by him/her.</td></tr>
      <tr><td colspan="8"> His/Her regular term is from  <b><u> '.$sterm.' </u></b> to <b><u>  '.$eterm.' </u></b> .</td></tr>
	  <tr><td colspan="8"> This certificate is intended use for <b><u>  '.$purpose.'  </u></b> .  </td></tr> 
	  <tr><td colspan="8"> As per our record he/she is having good charater.</td></tr>
	  <tr><td colspan="8"></td></tr>
      </table> 		 
      ';
      // output the HTML content
   //    $obj_pdf->writeHTML($html, true, false, true, false, '');	 
          
       $obj_pdf->writeHTML($content);  
       $obj_pdf->Output('sample.pdf', 'I');  
   
 ?>  
 