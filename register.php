<?php
require_once('database.php');
?>


<!Doctype html>
	<html>
   <meta name="viewport" content="width=device-width, initial-scale=1">
	<head>

		<title> নিবন্ধন ফর্ম </title>
		  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	
	</head>
    <body>
    	<div>
    		<?php
    if(isset($_POST['create'])){
   
	$আপনারনাম=$_POST['আপনারনাম'];
	$মোবাইল=$_POST['মোবাইল'];
	$ইমেইল=$_POST['ইমেইল'];
	$ঠিকানা=$_POST['ঠিকানা'];
	$পাসওয়াড=$_POST['পাসওয়াড'];
	$sql= "INSERT INTO কৃষকতথ্য(আপনারনাম,মোবাইল , ইমেইল,ঠিকানা,পাসওয়াড ) VALUES(?,?,?,?,?)";
	$stmtinsert=$db->prepare($sql);
	$result=$stmtinsert->execute([$আপনারনাম,$মোবাইল,$ইমেইল, $ঠিকানা,$পাসওয়াড]);
	 if($result)
     {
     echo '<script>swal("আপনার নিবন্ধন সম্পন্ন হয়েছে। অনুগ্রহ করে লগিন করুন ")</script>';
     }
     else {
      echo 'There are error while saving data';
     }
    }
    ?>
</div>
    	<div class="Register">
        <form class="form" action="register.php" method="post">
        	<div class="new">
        	  <h1>   অনুগ্রহ করে নিচের ফরমটি পুরণ করেন  </h1>
        	</div>
       <div class="m"> 
        <label for="আপনারনাম"><b> আপনার নাম</b></label>
        <input type="text"  name="আপনারনাম" required>
        <label for=" মোবাইল"><b> মোবাইল নাম্বার</b></label>
        <input type="text"  name="মোবাইল" required>
         <label for=" ইমেইল"><b> ইমেইল </b></label>
        <input type="text"  name="ইমেইল">
        <div class="p">
        <label for="ঠিকানা"><b>ঠিকানা</b></label>
        <input type="text"  name="ঠিকানা" required>
    </div>
        <label for="পাসওয়াড"><b>পিন </b></label>
        <input type="password"  name="পাসওয়াড" required>
        <div class="b">
        <input class="btn" type= "submit" name="create" value="নিবন্ধন করুন">&nbsp&nbsp&nbsp
         <a href="index.php"input class="btn" type= "submit" name="create" value="বাদ দিন">
           <a href="Login.php"input class="btn" type= "submit" name="create" value="লগইন">
         

      </div>
      </form>
  </div>
</form>
</div>
</body>
	</html>
<style>

*{
	margin: 0px;
	padding: 0px;
}
body{
	background-image: url(mj.jpg);
	background-size: cover;
	font-family: sans-serif;
	display: flex;
	align-items: center;
	justify-content: center;
	height: 150vh;
	margin-left:80px;


}
.Register{

	width: 330px;
	height: 500px;
	border: 5px solid blue;
	padding: 30px;
	outline: none;
	background: rgba(135, 206 , 235);

}
.form{
	color: black;

}
.new{
     margin-right: 10px;
     font-size: 11px;
     color: #C70039 ;
}
.m{
margin-top: 15px;

}
.m input{
	width: 90%;
	background: white;
	padding: 5px;
	border: 2x solid black;
	border-radius: 5px;



}
.p input{
	padding: 10px;
	width: 87%;
}
.b{
	display: inline-flex;
	padding: 8px;
	margin-top: 14px;
	border-color: black;




}
.b input{
	background-color: darkgreen;
	color: white;
}
</style>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


