<?php
require '../../include/db_conn.php';
page_protect();

$tid = $_POST['name'];
if (strlen($tid) > 0) {
    mysqli_query($con, "DELETE FROM trainers WHERE t_id ='$tid'");
    echo "<html><head><script>alert('Trainer Deleted');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=trainers_edit.php'>";
} else {
    echo "<html><head><script>alert('ERROR! Delete Opertaion Unsucessfull');</script></head></html>";
   echo "error".mysqli_error($con);
}

?>