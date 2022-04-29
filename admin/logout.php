<?php session_start();
if(empty($_SESSION['id'])):
header('Location:index.php');
endif;
?>

<!DOCTYPE html>
<html>
<head>
<?php include('../includes/links.php');?>
<?php include('../includes/js.php');?>
<style>

.bg{
  background-image: linear-gradient(90deg,rgb(16, 16, 17), rgb(61, 48, 77))
}
.itext{
  color:#f3f3f3;
}
.loaders{
  margin-top: 12%;
}
.loader {
  border: 16px solid #f3f3f3;
  border-radius: 80%;
  border-top: 16px solid #3498db;
  border-bottom: 16px solid red;
  border-left: 16px solid  rgb(61, 48, 77);
  
  width: 140px;
  height: 140px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
  margin:auto;
  
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
</style>
</head>
<body class="bg">
<div style="width:100%;text-align:center;vertical-align:bottom" class="loaders">
		<div class="loader"></div>
<?php

	session_destroy();
	
 echo '<meta http-equiv="refresh" content="2;url=index.php">';
 
 echo'<span class="itext"> Please wait!, You are now signing out....</span>';
?>
</div>
</body>
</html>
