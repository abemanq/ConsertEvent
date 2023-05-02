<?php 
    $conn = mysqli_connect('localhost', 'root', '','consert');
    $seat = $_POST['seat'];

    $sql_delete = "DELETE FROM seater WHERE seat='$seat'";
    $sql_result = mysqli_query($conn,$sql_delete) or die("Error in sql due to ".mysql_error());
  
    // $seats = mysqli_query($conn, $sql);
    if($sql_result){
        header("Location:event.php");
        echo "<script>alert('Succesfully delete seat section.')</script>";
    }
    else{
        echo "Error: " . mysqli_error($conn);
        echo "Error in inserting new data";
    }
    //buat condition kalau data dapat masukkan, head to event.php
    //buat javascript alert box bagitau yang sata dapat dimasukkan
?>