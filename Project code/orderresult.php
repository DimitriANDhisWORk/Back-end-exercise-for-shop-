<html>
<head>
  <title>Order Search Results</title>
</head>
<body>
<h1>Order Results</h1>
<?php
  // create short variable names
  $searchtype=$_POST['searchtype'];
  $searchterm=trim($_POST['searchterm']);

  if (!$searchtype || !$searchterm) {
     echo 'You have not entered search details.  Please go back and try again.';
     exit;
  }

  if (!get_magic_quotes_gpc()){
    $searchtype = addslashes($searchtype);
    $searchterm = addslashes($searchterm);
  }

   @ $db = new mysqli('localhost', 'tsakard1_Delta', 'Gumball12!', 'tsakard1_FA22_project');

  if (mysqli_connect_errno()) {
     echo "Error: Could not connect to database.  Please try again later.";
     exit;
  }

  $query = "select * from orders where ".$searchtype." like '%".$searchterm."%'";
  $result = $db->query($query);

  $num_results = $result->num_rows;

  echo "<p>Number of orders found: ".$num_results."</p>";

  for ($i=0; $i <$num_results; $i++) {
     $row = $result->fetch_assoc();
     echo "<p><strong>".($i+1).". productid: ";
     echo htmlspecialchars(stripslashes($row['productid']));
     echo "</strong><br />email: ";
     echo stripslashes($row['email']);
     echo "<br />phone: ";
     echo stripslashes($row['phone']);
     echo "<br />orderid: ";
     echo stripslashes($row['orderid']);
     echo "</p>";
  }

  $result->free();
  $db->close();

?>
</body>
</html>