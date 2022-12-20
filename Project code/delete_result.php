<?php

session_start();

$conn = mysqli_connect('localhost','tsakard1_Delta', 'Gumball12!', 'tsakard1_FA22_project');


if(isset($_POST['delete_button']))
{
    $productid = $_POST['productid'];

    $query = "DELETE FROM products WHERE productid='$productid' ";//change name to match DB
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Data Deleted Successfully";
        //echo 'data has be deleted';
        
        header("Delete_product.php");
    }
    else
    {
        $_SESSION['status'] = "Data Not Deleted";
        // echo 'data has not been deleted';
        
        header("Delete_product.php");
    }
}

?>
