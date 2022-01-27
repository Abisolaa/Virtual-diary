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
    
    <div class="flex-container">
        <?php include "./includes/posts.php" ?>
        <div class="page">
        <?php include "./includes/header.php" ?>
            <div class="mt-4 page-details" style="    overflow: scroll;">
               <form  method="post"  enctype="multipart/form-data">

                    <?php  
                    
                            if(isset($_GET["myDiaryId"])){
                             $myDiaryId = $_GET["myDiaryId"];


                            $fetchMyDiary = "select * from  content where id = '$myDiaryId' ";


                            $Query = mysqli_query($mysqli, $fetchMyDiary);	

                            $result = mysqli_fetch_assoc($Query);

                    
                    ?>

                    <h5 style="    padding-left: 1em;" >Edit Post</h5>
                    <hr>
                        <div class="page-name-container flex-row-between">
                           <h5><?php echo $result["Title"] ;  ?></h5> 
                        </div>
                        <div class="page-name-container flex-row-between">
                            <span><svg style="width: 2em;height: 2em; color: rgba(197, 179, 245, 0.781);" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14"></path>
                            </svg></span> 
                            <input style="    border: 1px solid;" type="text" name="diaryTitle" placeholder="Page Name" value="<?php echo $result["Title"] ;  ?>"class="page-name" >
                        </div>
                        <hr>
                        <div class="page-name-container flex-row-between">
                                    <img style="    width: 15em;height: 15em;" src="./assets/myDiaryImage/<?php echo  $result["Image"] ?>" alt="my diary picture" srcset="">
                        </div>

                        <div class="page-content-container">
                        <span><svg style="width: 2em;height: 2em; color: rgba(197, 179, 245, 0.781);" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14"></path>
                            </svg></span>
                            <input type="file" name="imageUpload" >
                        </div>

                        <hr>
                        <div class="page-name-container flex-row-between">
                           <p><?php echo $result["Description"] ;  ?></p> 
                        </div>
                        <div class="page-content-container">
                        <span><svg style="width: 2em;height: 2em; color: rgba(197, 179, 245, 0.781);" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14"></path>
                            </svg></span>
                            <textarea style="    border: 1px solid;height: 10em;" placeholder="Start Writing" class="diary-content" name="diaryDescription" id="diary-content"><?php echo $result["Description"]; ?></textarea>
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

                                            
                                            $sqlQuery = "UPDATE `content` SET `Title`='$diaryTitle',`Description`='$diaryDescription',`Image`='$fileName',`status`='updated',
                                            `Path`='$url_save' WHERE id = '$myDiaryId'  ";
                                            $Query = mysqli_query($mysqli, $sqlQuery);		
                                              // echo $sqlQuery;
                                            if($Query){
                                                   
                                                    echo "updated successfully!";


                                            }else{
                                                    echo "Something, please try again later!!!";
                                            }
                                        

                                    }else{

                                            $sqlQuery = "UPDATE `content` SET `Title`='$diaryTitle',`Description`='$diaryDescription',`status`='updated'
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


