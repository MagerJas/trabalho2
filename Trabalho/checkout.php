<!DOCTYPE html>
<html>

<head>
	<title>Conferir</title>
	<link rel="stylesheet"
		type="text/css"
		href="checkout.css">
</head>
<style>
	body {
		background-color: #ce93d8;
		font-family: Arial, sans-serif;
	}
	
	header {
		background-color: green;
		color: #ffffff;
		padding: 20px;
	}
	
	nav ul {
		margin: 0;
		padding: 0;
		list-style: none;
	}
	
	nav li {
		display: inline-block;
		margin-right: 20px;
	}
	
	nav a {
		color: #ffffff;
		text-decoration: none;
	}
	
	nav a:hover {
		text-decoration: underline;
	}
	
	section {
		max-width: 600px;
		margin: 0 auto;
		padding: 20px;
	}
	
	h1 {
		color: green;
		font-size: 32px;
		margin-bottom: 20px;
	}
	
	h2 {
		color: green;
		font-size: 24px;
		margin-bottom: 10px;
	}
	
	label {
		display: block;
		margin-bottom: 5px;
		color: #666666;
	}
	
	input[type="text"],
	input[type="email"] {
		width: 100%;
		padding: 10px;
		border: 1px solid #cccccc;
		border-radius: 5px;
		margin-bottom: 10px;
		font-size: 16px;
	}
	
	input[type="submit"] {
		background-color: green;
		color: #ffffff;
		padding: 10px 20px;
		border: none;
		border-radius: 5px;
		font-size: 16px;
		cursor: pointer;
	}
	
	input[type="submit"]:hover {
		background-color: #228B22;
	}
	
	footer {
		background-color: green;
		color: #ffffff;
		padding: 20px;
		text-align: center;
	}
	
</style>

<body>
	<header>
		<nav>
			<ul>
				<li>
					<a href="shop.php">Home</a>
				</li>
				<li>
					<a href="shop.php">Shop</a>
				</li>
				<li>
					<a href="cart.php">Carrinho</a>
				</li>
			
			</ul>
		</nav>
	</header>

	<section>
		<h1>Conferir</h1>
		<form action="thanks.php" method="post">
			<h2>Informação de Pagamento</h2>
			<label for="name">Nome:</label>
			<input type="text"
				id="name"
				name="name" required>

			<label for="email">Email:</label>
			<input type="email"
				id="email"
				name="email" required>

			<label for="address">Endereço:</label>
			<input type="text"
				id="address"
				name="address" required>

			<label for="city">Cidade:</label>
			<input type="text"
				id="city"
				name="city" required>

			<label for="state">Estado:</label>
			<input type="text"
				id="state"
				name="state" required>

			<label for="zip">Zip Code:</label>
			<input type="text"
				id="zip"
				name="zip" required>

			<h2>Informação de Pagamento</h2>
			<label for="cardholder">Nome do Cartão:</label>
			<input type="text" id="cardholder"
				name="cardholder" required>

			<label for="cardnumber">Numero do Cartão:</label>
			<input type="text"
				id="cardnumber"
				name="cardnumber" required
				pattern="\d{4}-?\d{4}-?\d{4}-?\d{4}" required=>


			<label for="expmonth">Mẽs de Espiração:</label>
			<input type="text"
				id="expmonth"
				name="expmonth" required>

			<label for="expyear">Ano de Espiração:</label>
			<input type="text"
				id="expyear"
				name="expyear" required>

</body>

</html>
