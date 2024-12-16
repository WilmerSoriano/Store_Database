<?php

require './Service.php';

$service = new Service();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$result = $service->SearchItem();
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title> Search for Item </title>
	</head>
	<body>
		<form method="post">
			<fieldset>
				<legend> Search for Item </legend>

				<p> Enter an Item Name or Item ID#</p> 
				<input type="text" name="input">

				<input id="button" type="submit" name="submit" value="SEARCH">
				<input id="button" type="submit" name="exit" value="menu">
			</fieldset>
		</form>

		<?php if(!empty($result)): ?> <!--Verify the result is loaded-->
			<div>RESULT</div>
				<table>
					<thead>
						<tr>
							<th>iId</th>
							<th>Iname</th>
							<th>Sprice</th>
							<th>Idescription</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($result as $item) : ?>
							<tr>
								<td><?= htmlspecialchars($item->iId); ?></td>
								<td><?= htmlspecialchars($item->Iname); ?></td>
								<td><?= htmlspecialchars($item->Sprice); ?></td>
								<td><?= htmlspecialchars($item->Idescription); ?></td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
		<?php endif; ?>
	</body>
</html>