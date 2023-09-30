<?php include_once"connect.php";

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM `photos` where id = $id";
    $result = mysqli_query($conn,$sql);

    if($result){
       header("location:dashboard.php");
    }
    else {

        die(mysqli_error($conn));
    }
    }


?>