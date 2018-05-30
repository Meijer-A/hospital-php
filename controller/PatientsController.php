<?php 

require(ROOT . "model/PatientsModel.php");

function index()
{
		render("patients/index", array(
		'patients' => getAllPatients()
	));
}

function create()
{
	render("patients/create", array(
		'species' => getSpeciesInfo(),
		'clients' => getClientInfo()
	));
}

function createSave()
{
	if (!createPatient()) {
		header("Location:" . URL . "error/error_404");
		exit();
	} else {
		header("Location:" . URL . "patients/index");
	}

}

function edit($id)
{
	render("patients/edit", array(
		'patients' => getPatient($id),
		'species' => getSpeciesInfo(),
		'clients' => getClientInfo()
	));
}

function editSave()
{
	editPatient();
	
	header("Location:" . URL . "patients/index");
	exit();
}

function delete($id)
{
	deletePatient($id);

	header("Location:" . URL . "patients/index");
	exit();
}