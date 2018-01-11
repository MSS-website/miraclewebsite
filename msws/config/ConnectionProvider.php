 <?php

 try {
 $conn = new PDO("mysql:host=192.168.1.131:3306;dbname=mswcm", "AppAdmin", "lokam001");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 } catch (PDOException $e) {
 	//echo 'Connection failed: ' . $e->getMessage();
 	
 	echo'<script> window.location="../../../../exception.php"; </script> ';
 	
 	
 }
   
?>
