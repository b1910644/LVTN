<?php 
    session_start();
    $id = $_GET['id'];
    require "../connect.php";
    if(isset($id)){
        $check_product = "DELETE FROM product where prod_id = '$id'";
        $res = mysqli_query($con, $check_product);
        echo "<script type='text/javascript'>alert('This product was deleted!'); location.href='adminProductMange.php'</script>";
    }
    else {
        echo "<script type='text/javascript'>alert('This product was not exist in store!');</script>";
    }
?>