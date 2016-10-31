<!doctype html>
<html>
	<head>
		<meta charset="utf-8" />
		<title> Sidebar Build </title>
		<style>

			.sidebar {
				float: right;
				width: 250px;
				background: linear-gradient(lightblue 50%, lightseagreen 100%);
				color: red;
				padding: 10px 0 10px 10px;
				margin: 5px;
				border-radius: 10px;
			}
		</style>
	</head>
	<body>
		<form method="POST">
			<label for="categories"> Categories  </label>
			<input type="text" name="categories" />
			<label for="tags"> Tags </label>
			<input type="text" name="tags" />
			<label for="months"> Months </label>
			<input type="text" name="months" />
			<input type="submit" name="submit" value="generate" />
		</form>

		<?php 
		 
		 if (isset($_POST['categories']) && isset($_POST['tags']) && isset($_POST['months'])) {
			if(isset($_POST['submit'])) { 
				$cats = explode(", ", $_POST['categories']);
				$tags = explode(", ", $_POST['tags']);
				$months = explode(", ", $_POST['months']);
			}
		}
		?>

		<div class="sidebar">
		 <?php 
		 
		  	foreach($cats as $k => $v) {
		  		echo htmlentities($v) . "<br />";
		  	}
		
		  ?>
		</div>
		<div style="width:100%; clear:both;">


		</div>
		<div class="sidebar">

		<?php 
		foreach($tags as $k => $v) {
		  		echo $v . "<br />";
		  	}
		 ?>
		 </div>
		<div style="width:100%; clear:both;">
		 <div class="sidebar">

		<?php 
		foreach($months as $k => $v) {
		  		echo $v . "<br />";
		  	}
		 ?>
		 </div>
	</body>




</html>

