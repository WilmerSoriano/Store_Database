<?php
// Safely grab the choice — if it isn't set yet, $option will be null
$option = isset($_POST['choice']) ? (int)$_POST['choice'] : null;

if ($option !== null) {
	// print ($_POST['choice']);
    //$option=$_POST['choice'];
    switch ($option) {
        case 1: 
            header( "Location: http://localhost/Store_Database/front&back_End/SearchItem.php");
            break;
        case 2:
            header( "Location: http://localhost/Store_Database/front&back_End/InsertItem.php");
            break;
        case 3:
            header( "Location: http://localhost/Store_Database/front&back_End/updateItem.php");
            break;
        case 4:
            header( "Location: http://localhost/Store_Database/front&back_End/deleteItem.php");
            break;
        case 5:
            header( "Location: http://localhost/Store_Database/front&back_End/Index.php");
            break;
        case 6:
            exit;
    }
}
else {
	echo <<<END
    ===== Item options ==== <br>
    1. Search Item <br>
    2. Insert New Item <br>
    3. Update Item <br>
    4. Delete Item <br>
    5. List of Item <br>
    ==================== <br>
    END;
    echo <<<_HTML_
	<FORM method="post"> 
	Enter your option: <input type="number" name="choice" min="1" max="5">
	<BR>
	<INPUT type="submit" value="SUBMIT">
	</FORM>
	_HTML_;
}
?>