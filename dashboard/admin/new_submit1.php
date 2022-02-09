<?php
require '../../include/db_conn.php';
page_protect();

 $trainid=$_POST['train_id'];
 $uname=$_POST['train_name'];
 $email=$_POST['train_email'];
 $pass=$_POST['train_password'];
 $age=$_POST['train_age'];
 $special=$_POST['train_special'];
 $city=$_POST['t_city'];
 $province=$_POST['t_province'];
 $barangay=$_POST['t_barangay'];
 $zipcode=$_POST['t_zipcode'];
 $gender=$_POST['gender'];
 $dob=$_POST['dob'];
 $phn=$_POST['mobile'];
 $jdate=$_POST['jdate'];



//inserting into trainers table
$query="insert into trainers(t_id,t_name,t_email,t_pass,t_age,t_specialize,t_gender,t_dob,t_mobile,joining_date) values('$trainid','$uname','$email','$pass','$age','$special','$gender','$dob','$phn','$jdate')";
if(mysqli_query($con,$query)==1){

            $query5="insert into trainer_address(id,barangay,province,city,zipcode) values('$trainid','$barangay','$province','$city','$zipcode')";
            if(mysqli_query($con,$query5)==1){
             echo "<head><script>alert('Member Added ');</script></head></html>";
             echo "<meta http-equiv='refresh' content='0; url=new_trainer.php'>";
            }
            else{
                echo "<head><script>alert('Member Added Failed');</script></head></html>";
               echo "error: ".mysqli_error($con);
               //Deleting record of users if inserting to enrolls_to table failed to execute
               $query3 = "DELETE FROM trainers WHERE t_id='$trainid'";
               mysqli_query($con,$query3);
            }
          }
  else{
      echo "<head><script>alert('Member Added Failed');</script></head></html>";
      echo "error: ".mysqli_error($con);
    }

?>
