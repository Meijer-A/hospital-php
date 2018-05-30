<form action="<?= URL ?>clients/editSave" method="post">

		<input type="text" value="<?= $clients['client_firstname']; ?>" name="firstname" placeholder="voornaam">
		<input type="text" value="<?= $clients['client_lastname']; ?>" name="lastname" placeholder="achternaam">
		<input type="text" value="<?= $clients['client_phone']; ?>" name="phone" placeholder="telefoonnummer">
		<input type="text" value="<?= $clients['client_email']; ?>" name="email" placeholder="email">
		<input type="hidden" value="<?= $clients['client_id']; ?>" name="id">


		<input type="submit" value="Verzenden">
	
	</form>