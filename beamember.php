<?php require("header.php");

   
   $user_data = check_user($con);
       
   $name = $user_data['user_name'];
   
 
 

   $query = "SELECT * FROM user where user_name ='$name'";
   $result = mysqli_query($con, $query);
   
   $row = mysqli_fetch_array($result);
      $prn =$row["prn"];
      echo $prn;
       
      
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     
    <title>Registration Form committee</title>
</head>

<body>


    <div class="container">
        <form method="POST">

            <h2 style="padding: 15px; color:white;" class="text-center">Registeration for committee</h2>
            <div class="row jumbotron">

                <div class="col-sm-6 form-group">



                    <label for="department">Commitee Name</label>
                    <select  id="committee_name"  name="committee_name" class="form-control custom-select browser-default">
                        <option value="ACES">ACES</option>
                        <option value="EUREKA">EUREKA</option>
                        <option value="CESA">CESA</option>
                        <option value="IEDC">IEDC</option>
                    </select>
                </div>
                <div class="col-sm-6 form-group">
                    <label for="name-f">PRN No.</label>
                    <input type="text" class="form-control" name="prn" id="prn"  value="<?php echo $prn; ?>" placeholder="Enter your first name." required>
                </div>
                <div class="col-sm-6 form-group">
                    <label for="name-f">First Name</label>
                    <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Enter your first name." required>
                </div>
                <div class="col-sm-6 form-group">
                    <label for="name-l">Last name</label>
                    <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Enter your last name." required>
                </div>
                <div class="col-sm-6 form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email." required>
                </div>
                 


                <div class="col-sm-6 form-group">
                    <label for="department">Department</label>
                    <select id= "department"  name="department" class="form-control custom-select browser-default">
                        <option value="cse">cse</option>
                        <option value="entc">ENTC</option>
                        <option value="mech">MECHANICAL</option>
                        <option value="chemical">chemical</option>
                    </select>
                </div>

                <div class="col-sm-6 form-group">
                    <label for="department">Year</label>
                    <select name="year" id="year" class="form-control custom-select browser-default">
                        <option value="First">First year</option>
                        <option value="Second">Second Year</option>
                        <option value="Third">Third year</option>
                        <option value="Forth">Forth year</option>
                    </select>
                </div>
                
                <div class="col-sm-6 form-group">
                    <label for="sex">Gender</label>
                    <select id="gender" name="gender" class="form-control browser-default custom-select">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="unspesified">Unspecified</option>
                    </select>
                </div>

                <div class="col-sm-4 form-group">
                    <label for="tel">Phone</label>
                    <input type="tel" name="phone" class="form-control" id="phone" placeholder="Enter Your Contact Number." required>
                </div>

                

                <div class="col-sm-12 form-group mb-0">
                    <button  style="margin:1px"; class="btn btn-primary float-right">Submit</button>
                    <a class="btn btn-dark float-right padding:2px" href="comitiee.php">Go Back</a>
                </div>
           
            </div>
        </form>
    </div>


</body>

</html>

<style>
    label {
        font-weight: 600;
        color: #555;
    }

    body {
        background-color: #a486d4;
        ;
    }
</style>




//submiy


<?php
if($_SERVER['REQUEST_METHOD'] == "POST")
{
  
 $committee_name =$_POST['committee_name'];
  $firstName = $_POST['firstname'];
  $lastName = $_POST['lastname'];
  $email = $_POST['email'];
  $gender=$_POST['gender'];
  $department=$_POST['department'];
  $year=$_POST['year'];
  $phone =$_POST['phone'];
 
  
  
  
 

    //save to database 
 
    $res = "INSERT INTO `committee`(`prn`, `first_name`, `lastname`, `committee_name`, `phone`, `year`, `department`, `gender`, `email` )
             VALUES ('$prn','$firstName' , '$lastName ','$committee_name','$phone','$year','$department','$gender','$email')";
 
    mysqli_query($con, $res);
    if ($res) {

        echo '<script type="text/javascript">'; 
echo 'alert("Thanks for showing your interest");'; 
echo 'alert("Department will notify you shortly! ");'; 
echo 'window.location.href = "index.php";';
echo '</script>';
    }

}	

?>