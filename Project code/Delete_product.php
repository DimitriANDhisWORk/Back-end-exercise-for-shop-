<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Yu-Gi-Oh Card Shop</title>
    
    
</head>
<body>
   
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <?php
                    if(isset($_SESSION['status']))
                    {
                        ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                        unset($_SESSION['status']);
                    }
                ?>

                <div class="card mt-5">
                    <div class="card-header">
                        <h4>Delete Data from Database</h4>
                    </div>
                    <div class="card-body">

                        <form action="delete_result.php" method="POST">
                            <div class="froum-group mb-3">
                                <label for="">Deleteing row by ID</label>
                                <input type="text" name="productid" class="form-control">
                            </div>
                            <div class="froum-group mb-3">
                                <button type="submit" name="delete_button" class="btn btn-primary">Delete Data</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    
</body>
    <br/>
    <button onclick="history.back()">Go Back</button>
</html>