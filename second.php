<?php
    $client_name = $_GET['client_name'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>My form</title>
    </head>
    <body>
        <form method='get'>
            <label>name: </label>
            <input type='text' name='client_name' />
            <button type='submit'>Submit</button>
        </form>
        <p>
            <?php $client_name ?  print   "Hello $client_name" : print 'Please Enter Name'; ?>
        </p>
    </body>
</html>