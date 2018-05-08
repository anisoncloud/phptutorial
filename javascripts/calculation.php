<html>
<head>
<script type="text/javascript">
	var cake_prices = new Array();
		cake_prices["round6"] = 20;
		cake_prices["round8"] = 25;
		cake_prices["round10"] = 35;
		cake_prices["round12"] = 75;

	var filling_prices =  new Array();
		filling_prices["none"] = 0;
		filling_prices["lemon"] = 15;
		filling_prices["custard"] = 5;
		filling_prices["fudge"] = 7;
	

		function getCakeSizePrice(){
			var theForm = document.forms["cakeform"];
			var cakeSizePrice = 0;
			var selectedCake = theForm.elements["selectedcake"];
			for(var i= 0; i < selectedCake.length; i++){
				if(selectedCake[i].checked){
					cakeSizePrice = cake_prices[selectedCake[i].value];
					break;
				}				
			}
			return cakeSizePrice;

		}


		function getFillingPrice(){
			var cakeFillingPrice = 0;
			var theForm = document.forms["cakeform"];
			var selectedFilling = theForm.elements["filling"];
			cakeFillingPrice = filling_prices[selectedFilling.value];
			return cakeFillingPrice;
		}

		function getCandlePrice(){
			var candlePrice = 0;
			var theForm = document.forms["cakeform"];
			var includeCandles = theForm.elements["includecandles"];
			if(includeCandles.checked == true){
				candlePrice = 5;
			}
			return candlePrice;
		}


		function calculateTotal(){
			var cakePrice = getCakeSizePrice()+getFillingPrice()+getCandlePrice();
			document.getElementById('totalPrice').innerHTML = "Total Price for the Cake $"+cakePrice; 
		}
</script>



</head>
<body>

<form id="cakeform" onsubmit="return false;">
	<fieldset>
<legend>Make your cake !!!</legend>
<input type="radio" name="selectedcake" value="round6" onclick="calculateTotal()">
Round cake 6" - Serve 8 people, Price ($20)<br/>
<input type="radio" name="selectedcake" value="round8" onclick="calculateTotal()">
Roud cake 8"- Serve 8 people price ($25)<br/>
<input type="radio" name="selectedcake" value="round10" onclick="calculateTotal()">
Round cake 10" - Serve 16 people price ($35)<br/>
<input type="radio" name="selectedcake" value="round12" onclick="calculateTotal()">
Round cake 12" - Serve 30 people price ($75)<br/>
<br/>
<br/>
<label>Filling Price</label>
<select id="filling" name="filling" onchange="calculateTotal()">
<option value="none">Select Filling</option>
<option value="lemon">Lemon($15)</option>
<option value="custard">Custart($5)</option>
<option vlaue="fudge">Fudge($7)</option>
</select> 
<br/>
<br/>
<p>
<label for="includecandle" class="inlinelabel">Include Candle($5)</label>
<input type="checkbox" name="includecandles" id="includecandles" onclick="calculateTotal()">
</p>

<p>
<label for="includeinscription" class="inlinelabel">Include Inscription</label>
<input type="checkbox" name="includeinscription" onclick="calculateTotal()">
<input type="text" name="theinscription" id="theinscription" value="Enter Inscription">
</p>
<div id="totalPrice"></div>
</fieldset>
</form>

</body>
</html>