<?php
   
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'কৃষক');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
  
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 

      
      $mymobile = mysqli_real_escape_string($db,$_POST['মোবাইল']);
      $password = mysqli_real_escape_string($db,$_POST['পাসওয়াড']); 
      
      $sql = "SELECT আইডী FROM  কৃষকতথ্য  WHERE মোবাইল = '$mymobile' and পাসওয়াড = '$password'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     
      
      $count = mysqli_num_rows($result);
      
 

		
      if($count == 1) {
       
         $_SESSION['login_user'] = $mymobile;
         
         header("location: home.php");
      }else {
         $error = "ভুল";
      }
   }
?>
<html>
   
   <head>
      <title>Login Page</title>
      
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
         }
      </style>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>প্রবেশ করুন</b></div>
				
            <div style = "margin:30px">
               
               <form action = "" method = "post">
                  <label>মোবাইল  :</label><input type = "text" name = "মোবাইল" class = "box"/><br /><br />
                  <label>পাসওয়াড :</label><input type = "password" name = "পাসওয়াড" class = "box" /><br/><br />
                  <input type = "submit" value = " জমা দিন  "/><br />
               </form>
               
              
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>

<style>

body{
   background-image: url('img7.jpg');
   background-size: cover;
    

}

</style>
