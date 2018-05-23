<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Datas with ajax</title>
  <link rel="stylesheet" href="styles.css">
</head>

<body>
  <div class="wrapper">
  	<?php echo $comments; ?>
  	<form class="comment_form">
      <div>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
      </div>
      <div>
      	<label for="comment">Comment:</label>
      	<textarea name="comment" id="comment" cols="30" rows="5"></textarea>
      </div>
      <button type="button" name ="submit_btn" id="submit_btn">POST</button>
      
      <button type="button" name ="update_btn" id="update_btn" style="display: none;">UPDATE</button>
    </form>
  </div>
</body>
</html>

<!-- Add JQuery -->
<script src="jquery.min.js"></script>
<script src="scripts.js"></script>