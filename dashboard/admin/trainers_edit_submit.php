<?php
require '../../include/db_conn.php';
page_protect();
    

   $tid             =$_POST['t_id'];
   $name            =$_POST['t_name'];
   $email           =$_POST['t_emai'];
   $password        =$_POST['t_pass'];
   $age             =$_POST['t_age'];
   $specialization  =$_POST['t_specialize'];
   $city            =$_POST['city'];
   $province        =$_POST['province'];
   $barangay        =$_POST['barangay'];
   $zipcode         =$_POST['zipcode'];
   $gender          =$_POST['t_gender'];
   $dob             =$_POST['t_dob'];
   $mobile          =$_POST['t_mobile'];
   $jdate           =$_POST['joining_date'];

    $query1="update trainers set t_name='".$name."',t_email='".$email."',t_pass='".$password."',t_age='".$age."',t_specialize='".$specialization."',t_gender='".$gender."',t_dob='".$dob."',t_mobile='".$mobile."',joining_date='".$jdate."' where t_id='".$tid."'";
   if(mysqli_query($con,$query1)){
     $query2="update trainer_address set barangay='".$barangay."',province='".$province."',city='".$city."',zipcode='".$zipcode."' where id ='".$tid."'";
     if(mysqli_query($con,$query2)){
            echo "<html><head><script>alert('Member Update Successfully');</script></head></html>";
            echo "<meta http-equiv='refresh' content='0; url=trainers_view.php'>";
        }else{
             echo "<html><head><script>alert('ERROR! Update Opertaion Unsucessfull');</script></head></html>";
             echo "error".mysqli_error($con);
        }
   }else{
    echo "<html><head><script>alert('ERROR! Update Opertaion Unsucessfull');</script></head></html>";
    echo "error".mysqli_error($con);
   }
    

?>
