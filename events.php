<?php

require("header.php"); ?>
<!DOCTYPE html>
<html>

<head>
   <title>Cards</title>
   <link rel="stylesheet" href="events.css">
</head>

<body>


   <div class="head">
      <h1>DEPARTMENT</h1>
   </div>




   <div class="main">

      <!--cards -->

      <div class="card">

         <div class="image">
            <img src="images\img\1.gif">
         </div>
         <div class="title">
            <a style=" text-decoration: none" href="computer.php">
               <h1>
                  Computer Science</h1>
            </a>
         </div>

      </div>
      <!--cards -->


      <div class="card">

         <div class="image">
            <img src="images\img\3.gif">
         </div>
         <div class="title">
         <a style=" text-decoration: none" href="mech.php">
               <h1>
                  MECHANICAL  </h1>
            </a>
         </div>

      </div>
      <!--cards -->


      <div class="card">

         <div class="image">
            <img src="images\img\4.gif">
         </div>
         <div class="title">
         <a style=" text-decoration: none" href="civil.php">
               <h1>
                  CIVIL  </h1>
            </a>
         </div>

      </div>
      <!--cards -->


      <div style=" text-decoration: none" class="card">

         <div class="image">
            <img src="images\img\5.gif">
         </div>
         <div class="title">
         <a style=" text-decoration: none" href="entc.php">
               <h1 style=" text-decoration: none">
                  ELECTRONICS  </h1>
            </a>
         </div>

      </div>
      <!--cards -->

      <div class="head">
         <h1>OTHER</h1>
      </div>

      <?php
      include("connection.php");


      $sql = "SELECT * FROM `comp_events` WHERE `catagory`='other'";

      $result = mysqli_query($con, $sql);
      $num = mysqli_num_rows($result);


      ?>


      <?php
      for ($x = 0; $x < $num; $x++) {
         if ($num >= 0) {
            $row = mysqli_fetch_assoc($result);


      ?>
            <div class="card">
               <?php
               $eventname = $row["comp_events"];
               $seats = $row["seat"];
               $qq = "SELECT * FROM `registeration`  WHERE `event_name`='$eventname'";
               $que = mysqli_query($con, $qq);
               $no = mysqli_num_rows($que);
               $seatavl = $seats - $no;


               ?>

               <div class="image" style="text-align: center; padding: 55px; color:white;  background-color: #501010;">
                  <?php echo  $eventname; ?>
               </div>
               <div class="title">


                  <h4 style="font-size: 15px;"> <?php echo  $row["des"]; ?> </h1>
                     <h4 style="font-size: 15px;"> <?php echo  $row["date"]; ?> </h1>
                        <!-- <form action="register_event.php?<?php $eventname ?>" method="get"></form> -->
                        <!-- <input type="hidden" name="<?php $eventname ?>"> -->
                        <h1>Avilable Seats:<?php echo $seatavl; ?></h1>

                        <a href="register_event.php?eventname=<?php echo $eventname ?>">
                           <button type="submit" class="addbtn" style="color:alice;">Register</button></a>
               </div>
            </div>
      <?php

         }
      }
      ?>

      <!--other database name-->




</body>

</html>