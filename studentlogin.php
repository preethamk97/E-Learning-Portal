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
			padding:20px;
			box-sizing:border-box;
			background-color:#f5f5f5;
			position:relative;
			top:150px;
		}
		.width1{
			width:40%;
			height:80%;
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
		
	</style>
  </head>
  <body>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
	
	<div class="container">
		<form action="" method="post" id="form" onsubmit="return validateForm()" class="width1">
			
			<legend><h4 class="display-5 text-center bg-light text-dark mb-3">LOGIN FORM</h4></legend>
			
			<div class="form-group">
				<input class="form-control upper" type="text" name="usn" placeholder="USN" id="usn">
				<p id="usnError">*Invalid USN.</p>
			</div>
			<div class="form-group">
				<input class="form-control" type="password" name="password" placeholder="Password" id="pass">
				<p id="passError">*Invalid Password:Password must be 6-15 characters long and must include a digit and a special character and must not begin with a special character.</p>
			</div>
			<input type="submit" class="btn btn-success" value="Login" id="regbtn">
		</form>
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
				var usn=$("#usn").val();
				var password=$("#pass").val();
				if(/^[1][Rr][Nn][1-9]{2}[Cc][Ss][0-9]{3}$/.test(usn)==false){
					$("#usnError").show("slow");
					flag=0;
				}
				else{
					$("#usnError").hide("slow");
				}
				if(/^(?=.*[a-zA-Z])(?=.*\d)(?=.*[!@#$%^&*()_+])[A-Za-z\d][A-Za-z\d!@#$%^&*()_+]{5,14}$/.test(password)==false){
					$("#passError").show("slow");	
					flag=0;
				}
				else{
					$("#passError").hide("slow");
				}
				
				if(flag==0)
					return false;
			}
			
		</script>
		<?php

                if(isset($_POST['usn']) && $_POST['password']){
                $usn=$_POST['usn'];
                $password=$_POST['password'];
                $flag=0;
				$_SESSION['usn']=$usn;
				$con=mysqli_connect("localhost","root","");
                if(! $con){
                    echo "<script>";
                    echo "alert('Error establishing connection')";
                    echo "</script>";
                }
                else{
                    mysqli_select_db($con,'ELearning');
                    $sql="select USN,PASSWORD from Students";
                    $ret_sel=mysqli_query($con,$sql);
                    if(! $ret_sel){
                        echo "<script>";
                        echo "alert('Error in database selection')";
                        echo "</script>";
                        
                    }
                    else{
                        while($rows=mysqli_fetch_assoc($ret_sel)){
                            if($usn===$rows['USN'] && password_verify($password,$rows['PASSWORD'])){
									
                                    $flag=1;
                                    header('Location: http://localhost/e-learning%20Portal/homepage.html') ;
                                                                 
                        }
                            
                    }
                        if($flag==0){
                            
                                    echo "<script>";
                                    echo "alert('Authentication unsuccessful.Check your username and password')";
                                    echo "</script>";
                                    die();
                            
                        }

                       
                    
                }
            }
        }
      ?>  
	</div>
  </body>
  
  
</html>