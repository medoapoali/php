<!DOCTYPE html>
<html>
<head>
	<title>Facebook Course</title>
	<style>
		body {
			background-color: white;
			margin: 0;
			padding: 0;
			font-family: Arial, sans-serif;
		}
		nav {
			background-color: black;
			color: white;
			display: flex;
			align-items: center;
			justify-content: center;
			height: 50px;
		}
		nav img {
			height: 60px;
			margin: 0 10px;
		}

		.product-info .offer-price {
			font-size: 36px;
			margin: 20px 0;
			padding: 0;
			color: red;
		}
		.form {
			width: 100%;
			margin: 50px auto;
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
			align-items: center;
		}
		.form input[type="text"], .form input[type="tel"], .form input[type="email"] {
			width: 100%;
			padding: 10px;
			margin: 10px;
			border-radius: 5px;
			border: none;
			background-color: #f2f2f2;
			font-size: 18px;
		}
		.form input[type="submit"] {
			width: 100%;
			padding: 10px;
			margin: 10px;
			border-radius: 5px;
			border: none;
			background-color: black;
			color: white;
			font-size: 18px;
			cursor: pointer;
		}
		.message {
			width: 100%;
			margin: 50px auto;
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
			align-items: center;
			color: red;
			font-size: 24px;
			text-align: center;
		}
	</style>
</head>
<body>
	<nav>
		<img src="logo.png" alt="Logo">
	</nav>
<div class="product-card">
  <div class="product-image">
    <img src="4.jpg" alt="Product Image">
    <div class="image-switcher">
      <img src="1.jpg" alt="Product Image">
      <img src="2.jpg" alt="Product Image">
      <img src="3.jpg" alt="Product Image">
      <img src="4.jpg" alt="Product Image">
    </div>
  </div>

</div>

<style>
.product-card {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin: 20px auto;
    width: 70%;
    height: 100%;
}

.product-image {
position: relative;
    width: 100%;
    height: 650px;
    overflow: hidden;
}

.product-image img {
			width: 100%;
			height: 100%;
}

.image-switcher {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 50px;
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: rgba(0, 0, 0, 0.5);
  transition: all 0.3s ease-in-out;
}

.image-switcher img {
  width: 30px;
  height: 30px;
  margin: 0 10px;
  cursor: pointer;
  transition: all 0.3s ease-in-out;
}

.image-switcher img:hover {
  transform: scale(1.2);
}

.product-info {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  width: 100%;
  height: 200px;
  padding: 20px;
  text-align: center;
}

.product-info h2 {
  font-size: 24px;
  margin-bottom: 10px;
}

.product-info p {
  font-size: 16px;
  margin-bottom: 10px;
}

button {
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 5px;
  padding: 10px 20px;
  font-size: 16px;
  cursor: pointer;
  transition: all 0.3s ease-in-out;
}

button:hover {
  background-color: #0069d9;
}
</style>

<script>
const imageSwitcher = document.querySelector('.image-switcher');
const productImage = document.querySelector('.product-image img');

imageSwitcher.addEventListener('click', (e) => {
  if (e.target.tagName === 'IMG') {
    productImage.src = e.target.src;
  }
});
</script>
    <form class="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <input type="text" name="name" placeholder="الاسم" required>
    <input type="tel" name="mobile" placeholder="رقم لتواصل" required>
    <input type="text" name="city" placeholder="المدينه" required>
    <input type="text" name="cityis" placeholder="العنوان" required>
    <input type="text" name="color" placeholder="لون المنتج" required>
    <input type="number" name="miny" placeholder="العدد" required>
    <input type="submit" name="submit" value="Order Now">
</form>

    <?php require('indx.php'); ?>
  </body>
</html>
