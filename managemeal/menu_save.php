<?php 

if (isset($_POST['create'])) {
    include('../includes/dbcon.php');

	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$pname = $_POST['pname'];
	$pprice = $_POST['pprice'];
	$pdesc = $_POST['pdesc'];
    $file = $_FILES['file']["name"];
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['error'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    $allowed = array('jpg','jpeg','png');
    if(in_array($fileActualExt,$allowed)){
        if($fileError === 0){
            if($fileSize < 1000000){
                $fileNameNew = uniqid('', true).".".$fileActualExt;
                $fileDestination = "../images/menu/".$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                
                // header("Location: ../managemeal/menu.php?uploadsuccess");

            }else{
                echo 'Youre too big!';
            }
        }else{
            echo 'There was an error uploading your file';
        }
        mysqli_query($con,"INSERT INTO pmenu(pname,pprice,pdesc,imgfile) 
        VALUES('$pname','$pprice','$pdesc','$file')")or die(mysqli_error());  
        echo "<script type='text/javascript'>alert('Successfully added new menu!');</script>";
        echo "<script>document.location='combomeal.php'</script>";   
    }
    else{
        echo 'You cannot upload files of this type';
    }

}
    
//READ DATA
include('../includes/dbcon.php');
$sql =  "SELECT * FROM pmenu ORDER BY pid DESC";
$result = mysqli_query($con, $sql);

?>
