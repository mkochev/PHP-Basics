<?php
//Array of elements, paginate it with Next page & Previous page showing 5 elements per page.
$arr = [5,2,3,4,5,6,6,7,8,9,1,20,30,405,51,2,4,5,1,3,6,6,7,8,9,2,2,34,5,6,7,1,2,4,6,7,78,1];
$chunkIt = array_chunk($arr, 5);

if(isset($_GET['page'])) {
	$page  = $_GET['page'];
	$currPage = $page;
	$totalPages = ceil(count($arr) / 5);
	
	if ($currPage == 1 ) {
		$previous = 1;
	} else {
		$previous = $currPage - 1; 
	}
	if ($_GET['page'] == $totalPages) {
		$next = $_GET['page'];
	} else {
		$next = $page + 1;
	}
}

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Waddup</title>
	</head>
	<body>
		<div class="Links"> 
			<?= "<a href=?page=$previous>" . "Previous" . "</a>"; ?>
			<?php foreach ($chunkIt as $key => $value): ?>
				<?php $key += 1; ?>
				<?= "<a href=?page=$key>" . $key . "</a>" . " "; ?>


			<?php endforeach ?>
			<?= "<a href=?page=$next>" . "Next" . "</a>"; ?>
		</div>

		<div class="result">
		<?php foreach ($chunkIt as $key => $value): ?>
		  <?php $key += 1; ?>
		  <?php if ($key  == $currPage ): ?>
		  	<?php for ($i=0; $i < count($value); $i++): ?>
		  		<?php $page1 = $value[$i]; ?>
		  			 
		  		
		  		<?= $page1 ?>
		  	<?php endfor ?>
		  <?php endif ?>
		<?php endforeach ?>
		  
		</div>
	</body>
</html>

