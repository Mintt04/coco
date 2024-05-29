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
button[type="reset"] {
  padding: 10px 20px;
  background-color: #4CAF50;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

button[type="submit"]:hover,
button[type="reset"]:hover {
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

<form id="myForm" action="process.php" method="post">
  <div>
    <table width="95%" border="1" align="center" style="background-color: #f7f7f7;">
        <tr>
            <th width="10%" align="left">Full Name: </th>
            <td><input type="text" name="fullname" placeholder="Full Name" style="width: 550px;" required pattern="[A-Za-z\s]+"></td>
        </tr>
        <tr>
            <th  align="left">Email: </th>
            <td><input type="email" name="email" placeholder="Email" style="width: 550px;" required></td>
        </tr>
        <tr>
            <th  align="left">Phone Number: </th>
            <td><input type="text" name="phone" placeholder="Example : 012-3456789" style="width: 550px;" required pattern="\d{3}-\d{7}"></td>
        </tr>
        <tr>
            <th  align="left">Address: </th>
            <td><input type="textarea" name="address" placeholder="Address" style="width: 550px; height: 150px;" required></td>
        </tr>
        <tr>
            <th  align="left">Date: </th>
            <td><input type="date" name="date" hint="date" style="width: 150px;" required min="2023-12-01" max="2030-12-31"></td>
        </tr>
    </table>
  </div>
  
  <br>

  <div>
    <table width="95%" border="1" align="center" style="background-color: #f7f7f7;">
        <tr style="background-color: #ff69b4; color: white;">
            <th colspan="3">Product</th>
            <th>Price</th>
            <th>Quantity</th>
        </tr>
        <tr>
            <td><input 	type="checkbox" name="item1" value="1" onchange="toggleQuantity('quantity1', this)"></td>
            <td><img src="hp.png" alt="laptop" style="width:150px; height:150px;"></td>
            <td>HP Pavilion x360 14 inch 2-in-1 Laptop 14-ek1039TU Silver </td>
            <td align="center">RM 3,999.00</td>
            <td align="center"><input type="number" name="quantity1" required value="0" min="0" max="10"></td>
        </tr>
        <tr>
            <td><input 	type="checkbox" name="item2" value="1" onchange="toggleQuantity('quantity2', this)"></td>
            <td><img src="PC.png" alt="pc" style="width:150px; height:150px;"></td>
            <td>HP 24-inc All-in-One Desktop PC</td>
            <td align="center">RM 2,599.00</td>
            <td align="center"><input type="number" name="quantity2" required value="0" min="0" max="10"></td>
        </tr>
        <tr>
            <td><input 	type="checkbox" name="item3" value="1" onchange="toggleQuantity('quantity3', this)"></td>
            <td><img src="hardisk.png" alt="xhd" style="width:150px; height:150px;"></td>
            <td>Western Digital My Passport 1TB USB 3.0 External Hard Drives New Design</td>
            <td align="center">RM 239.00</td>
            <td align="center"><input type="number" name="quantity3" required value="0" min="0" max="10"></td>
        </tr>
        <tr>
            <td><input 	type="checkbox" name="item4" value="1" onchange="toggleQuantity('quantity4', this)"></td>
            <td><img src="mouse.png" alt="mouse" style="width:150px; height:150px;"></td>
            <td>2.4GHz Mini Wireless Optical Game Mouse / USB Receiver</td>
            <td align="center">RM 25.99 </td>
            <td align="center"><input type="number" name="quantity4" required value="0" min="0" max="10"></td>
        </tr>
        <tr>
            <td><input 	type="checkbox" name="item5" value="1" onchange="toggleQuantity('quantity5', this)"></td>
            <td><img src="bag.png" alt="bag" style="width:150px; height:150px;"></td>
            <td>Anti Thief Backpack Business Fits for 15.6 inch Laptop USB Charging Water Repellent</td>
            <td align="center">RM 124.00</td>
            <td align="center"><input type="number" name="quantity5" required value="0" min="0" max="10"></td>
        </tr>
        <tr>
            <td><input 	type="checkbox" name="item6" value="1" onchange="toggleQuantity('quantity6', this)"></td>
            <td><img src="razer.png" alt="headphone" style="width:150px; height:150px;"></td>
            <td>Razer BlackShark V2 Multi-Platform Wired E-Sports Headset</td>
            <td align="center">RM 339.00</td>
            <td align="center"><input type="number" name="quantity6" required value="0" min="0" max="10"></td>
        </tr>
    </table>
  </div>

  <br>

  <table width="95%" border="1" align="center" style="background-color: #f7f7f7;">
          <tr>
              <td>
              <label>Payment Method:</label>
              <input type="radio" id="cash" name="paymentMethod" value="Cash" required> Cash<br>
              <input type="radio" id="visaMasterCard" name="paymentMethod" value="Visa/Master Card"> Visa / Master Card<br>
              <input type="radio" id="onlineTransfer" name="paymentMethod" value="Online Transfer"> Online Transfer<br>
              <p style="color: blue;">6% SST Sales Tax rate will be charged on computer products</p>
              </td>
          </tr>
  </table>

  <br>

  <div class="btn" align="center">
      <button type="submit" value="Submit">Submit</button>
      <button type="reset" value="Clear" onclick="clearForm()">Clear</button>
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
