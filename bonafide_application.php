<?php

include('includes/config.php');
if(isset($_POST['submit']))
{
$fname=$_POST['fname'];
$course=$_POST['course'];
$department=$_POST['department'];
$semester=$_POST['semester'];
$enroll=$_POST['enroll'];
$dob=$_POST['dob'];
$category=($_POST['category']);
$sterm=$_POST['sterm'];
$eterm=$_POST['eterm'];
$email=$_POST['email'];
$purpose=$_POST['purpose'];


$sql ="INSERT INTO bonafide(fname,course,department, semester, enroll, dob, category, sterm, eterm,purpose, status ,email) VALUES(:fname,:course, :department, :semester, :enroll, :dob, :category, :sterm, :eterm, :purpose, 0,  :email)";
echo $sql;
$query= $dbh -> prepare($sql);
$query-> bindParam(':fname', $fname, PDO::PARAM_STR);
$query-> bindParam(':course', $course, PDO::PARAM_STR);
$query-> bindParam(':department', $department, PDO::PARAM_STR);
$query-> bindParam(':semester', $semester, PDO::PARAM_STR);
$query-> bindParam(':enroll', $enroll, PDO::PARAM_STR);
$query-> bindParam(':dob', $dob, PDO::PARAM_STR);
$query-> bindParam(':category', $category, PDO::PARAM_STR);
$query-> bindParam(':sterm', $sterm, PDO::PARAM_STR);
$query-> bindParam(':eterm', $eterm, PDO::PARAM_STR);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':purpose', $purpose, PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
	echo "<script type='text/javascript'>alert('Submitted Sucessfull!');</script>";
	echo "<script type='text/javascript'> document.location = 'bonafide_application.php'; </script>";
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
	
	<title>Bonafide Online Form</title>

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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
      document.querySelector("input[type=number]")
      .oninput = e => console.log(new Date(e.target.valueAsNumber, 0, 1))
	  </script>
<script>
$(document).ready(function () {
		
		var list1 = document.getElementById('course');
	
		list1.options[0] = new Option('--Select--', '');
		list1.options[1] = new Option('SSAIET', 'SSAIET');
		list1.options[2] = new Option('SSACM', 'SSACM');
		list1.options[3] = new Option('SSAIMT', 'SSAIMT');
		});
		
function getDepartment(){

			var list1 = document.getElementById('course');
			var list2 = document.getElementById("department");
			var list1SelectedValue = list1.options[list1.selectedIndex].value;
			
			if (list1SelectedValue=='SSAIET')
            {
				
				list2.options.length=0;
				list2.options[0] = new Option('--Select--', '');
				list2.options[1] = new Option('Computer Engineering', 'Computer Engineering');
				list2.options[2] = new Option('Civil Engineering', 'Civil Engineering');
				list2.options[3] = new Option('Electrical Engineering', 'Electrical Engineering');
				list2.options[4] = new Option('Mechanical Engineering', 'Mechanical Engineering');
				list2.options[5] = new Option('Chemical Engineering', 'Chemical Engineering');
				
			}
			else if (list1SelectedValue=='SSACM')
            {
				
				list2.options.length=0;
				list2.options[0] = new Option('--Select--', '');
				list2.options[1] = new Option('BBA', 'BBA');
				list2.options[2] = new Option('BCA', 'BCA');
				list2.options[3] = new Option('BCOM', 'BCOM');
				list2.options[4] = new Option('BSC', 'BSC');
				
				
			}
			else if (list1SelectedValue=='SSAIMT')
            {
				
				list2.options.length=0;
				list2.options[0] = new Option('--Select--', '');
				list2.options[1] = new Option('MBA', 'MBA');
				list2.options[2] = new Option('MCA', 'MCA');

				
				
			}
}
</script>
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
									<div class="panel-heading"><h2 style="color: Black;">Bonafide Online Request Form</h2></div>
									   <div class="panel-body">
											
											<div class="well row pt-2x pb-3x bk-light">
											 <div class="col-md-10 col-md-offset-2">											  
											    <form method="post" class="form-horizontal" enctype="multipart/form-data" name="regform" onSubmit="return validate();">
												
												<div class="form-group" >
												<label class="col-sm-2 control-label">Full Name:<span style="color:red">*</span></label>
												<div class="col-sm-5">
												<input type="text" name="fname" class="form-control" required>
												</div>
												</div>
												
												
												<div class="form-group">
												<label class="col-sm-2 control-label">Course<span style="color:red">*</span></label>
												<div class="col-sm-5">
												<select class="form-control"  id='course' name='course' onClick="getDepartment()">
												</select>
												</div>
												</div>
												
												<div class="form-group">
												<label class="col-sm-2 control-label">Department<span style="color:red">*</span></label>
												<div class="col-sm-5">
												<select class="form-control"  id='department' name='department' >
												</select>
												</div>
												</div>
												
												
												<div class="form-group">
												<label class="col-sm-2 control-label">Semester<span style="color:red">*</span></label>
												<div class="col-sm-5">
												<select name="semester" class="form-control" required>
												<option>Select</option>											
												<option>1</option>
												<option>2</option>
												<option>3</option>
												<option>4</option>
												<option>5</option>
												<option>6</option>
												<option>7</option>
												<option>8</option>									
												</select>
												</div>
												</div>
		
												<div class="form-group">
												<label class="col-sm-2 control-label">Enrollment No.<span style="color:red">*</span></label>
												<div class="col-sm-5">
												<input type="text" name="enroll" class="form-control" required>
												</div>
												</div>
												
												<div class="form-group">
												<label class="col-sm-2 control-label">Date of Birth<span style="color:red">*</span></label>
												<div class="col-sm-5">
												<input type="date" name="dob" class="form-control" required>
												</div>
												</div>
																					
												
												<div class="form-group">
												<label class="col-sm-2 control-label">category<span style="color:red">*</span></label>
												<div class="col-sm-5">
												<select name="category" class="form-control" required>
												<option>Select</option>																						
												<option>Select</option>
												<option>SC</option>
												<option>ST</option>
												<option>OBC</option>
												<option>GENERAL</option>
												</select>
												</div>
												</div>
												
												<div class="form-group">
												<label class="col-sm-2 control-label">Term Duration<span style="color:red">*</span></label>
												<div class="col-sm-3">
												<input type="number" name="sterm" class="form-control" placeholder="YYYY" min="2000" max="2024" required>
												</div>
												<label class="col-sm-1 control-label">To<span style="color:red">*</span></label>
												<div class="col-sm-3">
												<input type="number" name="eterm" class="form-control" placeholder="YYYY" min="2000" max="2024" required>
												</div>
												</div>
												
												<div class="form-group">
												<label class="col-sm-2 control-label">email<span style="color:red">*</span></label>
												<div class="col-sm-5">
												<input type="text" name="email" class="form-control" required>
												</div>
												</div>
												
												<div class="form-group">
												<label class="col-sm-2 control-label">Purpose<span style="color:red">*</span></label>
												<div class="col-sm-5">
												<input type="text" name="purpose" class="form-control" required>
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
