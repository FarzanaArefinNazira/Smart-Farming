<?php
  
  $db = mysqli_connect("localhost", "root", "", "doctor");

 
  $msg = "";

  
  if (isset($_POST['upload'])) {
  
  	$image = $_FILES['image']['name'];
  
  	

  	$target = "images/".basename($image);

  	$sql = "INSERT INTO doctorinfo (image) VALUES ('$image')";
  	
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  	
    header("location:Loginn.php");
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
  $result = mysqli_query($db, "SELECT * FROM  doctorinfo");
?>
<!DOCTYPE html>
<html>
<head>
<title>upload your uni</title>
<style type="text/css">
   #content{
   	width: 50%;
   	margin: 50px auto;
   	border: 1px solid #cbcbcb;
   }
   form{
   	width: 50%;
   	margin: 50px auto;
   }
   form div{
   	margin-top: 10px;
   }
   #img_div{
   	width: 80%;
   	padding: 5px;
   	margin: 15px auto;
   	border: 1px solid #cbcbcb;
   }
   #img_div:after{
   	content: "";
   	display: block;
   	clear: both;
   }
   img{
   	float: left;
   	margin: 5px;
   	width: 300px;
   	height: 140px;
   }
</style>
</head>
<body>

<div id="content">
 
  <form method="POST" action="uploadicard.php" enctype="multipart/form-data">
  	<input type="hidden" name="size" value="1000000">
  	<div>
       <p> <b>Donot upload any false icard .Otherwise you will have a  issue that banned your account</p>
  	  <input type="file" name="image">
  	</div>
  	
  	<div>
  		<button type="submit" name="upload" color="blue">Submit</button>
      <button type="cancel" name="upload" color="blue">Cancel</button>
    </div>
  	</div>
  </form>
</div>
</body>
</html>