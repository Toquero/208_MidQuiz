<?php 
    try {
        $conn = mysqli_connect('localhost','root','','SD208_Midterm');
      }
       catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
      }
?>