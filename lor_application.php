<?php

include('includes/config.php');
if(isset($_POST['submit']))
{
$file = $_FILES['lor']['name'];
$file_loc = $_FILES['lor']['tmp_name'];
$folder="admin/uploaded/"; 
$new_file_name = strtolower($file);
$final_file=str_replace(' ','-',$new_file_name);

$sname=$_POST['sname'];
$sdept=$_POST['sdept'];
$senroll=$_POST['senroll'];
$semail=$_POST['semail'];
$smblno=$_POST['smblno'];
$pname=($_POST['pname']);
$pdept=$_POST['pdept'];

if(move_uploaded_file($file_loc,$folder.$final_file))
	{
		$lor=$final_file;
    }
$sql ="INSERT INTO lor(sname, sdept, senroll, semail, smblno, pname, pdept, lor, status) VALUES(:sname, :sdept, :senroll, :semail, :smblno, :pname, :pdept, :lor, 0)";
$query= $dbh -> prepare($sql);
$query-> bindParam(':sname', $sname, PDO::PARAM_STR);
$query-> bindParam(':sdept', $sdept, PDO::PARAM_STR);
$query-> bindParam(':senroll', $senroll, PDO::PARAM_STR);
$query-> bindParam(':semail', $semail, PDO::PARAM_STR);
$query-> bindParam(':smblno', $smblno, PDO::PARAM_STR);
$query-> bindParam(':pname', $pname, PDO::PARAM_STR);
$query-> bindParam(':pdept', $pdept, PDO::PARAM_STR);
$query-> bindParam(':lor', $lor, PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
	echo "<script type='text/javascript'>alert('Submitted Sucessfull!');</script>";
	echo "<script type='text/javascript'> document.location = 'lor_application.php'; </script>";
}
else 
{
	$error="Something went wrong. Please try again";
}
}
?>


<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	
	<title>LOR Online Form</title>

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

	<script type= "text/javascript" src="../vendor/countries.js"></script>
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
							<div class="col-md-16">
								<div class="panel panel-default">
									<div class="panel-heading"><h2 style="color: Black;">LOR Online Request Form</h2></div>
									   <div class="panel-body">
											
											<div class="well row pt-2x pb-3x bk-light">
											 <div class="col-md-10 col-md-offset-2">											  
											    <form method="post" class="form-horizontal" enctype="multipart/form-data" name="regform" onSubmit="return validate();">
												
												<div class="form-group" >
												<label class="col-sm-2 control-label">Student Full Name:<span style="color:red">*</span></label>
												<div class="col-sm-5">
												<input type="text" name="sname" class="form-control" required>
												</div>
												</div>
												
												
												<div class="form-group">
												<label class="col-sm-2 control-label">Department Name:<span style="color:red">*</span></label>
												<div class="col-sm-5">
												<input type="text" name="sdept" class="form-control" required>
												</div>
												</div>
												
											    <div class="form-group">
												<label class="col-sm-2 control-label">Student Enrollment No.<span style="color:red">*</span></label>
												<div class="col-sm-5">
												<input type="text" name="senroll" class="form-control" required>
												</div>
												</div>
																																																																																			
												
												<div class="form-group">
												<label class="col-sm-2 control-label">Student Email-id:<span style="color:red">*</span></label>
												<div class="col-sm-5">
												<input type="text" name="semail" class="form-control" required>
												</div>
												</div>
												
												<div class="form-group">
												<label class="col-sm-2 control-label">Student Mobile No.<span style="color:red">*</span></label>
												<div class="col-sm-5">
												<input type="text" name="smblno" class="form-control" required>
												</div>
												</div>
													

												<div class="form-group" >
												<label class="col-sm-2 control-label">Professor Name:<span style="color:red">*</span></label>
												<div class="col-sm-5">
												<input type="text" name="pname" class="form-control" required>
												</div>
												</div>	
												
												<div class="form-group" >
												<label class="col-sm-2 control-label">Professor Department:<span style="color:red">*</span></label>
												<div class="col-sm-5">
												<input type="text" name="pdept" class="form-control" required>
												</div>
												</div>
												
												<div class="form-group" >
												<label class="col-sm-2 control-label">Upload format of LOR:<span style="color:red">*</span></label>
												<div class="col-sm-5">
												<input type="file" name="lor" class="form-control" required/>
												</div>
												</div>
												
												<br>
												&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	
												
												<button class="btn btn-primary" name="submit" type="submit">Register</button>
												
											    </form>
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
	</script>
</body>
</html>
