<?php
   include "server.php";
   
   $select_numbers_tickets = "SELECT * FROM register WHERE active='1'";
   $query = mysqli_query($conn,$select_numbers_tickets);

   $count = mysqli_num_rows($query);
   echo $count;

   // while ($row = mysqli_fetch_assoc($query)) {
   //  echo $row["id"];
   //  echo $row["name"];
   //  echo $row["class"];
   //  echo "\n";
   // }
   

?>