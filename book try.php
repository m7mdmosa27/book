<<?php 
		
function difinbook($x,$y,$z){
	echo "	<!DOCTYPE html>
			<html>";

	require_once('header.php');
	echo "	<div>
				<img style=\"width: 236px; height: 363px; float: left;\" src=\"".$x."\">";
	echo "	<p style=\"background: #ddd;display: inline-block;padding: 10px; margin: 10px; \" id=\"scrap\">".$y."</p>";
	echo "	<span style=\"background: #ddd;padding: 10px; margin: 10px; position: \">".$z." </span>";
	echo "		</div>
				</div>
			</html>";
}
?>



<!DOCTYPE html>
<html>
	<?php 
	    require_once('header.php');
	?>
	<div>
		<img style="width: 236px; height: 363px; float: left;" src="data/image/827974d98ed5dabfbeecbdae890caebf.jpg">
		<p style="background: #ddd;display: inline-block;padding: 10px; margin: 10px; " id="scrap">this is book for story </p>
		<span style="background: #ddd;padding: 10px; margin: 10px; position: ">book's auther </span>
	</div>
</div>
</html>