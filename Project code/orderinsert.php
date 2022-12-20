  <title>Order results Results</title>
</head>
<body>
<h1> Order results</h1>
<?php
  // create short variable names
  $productid=$_POST['productid'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $orderid=$_POST['orderid'];

  if (!$productid || !$email || !$phone || !$orderid) {
     echo "You have not entered all the required details.<br />"
          ."Please go back and try again.";
     exit;
  }

  if (!get_magic_quotes_gpc()) {
    $productid = addslashes($productid);
    $email = addslashes($email);
    $phone = addslashes($phone);
    $orderid = doubleval($orderid);
  }

  @ $db = new mysqli('localhost', 'tsakard1_Delta', 'Gumball12!', 'tsakard1_FA22_project');

  if (mysqli_connect_errno()) {
     echo "Error: Could not connect to database.  Please try again later.";
     exit;
  }

  $query = "insert into orders values
            ('".$productid."', '".$email."', '".$phone."', '".$orderid."')";
  $result = $db->query($query);

  if ($result) {
      echo  $db->affected_rows." order inserted into database.";
  } else {
  	  echo "An error has occurred.  The order was not added.";
  }

  $db->close();
?>
</body>
</html>