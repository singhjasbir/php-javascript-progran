<?php

if(isset($_GET['box']) && isset($_GET['image'])){
	
	 $color = $_GET['box'];
    $image = $_GET['image'];
}
?>


<!DOCTYPE html>
<html>
<head>
<title>Color</title>
<script>
/*This is the javascript validation that I have used*/
function validateForm() {
	 var x = document.forms["myForm"]["box"].value;
	 if (x == null || x == "") {
        alert("Color must be filled out");
        return false;
    }
	return true;
}
function validate() {
	var y = document.forms["myForm"]["image"].value;
	if (y == null || y == "") {
        alert("URL must be filled out");
        return false;
    }
	return true;
}

</script>
<style>
body {
background-image: url('<?php echo $image; ?>');
}
</style>
</head>

<body bgcolor="<?php echo $color;?>"><br><br><br><br><br><br><br><br><br><br>
<center>
<form name="myForm" action = "" method = "GET">
<input type = "text" placeholder="Enter color to set the background" name = "box" size="40">
<input type = "submit" value="Set Color" onclick="validateForm()"><br><br>
<input type="url" placeholder="Enter URL to set the background image " name = "image" size="40">
<input type = "submit" value="Set Image" onclick="validate()"><br><br>

</form>
</center>
</body>

</html>