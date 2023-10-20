<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{
?>

<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	
	<title>Messages</title>

	<!-- Font awesome -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Sandstone Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Bootstrap Datatables -->
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<!-- Bootstrap social button library -->
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<!-- Bootstrap select -->
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<!-- Bootstrap file input -->
	<link rel="stylesheet" href="css/fileinput.min.css">
	<!-- Awesome Bootstrap checkbox -->
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<!-- Admin Stye -->
	<link rel="stylesheet" href="css/style.css">
  <style>

	.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
	background: #dd3d36;
	color:#fff;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
	background: #5cb85c;
	color:#fff;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}

</style>

</head>

<body>
	<?php include('includes/header.php');?>
	 <div class="ts-main-content">
		<?php include('includes/leftbar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						<h2 class="panel-heading">LETTER OF RECOMMENDATION (LOR) CERTIFICATE</h2>

						<!-- Zero Configuration Table -->
						<div class="panel panel-default">
							<div class="panel-heading"><h4>Issue of Letter of Recommendation (LoR) to students for higher studies</h4></div>
							<div class="panel-body">
						
						<!-- New Application Example -->
                        <div class="col-xl-3 col-md-12 mb-10">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="panel-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">   
										  Following steps should be followed while issuing LOR:</br></br>
										  
										  1. The student has to fill the Request form.</br></br>
										  <a href="lor_application.php">Click Here for Request of LOR Details</a></br></br>
										  2. Student needs to call to respective faculties from whom they need LOR.</br></br>
										  3. Faculty members are advised to share the LOR (as per the attached format in .doc or .docx format) with the respective department.</br></br>
										  4. The department faculty will verify and will suggest the correction if any.	He/she will send LOR to admin SSAIET with cc to respective faculties.</br></br>
										  7. Students can ask for confirmation from the respective faculty before coming to college.</br></br>
										  8. The student will collect the LOR from admin SSAIET, make a number of colour copies of the LOR, take signature from the respective faculties, take round institute stamp from Admin SSAIET in the LOR.
										  *If you want to apply with the medium of instruction letter, please upload the medium of instruction letter.</br></br>                               
										<div>
										<button type="button" class="btn btn-default btn-sm">
										<span class="glyphicon glyphicon-download-alt"></span><a href="LOR-Formate-2022-23.docx" >&nbsp;&nbsp;Download format for LOR</a></button>
                                        </div>                                 
                                    </div>
                                </div>
                            </div>                      	
						</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Loading Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>
	<script type="text/javascript">
				 $(document).ready(function () {          
					setTimeout(function() {
						$('.succWrap').slideUp("slow");
					}, 3000);
					});
		</script>
</body>
</html>
<?php } ?>
