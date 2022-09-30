<?php
include "action.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title> My-Tasks </title>
</head>
<body>

    <form action="action.php" method="POST">

                <div class="input-group mb-3">
            <input type="text" name="task" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button name="add" class="btn btn-outline-secondary" type="submit">add</button>
                <button name="delete" class="btn btn-outline-secondary" type="submit">delete task</button>
            </div>
            </div>
    </form>

    <div >

    </div>

    <?php 
    $todo = new tasks(null,null);
    $rows = $todo->getdata();
    for($i=0;$i<count($rows);$i++){

       echo "<p>" .$rows[$i]["tasksT"]."</p>"  ;
       
    }
    


    
    ?>

</body>
</html>