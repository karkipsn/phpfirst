
<?php 
    // initialize errors variable
$errors = "";

	// connect to database
$db = mysqli_connect("localhost", "root", "", "to-do-list");

	// insert a quote if submit button is clicked
if (isset($_POST['product_submit'])) {
	if (empty($_POST['id'] and $_POST['name'] and $_POST['price'] and $_POST['description'] and $_POST['created_at'] and $_POST['updated_at'])) {
		$errors = "You must fill in the task";}
else{

		$id =  $_POST['id'];
		$name =  $_POST['name'];
		$price =  $_POST['price'];
		$description = $_POST['	description'];
		$created_at =  $_POST['created_at'];
		$updated_at = $_POST['updated_at'];
		
		$sql = "INSERT INTO product (id,name,price,	description,created_at,updated_at)
		         VALUES ('$id', '$name', '$price', '$	description', '$created_at', '$updated_at')";
		mysqli_query($db, $sql);
		header('location: product.php');
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Products</title>

	<style >

	* {
		margin: 0px;
		padding: 0px;
	}

	body {
		font-size: 100%;
		background: #FF0000;
		align-content: center;
	}

	.header {
		width: 30%;
		margin: 50px auto 0px;
		color: white;
		background: #FF0000;
		text-align: center;
		border: 1px solid #B0C4DE;
		border-bottom: none;
		border-radius: 10px 10px 0px 0px;
		padding: 20px;
	}

	form, .content {
		width: 60%;
		margin: 10px ;
		margin: 50px auto 0px;
		padding: 10px;
		border: 1px solid #B0C4DE;
		background: white;
		border-radius: 0px 0px 10px 10px;
	}
	.input-group {
		width: 200px
		margin: 10px 0px 10px 0px;
	}

	.input-group label {
		width: 150px
		display: block;
		text-align: left;
		margin: 10px;
	}
	.input-group input {
		height: 30px;
		width: 93%;
		padding: 5px 10px;
		font-size: 16px;
		border-radius: 5px;
		border: 1px solid gray;
	}
	.btn {
		padding: 10px;
		font-size: 15px;
		color: white;
		background: #FF0000;
		border: none;
		border-radius: 5px;
	}
	.error {
		width: 92%; 
		margin: 0px auto; 
		padding: 10px; 
		border: 1px solid #a94442; 
		color: #a94442; 
		background: #f2dede; 
		border-radius: 5px; 
		text-align: left;
	}

</style>

</head>

<body>

	<div class="header">
		<h2>Products Creation</h2>
	</div>


	<form  id="product" method="post" action="product.php" >

	
			<label for="product-id">ID:</label>
			<input id="product-task" name="id" type="number" required>
			<br>
	
		<!-- <input type="text" name="task" class="task_input"> -->
	
			<label for="product-name">Name:</label>
			<input id="product-date"  name="name" class="date_input"  type="text" required>
            <br>

	
			<label for="product-price">Price:</label>
			<input id="product-price" name="price" type="number" required>
	        <br>
	
			<label for="product-description">Description:</label>
			<input id="product-description" name="description" type="text">
			<br>
			<label for="product-created_at">Created:</label>
			<input id="product-created_at" name="created_at" class="date_input"  type="date" required>
		<br>
			<label for="product-updated_at">Updated:</label>
			<input id="product-updated_at" name="updated_at" class="date_input"  type="date" required>
	
		<button type="submit" name="product_submit" id="product_btn" class="add_btn">Add Task</button>
	</form>

</body>

<table>
		<thead>
			<tr>
				<th >id</th>
				<th>name</th>
				<th>price</th>
				<th>description</th>	
				<th>created_at</th>
				<th>updated_at</th>
				
			</tr>
		</thead>

		<tbody>
			<?php 
		// select all tasks if page is visited or refreshed
			$product = mysqli_query($db, "SELECT * FROM product");

			$i = 1; while ($row = mysqli_fetch_array($product)) { ?>
				<tr>
					<td class="id"> <?php echo $row['id']; ?> </td>
					<td class="name"> <?php echo $row['name']; ?> </td>
					<td class="price"> <?php echo $row['price']; ?> </td>
					<td class="description"> <?php echo $row['description']; ?> </td>
					<td class="created_at"> <?php echo $row['created_at']; ?> </td>
					<td class="updated_at"> <?php echo $row['updated_at']; ?> </td>

				</tr>
				<?php $i++; } ?>	
			</tbody>
		</table>


	</body>
</html>