<!DOCTYPE html>
<html>
<head>
	<title></title>

<script type="text/javascript">
	var cake_price =  Array();
		cake_price["round6"] =20;
		cake_price["round8"] =25;
		cake_price["round10"] =30;
		cake_price["round12"] =75;

		function getCakePrice(){
			var selectedCakePrice = 0;
			var theForm = document.forms["theform"];
			var selectCakePrice = theForm.elements["selectedcake"];
			for(var i = 0; i < selectCakePrice.length; i++){
				if(selectCakePrice[i].checked){
					selectedCakePrice=cake_price[selectCakePrice[i].value];
					break;
				}
			}
			return selectedCakePrice;

		}


		var filling_price = Array();
			filling_price["lemon"] = 10;
			filling_price["orrange"] = 20;
			filling_price["lime"] = 30;

		function getFillingPrice(){
			var selectedFillingPrice = 0;
			var theForm = document.forms["theform"];			
			var selectedFillingPrice = theForm.elements["selectFillingPrice"];
			selectedFillingPrice = filling_price[selectedFillingPrice.value];
			return selectedFillingPrice;
		}


		function calculateTotal(){
			var cakePrice = getCakePrice()+getFillingPrice();
			document.getElementById("totalPrice").innerHTML = "Total price for the Cake $"+cakePrice;
		}

</script>

</head>
<body>


<form name="theform" method="post">
	<fieldset>
		<legend>The Form</legend>
		<input type="radio" name="selectedcake" value="round6" onclick="calculateTotal()">
		Round cake 6" - Price $20<br/>
		<input type="radio" name="selectedcake" value="round8" onclick="calculateTotal()">
		Round cake 8" - Price $25<br/>
		<input type="radio" name="selectedcake" value="round10" onclick="calculateTotal()">
		Round cake 10" - Price $30<br/>
		<input type="radio" name="selectedcake" value="round12" onclick="calculateTotal()">
		Round cake 12" - Price $75

<br/>
<br/>
<label>Filling Price</label>
<select id="selectFillingPrice" name="selectFillingPrice" onchange="calculateTotal()">
	<option value="lemon">Lemon</option>
	<option value="orrange">Orrange</option>
	<option value="lime">Lime</option>
</select>

	</fieldset>

</form>

<div id="totalPrice"></div>

</body>
</html>