<?php

require './Service.php';

$service = new Service();

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $result = $service->deleteItem();
}
?>

<!DOCTYPE html>
<html>
   <head>
      <title> Delete Item </title>
   </head>
   <body>
      <form method="post">
         <fieldset>
            <legend> Delete Item </legend>
            <p> Enter an Name of Item or </br> Item ID# to Delete</p> 
            <input type="text" name="input"></br> 

            <input id="button" type="submit" name="submit" value="SUBMIT">
            <input id="button" type="submit" name="exit" value="menu">
         </fieldset>
      </form>
      <?php if(!empty($result)): ?>
            <div>Deleting item...</div>
            <p><?= $result; ?></p>
      <?php endif; ?>
   </body>
</html>