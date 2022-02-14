<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Diary</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    
    <div class="container">
        <?php include "./includes/link.php" ?>
        
        <?php include "./includes/header.php" ?>
        
       
        <div class="row" >

                <div class="col-lg-6"  style="border-right: 2px solid;">
                       <form  method="post"  enctype="multipart/form-data">

                                <?php  

                                        if(isset($_GET["myDiaryId"])){
                                        $myDiaryId = $_GET["myDiaryId"];


                                        $fetchMyDiary = "select * from  content where id = '$myDiaryId' ";


                                        $Query = mysqli_query($mysqli, $fetchMyDiary);	

                                        $result = mysqli_fetch_assoc($Query);


                                ?>

                                            <h2 style="    padding-left: 1em;" >Edit Post</h2>
                                            <br>
                                            
                                                <div class="page-name-container flex-row-between">
                                                <h5><?php echo base64_decode($result["Title"]) ;  ?></h5> 
                                                </div>
                                                <div class="form-group">
                                                   
                                                    <input class="form-control" style="    border: 1px solid;" type="text" name="diaryTitle" placeholder="Page Name" value="<?php echo base64_decode($result["Title"]) ;  ?>"class="page-name" >
                                                </div>

                                                <br>
                                                
                                                <div class="page-name-container flex-row-between">
                                                            <img style="    width: 15em;height: 15em;" src="./assets/myDiaryImage/<?php echo  base64_decode($result["Image"]) ?>" alt="my diary picture" srcset="">
                                                </div>
                                                <a href="./assets/myDiaryImage/<?php echo  base64_decode($result["Image"]) ?>">Download </a>

                                                <div class="form-group">
                                                
                                                    <input class="form-controller" type="file" name="imageUpload" >
                                                </div>

                                                <br>

                                                <div class="page-name-container flex-row-between">
                                                <p><?php echo base64_decode($result["Description"]) ;  ?></p> 
                                                </div>
                                                <div class="page-content-container">
                                                
                                                    <textarea style="    border: 1px solid;height: 10em;" placeholder="Start Writing" class="diary-content" name="diaryDescription" id="diary-content"><?php echo base64_decode($result["Description"]); ?></textarea>
                                                </div>

                                        <div class="form-group page-name-container flex-row-between"> 
                                                                    <button id="payment-button"  class="btn btn-primary "  name="update" type="submit">
                                                                    <span id="payment-button-amount">Upload To Diary</span>
                                                                    </button> 
                                                                    <?php 
                                        
                                        
                                            if(isset($_POST["update"])){
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
                                                                
                                                                $sqlQuery = "UPDATE `content` SET `Title`='$dt',`Description`='$dd',`Image`='$fn',`status`='updated',
                                                                `Path`='$url_save' WHERE id = '$myDiaryId'  ";
                                                                $Query = mysqli_query($mysqli, $sqlQuery);		
                                                                // echo $sqlQuery;
                                                                if($Query){
                                                                    
                                                                        echo "updated successfully!";


                                                                }else{
                                                                        echo "Something, please try again later!!!";
                                                                }
                                                            

                                                        }else{

                                                                $dt = base64_encode ($diaryTitle);
                                                                $dd = base64_encode ($diaryDescription);
                                                                $fn = base64_encode ($fileName);
                                                                $us = base64_encode ($url_save);

                                                                $sqlQuery = "UPDATE `content` SET `Title`='$dt',`Description`='$dd',`status`='updated'
                                                                WHERE id = '$myDiaryId'  ";


                                                                $Query = mysqli_query($mysqli, $sqlQuery);		
                                                                // echo $sqlQuery;
                                                                if($Query){
                                                                    
                                                                        echo "updated successfully!";


                                                                }else{
                                                                        echo "Something, please try again later!!! <br>
                                                                        <br>";
                                                                }
                                                        }

                                                }

                                            }

                                        ?>
                  </div>                           

                                        <?php } ?>


                                    
                                    </form>
                </div>
                <div class="col-lg-6">
                    
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


