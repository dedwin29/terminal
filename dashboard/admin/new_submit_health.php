<?php
require '../../include/db_conn.php';
page_protect();
if (isset($_POST['h_id'])) {

    $name    = rtrim($_POST['name']);
    $date1    = rtrim($_POST['date1']);
    $bodyfat    = rtrim($_POST['bodyfat']);
    $water    = rtrim($_POST['water']);
    $muscle    = rtrim($_POST['muscle']);
    $calorie    = rtrim($_POST['calorie']);
    $bone    = rtrim($_POST['bone']);
    $remarks    = rtrim($_POST['remarks']);


    $h_id = $_POST['h_id'];

    mysqli_query($con, "INSERT INTO healthstatus (id,name,date1,bodyfat,water,muscle,calorie,bone,remarks)
VALUES ('$h_id','$name','$date1','$bodyfat','$water,'$muscle,'$calorie,'$bone','$remarks')");
    echo "<meta http-equiv='refresh' content='0; url=new_health_status.php'>";
} else {
    echo "<head><script>alert('Estado de Salud NOT Updated, Check Again');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=new_health_status.php'>";

}
?>
