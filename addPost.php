<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Diary</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
    <div class="container">
         <?php include "./includes/link.php" ?>
       
           
            <?php include "./includes/header.php" ?>
            
            
                <div class="container">

                        <div class="row">

                            <div class="col-lg-5" style="border-right: 2px solid;">
                                    <h1>Add diary</h1>
   
                                        <form action="" method="post" enctype="multipart/form-data">

                                                       
                                                        <div class=" form-group">
                                                            <label id="label-1" for="cc-payment" class="control-label">Title</label>
                                                            <input type="text"  required name="diaryTitle" placeholder="Page Name" class="form-control page-name" >
                                                        </div> 
                                                   
                                                          <div class="form-group ">
                                                             <div class=" form-group">
                                                             <label  id="label-2" for="cc-payment" class="control-label">Description</label> 
                                                       
                                                            <textarea style="border: 1px solid;" placeholder="Start Writing" required name="diaryDescription" class="form-control diary-content" name="diary-content" id="diary-content"></textarea>
                                                        </div> 
                                                </div>
                                                <div class="form-group ">
                                                        <div class="col-lg-12">
                                                             <label id="label-3" for="cc-payment" class="control-label">File</label>
                                                            <input type="file" name="imageUpload" required placeholder="Page Name" class="form-control page-name" >
                                                        </div> 
                                                </div>
                                                <div class="form-group "> 
                                                    <button id="payment-button"  class="btn btn-primary "  name="upload" type="submit">
                                                    <span id="payment-button-amount">Upload To Diary</span>
                                                    </button>  
                                                    <?php 
                                                
                                                    if(isset($_POST["upload"])){ 
                                                        $diaryTitle = $_POST["diaryTitle"];
                                                        $diaryDescription = addslashes($_POST["diaryDescription"]);
                                                        
                                                        if (! empty($diaryTitle) && !empty($diaryDescription)) {

                                                                $url = './assets/myDiaryImage/';

                                                                $fileName = $_FILES["imageUpload"]["name"];
                                                                $fileTmpName = $_FILES["imageUpload"]["tmp_name"];

                                                                $url_save  =  $url.$fileName ;

                                                                if( move_uploaded_file($fileTmpName,$url_save)) {
                                                                                           
                                                                            $dt = base64_encode ($diaryTitle);
                                                                            $dd = base64_encode ($diaryDescription);
                                                                            $fn = base64_encode ($fileName);
                                                                            $us = base64_encode ($url_save);
                                                                        
                                                                        $sqlQuery = "INSERT INTO `content`(`Id`, `Title`, `Description`, `Image`, `status`, `delete`, `Path`, `date`, `Userid`) 
                                                                        VALUES (null,'$dt','$dd','$fn','0','0','$us',now(),'$loggedInUser')";
                                                                        $Query = mysqli_query($mysqli, $sqlQuery);		
                                                                          // echo $sqlQuery;
                                                                        if($Query){
                                                                               
                                                                                echo "uploaded successfully!";


                                                                        }else{
                                                                                echo "Something, please try again later!!!";
                                                                        }
                                                                    

                                                                }

                                                        }
                                                        
                                                    }else{
                                                        // echo "Fields can't be empty, please try again!!!";
                                                    }
                                                
                                                ?>
                                                    
                                                </div>   


                                                

                                        </form>
                         
                                                    <hr>

                            </div>


                            <div class="col-lg-7">

                            <?php include "./includes/posts.php" ?>

                            </div>

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


