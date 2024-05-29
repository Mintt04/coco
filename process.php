<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PSP PC-Shop Buying Form</title>
<style>
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 20px;
  background-color: #f2f2f2;
}

header {
  text-align: center;
  background-color: #ff69b4;
  color: #fff;
  padding: 20px 0;
  margin-bottom: 20px;
}

form {
  max-width: 100%;
  margin: 0 auto;
  background-color: #fff;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

label {
  display: block;
  margin-bottom: 5px;
}

input[type="text"],
input[type="email"],
textarea {
  width: calc(100% - 12px);
  padding: 8px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

input[type="number"] {
  width: 80px;
  padding: 8px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

input[type="radio"],
input[type="checkbox"] {
  margin-right: 5px;
}

button[type="submit"],
button[type="reset"],
button[id="btnback"]{
  padding: 10px 20px;
  background-color: #4CAF50;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

button[type="submit"]:hover,
button[type="reset"]:hover,
button[id="btnback"]:hover {
  background-color: #45a049;
}

p {
  font-size: 0.9em;
  color: #888;
}

table, th, td {
  border: 1px solid rgb(198, 198, 198);
  border-collapse: collapse;
}

td{
  height: 50px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

.product-image {
  width: 100px;
  height: auto;
}
</style>
</head>
<body>

<header>
  <h1>Welcome to PSP PC-SHOP</h1>
</header>

<?php
// Retrieve customer details, quantity and payment method. Example as follow:
$fullname = $_POST["fullname"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$address = $_POST["address"];
//change string input date to time
$date = strtotime($_POST["date"]);

//a simple way to handle a default value if the checkbox is nott checked. Example as follow:
$item1 = $_POST["item1"] ?? 0;
$item2 = $_POST["item2"] ?? 0;
$item3 = $_POST["item3"] ?? 0;
$item4 = $_POST["item4"] ?? 0;
$item5 = $_POST["item5"] ?? 0;
$item6 = $_POST["item6"] ?? 0;

// Calculate sales for each product based on inclusion status. Example as follow:
$sales1 = $item1 ? $_POST["quantity1"] * 3999 : 0;
$sales2 = $item2 ? $_POST["quantity2"] * 2599 : 0;
$sales3 = $item3 ? $_POST["quantity3"] * 239 : 0;
$sales4 = $item4 ? $_POST["quantity4"] * 25.99 : 0;
$sales5 = $item5 ? $_POST["quantity5"] * 124 : 0;
$sales6 = $item6 ? $_POST["quantity6"] * 339 : 0;

//Calculate total sales
$totalsales = $sales1 + $sales2 + $sales3 + $sales4 + $sales5 + $sales6;

//if  else condition to give 5% discount when total sales above RM2000
if ($totalsales > 2000){
  $discount = $totalsales * 0.05;
}
else {
  $discount = 0;
}

//Calculate 6% tax that will charge to amount total sales and after discount
$tax = ($totalsales - $discount) * 0.06;

//calculate amount to be paid
$amount = $totalsales - $discount + $tax;
?>

<form id="myForm" method="post">
  <div>
    <table width="95%" border="1" align="center" style="background-color: #f7f7f7;">
        <tr>
            <th width="10%" align="left">Full Name: </th>
            <td><input type="text" name="fullname" style="width: 550px;" value="<?php echo $fullname; ?>" readonly></td>
        </tr>
        <tr>
            <th  align="left">Email: </th>
            <td><input type="email" name="email" style="width: 550px;" value="<?php echo $email; ?>" readonly></td>
        </tr>
        <tr>
            <th  align="left">Phone Number: </th>
            <td><input type="text" name="phone" style="width: 550px;" value="<?php echo $phone; ?>" readonly></td>
        </tr>
        <tr>
            <th  align="left">Address: </th>
            <td><input type="textarea" name="address" style="width: 550px; height: 150px;" value="<?php echo $address; ?>" readonly></td>
        </tr>
        <tr>
            <th  align="left">Date: </th>
            <td><input type="text" name="date" style="width: 150px;" value="<?php echo date('d-m-Y', $date); ?>" readonly></td>
        </tr>
    </table>
  </div>
        
  <div>
    <table width="95%" border="1" align="center" style="background-color: #f7f7f7;">
      <tr style="background-color: #ff69b4; color: white;">
        <th colspan="4" height="50px">Product Details</th>

    </tr>
        <tr style="background-color: #ff69b4; color: white;">
            <th>Item Name</th>
            <th>Unit Price</th>
            <th>Quantity</th>
            <th>Item Total</th>
        </tr>
        <tr>
            <td>HP Pavilion x360 14 inch 2-in-1 Laptop 14-ek1039TU Silver </td>
            <td align="center">RM 3,999.00</td>
            <td align="center"><?php echo $_POST["quantity1"]; ?></td>
            <td align="center">RM <?php echo number_format($sales1, 2); ?></td>
        </tr>
        <tr>
            <td>HP 24-inc All-in-One Desktop PC</td>
            <td align="center">RM 2,599.00</td>
            <td align="center"><?php echo $_POST["quantity2"]; ?></td>
            <td align="center">RM <?php echo number_format($sales2, 2); ?></td>
        </tr>
        <tr>
            <td>Western Digital My Passport 1TB USB 3.0 External Hard Drives New Design</td>
            <td align="center">RM 239.00</td>
            <td align="center"><?php echo $_POST["quantity3"]; ?></td>
            <td align="center">RM <?php echo number_format($sales3, 2); ?></td>
        </tr>
        <tr>
            <td>2.4GHz Mini Wireless Optical Game Mouse / USB Receiver</td>
            <td align="center">RM 25.99 </td>
            <td align="center"><?php echo $_POST["quantity4"]; ?></td>
            <td align="center">RM <?php echo number_format($sales4, 2); ?></td>
        </tr>
        <tr>
            <td>Anti Thief Backpack Business Fits for 15.6 inch Laptop USB Charging Water Repellent</td>
            <td align="center">RM 124.00</td>
            <td align="center"><?php echo $_POST["quantity5"]; ?></td>
            <td align="center">RM <?php echo number_format($sales5, 2); ?></td>
        </tr>
        <tr>
            <td>Razer BlackShark V2 Multi-Platform Wired E-Sports Headset</td>
            <td align="center">RM 339.00</td>
            <td align="center"><?php echo $_POST["quantity6"]; ?></td>
            <td align="center">RM <?php echo number_format($sales6, 2); ?></td>
        </tr>
    </table>
  </div>


  <table width="95%" border="1" align="center" style="background-color: #f7f7f7;">
      <tr style="background-color: #ff69b4; color: white;">
        <th colspan="2" height="50px">Bill</th>
      </tr>
      <tr>
        <td>Payment Method</td>
        <td align="center"><?php echo $_POST["paymentMethod"]; ?></td>
      </tr>
      <tr>
        <td>Total Sales</td>
        <td align="center">RM <?php echo number_format($totalsales, 2); ?></td>
      </tr>
      <tr>
        <td>Discount (5% if total sales above RM 2000)</td>
        <td align="center">RM <?php echo number_format($discount, 2); ?></td>
      </tr>
      <tr>
        <td>6% SST Charged</td>
        <td align="center">RM <?php echo number_format($tax, 2); ?></td>
      </tr>
      <tr>
        <td align="right">TOTAL</td>
        <td align="center" style="background-color: #ff69b4;">RM <?php echo number_format($amount, 2); ?></td>
      </tr>
  </table>

  <br>

  <div class="btnback" align="center">
    <input type="button" onclick="history.back()" value="Back">
  </div>
</form>

<script>
function toggleQuantity(quantityId, checkbox) {
  var quantityInput = document.getElementsByName(quantityId)[0];
  var includeHiddenInput = document.getElementsByName('include' + quantityId)[0];

  if (!checkbox.checked) {
    quantityInput.value = 0;
    includeHiddenInput.value = 0;
  } else {
    quantityInput.value = 1;
    includeHiddenInput.value = 1;
  }

  quantityInput.disabled = !checkbox.checked;
  if (checkbox.checked) {
    quantityInput.removeAttribute('required');
  } else {
    quantityInput.setAttribute('required', 'required');
  }
}
</script>

</body>
</html>
