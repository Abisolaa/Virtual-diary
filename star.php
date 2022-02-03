<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Star Diary</title>
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

                                            
                                                <div class="page-name-container flex-row-between">
                                                <h5><?php echo $result["Title"] ;  ?></h5> 
                                                </div>
                                                <div class="form-group">
                                                   
                                                    <input class="form-control" style="    border: 1px solid;" type="text" name="diaryTitle" placeholder="Page Name" value="<?php echo $result["Title"] ;  ?>"class="page-name" >
                                                </div>

                                                <br>
                                                
                                                <div class="page-name-container flex-row-between">
                                                            <img style="    width: 15em;height: 15em;" src="./assets/myDiaryImage/<?php echo  $result["Image"] ?>" alt="my diary picture" srcset="">
                                                </div>

<br>
                                               

                                        <div class="form-group page-name-container flex-row-between"> 
                                                                    <button id="payment-button"  class="btn btn-primary "  name="update" type="submit">
                                                                    <span id="payment-button-amount">Star</span>
                                                                    </button> 
                                                                    <?php 
                                        
                                        
                                            if(isset($_POST["update"])){
                                                $diaryTitle = $_POST["diaryTitle"];
                                                
                                                if (! empty($diaryTitle) ) {

                                                                
                                                                $sqlQuery = "UPDATE `content` SET `Title`='$diaryTitle' 
                                                                 WHERE id = '$myDiaryId'  ";
                                                                $Query = mysqli_query($mysqli, $sqlQuery);		
                                                                // echo $sqlQuery;
                                                                if($Query){
                                                                    
                                                                        echo "Stared successfully!";

                                                                }else{
                                                                        echo "Something, please try again later!!!";
                                                                }
                                                            

                                                        

                                                }

                                            }

                                        ?>
                  </div>                           

                                        <?php } ?>


                                    
                                    </form>
                </div>
                <div class="col-lg-6">
                    
                      <?php include "./includes/posts_.php" ?>

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


