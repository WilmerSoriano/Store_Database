<?php

require './Service.php';

$service = new Service();

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $result = $service->InsertItem();
}
?>

<!DOCTYPE html>
<html>
<head>
<title> Insert Item </title>
    </head>
    <body>
        <form method="post">
        <fieldset>
            <legend> Insert Item </legend>

            <input type="text" name="Iname" placeholder="Name of item" ></br>

            <input type="text" name="Sprice" placeholder="Price" ></br>

            <input type="text" name="Idescription" placeholder="Description" ></br>

            <input id="button" type="submit" name="submit" value="SUBMIT">
            <input id="button" type="submit" name="exit" value="menu">
        </fieldset>
        </form>
        <?php if(!empty($result)): ?>
            <div>The following item was added</div>
            <p><?= $result; ?></p>
        <?php endif; ?>
    </body>
</html>