<?php

require './Service.php';

$service = new Service();

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $result = $service->updateItem(); 
}
?>

<!DOCTYPE html>
<html>
<head>
<title> Update Item </title>
    </head>
    <body>
        <form method="post">
        <fieldset>
            <legend> Update Item</legend>

            <input type="text" name="iId" placeholder="ID"></br>

            <input type="text" name="Iname" placeholder="Name of item" ></br>

            <input type="text" name="Sprice" placeholder="Price" ></br>

            <input type="text" name="Idescription" placeholder="Description"></br>

            <input id="button" type="submit" name="submit" value="SUBMIT">
            <input id="button" type="submit" name="exit" value="menu">
        </fieldset>
        </form>
        <?php if(!empty($result)): ?>
            <div>Updating item...</div>
            <p><?= $result; ?></p>
        <?php endif; ?>
    </body>

</html>