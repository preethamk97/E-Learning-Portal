<?php
	session_start();
	ob_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
	<link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
	<script src="jquery.js"></script>
    <title>Registration Page</title>
	
	<style>
		body {
			font-family: 'Lato', sans-serif;
			font-weight: normal;
			background-image:url("student.jpg");
			height: 100%;
			margin:0px;
			background-position: center;
			background-size: cover;
			background-attachment:fixed;
			
		}
		#form{
			margin:0 auto;
			color:black;
			padding:15px;
			box-sizing:border-box;
			background-color:#f5f5f5;
			position:relative;
			top:100px;
		}
		.width1{
			width:50%;
		}
		.width2{
			width:70%;
		}
		.width3{
			width:90%;
		}
		#regbtn{
			width:100%;
			box-shadow:4px 4px 4px rgba(0,0,0,0.4);
			border-radius:0px !important;
		}
		form p{
			color:red;
			font-size:12px;
			display:none;
		}
		.upper{
			text-transform:uppercase;
		}
		fieldset{
			border:1px groove #f5f5f5 !important;
			padding: 0 1.4em 1.4em 1.4em !important;
			margin: 0 0 1.5em 0 !important;
			-webkit-box-shadow:  0px 0px 0px 0px #000;
            box-shadow:  0px 0px 0px 0px #000;
		}
		legend{
			font-size: 1.2em !important;
			text-align: left !important;
		}
	</style>
	<script>
		$("form").fadeIn(2000);
	</script>
  </head>
  <body>
      
	<div class="container">
		<form action="" method="post" id="form" onsubmit="return validateForm()" class="width1">
			
			<h4 class="display-5 text-center bg-light text-dark mb-3">REGISTRATION FORM</h4>
			
			<div class="form-group">
				<input class="form-control upper" type="text" name="name" placeholder="Name" id="name">
				<p id="nameError">*Invalid Name:Name should contain only alphabets and space.</p>
			</div>
			<div class="form-group">
				<input class="form-control upper" type="text" name="id" placeholder="ID" id="id">
				<p id="idError">*Invalid ID.</p>
			</div>
			<div class="form-group">
				<input class="form-control" type="tel" name="phno" placeholder="Phone No" id="phno">
				<p id="phnoError">*Invalid Phone No.</p>
			</div>
			<div class="form-group">
				<input class="form-control" type="text" name="email" placeholder="Email Address" id="email" >
				<p id="emailError">*Invaild Email ID.</p>
			</div>
			<div class="form-group">
				<input class="form-control" type="password" name="password" placeholder="Password" id="pass">
				<p id="passError">*Invalid Password:Password must be 6-15 characters long and must include a digit and a special character and must not begin with a special character.</p>
			</div>
			<div class="form-group">
				<input class="form-control" type="password" name="confirmpassword" placeholder="Confirm Password" id="cpass">
				<p id="cpassError">Passwords do not match.</p>
			</div>
			<div class="form-group">
				<fieldset>
					<legend class="lead">Subject Codes</legend>
					<input class="form-control upper" type="text" name="subcode1" placeholder="ex:15CS31" id="sub1">
					<p id="sub1Error">Invalid Subject Code</p>
					<input class="form-control upper" type="text" name="subcode2" placeholder="ex:15CS31" id="sub2">
					<p id="sub2Error">Invalid Subject Code</p>
					<input class="form-control upper" type="text" name="subcode3" placeholder="ex:15CS31" id="sub3">
					<p id="sub3Error">Invalid Subject Code</p>
					<input class="form-control upper" type="text" name="subcode4" placeholder="ex:15CS31" id="sub4">
					<p id="sub4Error">Invalid Subject Code</p>
				</fieldset>
			</div>
			<input type="submit" class="btn btn-success" value="Register" id="regbtn">
		</form>
		</div>
		<script>
			
			$(window).on('load',function(){
				if($(window).width()<994){
					$("#form").removeClass("width1").removeClass("width3").addClass("width2");
				}
				if($(window).width()>994){
					$("#form").removeClass("width2").addClass("width1");
				}
				if($(window).width()<429){
					$("#form").removeClass("width2").addClass("width3");
				}
			});
			
			$(window).resize(function(){
				if($(window).width()<994){
					$('#form').removeClass('width1').removeClass("width3").addClass('width2');
				}
				if($(window).width()>994){
					$('#form').removeClass('width2').addClass('width1');
				}
				if($(window).width()<429){
					$("#form").removeClass("width2").addClass("width3");
				}
			});
			function validateForm(){
				var flag=1;
				var name=$("#name").val();
				var id=$("#id").val();
				var phno=$("#phno").val();
				var email=$("#email").val();
				var password=$("#pass").val();
				var confirmPassword=$("#cpass").val();
				var sub1=$("#sub1").val();
				var sub2=$("#sub2").val();
				var sub3=$("#sub3").val();
				var sub4=$("#sub4").val();
				if(/^[A-Za-z\s]+$/.test(name)==false){
					$("#nameError").show("slow");
					flag=0;
				}
				else{
					$("#nameError").hide("slow");
				}
				if(/^[1][Rr][Nn][1-9]{2}[Cc][Ss][0-9]{3}$/.test(id)==false){
					$("#idError").show("slow");
					flag=0;
				}
				else{
					$("#idError").hide("slow");
				}
				if(/^\d{10}$/.test(phno)==false){
                    $("#phnoError").show("slow");
                    flag=0;
                }
				else{
					$("#phnoError").hide("slow");
				}
				if(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)==false){
                    $("#emailError").show("slow");
                    flag=0;
                }
				else{
					$("#emailError").hide("slow");
				}
				if(/^(?=.*[a-zA-Z])(?=.*\d)(?=.*[!@#$%^&*()_+])[A-Za-z\d][A-Za-z\d!@#$%^&*()_+]{5,14}$/.test(password)==false){
					$("#passError").show("slow");	
					flag=0;
				}
				else{
					$("#passError").hide("slow");
				}
				if(password!=confirmPassword){
					$("#cpassError").show("slow");	
					flag=0;
				}
				else{
					$("#cpassError").hide("slow");
				}
				if(/^([1][0-9][cC][sS]([lL]?)[1-8][1-8]([1-8]?))?$/.test(sub1)==false){
					$("#sub1Error").show("slow");
				}
				else{
					$("#sub1Error").hide("slow");
				}
				if(/^([1][0-9][cC][sS]([lL]?)[1-8][1-8]([1-8]?))?$/.test(sub2)==false){
					$("#sub2Error").show("slow");
				}
				else{
					$("#sub2Error").hide("slow");
				}
				if(/^([1][0-9][cC][sS]([lL]?)[1-8][1-8]([1-8]?))?$/.test(sub3)==false){
					$("#sub3Error").show("slow");
				}
				else{
					$("#sub3Error").hide("slow");
				}
				if(/^([1][0-9][cC][sS]([lL]?)[1-8][1-8]([1-8]?))?$/.test(sub4)==false){
					$("#sub4Error").show("slow");
				}
				else{
					$("#sub4Error").hide("slow");
				}
				if(flag==0)
					return false;
			}
			</script>
			<?php
				if(isset($_POST['name']) && isset($_POST['id']) && isset($_POST['phno']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirmpassword']) && isset($_POST['subcode1']) && isset($_POST['subcode2']) && isset($_POST['subcode3']) && isset($_POST['subcode4']) ){
					$name=$_POST['name'];
					$id=$_POST['id'];
					$phno=$_POST['phno'];
					$email=$_POST['email'];
					$pass=$_POST['password'];
					$password=password_hash($pass,PASSWORD_DEFAULT);
					$subcode1=$_POST['subcode1'];
					$subcode2=$_POST['subcode2'];
					$subcode3=$_POST['subcode3'];
					$subcode4=$_POST['subcode4'];
					
					$_SESSION['subcode1']=$_POST['subcode1'];
					$_SESSION['subcode2']=$_POST['subcode2'];
					$_SESSION['subcode3']=$_POST['subcode3'];
					$_SESSION['subcode4']=$_POST['subcode4'];
					$_SESSION['name']=$name;
					$_SESSION['id']=$id;
					$_SESSION['phno']=$phno;
					$file=fopen("regfaculty.txt","r");
					$notable=fgetc($file);
					$con=mysqli_connect("localhost","root","");
					if(!$con){
						echo"<script>";
						echo"alert('Could not establish connection')";
						echo"</script>";
						die(mysqli_connect_error());
					}
					
					if($notable=="1"){
						
						mysqli_select_db($con,"ELearning");
						$table="Create table Faculties(
							NAME varchar(30),
							ID varchar(10) primary key,
							PHONE bigint,
							EMAIL varchar(30),
							PASSWORD varchar(255),
							SUBCODE1 varchar(7),
							SUBCODE2 varchar(7),
							SUBCODE3 varchar(7),
							SUBCODE4 varchar(7)
						);";
						$create_table=mysqli_query($con,$table);
						if(!$create_table){
							echo"<script>";
							echo"alert('Could not create table')";
							echo"</script>";
							die(mysqli_error($con));
						}
						fclose($file);
						$file=fopen("regfaculty.txt","w");
						fwrite($file,"0");
						fclose($file);
						$insert="Insert into Faculties(NAME,ID,PHONE,EMAIL,PASSWORD,SUBCODE1,SUBCODE2,SUBCODE3,SUBCODE4) Values('$name','$id','$phno','$email','$password','$subcode1','$subcode2','$subcode3','$subcode4');";
						if(!(mysqli_query($con,$insert))){
							echo"<script>";
							echo"alert('Could not insert values')";
							echo"</script>";
							
						}
						
						else{
							
							echo"<script>";
							echo"alert('Registration Successful')";
							echo"</script>";
							header('Location:http://localhost/e-learning%20Portal/homepage.html');
						}
					}
					else{
						mysqli_select_db($con,"ELearning");
						$insert="Insert into Faculties(NAME,ID,PHONE,EMAIL,PASSWORD,SUBCODE1,SUBCODE2,SUBCODE3,SUBCODE4) Values('$name','$id','$phno','$email','$password','$subcode1','$subcode2','$subcode3','$subcode4');";
						if(!(mysqli_query($con,$insert))){
							echo"<script>";
							echo"alert('Could not insert values')";
							echo"</script>";
							die(mysqli_error($con));
						}
						else{
							echo"<script>";
							echo"alert('Registration Successful')";
							echo"</script>";
							header('Location:http://localhost/e-learning%20Portal/homepage.html');
						}
					}
				}
			?>
		
	
  </body>
  
  
</html>