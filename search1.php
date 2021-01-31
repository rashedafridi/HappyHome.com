<?php
if(isset($_GET['search'])){
	
	if(!empty($_GET['typeahead'])){
		$typeahead=$_GET['typeahead'];
		echo "<script>alert(<?php $typeahead ?>)</script>";
		echo "<script>window.open('product_view.php?typeahead=$typeahead','_self')</script>";
	}else{
		echo "<script>window.open('index.php','_self')</script>";
	}
	

}