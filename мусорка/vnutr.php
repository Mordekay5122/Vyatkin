<?php

include("connect.php");

$mysqli = new mysqli("localhost","root","","shop");
$mysqli->query("SET NAMES 'utf8'");

$query1 = "SELECT id_product, name_product, FK_category, manufacturer, country, price, picture FROM products WHERE FK_category = 2";

$result1 = $mysqli->query($query1);

include("header.php"); 
?>

	<!-- Main -->
	<div id="main">
		<div class="cl">&nbsp;</div>
		
		<!-- Content -->
		<div id="content">
			
			<!-- Content Slider -->
<!-- 			<div id="slider" class="box">
				<div id="slider-holder">
					<ul>
					    <li><a href="#"><img src="css/images/merch.png" alt="" width="720" height="252" /></a></li>
					    <li><a href="#"><img src="css/images/cheers.jpeg" alt="" width="720" height="252" /></a></li>
					    <li><a href="#"><img src="css/images/cheersgif.gif" alt="Twitch-Bits-Tipping-Streamers-on-Twitch" width="720" height="252" /></a></li>
					    <li><a href="#"><img src="css/images/twitch_prime.jpg" alt="" width="720" height="252" /></a></li>
					</ul>
				</div>
				<div id="slider-nav">
					<a href="#" class="active">1</a>
					<a href="#">2</a>
					<a href="#">3</a>
					<a href="#">4</a>
				</div>
			</div> -->
			<!-- End Content Slider -->
			
			<!-- Products -->
			<div class="products">
				<div class="cl">&nbsp;</div>
				<ul>
					<?php
						while ($row1 = $result1->fetch_assoc()) 
						{?>
						<li>
							<a href="show.php?type=<?php print $row1["FK_category"];?>&product_index=<?php print $row1["id_product"];?>"><img src="css/images/<?php print $row1['picture'];?>" alt ="" width="342" height="399"/></a>
							<div class="product-info" >
								<h3><?php print $row1['name_product'];?></h3>
								<div class="product-desc">
									<h4><?php print $row1['country'];?></h4>
									<p><?php print $row1['manufacturer'];?></p>
										<strong class="price"><?php print $row1['price'];?>&nbsp;руб.</strong>
									</div>
								</div>
							</li>
						<?php }?> 
				</ul>
				<div class="cl">&nbsp;</div>
			</div>
			<!-- End Products -->
			
		</div>
		<!-- End Content -->
		
		<!-- Sidebar -->
		<div id="sidebar">
			
			<!-- Search -->
			<div class="box search">
				<h2>Search by <span></span></h2>
				<div class="box-content">
					<form action="" method="post">
						
						<label>Keyword</label>
						<input type="text" class="field" />
						
						<label>Category</label>
						<select class="field">
							<option value="">-- Select Category --</option>
						</select>
						
						<div class="inline-field">
							<label>Price</label>
							<select class="field small-field">
								<option value="">$10</option>
							</select>
							<label>to:</label>
							<select class="field small-field">
								<option value="">$50</option>
							</select>
						</div>
						
						<input type="submit" class="search-submit" value="Search" />
						
						<p>
							<a href="#" class="bul">Advanced search</a><br />
							<a href="#" class="bul">Contact Customer Support</a>
						</p>
	
					</form>
				</div>
			</div>
			<!-- End Search -->
			
			<!-- Categories -->
			<div class="box categories">
				<h2>Категории <span></span></h2>
				<div class="box-content">
					<ul>
					    <li><a href="verh.php">Верхняя одежда</a></li>
					    <li><a href="vnutr.php">Внутренний магазин</a></li>
					</ul>
				</div>
			</div>
			<!-- End Categories -->
			
		</div>
		<!-- End Sidebar -->
		
		<div class="cl">&nbsp;</div>
	</div>
	<!-- End Main -->
	
	<!-- Side Full -->
	<div class="side-full">
		
		<!-- More Products -->
		<!-- <div class="more-products">
			<div class="more-products-holder">
				<ul>
				    <li><a href="#"><img src="css/images/small1.jpg" alt="" /></a></li>
				    <li><a href="#"><img src="css/images/small2.jpg" alt="" /></a></li>
				    <li><a href="#"><img src="css/images/small3.jpg" alt="" /></a></li>
				    <li><a href="#"><img src="css/images/small4.jpg" alt="" /></a></li>
				    <li><a href="#"><img src="css/images/small5.jpg" alt="" /></a></li>
				    <li><a href="#"><img src="css/images/small6.jpg" alt="" /></a></li>
				    <li><a href="#"><img src="css/images/small7.jpg" alt="" /></a></li>
				    <li><a href="#"><img src="css/images/small1.jpg" alt="" /></a></li>
				    <li><a href="#"><img src="css/images/small2.jpg" alt="" /></a></li>
				    <li><a href="#"><img src="css/images/small3.jpg" alt="" /></a></li>
				    <li><a href="#"><img src="css/images/small4.jpg" alt="" /></a></li>
				    <li><a href="#"><img src="css/images/small5.jpg" alt="" /></a></li>
				    <li><a href="#"><img src="css/images/small6.jpg" alt="" /></a></li>
				    <li><a href="#"><img src="css/images/small7.jpg" alt="" /></a></li>
				    <li><a href="#"><img src="css/images/small1.jpg" alt="" /></a></li>
				    <li><a href="#"><img src="css/images/small2.jpg" alt="" /></a></li>
				    <li><a href="#"><img src="css/images/small3.jpg" alt="" /></a></li>
				    <li><a href="#"><img src="css/images/small4.jpg" alt="" /></a></li>
				    <li><a href="#"><img src="css/images/small5.jpg" alt="" /></a></li>
				    <li><a href="#"><img src="css/images/small6.jpg" alt="" /></a></li>
				    <li class="last"><a href="#"><img src="css/images/small7.jpg" alt="" /></a></li>
				</ul>
			</div>
			<div class="more-nav">
				<a href="#" class="prev">previous</a>
				<a href="#" class="next">next</a>
			</div>
		</div> -->
		<!-- End More Products -->

	</div>
	<!-- End Side Full -->
	
	<?php include("footer.php") ?>
	
</div>	
<!-- End Shell -->

</body>
</html>