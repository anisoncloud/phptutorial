<!DOCTYPE html>
<html>
	<head>
		<script>
			function showUser(str){
				if(str==""){
					document.getElementById('txtHint').innerHtml="";
					return;
				}else{
					if (window.XMLHttpRequest) {
						var xmlhttp = new XMLHttpRequest();
					}else{
						xmlhttp = new ActiveXObject("Microsoft.XMLHTTP")
					}
					xmlhttp.onreadystatechange = function(){
						if (this.readyState === 4 && this.status === 200) {
							document.getElementById("txtHint").innerHTML = this.responseText;
						}
					};
					xmlhttp.open("GET", "http://localhost/phptutorial/ajax-mysql/getuser.php?q="+str, true);
					xmlhttp.send();
				}
			}
		</script>
	</head>
	<body>

		<form>
			<select name="users" onchange="showUser(this.value)">
				<option value="">Select Your Option</option>
				<option value="1">Steve</option>
				<option value="2">Robert</option>
				<option value="3">Luci</option>
				<option value="4">Joe</option>
				<option value="5">Julia</option>

			</select>
		</form>


<p id="txtHint">Person info will be listed in here....</p>
		
	</body>
</html>