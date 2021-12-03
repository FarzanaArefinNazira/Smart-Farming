<?php 
  
$user = 'root'; 
$password = '';  
  

$database = 'কৃষক';  
  
$servername='localhost'; 
$mysqli = new mysqli($servername, $user,  
                $password, $database); 
  

if ($mysqli->connect_error) { 
    die('Connect Error (' .  
    $mysqli->connect_errno . ') '.  
    $mysqli->connect_error); 
} 
  

$sql = "SELECT * FROM orders ORDER BY id ASC "; 
$result = $mysqli->query($sql); 
$mysqli->close();  
?> 
 
<!DOCTYPE html> 
<html lang="en"> 
  
<head> 
    <meta charset="UTF-8"> 
    <title>অরডার হিস্টোরি</title> 
   
    <style> 
        table { 
            margin: 0 auto; 
            font-size: large; 
            border: 1px solid black; 
        } 
  
        h1 { 
            text-align: center; 
            color: #006600; 
            font-size: xx-large; 
            font-family: 'Gill Sans', 'Gill Sans MT',  
            ' Calibri', 'Trebuchet MS', 'sans-serif'; 
        } 
  
        td { 
            background-color: #E4F5D4; 
            border: 1px solid black; 
        } 
  
        th, 
        td { 
            font-weight: bold; 
            border: 1px solid black; 
            padding: 10px; 
            text-align: center; 
        } 
  
        td { 
            font-weight: lighter; 
        } 
    </style> 
</head> 
  
<body> 
    <section> 
        <h1></h1> 
        
        <table> 
            <tr> 
                <th>নাম</th> 
                <th>ইমেইল</th> 
                <th>ফোন</th> 
                <th>ঠিকানা</th> 
               <th>টাকা পরিশোধ করার মাধ্যম</th>
               <th>পণ্য</th>
               <th>টাকা</th>
        

                
                

            </tr> 
            
            <?php   
                while($rows=$result->fetch_assoc()) 
                { 
             ?> 
            <tr> 
                <!--FETCHING DATA FROM EACH  
                    ROW OF EVERY COLUMN--> 
                <td><?php echo $rows['name'];?></td> 
                <td><?php echo $rows['email'];?></td> 
                <td><?php echo $rows['phone'];?></td> 
               
                 <td><?php echo $rows['address'];?></td> 
                 <td><?php echo $rows['pmode'];?></td> 
                  <td><?php echo $rows['products'];?></td> 
                 <td><?php echo $rows['amount_paid'];?></td> 
          
          
            </tr> 
            <?php 
                } 
             ?> 
        </table> 
    </section> 
</body> 
  
</html> 