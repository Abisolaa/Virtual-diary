<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../images/favicon.ico">

    <title>Virtual Diary | Register</title>
  
	<!-- Vendors Style-->
	<link rel="stylesheet" href="assets/css/vendors_css.css">
	  
	<!-- Style-->  
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/skin_color.css">	

</head>

<body class="hold-transition theme-primary bg-img" style="background-image: url(assets/images/3.jpg)">
	
	<div class="container h-p100">
	<?php  include "./includes/database.php" ?>
		<div class="row align-items-center justify-content-md-center h-p100">
			
			<div class="col-12">
				<div class="row justify-content-center g-0">
					<div class="col-lg-5 col-md-5 col-12">
						<div class="bg-white rounded10 shadow-lg">
							<div class="content-top-agile p-20 pb-0">
								<h2 class="text-primary">Get started with Us</h2>
								<p class="mb-0">Register a new membership</p>							
							</div>
							<div class="p-40">
								<form  method="post">
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text bg-transparent"><i class="ti-email"></i></span>
											<input type="email" name="email" class="form-control ps-15 bg-transparent" required placeholder="Email">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text bg-transparent"><i class="ti-lock"></i></span>
											<input type="password" name="pass" class="form-control ps-15 bg-transparent" required placeholder="Password">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text bg-transparent"><i class="ti-lock"></i></span>
											<input type="password" name="password" class="form-control ps-15 bg-transparent" required placeholder="Retype Password">
										</div>
									</div>
									  <div class="row">
										<div class="col-12">
										  <div class="checkbox">
											<input required type="checkbox" id="basic_checkbox_1" >
											<label for="basic_checkbox_1">I agree to the <a href="#" class="text-warning"><b>Terms</b></a></label>
										  </div>
										</div>
										<!-- /.col -->
										<div class="col-12 text-center">
										  <button type="submit" name="register" class="btn btn-info margin-top-10">SIGN UP</button>
										</div>
										<!-- /.col -->
									  </div>
									  <?php
									  if(isset($_POST["register"]))
                                {

									
                                $email = $_POST["email"];
                                $password = $_POST["pass"];
								$retype_password = $_POST["password"];
                                // echo $email . " " .$password." ". $retype_password;

									if(!empty($email) || !empty($password) || !empty($retype_password) ){
									
										if($password == $retype_password){

												$sqlQuery = "INSERT INTO `register`(`Id`, `Email`, `Password`, `date`, `Status`) 
															VALUES (null,'$email','$password',now(),'0')";
												  $Query = mysqli_query($mysqli, $sqlQuery);		
												//   echo $sqlQuery;
												  if($Query){
														echo "Registration Successful!";
												  }else{
														echo "Something, please try again later!!!";
												  }

										}else {
											echo " Password does not Match, Please try again! ";
										}


									}else {

											// echo " Fields Cann't empty!!! ";
									}
                                }
	                            ?>
								</form>				
								<div class="text-center">
									<p class="mt-15 mb-0">Already have an account?<a href="index.php" class="text-danger ms-5"> Sign In</a></p>
								</div>
							</div>
						</div>								
					</div>
				</div>
			</div>			
		</div>
	</div>


	<!-- Vendor JS -->
	<script src="assets/js/vendors.min.js"></script>
	<script src="assets/js/pages/chat-popup.js"></script>
    <script src="assets/icons/feather-icons/feather.min.js"></script>	
	
	
</body>
</html>
