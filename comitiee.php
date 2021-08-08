<?php
//include auth_session.php file on all user panel pages
 
?>

 
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="admin/assets/css/normalize.css">
     <link rel="stylesheet" href="admin/assets/css/bootstrap.min.css">
     <link rel="stylesheet" href="admin/assets/css/font-awesome.min.css">
     <link rel="stylesheet" href="admin/assets/css/themify-icons.css">
     <link rel="stylesheet" href="admin/assets/css/pe-icon-7-filled.css">
     <link rel="stylesheet" href="admin/assets/css/flag-icon.min.css">
     <link rel="stylesheet" href="admin/assets/css/cs-skin-elastic.css">
     <link rel="stylesheet" href="admin/assets/css/style.css">
     <link rel="stylesheet" href="admin/assets/css/extra.scss">
     <link rel="stylesheet" href="admin/assets/css/users.css">
     <script src="admin/assets/js/users.js"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

     <title>Document</title>
 </head>

 <body>
     <?php
        require("header.php");


        ?>
        <a href="beamember.php">
         <div class="center">


             <button   type="button" class="btn btn-warning  btn-lg">BE A member</button>
         </div>
     </a>
<style>
    .center {
  margin: auto;
  width: 50%;
 
  padding: 10px;
}
</style>


     <?php


        $query = "SELECT `committee_name` FROM `committee` WHERE 1";
        $result = mysqli_query($con, $query);
        // $row = mysqli_fetch_array($result);
        $nu = mysqli_num_rows($result);




        for ($x = 0; $x < $nu; $x++) {
            if ($nu >= 0) {
                $ro = mysqli_fetch_assoc($result); ?>
             <!-- <button style="float: left;">  <?php echo $ro["committee_name"]; ?></button> -->
             <?php


                ?>
             <?php
                $ename = $ro["committee_name"];

                // $sql = "select * from registeration order by event_name asc";
                $sql = "select * from committee where committee_name='$ename'";
                $res = mysqli_query($con, $sql);
                ?>

             <div class="content pb-0">
                 <div class="orders">
                     <div class="row">
                         <div class="col-xl-12">
                             <div class="card">
                                 <div class="card-body">
                                     <h4 class="box-title">Registeration Of <?php echo $ename; ?></h4>
                                 </div>
                                 <div class="table_responsive">
                                     <!-- <div class="btn">
                                        <button id="open-popup-1">ADD Event</button>
                                    </div> -->

                                 </div>


                                 <div class="card-body--">
                                     <div class="table-stats order-table ov-h">
                                         <table class="table ">
                                             <thead>
                                                 <tr>

                                                     <th>prn</th>
                                                     <th>committee Name</th>
                                                     <th>Name</th>
                                                     <!-- <th>Email</th> -->
                                                     <th>mobile no</th>

                                                     <th></th>
                                                 </tr>
                                             </thead>
                                             <tbody>
                                                 <?php
                                                    $i = 1;
                                                    while ($row = mysqli_fetch_assoc($res)) { ?>
                                                     <tr>
                                                         <td><?php echo $row['prn'] ?></td>
                                                         <td><?php echo $row['committee_name'] ?></td>
                                                         <td><?php echo $row['first_name'] . " " . $row['lastname'] ?></td>
                                                         <td><?php echo $row['phone'] ?></td>


                                                         <td>


                                                         </td>
                                                     </tr>
                                                 <?php } ?>
                                             </tbody>
                                         </table>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
     <?php
            }
        } ?>


     <style>
          

         body {
             background-color: #a486d4;
             ;
         }
     </style>


     <!-- popup form -->


     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>




     <div class="container">
         <div class="row">
             <!-- <a href="#"> <button class="btn btn-warning"> <i class="fa fa-chevron-left"></i> BE A MEMBER</button></a> -->


         </div>