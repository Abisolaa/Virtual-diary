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
            <div class="flex-row-between px-4">
                <h4>Good Afternoon, Aridunnu</h4>
                <div class="icon-btn">
                    <svg style="width: 1.5em; height: 1.5em" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                </div>
            </div>
            <div class="mt-4 page-details">
                <h5 style="    padding-left: 1em;" >Edit Post</h5>
                <div class="page-name-container flex-row-between">
                    <span><svg style="width: 2em;height: 2em; color: rgba(197, 179, 245, 0.781);" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14"></path></svg></span><input type="text" placeholder="Page Name" value="Page 1"class="page-name" >
                </div>
                <div class="page-content-container">
                    <textarea placeholder="Start Writing" class="diary-content" name="diary-content" id="diary-content"></textarea>
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


