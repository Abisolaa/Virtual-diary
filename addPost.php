<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <!-- <div class="px-4 py-3">
        <div>
            <a href="#">
				<h5 style="color:#ffffff">Virtual Diary</h5>
			</a>
            </div>
            <div>
                <h1 class="title-6">Hi
                    <span></span>, Welcome back</h1>
                <p class="text-info">Access your data on any device at anytime</p>
            </div>
    </div> -->
    <div class="flex-container">
         <?php include "./includes/posts.php" ?>
         <?php  include "./includes/database.php" ?>
        <div class="page">
            <div class="flex-row-between px-4">
                <h4>Good Afternoon, Aridunnu</h4>
                <div class="icon-btn">
                    <svg style="width: 1.5em; height: 1.5em" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                </div>
            </div>
            
            <div class="mt-4 page-details">
               <h5 style="    padding-left: 1em;" >Add Post</h5>
                <form action="" method="post" enctype="multipart/form-data">

                        <div class="form-group page-name-container flex-row-between">
                            <div class="row">
                                <div class="col-lg-12">
                                      <label id="label-1" for="cc-payment" class="control-label">Title</label>
                                </div>
                                <div class="col-lg-12">
                                      <input type="text" required name="diaryTitle" placeholder="Page Name" class="form-control page-name" >
                                </div> 
                            </div>
                        </div>
                        <div class="form-group page-content-container">
                            <div class="row">
                                <div class="col-lg-12">
                                  <label  id="label-2" for="cc-payment" class="control-label">Description</label> 
                                  </div>
                                <div class="col-lg-12">
                                    <textarea placeholder="Start Writing" required name="diaryDescription" class="form-control diary-content" name="diary-content" id="diary-content"></textarea>
                                </div> 
                            </div>
                        </div>
                        <div class="form-group page-name-container flex-row-between">
                            <div class="row">
                                <div class="col-lg-12">
                                      <label id="label-3" for="cc-payment" class="control-label">Image</label>
                                </div>
                                <div class="col-lg-12">
                                      <input type="file" name="imageUpload" required placeholder="Page Name" class="form-control page-name" >
                                </div> 
                            </div>
                        </div>
                        <div class="form-group page-name-container flex-row-between"> 
                            <button id="payment-button"  class="btn btn-primary "  name="upload" type="submit">
                            <span id="payment-button-amount">Upload To Diary</span>
                            </button>  
                            <?php 
                        
                            if(isset($_POST["upload"])){ 
                                  $diaryTitle = $_POST["diaryTitle"];
                                  $diaryDescription =  $_POST["diaryDescription"];
                                
                                  $url = './assets/myDiaryImage/';

                                  $fileName = $_FILES["imageUpload"]["name"];
                                  $fileTmpName = $_FILES["imageUpload"]["tmp_name"];

                                  $url_save  =  $url.$fileName ;

                                 if( move_uploaded_file($fileTmpName,$url_save)) {

                                    

                                 }


                                
                            }
                        
                        ?>
                              
                        </div>   


                        

                </form>
            </div>
        </div>
    </div>
    <footer class="py-1 text-center">
        &copy; 2021 Virtual-Diary. | Developed By Abisola. | All Rights Reserved.
    </footer>

	<!--Bootstrap-->
	<script src="assets/bootstrap/js/jquery-3.6.0.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  
</body>
</html>


