<form action="<?= URL ?>species/editSave" method="post">

		<input type="text" value="<?= $species['species_description']?>" name="speciesDescription" placeholder="dier soort">
		<input type="hidden" value="<?= $species['species_id']?>" name="id">

		<input type="submit" value="Verzenden">
	
</form>