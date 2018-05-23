<html>
    <head>
        <title>My first PHP Website</title>
    </head>
    <body>
        <h2>Registration Page</h2>
        <a href="index.php">Click here to go back<br/><br/>

        <form id="add-new-task">
          

    <input id="new-task-name" name="new-task-name" type="text" required>
    <input id="new-task-date" name="new-task-date" type="datetime" required>                    
    <input id="new-task-priority" name="new-task-priority" type="number" required min="1" max="5" step="1" value="2">
    <input id="new-task-color" name="new-task-color" type="color">
    <input id="new-task-desc" name="new-task-desc" type="text">
    <input id="new-task-email" name="new-task-email" type="email" multiple>
    <input type="submit" value="Add new">

</form>
    </body>
</html>

