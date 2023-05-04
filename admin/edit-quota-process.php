<?php 
    $conn = mysqli_connect('localhost', 'root', '','consert');
    $quota = $_POST['quota'];

    $edit_sql = "UPDATE quotas SET quota='$quota', id=NULL";
    // $seats = mysqli_query($conn, $sql);
    if(mysqli_query($conn,$edit_sql)){
        header("Location:event.php");
        echo "<script>alert('Succesfully update seat section.')</script>";
    }
    else{
        echo "Error: " . mysqli_error($conn);
        echo "Error in inserting new data";
    }
    //buat condition kalau data dapat masukkan, head to event.php
    //buat javascript alert box bagitau yang sata dapat dimasukkan
?>