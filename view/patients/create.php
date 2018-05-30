	<form action="<?= URL ?>patients/createSave" method="post">
	
		<input type="text" name="patientName" placeholder="patient naam">
		<select name="species" placeholder="species">
			<option value="" disabled selected>species</option>
			<?php foreach ($species as $specie) { ?>
			<option value="<?= $specie['species_id']?>"><?= $specie['species_description']?></option>
			<?php } ?>
		</select>	
		<input type="text" name="patientStatus" placeholder="patient status">
		<select name="client">
			<option value="" disabled selected>client naam</option>
			<?php foreach ($clients as $client) { ?>
			<option value="<?= $client['client_id']?>"><?=$client['client_firstname'] . " " . $client['client_lastname']?></option>
			<?php } ?>
		</select>
		<input type="submit" value="Verzenden">

	</form>

