<?php

require './Database.php';
require './Item.php';

class Service {

	/* NOTE: used to test the dataBase*/
	function fetchAllitems() {
		if(isset($_POST['exit'])){ //return to menu
			header( "Location: http://localhost/Proj3/menu.php");
			exit;
		}
		
		$dbObject = new Database();
		$dbConnection = $dbObject->getDatabaseConnection();

      $sql = "SELECT * FROM ITEM";

		$stmt = $dbConnection->prepare($sql);
		$stmt->setFetchMode(PDO::FETCH_CLASS, 'Item');

		if ($stmt->execute()){
			return $stmt->fetchAll();
		} else{
			return 'Failed';
		}
	}


	function SearchItem() {
		if(isset($_POST['exit'])){ //return to menu
			header( "Location: http://localhost/Proj3/menu.php");
		}

		$input = $_POST['input']; //connect to the dataBase.
		$dbObject = new Database();
		$dbConnection = $dbObject->getDatabaseConnection();

		if(is_numeric($input)){ //check if input is a valid ID value
			$iId = $_POST['input'];
			$sql = "SELECT * FROM ITEM WHERE iId=".$iId;
		}
		else{
			$Iname = $_POST['input'];
			$sql = "SELECT * FROM ITEM WHERE Iname = ('$Iname')"; // A string must be encapsulated
		}
		
		$stmt = $dbConnection->prepare($sql);
		$stmt->setFetchMode(PDO::FETCH_CLASS, 'Item');
		if ($stmt->execute()){
			return $stmt->fetchAll();
		} else{
			return 'Failed';
		}
	}

	/*
		NOTE: Must add AUTO_INCREMENT to DataBase for the primary key to be self updated
		otherwise you mighy experience key violation!
	*/
	function InsertItem() {
		if (isset($_POST['exit'])) {
			 header( "Location: http://localhost/Proj3/menu.php");
			 exit;// exit was added to prevent menu button from adding ID number without name
			}

		$Iname = $_POST['Iname'];
		$Sprice = $_POST['Sprice'];
		$Idescription = $_POST['Idescription'];

		$dbObject = new Database();
	 	$dbConnection = $dbObject->getDatabaseConnection();

		$sql = "INSERT INTO ITEM (`Iname`,`Sprice`,`Idescription`) VALUES (?,?,?)";
	 	$stmt = $dbConnection->prepare($sql);

		if ($stmt->execute([$Iname, $Sprice, $Idescription])) {
			return "Item: '$Iname' <br> |Price: $'$Sprice' <br> |Description: '$Idescription'";
		} else {
			 return 'Failed';  
		}
  }

  function updateItem(){
		if (isset($_POST['exit'])){
			header( "Location: http://localhost/Proj3/menu.php");
		}

		$iId = $_POST['iId'];
		$Iname = $_POST['Iname'];
		$Sprice = $_POST['Sprice'];
		$Idescription = $_POST['Idescription'];

		$dbObject = new Database();
		$dbConnection = $dbObject->getDatabaseConnection();

		$sql = "UPDATE ITEM SET Iname=('$Iname'), Sprice=('$Sprice'), Idescription=('$Idescription')WHERE iId=('$iId')";
		$stmt = $dbConnection->query($sql);

		return 'Updated complete, Check your list.';
	}

	function deleteItem() {
		if(isset($_POST['exit'])){
			header( "Location: http://localhost/Proj3/menu.php");
		}
		
		$input = $_POST['input'];

		$dbObject = new Database();
	 	$dbConnection = $dbObject->getDatabaseConnection();

		if(is_numeric($input)){ //check if input is a valid ID number
			$iId = $_POST['input'];
			$sql = "DELETE FROM ITEM WHERE iId=".$iId;
		}
		else{
			$Iname = $_POST['input'];
			$sql = "DELETE FROM ITEM WHERE Iname=('$Iname')"; // A string must be encapsulated
		}

		$stmt = $dbConnection->query($sql);
		return 'Item Deleted!';
  }
}
?>