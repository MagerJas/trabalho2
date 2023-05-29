<?php
session_start();

// Start the session
// Check if the add to cart button is clicked
if (isset($_POST["add_to_cart"])) {
	
	// Get the product ID from the form
	$product_id = $_POST["product_id"];
	
	// Get the product quantity from the form
	$product_quantity = $_POST["product_quantity"];

	// Initialize the cart session variable
	// if it does not exist
	if (!isset($_SESSION["cart"])) {
		$_SESSION["cart"] = [];
		header("location:cart.php");
	}

	// Add the product and quantity to the cart
	$_SESSION["cart"][$product_id] = $product_quantity;
	header("location:cart.php");
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>HYBE</title>
		<link rel="stylesheet"
				href="shop.css">
	</head>
	<body>
		<header>
			<h1>Bem-Vindo a <?php
			$user = $_SESSION["user"];
			echo $user["name"];
			?> HYBE</h1>
		</header>
		<nav>
			
		</nav>
		<main>
			<section>
			<h2>Produtos</h2>
				<ul>
					<li>
						<h3>School backpack</h3>
						<img src=
"https://m.media-amazon.com/images/I/71TPa0CaroL.__AC_SX300_SY300_QL70_ML2_.jpg"
							alt="Product 1">
						<p>Mochila infantil para crianças</p>
						<p><span>R$110,00</span></p>

						<form method="post" action="shop.php">
							<input type="hidden"
								name="product_id"
								value="1">
							<label for="product1_quantity">
								Quantidade:
							</label>
							<input type="number"
								id="product1_quantity"
								name="product_quantity"
								value=""
								min="0"
								max="10">
							<button type="submit"
									name="add_to_cart">
								Adicionar ao carinho</button>
						</form>
					</li>
					<li>
						<h3>Colar elegante</h3>
						<img src=
"https://img.ltwebstatic.com/images3_pi/2023/04/12/168129555952c4e50df563b3c360025a362f6a5f83_thumbnail_600x.webp"
							alt="Product 2">
						<p>Colar de pérola com amuleto do coração</p>
						<p>
							<span>R$9,99</span>
						</p>

						<form method="post" action="shop.php">
							<input type="hidden"
								name="product_id"
								value="2">
							<label for="product2_quantity">
								Quantidade:
							</label>
							<input type="number"
								id="product2_quantity"
								name="product_quantity"
								value=""
								min="0"
								max="10">
							<button type="submit"
									name="add_to_cart">
								Adicionar ao carinho
						</button>
						</form>
					</li>
					<li>
						<h3>Luminária</h3>
						<img src=
"https://img.ltwebstatic.com/gspCenter/goodsImage/2022/7/15/2350011035/D97DE1E680FB9E349DE68F8BFC6165C2_thumbnail_600x.jpg"
							alt="Product 3">
						<p>Abajur Rotativa Projetor</p>
						<p>
							<span>R$29,99</span>
						</p>

						<form method="post" action="shop.php">
							<input type="hidden"
								name="product_id"
								value="3">
							<label for="product3_quantity">
								Quantidade:
							</label>
							<input type="number"
								id="product3_quantity"
								name="product_quantity"
								value=""
								min="0"
								max="10">
							<button type="submit"
									name="add_to_cart">
	   Adicionar ao carinho
							</button>
						</form>
					</li>
								
					<!-- Add forms for the other products here -->
				</ul>
			  				<ul>
					<li>
						<h3>Pulseira</h3>
						<img src=
"https://img.ltwebstatic.com/images3_pi/2022/09/19/16635530292382fc92cd32abc305405e4aae7058ab_thumbnail_600x.webp"
							alt="Product 4">
						<p>Pulseira Estampa floral Compatível com Xiaomi</p>
						<p><span>R$8,99</span></p>

						<form method="post" action="shop.php">
							<input type="hidden"
								name="product_id"
								value="4">
							<label for="product1_quantity">
								Quantidade:
							</label>
							<input type="number"
								id="product1_quantity"
								name="product_quantity"
								value=""
								min="0"
								max="10">
							<button type="submit"
									name="add_to_cart">
								Adicionar ao carinho</button>
						</form>
					</li>
					<li>
						<h3>Relogio</h3>
						<img src=
"https://img.ltwebstatic.com/images3_pi/2023/04/27/16825887300a17b777d5919ee1e8d1f2a16d3202e5_thumbnail_600x.webp"
							alt="Product 5">
						<p>Compatível com apple watch padrão floral</p>
						<p>
							<span>R$20,95</span>
						</p>

						<form method="post" action="shop.php">
							<input type="hidden"
								name="product_id"
								value="2">
							<label for="product2_quantity">
								Quantidade:
							</label>
							<input type="number"
								id="product2_quantity"
								name="product_quantity"
								value="5"
								min="0"
								max="10">
							<button type="submit"
									name="add_to_cart">
								Adicionar ao carinho
						</button>
						</form>
					</li>
					<li>
						<h3>Garrafa de água </h3>
						<img src=
"https://img.ltwebstatic.com/gspCenter/goodsImage/2023/3/7/3415461875_1048087/D4778608BA9D53FD533C335AB44AC3D9_thumbnail_600x.jpg"
							alt="Product 6">
						<p>Garrafa de água modelo ursinho Transparente</p>
						<p>
							<span>R$32,99</span>
						</p>

						<form method="post" action="shop.php">
							<input type="hidden"
								name="product_id"
								value="6">
							<label for="product3_quantity">
								Quantidade:
							</label>
							<input type="number"
								id="product3_quantity"
								name="product_quantity"
								value=""
								min="0"
								max="10">
							<button type="submit"
									name="add_to_cart">
	   Adicionar ao carinho
							</button>
						</form>
					</li>
								
					<!-- Add forms for the other products here -->
				</ul>
			</section>
		</main>
	
		<script src="shop.php"></script>
	</body>
</html>
