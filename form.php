<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="formjs.js" type="text/javascript"></script>
</head>
<body>
<div id="form-div">
	<h1>Contact Form</h1>
	<form action="#" method="get">
		<div>
			<label>Name</label>
			<input type="text" name="username" style="width: 93.2%;">
		</div>
		<div>
			<label>Select State</label>
			<select onchange="selectCities(this.value)">
				<option>Select State</option>
				<option>Uttar Pradesh</option>
				<option>Uttrakhand</option>
				<option>Punjab</option>
				<option>Jammu Kashmir</option>
				<option>Rajasthan</option>
			</select>
		</div>
		<div>
			<label>Select City</label>
			<select id="cities">
				<option>First Select State</option>
			</select>
		</div>
		<div>
			<input type="submit" value="submit" id="sb">
		</div>
	</form>
</div>
</body>
</html>