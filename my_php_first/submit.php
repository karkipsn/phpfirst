<?php
    $new-task-name = $_POST['new-task-name'];
    $new-task-date= $_POST['new-task-date'];
    $insert = "insert into TABLE_NAME values('$new-task-name','$new-task-date')";// Do Your Insert Query
    if(mysql_query($insert)) {
        echo "Success";
    } else {
        echo "Cannot Insert";
    }
?>