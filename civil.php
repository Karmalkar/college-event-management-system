

<?php require("header.php"); ?>
<!DOCTYPE html>

<html>

<head>
    <title>Cards</title>
    <link rel="stylesheet" href="events.css">
</head>

<body>

    <div class="head">
        <h1>CIVIL Department:</h1>
    </div>

    <?php



    $sql = "SELECT * FROM `comp_events` WHERE `catagory`='CIVIL'";

    $result = mysqli_query($con, $sql);
    $num = mysqli_num_rows($result);

    ?>


    <?php

    if ($num >= 0) {
        $row = mysqli_fetch_assoc($result);
    ?>
    <?php

    }

    ?>



    <!--other database name-->
    <?php
    for ($x = 1; $x <$num; $x++) {
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
                <div class="image" style="text-align: center; padding: 55px; color:white;  background-color: #754e4e;">
                    <?php echo  $eventname; ?>
                </div>
                <div class="title">

                    <!-- pop up for details -->

                    <div id="popups1?eventname=<?php echo  $eventname ?>" class="overlay">
                        <div class="popups">
                            <h2><?php echo  $eventname; ?></h2>
                            <a class="close" href="#">&times;</a>
                            <div class="content">
                                <br>
                                <h1 style="font-size:25px;color: grey; ">About event:</h1>
                                <h3 style="font-size:18px;"><?php echo  $row["des"]; ?> </h3>
                                <br>
                                <h1 style="font-size:25px;     color: grey;">Event Date:</h1>
                                <h3 style="font-size:18px;"><?php echo  $row["date"]; ?> </h3> <br>

                                <h1 style="font-size:25px;     color: grey;">Availble seats:</h1> <?php echo $seatavl; ?>
                                <div class="image" style=" color:white ;text-align: center; font-size:18px; background-color: #754e4e;">
                                    *For more details please contact to <?php echo  $eventname; ?> Commitee members.
                                    <h6 style="text-align: center; font-size:12px;">Contact no's are in committee section</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <style>
        .box {

            margin: 0 auto;
            background: rgba(255, 255, 255, 0.2);
            padding: 15px;
            border: 2px solid #fff;
            border-radius: 20px/50px;
            background-clip: padding-box;
            text-align: center;

        }

        .button {
            font-size: 1em;
            padding: 8px;
            color: #f7f7f7;

            text-decoration: none;
            cursor: pointer;
            background: #339833;
            transition: all 0.3s ease-out;
            font-family: auto;
            font-size: 20px;
        }




        .button:hover {
            background: #06D85F;
        }

        .overlay {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(0, 0, 0, 0.7);
            transition: opacity 500ms;
            visibility: hidden;
            opacity: 0;
        }

        .overlay:target {
            visibility: visible;
            opacity: 1;
        }

        .popups {
            margin: 70px auto;
            padding: 20px;
            background: #fff;
            border-radius: 5px;
            width: 30%;
            position: relative;
            transition: all 5s ease-in-out;
            /* padding: 20px;
            background: #fff;
            border-radius: 5px;
            width: 30%;
            position: relative;
            transition: all 5s ease-in-out; */
        }

        .popups h2 {
            margin-top: 0;
            color: #333;
            color: #af2121;
            font-family: Tahoma, Arial, sans-serif;
        }

        .popups .close {
            position: absolute;
            top: 20px;
            right: 30px;
            transition: all 200ms;
            font-size: 30px;
            font-weight: bold;
            text-decoration: none;
            color: #333;
        }

        .popups .close:hover {
            color: #06D85F;
        }

        .popups .content {
            max-height: 30%;
            overflow: auto;
        }

        @media screen and (max-width: 700px) {
            .box {
                width: 70%;
            }

            .popups {
                width: 70%;
            }
        }
    </style>




<!-- end -->

                    <!-- <h4 style="font-size: 15px;"> <?php echo  $row["des"]; ?> </h4> -->
                    <h2 style="font-size: 15px; padding:9px"> <?php echo  $row["date"]; ?> </h2>
                    <!-- <form action="register_event.php?<?php $eventname ?>" method="get"></form> -->
                    <!-- <input type="hidden" name="<?php $eventname ?>"> -->
                    <h1>Avilable Seats:<?php echo $seatavl; ?></h1>

                    <div class="box"><a class="button" href="#popups1?eventname=<?php echo  $eventname ?>">Details</a>


                        <a href="register_event.php?eventname=<?php echo  $eventname ?>">
                            <button type="submit" class="addbtn">Register</button></a>


                    </div>

                </div>
            </div>
    <?php

        }
    }
    ?>









</body>

</html>