<php>  











</php> 



<html>
<head>
  <title>Order entry</title>
</head>

<body>
  <h1>Order page</h1>

  <form action="orderinsert.php" method="post">
    <table border="0">
      <tr>
        <td>Enter the products productid</td>
         <td><input type="text" name="productid" maxlength="13" size="13"></td>
      </tr>
      <tr>
        <td>Enter your email</td>
        <td> <input type="text" name="email" maxlength="30" size="30"></td>
      </tr>
      <tr>
        <td>Enter your telephone number</td>
        <td> <input type="text" name="phone" maxlength="60" size="30"></td>
      </tr>
      <tr>
        <td>Create a order id</td>
        <td><input type="text" name="orderid" maxlength="7" size="7"></td>
      </tr>
      <tr>
        <td colspan="2"><input type="submit" value="Register"></td>
      </tr>
    </table>
  </form>
</body>
</html>









