<?php 

require(ROOT . "model/SpeciesModel.php");

function index()
{
		render("species/index", array(
		'species' => getAllSpecies()
	));
}

function create()
{
	render("species/create");
}

function createSave()
{
	if (!createSpecies()) {
		header("Location:" . URL . "error/");
		exit();
	} else {
		header("Location:" . URL . "species/index");
	}

	// createSpecies();

	// header("Location:" . URL . "species/index");
	// exit();

}

function edit($id)
{
	render("species/edit", array(
		'species' => getSpecies($id)
	));
}

function editSave()
{
	editSpecies();

	header("Location:" . URL . "species/index");
	exit();
}

function delete($id)
{
	deleteSpecies($id);

	header("Location:" . URL . "species/index");
	exit();
}
