<?php

$product_index=$_GET['product_index'];
$type=$_GET['type']; 


$mysqli = new mysqli("localhost","root","","shop");
$mysqli->query("SET NAMES 'utf8'");

	if ($type == 1) {
		$query3 = "SELECT id_product, name_product, FK_category, manufacturer, country, price, picture, description FROM products WHERE FK_category = 1 and id_product=".$product_index;}
	else {
		$query3 = "SELECT id_product, name_product, FK_category, manufacturer, country, price, picture, description FROM products WHERE FK_category = 2 and  id_product=".$product_index;}
$result3 = $mysqli->query($query3);

include("header.php");
?>

<!-- Main -->
<div id="main">
	<div class="cl">&nbsp;</div>
		<div class="product_info">
			<div class="picture">
				<?php $row3 = $result3->fetch_assoc()?>
				<img src = "css/images/<?php print $row3['picture'];?>" width="342" height="399">
			</div>
			<div class="desc">
				<ul>
					<li><h2> Описание <?php print $row3["name_product"];?></h2></li>
					<li><?php print $row3["description"];?></li>
					<li>Производитель: <i><?php print $row3["manufacturer"];?></i></li>
					<li>Страна: <i><?php print $row3["country"];?></i></li>
					<li>Цена: <i><?php print $row3["price"];?>  руб.</i></li>
				</ul>
			</div>
		<div class="pay-btn">
			<p> Купить </p>
		</div>
	</div>

	<?php include("footer.php") ?>
	
</div>	
<!-- End Shell -->
<!-- End Shell -->
</body>
</html>
