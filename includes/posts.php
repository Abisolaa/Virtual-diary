


<div class="row">
            <div class="px-2">
                <div class="flex-row-between py-2">
                    <h4>Read </h4>
                    <div class="add-page-btn">
                       <a href="addPost.php?valid=false">
                          <svg style="width: 2em; height: 2em;" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                       </a>
                    </div>
                </div>
                <div>
                <form  method="post">
                      <input type="search" name="keywith"  placeholder="Input secret key to view content ">
                      <button type="submit" name="viewContent" class="btn btn-primary">
                              view content
                          </button>
                    </form>
                </div>
            </div>
            <div class="text-sm-bold px-2 pt-4 pb-2">Recent</div>
            <div class="px-2 pages-list">
            
                    
                <?php


if(isset($_POST["viewContent"])){
    $key = base64_encode($_POST["keywith"]);

    $fetchMyDiary = "select * from  secret_key where user_id = '$loggedInUser' and keyy = '$key' ";

    $Query = mysqli_query($mysqli, $fetchMyDiary);		
                                

    $rowcount = mysqli_num_rows($Query); 


    if($rowcount > 0){

            echo "<script> window.location.replace('addPost.php?valid=true') </script>";
    }   else{
        echo "<b>Please your valid secret key</b>";
    }

}


                     $fetchMyDiary = "select * from  content where Userid = '$loggedInUser' ";


                     $Query = mysqli_query($mysqli, $fetchMyDiary);		
												  

                     $rowcount = mysqli_num_rows($Query); 


                     if($rowcount > 0){

                     

                        $valid = $_GET["valid"];


                        while ($row = mysqli_fetch_row($Query) ){
                        
                            // print_r($row[1]);
                
                ?>
                  
                  <a href="home.php?myDiaryId=<?php echo $row[0];?>&valid='true' " style="    color: #fff;text-decoration: none;">
                        <div class="pages-list-item p-2">
                                <div class="page-list-item-title"><?php  echo ($valid == "false") ? $row[1] : base64_decode($row[1])?> ❤️</div>
                                <span class="page-list-item-content"><?php echo ($valid == "false") ? $row[2] : base64_decode($row[2]) ?></span>
                        </div>
                         <hr>
                  </a>
                    
                <?php }

                     }else{

                            echo  " <br> <i> <h6> How was your day? Please lets hear from you today 😀. </h6> </i>";

                     }
                
                        
                
                ?>

                <div class="text-sm-bold text-center px-2 pt-4 pb-2">Keep Writing More Pages</div>
            </div>
        </div>