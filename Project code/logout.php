
<?php

@include 'config.php';

session_start();
session_unset();
session_destroy();


 header("Location: index.php");
?>










<html>
<head>
  
</head>

<body>
  
<button onclick="index.php">Go to home</button>

 
</body>
</html>




