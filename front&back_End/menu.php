<?php

if ($_POST['choice']) {
	// print ($_POST['choice']);
    $option=$_POST['choice'];
    switch ($option) {
        case 1: 
            header( "Location: http://localhost/Proj3/SearchItem.php");
            break;
        case 2:
            header( "Location: http://localhost/Proj3/InsertItem.php");
            break;
        case 3:
            header( "Location: http://localhost/Proj3/updateItem.php");
            break;
        case 4:
            header( "Location: http://localhost/Proj3/deleteItem.php");
            break;
        case 5:
            header( "Location: http://localhost/Proj3/Index.php");
            break;
        case 6:
            exit;
    }
}
else {
	echo <<<END
    ==== Item options === <br>
    1. Search Item <br>
    2. Insert New Item <br>
    3. Update Item <br>
    4. Delete Item <br>
    5. List of Item <br>
    6. exit <br>
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