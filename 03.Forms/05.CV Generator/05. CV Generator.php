<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8' />
		<title> CV Generator </title>
	</head>
	<body>
		<form method='post' action="result.php"/>
		<fieldset>
			<legend> Personal Info </legend>
			<input type="text" name="fname" placeholder="First Name" required/> <br />
			<input type="text" name="lname" placeholder="Last Name" required/> <br />
			<input type="text" name="email" placeholder="Email" /> <br />
			<input type="text" name="phone" placeholder="Phone Number" /> <br />
			<label for="sex">Female</label>
        	<input type="radio" name="sex" value="Female"/>
        	<label for="sex">Male</label>
        	<input type="radio" name="sex" value="Male"/><br />
        	<label for="date"> Birth Date </label><br />
        	<input type="date" name="birthdate" /> <br />
        	<label for="nation"> Nationality </label>
        	<select name="nation">
	            <option value="Bulgarian">Bulgarian</option>
	            <option value="English">English</option>
	            <option value="Indian">Indian</option>
	            <option value="Chinese">Chinese</option>
	            <option value="American">American</option>
        	</select>
		</fieldset>

		<fieldset>
			<legend> Last Work Position </legend>
			<label for="company"> Company </label>
			<input type="text" name="company" /> <br />
			<label for="timespan"> From </label>
			<input type="date" name="from" /> <br />
			<label for="timespan"> To </label>
			<input type="date" name="to" />
		</fieldset>

		<fieldset id="pcStuff">
			<legend> Computer Skills </legend>
			<label for="pc-language"> Programming Languages </label> <br />
			<input type="text" name="pc-language[]" /> 
			<select name="pc-skill[]">
				<option value="Beginner"> Beginner </option>
				<option value="Advanced"> Advanced </option>
				<option value="Professional"> Professional </option>
			</select> <br />
			<div id="pcLangBox">
			</div>

			<button type="button" onclick="removePcLang('pc-language'+idCount)" > Remove Language </button>
			<button type="button" onclick="addPcLang()"> Add Language </button>
		</fieldset>

		<fieldset>
			<legend> Other Skills </legend>
			<label for="lang"> Languages </label> <br />
			<input type="text" name="lang[]" />
			<select name="compr-level[]">Comprehension
	            <option selected disabled>-Comprehension-</option>
	            <option value="Beginner">Beginner</option>
	            <option value="Intermediate">Intermediate</option>
	            <option value="Advanced">Advanced</option>
	        </select>
	        <select name="read-level[]">
	            <option selected disabled>-Reading-</option>
	            <option value="Beginner">Beginner</option>
	            <option value="Intermediate">Intermediate</option>
	            <option value="Advanced">Advanced</option>
	        </select>
	        <select name="write-level[]">
	            <option selected disabled>-Writing-</option>
	            <option value="Beginner">Beginner</option>
	            <option value="Intermediate">Intermediate</option>
	            <option value="Advanced">Advanced</option>
	        </select><br/>

	        <div id="langstuff">
	        </div>

	        <button type="button" onclick="removeLang('lang'+idCount2)"> Remove Language </button>
	        <button type="button" onclick="addLang()"> Add Language </button> <br />
	        <label for="driver"> Driver's License </label>
	        <label for="a"> A</label>
	        <input type="radio" name="category[]" value="a" />
	        <label for="b"> B</label>
	        <input type="radio" name="category[]" value="b" />
	        <label for="c"> C</label>
	        <input type="radio" name="category[]" value="c" />
		</fieldset>

		<input type="submit" value="Generate CV" />
		</form>
	</body>

	<script>
	 var idCount = 0;
	 var idCount2 = 0;

	 function addPcLang() {
	 	idCount++;
	 	var pcDiv = document.createElement('div');
	 	pcDiv.setAttribute('id', 'pc-language' + idCount);
	 	
	 	pcDiv.innerHTML = '<input type="text" name="pc-language[]" />' + '<select name="pc-skill[]"> ' + '<option value="Beginner">Beginner</option>' + '<option value="Advanced"> Advanced </option>' + '<option value="Professional"> Professional </option>' +  '</select>';
	 	document.getElementById('pcLangBox').appendChild(pcDiv);

	 }

	 function removePcLang(id) {
	 	idCount--;
	 	var pcDiv = document.getElementById(id);
	 	document.getElementById('pcLangBox').removeChild(pcDiv);
	 }

	 function addLang() {
	 	idCount2++;
	 	var langDiv = document.createElement('div');
	 	langDiv.setAttribute('id', 'lang' + idCount2);
	 	langDiv.innerHTML = '<input type="text" name="lang[]"/>' + ' <select name="compr-level[]">' + '<option>-Comprehension-</option>' + '<option value="Beginner">Beginner</option>' + '<option value="Intermediate">Intermediate</option>' + '<option value="Advanced">Advanced</option>' + '</select>' + ' <select name="read-level[]">' + '<option>-Reading-</option>' + '<option value="Beginner">Beginner</option>' + '<option value="Intermediate">Intermediate</option>' + '<option value="Advanced">Advanced</option>' + '</select>' + ' <select name="write-level[]">' + '<option>-Writing-</option>' + '<option value="Beginner">Beginner</option>' + '<option value="Intermediate">Intermediate</option>' + '<option value="Advanced">Advanced</option>' + '</select>'; 
	 	document.getElementById('langstuff').appendChild(langDiv);
	 }

	 function removeLang(id) {
	 	idCount2--;
	 	var langDiv = document.getElementById(id);
	 	document.getElementById('langstuff').removeChild(langstuffDiv);
	 }
	</script>
</html>