<?php
	require("../library/config.php");
	if(isset($_POST["tem_id"]) && $_POST["tem_id"] != '') {
		$tempquery = "SELECT * FROM `template` where template_id = '". $_POST["tem_id"]."'";
		$tempquery_res = mysql_query($tempquery);
		$rowcount = mysql_num_rows($tempquery_res);
		if ($rowcount > 0){
			while ($site = mysql_fetch_array($tempquery_res)){
			echo $site['template_name']."+".$site['cat_id']."+".$site['shopify_product_id']."+".$site['etsy_listing_id'];
			}
		}
	}
	if(isset($_POST["e_id"]) && $_POST["e_id"] != '') {
		$name = $_POST['e_name'];
		$cat = $_POST['e_cat'];
		$pid = $_POST['e_pid'];
		$listid = $_POST['e_list'];
		$UpdateItem = "Update template set template_name =  '$name', cat_id = '$cat', shopify_product_id = '$pid', etsy_listing_id = '$listid' where template_id = '". $_POST["e_id"]."'";
		$run_Query = mysql_query($UpdateItem) or die("ERROR: " . $UpdateItem);
		if($run_Query){
			echo "Template name Updated.";
		}
	}
?>