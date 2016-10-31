<!doctype html>
<html>
	<head>
		<title> Title here </title>
		<meta charset="utf-8" />
		<script type="text/javascript" src="alabala.js">
		</script>
		<style>
			.title {
				color:blue;
				background-color: gray;
				height: 30px;
				width: 100%;
				text-align: center;
				font-size: 25px;
			}

			.container {
				width: 100%;
				height: 50%;

			}
		</style>
	</head>	

	<body>
		<div class="title">
			Form
		</div>

		<div class="container">
			<form method="post">
			    <table id="exams-table">
			        <thead>
			        <tr>
			            <th>First name:</th>
			            <th>Last name:</th>
			            <th>Email:</th>
			            <th>Exam score:</th>
			        </tr>
			        </thead>
			        <tbody></tbody>
			    </table>
			    <button id="add-item">+</button>
			    <label for="sortField">Sort by:</label>
			    <select name="sortField" id="sortField">
			        <option value="firstName">First name</option>
			        <option value="lastName">Last name</option>
			        <option value="email">Email</option>
			        <option value="examScore">Exam score</option>
			    </select>
			    <label for="order">Order:</label>
			    <select name="order" id="order">
			        <option value="ascending">Ascending</option>
			        <option value="descending">Descending</option>
			    </select>
			    <input type="submit" value="SUBMIT"/>
			</form>
		</div>

		<div class="title">
			Result
		</div>

		<div class="result">

		</div>

	</body>
</html>