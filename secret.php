<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set  Diary</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>

    <div class="container">
         <?php include "./includes/link.php" ?>
       
           
            <?php include "./includes/header.php" ?>
            
            
                <div class="container">

                        <div class="row">

                            <div class="col-lg-5" style="border-right: 2px solid;">
                            <a class="btn btn-primary " href="addPost.php">Home</a>
                                    <h1>Add secret pass</h1>
                                        <article>
                                            <p>Note:: <i>this can be used to access every of your information, please keep it save.</i></p>
                                        </article>
                                        <form  method="post" enctype="multipart/form-data">

                                                       
                                                        <div class=" form-group">
                                                            <label id="label-1" for="cc-payment" class="control-label">Secret</label>
                                                            <input type="text"  required name="somethinhidden" placeholder="something hidden" class="form-control page-name" >
                                                        </div> 
                                                   
                                                      

                                               
                                                <div class="form-group "> 
                                                    <button id="payment-button"  class="btn btn-primary "  name="upload" type="submit">
                                                    Update your Diary
                                                    </button>  
                                                    <?php 
                                                
                                                    if(isset($_POST["upload"])){ 
                                                        $somethinhidden = addslashes($_POST["somethinhidden"]);
                                                        
                                                        if (! empty($somethinhidden)) {

                                                                    $key =  base64_encode($somethinhidden);
                                                                     
                                                                        $sqlQuery = "INSERT INTO `secret_key`(`id`, `user_id`, `keyy`, `status`, `date`, `deleted`) 
                                                                        VALUES (null,'$loggedInUser','$key','0',now(),'0')";
                                                                        
                                                                        $Query = mysqli_query($mysqli, $sqlQuery);		
                                                                          
                                                                        if($Query){
                                                                               
                                                                                echo "uploaded successfully!";


                                                                        }else{
                                                                                echo "Something, please try again later!!!";
                                                                        }
                                                                    
                                                        }
                                                        
                                                    }else{
                                                         echo "Fields can't be empty, please try again!!!";
                                                    }
                                                
                                                ?>
                                                    
                                                </div>   


                                                

                                        </form>
                         
                                                    <hr>

                            </div>


                            <div class="col-lg-7">

                                  <img src="./assets/images/secret.jpg" alt="loading.." class="img-fluid" srcset="">
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


