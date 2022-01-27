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
        <div class="page">
           
            <?php include "./includes/header.php" ?>
            
                <div class="container">

                        <div class="row">

                            <div class="col-lg-6">

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
                                                        $diaryDescription = addslashes($_POST["diaryDescription"]);
                                                        
                                                        if (! empty($diaryTitle) && !empty($diaryDescription)) {

                                                                $url = './assets/myDiaryImage/';

                                                                $fileName = $_FILES["imageUpload"]["name"];
                                                                $fileTmpName = $_FILES["imageUpload"]["tmp_name"];

                                                                $url_save  =  $url.$fileName ;

                                                                if( move_uploaded_file($fileTmpName,$url_save)) {

                                                                        
                                                                        $sqlQuery = "INSERT INTO `content`(`Id`, `Title`, `Description`, `Image`, `status`, `delete`, `Path`, `date`, `Userid`) 
                                                                        VALUES (null,'$diaryTitle','$diaryDescription','$fileName','0','0','$url_save',now(),'$loggedInUser')";
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
                              </div>

                            </div>


                            <div class="col-lg-6">

                                    <img style="width:28em" src="./assets/images/4.jpg" alt="loading..." srcset="">

                            </div>

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


