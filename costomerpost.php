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



<div class="container">
  <form action="#">
  <h3>costomer post</h3>
    <label for="costomername">Costomer Name:</label>
    <input type="text" id="costomername" name="costomername" placeholder="Your name..">

    <label for="src">Pickup Point:</label>
    <input type="text" id="src" name="src" placeholder="Enter the Pick Up Point Here.....">

   <label for="dest">Destination Point:</label>
    <input type="text" id="dest" name="dest" placeholder="Enter the Destination Point Here.....">
	
	<label for="gooddescription">Good Description:</label>
    <input type="text" id="gooddescription" name="gooddescription" placeholder="Enter Good Description Here.....">
	
	<label for="customer">costomer Phone Number:</label>
    <input type="text" id="gooddescription" name="gooddescription" placeholder="Enter customer phone number here....">

	
	<label for="timetoreach">time to reach:</label>
    <input type="text" id="timetoreach" name="timetoreach" placeholder="Enter time that .....">
	
    <label for="costomerno">customer Mobile Number:</label>
    <textarea id="costomerno" name="costomerno" placeholder="enter customer mobile number .." style="height:100px"></textarea>

	 
	
    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>
