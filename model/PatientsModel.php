<?php 

function getPatient($id) 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM patients WHERE patient_id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id));

	$db = null;

	return $query->fetch();
}

function getAllPatients() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT `patients`.*,
	 `species`.`species_description`,
	 `clients`.`client_firstname`,
	 `clients`.`client_lastname` 
	 FROM `patients` 
	 JOIN `species` ON `patients`.`species_id` = `species`.`species_id` 
	 JOIN `clients` ON `patients`.`client_id` = `clients`.`client_id`";

	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function getClientInfo()
{
	$db = openDatabaseConnection();

	$sql = "SELECT `clients`.* FROM `clients`";

	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function getSpeciesInfo()
{
	$db = openDatabaseConnection();

	$sql = "SELECT `species`.* FROM `species`";

	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function createPatient() 
{
	$patientName = $_POST['patientName'];
	$species = $_POST['species'];
	$patientStatus = $_POST['patientStatus'];
	$client = $_POST['client'];
	
	$db = openDatabaseConnection();

	$sql = "INSERT INTO patients(patient_name, species_id, patient_status, client_id) VALUES (:patientName, :species, :patientStatus, :client)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':patientName' => $patientName,
		':species' => $species,
		':patientStatus' => $patientStatus,
		':client' => $client));

	$db = null;
	
	return true;
}

function editPatient() 
{
	$patientName = $_POST['patientName'];
	$species = $_POST['species'];
	$patientStatus = $_POST['patientStatus'];
	$client = $_POST['client'];
	$id = $_POST['id'];
	
	$db = openDatabaseConnection();

	$sql = "UPDATE patients SET patient_name = :patientName, species_id = :species, patient_status = :patientStatus, client_id = :client WHERE patient_id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
			':patientName' => $patientName,
			':species' => $species,
			':patientStatus' => $patientStatus,
			':client' => $client,
			':id' => $id));

	$db = null;
	
	return true;
}

function deletePatient($id) 
{	
	$db = openDatabaseConnection();

	$sql = "DELETE FROM patients WHERE patient_id=:id ";
	$query = $db->prepare($sql);
	$query->execute(array(
		':id' => $id));

	$db = null;
	
	return true;
}