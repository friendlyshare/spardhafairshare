<!DOCTYPE html>
<html>
<head>
<style>
input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}
input[type=number] {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
</head>
<body>

<h3>Agrement form</h3>

<div class="container">
  <form action="#">
    <label for="drivername">Driver NAME</label>
    <input type="text" id="drivernaem" name="drivername" placeholder="Your name..">

    <label for="customername">costomername</label>
    <input type="text" id="costomername" name="costomername" placeholder=" enter costomer name">
 
 <label for="driverno">Driver phone-number</label>
    <input type="number" id="driverno" name="driverno" placeholder="Driver mobile number ">
	
	<label for="vehicleno">Vehicle Registration Number</label>
    <input type="text" id="vehicleno" name="vehicleno" placeholder=" enter vehicle number here">
	
	<label for="deliverycharge">Delivery Charge:</label>
    <input type="text" id="deliverycharge" name="deliverycharge" placeholder=" enter charge for delivery of good....">

    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>
