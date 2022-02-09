<?php
require '../../include/db_conn.php';
page_protect();
    
            $uid            =$_POST['t_id'];
            $name           =$_POST['t_name'];
            $age            =$_POST['t_age'];
            $dob            =$_POST['t_birthday'];
            $uname          =$_POST['t_uname'];
            $pass	        =$_POST['t_pass'];         
            $special        =$_POST['t_specialize'];
            $rout	        =$_POST['t_routine'];
            $address	    =$_POST['t_address'];
            $gender	        =$_POST['t_gender'];  
            $email      	=$_POST['t_email'];
            $contact	    =$_POST['t_pno'];		      
    
            $query1="update trainers set t_name='".$name."',t_age='".$age."',t_birthday='".$dob."',t_uname='".$uname."',t_pass='".$pass."',t_specialize='".$special."' ,t_routine='".$rout."',t_address='".$address."',t_gender='".$gender."' ,t_email='".$email."',t_pno='".$contact."'  where t_id='".$uid."'";
   if(mysqli_query($con,$query1)){
   
   }else{
    echo "<html><head><script>alert('ERROR! Update Opertaion Unsucessfull');</script></head></html>";
    echo "error".mysqli_error($con);
   }
    

?>
