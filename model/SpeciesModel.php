<?php 
function getSpecies($id) 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM species WHERE species_id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id));

	$db = null;

	return $query->fetch();
}

function getAllSpecies() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM species";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function createSpecies() 
{
	$speciesDescription = $_POST['speciesDescription'];
	if ($speciesDescription === "") {
		header("Location:" . URL . "error/LegenVelden");
		exit();
	}

	
	$db = openDatabaseConnection();

	$sql = "INSERT INTO species(species_description) VALUES (:speciesDescription)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':speciesDescription' => $speciesDescription));

	$db = null;
	
	return true;
}

function editSpecies() 
{
	$speciesDescription = $_POST['speciesDescription'];
	$id = $_POST['id'];
	if ($speciesDescription === null) {
		header("Location:" . URL . "error/LegenVelden");
		exit();
	}
	
	$db = openDatabaseConnection();

	$sql = "UPDATE species SET species_description = :speciesDescription WHERE species_id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		':speciesDescription' => $speciesDescription,
		':id' => $id));

	$db = null;
	
	return true;
}

function deleteSpecies($id) 
{	
	$db = openDatabaseConnection();

	$sql = "DELETE FROM species WHERE species_id=:id ";
	$query = $db->prepare($sql);
	$query->execute(array(
		':id' => $id));

	$db = null;
	
	return true;
}