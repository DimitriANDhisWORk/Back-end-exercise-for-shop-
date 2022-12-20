<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:index.php');
}









    $database_name = "tsakard1_FA22_project";
    



 








if (isset($_POST["add"])){
        if (isset($_SESSION['user_name'])){
            $item_array_id = array_column($_SESSION['user_name'],"productid");
            if (!in_array($_GET["productid"],$item_array_id)){
                $count = count($_SESSION['user_name']);
                $item_array = array(
                    'productid' => $_GET["productid"],
                    'productid' => $_POST["productid"],
                    'productname' => $_POST["productname"],
                    'price' => $_POST["price"],
                    'Quantity' => $_POST["Quantity"],
                    'Description' => $_POST["Description"],
                    
                );
                $_SESSION['user_name'][$count] = $item_array;
                echo '<script>window.location="user_page.php"</script>';
            }else{
                echo '<script>alert("Product is already Added to Cart")</script>';
                echo '<script>window.location="user_page.php"</script>';
            }
        }else{
            $item_array = array(
                'productid' => $_GET["productid"],
                'productid' => $_POST["productid"],
                
                'productname' => $_POST["productname"],
                'price' => $_POST["price"],
                'Quantity' => $_POST["Quantity"],
                'Description' => $_POST["Description"],
            );
            $_SESSION['user_name'][0] = $item_array;
        }
    }

    if (isset($_GET["action"])){
        if ($_GET["action"] == "delete"){
            foreach ($_SESSION['user_name'] as $keys => $value){
                if ($value["productid"] == $_GET["productid"]){
                    unset($_SESSION['user_name'][$keys]);
                    echo '<script>alert("Product has been Removed...!")</script>';
                    echo '<script>window.location="user_page.php"</script>';
                }
            }
        }
    }









































?>





<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>

   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Titillium+Web');

        *{
            font-family: 'Titillium Web', sans-serif;
        }
        .product{
            border: 1px solid #eaeaec;
            margin: -1px 19px 3px -1px;
            padding: 10px;
            text-align: center;
            background-color: #efefef;
        }
        table, th, tr{
            text-align: center;
        }
        .title2{
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }
        h2{
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }
        table th{
            background-color: #efefef;
        }
    </style>
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>Welcome to the CardShop!!!</h3>
      <h1>welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
      <p> </p>
      
      <a href="index.php" class="btn">login</a>
      
      
      
      <a href="logout.php" class="btn">logout</a>
      
      
      
      <a href="ordersearch.html" class="btn">Order search</a>
   </div>

</div>


























<div class="container" style="width: 65%">
        <h2>Store items</h2>
        <?php
            $query = "SELECT * FROM products ORDER BY productid ";
            $result = mysqli_query($conn,$query);
            if(mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_array($result)) {

                    ?>
                    <div class="col-md-3">

                        <form method="post" action="orderpage.php?action=add&id=<?php echo $row["productid"]; ?>">

                            <div class="product">
                                
                                <h5 class="text-info"><?php echo $row["productname"]; ?></h5>
                                <label for="price">price:</label>
                                <h5 class="text-danger"><?php echo $row["price"]; ?></h5>
                                
                                
                                
                                
                                <label for="Description">Description:</label>
                                
                                <h5 class="text-info"><?php echo $row["Description"]; ?></h5>
                                
                                
                                
                                <label for="productid">productid:</label>
                                <h5 class="text-info"><?php echo $row["productid"]; ?></h5>
                                
                                
                                
                                 <label for="Quantity">Quantity:</label>
                                <h5 class="text-info"><?php echo $row["Quantity"]; ?></h5>
                                
                                
                                
                                <input type="hidden" name="productname" value="<?php echo $row["productname"]; ?>">
                                
                                
                                
                                
                                <input type="hidden" name="price" value="<?php echo $row["price"]; ?>">
                                 
                                 
                                 
                                <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-success" 
                                       value="Add to Cart">
                            </div>
                        </form>
                    </div>
                    <?php
                }
            }
        ?>



 
 
 



























</body>
</html>