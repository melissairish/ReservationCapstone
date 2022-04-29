<?php include 'header.php';?>


<body class = "admin_body" style = "    background-image: linear-gradient(90deg,rgb(16, 16, 17), rgb(61, 48, 77));">

<div class="lockscreen-wrapper">
  <div class="lockscreen-logo">
    
    <a style = "color:white;" href="../index.php">Piggy Wings</a>
  </div>
  <!-- User name -->
  <div class="lockscreen-name">Administrator</div>

  <!-- START LOCK SCREEN ITEM -->
  <div class="lockscreen-item">
    <!-- lockscreen image -->
    <div class="lockscreen-image">
      <img src="../img/admin.png" alt="User Image">
    </div>
    <!-- /.lockscreen-image -->

    <!-- lockscreen credentials (contains the form) -->
    <form class="lockscreen-credentials" action = "login.php"method = "POST">
      <div class="input-group">
        <input type="hidden" name = "username" class="form-control" placeholder="username" value = "admin">
        <input type="password" name = "password" class="form-control" placeholder="Enter Password" autofocus>

        <div class="input-group-btn">
          <button name = "login"class="btn"><i class="fa fa-arrow-right "></i></button>
        </div>
      </div>
    </form>
	
	
	
    <!-- /.lockscreen credentials -->

  </div>
	
		

<!-- JS -->
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>