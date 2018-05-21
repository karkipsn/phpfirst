<?php 
    // initialize errors variable
$errors = "";

	// connect to database
$db = mysqli_connect("localhost", "root", "", "to-do-list");

	// insert a quote if submit button is clicked
if (isset($_POST['task_submit'])) {
	if (empty($_POST['task'] and $_POST['date'] and $_POST['priority'] and $_POST['descs'] and $_POST['email'])) {
		$errors = "You must fill in the task";
	}else{
		$task = $_POST['task'];
		$date = $_POST['date'];
		$priority= $_POST['priority'];
		$descs= $_POST['descs'];
		$email=$_POST['email'];
		$sql = "INSERT INTO tasks (task,date,priority,descs,email) VALUES ('$task','$date','$priority','$descs','$email') ";
		mysqli_query($db, $sql);
		header('location: index.php');
	}
}

if (isset($_GET['del_task'])) {
	$id = $_GET['del_task'];

	mysqli_query($db, "DELETE FROM tasks WHERE id=".$id);
	header('location: index.php');
}


?>
<html>
<head>
	<title>ToDo List Application PHP and MySQL</title>

	<link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body>
	<div class="heading">
		<h2 style="font-style: 'Hervetica';">ToDo List Application PHP and MySQL database</h2>
	</div>

	<form  id="tasks" method="post" action="index.php" class="input_form">

		<label for="tasks-task">Task:</label>
		<input id="tasks-task" name="task" type="text" required>
		<br>
		<!-- <input type="text" name="task" class="task_input"> -->
		<label for="tasks-date">Date:</label>
		<input id="tasks-date"  name="date" class="date_input"  type="date" required>
		<br>

		<label for="tasks-priority">Priority:</label>
		<input id="tasks-priority" name="priority" type="number" required min="1" max="5" step="1" value="2">
		<br>	
		<label for="tasks-descs">Description:</label>
		<input id="tasks-descs" name="descs" type="text">
		<br/>
		<label for="tasks-email">Invite:</label>
		<input id="tasks-email" name="email" type="email" multiple>
		<br />
		<button type="submit" name="task_submit" id="add_btn" class="add_btn">Add Task</button>


		<?php if (isset($errors)) { ?>
			<p><?php echo $errors; ?></p>
		<?php } ?>
	</form>

	<table>
		<thead>
			<tr>
				<th >N</th>
				<th>Tasks</th>
				<th>Date</th>
				<th>Priority</th>	
				<th>Description</th>
				<th>Email</th>
				<th >Action</th>
			</tr>
		</thead>

		<tbody>
			<?php 
		// select all tasks if page is visited or refreshed
			$tasks = mysqli_query($db, "SELECT * FROM tasks");

			$i = 1; while ($row = mysqli_fetch_array($tasks)) { ?>
				<tr>
					<td> <?php echo $i; ?> </td>
					<td class="task"> <?php echo $row['task']; ?> </td>
					<td class="date"> <?php echo $row['date']; ?> </td>
					<td class="priority"> <?php echo $row['priority']; ?> </td>
					<td class="descs"> <?php echo $row['descs']; ?> </td>
					<td class="email"> <?php echo $row['email']; ?> </td>

					<td class="delete"> 
						<a href="index.php?del_task=<?php echo $row['id'] ?>">x</a> 
					</td>
				</tr>
				<?php $i++; } ?>	
			</tbody>
		</table>


	</body>
	</html>

