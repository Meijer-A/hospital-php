<?php 

require(ROOT . "model/ClientsModel.php");

function index()
{
		render("clients/index", array(
		'clients' => getAllClients()
	));
}

function create()
{
	render("clients/create");
}

function createSave()
{
	createClient();

	header("Location:" . URL . "clients/index");
	exit();

}

function edit($id)
{
	render("clients/edit", array(
		'clients' => getClient($id)
	));
}

function editSave()
{
	editClient();

	header("Location:" . URL . "clients/index");
	exit();
}

function delete($id)
{
	deleteClient($id);

	header("Location:" . URL . "clients/index");
	exit();
}
