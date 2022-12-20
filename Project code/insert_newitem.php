<html>
<head>
  <title>Card Shop Entry Results</title>
</head>
<body>
<h1>Card Shop insert Results</h1>
<?php
  // create short variable names
  $productid=$_POST['productid'];
  $productname=$_POST['productname'];
  
  $price=$_POST['price'];
  $Quantity=$_POST['Quantity'];
  $Description=$_POST['Description'];

  if (!$productid || !$productname ||  !$price || !$Quantity || !$Description ) {
     echo "You have not entered all the required details.<br />"
          ."Please go back and try again.";
     exit;
  }

  if (!get_magic_quotes_gpc()) {
    $productid = addslashes($productid);
    $productname = addslashes($productname);
    
    $price = doubleval($price);
    $Quantity= doubleval($Quantity);
    $Description = addslashes($Description);
  }

  @ $db = new mysqli('localhost', 'tsakard1_Delta', 'Gumball12!', 'tsakard1_FA22_project');

  if (mysqli_connect_errno()) {
     echo "Error: Could not connect to database.  Please try again later.";
     exit;
  }



  $query = "insert into products values
            ('".$productid."', '".$productname."', '".$price."', '".$Quantity."', '".$Description."')";
  $result = $db->query($query);
  
  
  
  
  

  if ($result) {
      echo  $db->affected_rows." products inserted into database.";
  } else {
  	  echo "An error has occurred.  The item was not added.";
  }

  $db->close();
?>
</body>
</html>
