<!DOCTYPE html>
<html>
<head>
	<title>
		Learning java script
	</title>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>

        <script>

            jQuery(document).on('ready', function() {

                jQuery('form#add-new-task').bind('submit', function(event){
                    event.preventDefault();

                    var tbody = jQuery('#todo > tbody'); 

                    tbody.append('<tr><th scope="row" style="background-color:' + this['new-task-color'].value + 
                        '"><input type="checkbox" /></th><td>' + this['new-task-date'].value +
                        '</td><td>' + this['new-task-priority'].value + '</td><td>' + this['new-task-name'].value +
                        '</td><td>' + this['new-task-desc'].value + '</td><td>' + this['new-task-email'].value + '</td></tr>');                

                    return false;  

                });
            });
        </script>

	<style type>
	body {
		color: #000000;
		font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;            
	}

	form#add-new-task label{
		width: 80px;
		display: inline-block;
		margin-right: 10px;
	}
	form#add-new-task input{
		width: 150px;
		margin-right: 10px;
	}
	form#add-new-task :required {
		border-color: #11b8ff;
		-webkit-box-shadow: 0 0 5px rgba(17, 184, 255, .75);
		-moz-box-shadow: 0 0 5px rgba(17, 184, 255, .75);
		-o-box-shadow: 0 0 5px rgba(17, 184, 255, .75);
		-ms-box-shadow: 0 0 5px rgba(17, 184, 255, .75);
		box-shadow: 0 0 5px rgba(17, 184, 255, .75);
	}
	table {
		width: 100%;
	}

	table, tr, td, thead, tfoot, colgroup, col, caption {
		margin: 0px;
		border-spacing: 0px;
	}

	table {
		border: 1px solid #333333;
	}

	table thead tr {
		background-color: #d3edf8;
	}

	table tbody tr td:last-child, table thead tr th:last-child, table tfoot tr th:last-child {
		text-align: right;
	}

	table tfoot tr th:first-child {
		text-align: left;
		background-color: #ffffff;
		border-right: 1px solid #333333;
	}

	table tbody tr td, table tbody tr th, table thead tr th, table thead tr td {
		border-bottom: 1px solid #333333;
		border-top: 0px;
		border-left: 0px;
		border-right: 1px solid #333333;
	}

	table tbody tr td:last-child, table tbody tr th:last-child, table thead tr th:last-child {
		border-right: 0px;
	}

	table colgroup col:first-child {
		background-color: #e3edf8;
	}

	table thead tr th, table tbody tr td {
		padding: 4px 7px 2px;
	}

	table tbody tr:nth-child(even){
		background-color: #ececec;
	}

	table tbody tr:nth-child(od){
		background-color: #ffffff;
	}
</style>
</head>
<body>
	<form id="add-new-task">
		<label for="new-task-name">Name:</label>
		<input id="new-task-name" name="new-task-name" type="text" required>
		<br/>
		<label for="new-task-date">Date:</label>
		<input id="new-task-date" name="new-task-date" type="datetime" required>                    
		<br/>
		<label for="new-task-priority">Priority:</label>
		<input id="new-task-priority" name="new-task-priority" type="number" required min="1" max="5" step="1" value="2">
		<label for="new-task-color">Color:</label>
		<input id="new-task-color" name="new-task-color" type="color">
		<br/>
		<label for="new-task-desc">Description:</label>
		<input id="new-task-desc" name="new-task-desc" type="text">
		<br/>
		<label for="new-task-email">Invite:</label>
		<input id="new-task-email" name="new-task-email" type="email" multiple>
		<br />
		<input type="submit" value="Add New">
	</form>

	<table id="to-do-list">
		<caption>What's up next?</caption>
		<colgroup>
			<col />
			<col />
			<col />
			<col />
			<col />
			<col />
		</colgroup>
		<thead>
			<tr>
				<th scope="col"></th>
				<th scope="col">Date</th>
				<th scope="col">Priority</th>                            
				<th scope="col">Name</th>
				<th scope="col">Description</th>
				<th scope="col">Invitees</th>
			</tr>
		</thead>
		<tbody>                        
		</tbody>
	</table>

</body>
</html>