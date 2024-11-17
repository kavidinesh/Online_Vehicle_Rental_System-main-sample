<?php
    require 'config.php';
?>
<?php
    $uid = $_POST['uid'];

    $query = "DELETE from user where user_id =$uid";

    $data = mysqli_query($conn, $query);

    if ($data) 
    {
        header("location: admin.php");
    } 
    else 
    {
        echo "<script>alert('Error in Delete')</script>";
    }
 //close the connection
 mysqli_close($conn);

?>