	<form action="<?= URL ?>patients/editSave" method="post">
	
		<input type="text" name="patientName" placeholder="patient naam" value="<?= $patients['patient_name']?>">
		<select name="species" placeholder="species">
			<option value="" disabled selected>species</option>
			<?php foreach ($species as $specie) { ?>
			<option value="<?= $specie['species_id']?>" <?php if ($specie['species_id'] === $patients['species_id']) { echo "selected"; } ?>><?= $specie['species_description']?></option>
			<?php } ?>
		</select>	
		<input type="text" name="patientStatus" placeholder="patient status" value="<?= $patients['patient_status']?>">
		<select name="client">
			<option value="" disabled selected>client naam</option>
			<?php foreach ($clients as $client) { ?>
			<option value="<?= $client['client_id']?>" <?php if ($client['client_id'] === $patients['client_id']) { echo "selected"; } ?>><?=$client['client_firstname'] . " " . $client['client_lastname']?></option>
			<?php } ?>
		</select>
		<input type="hidden" value="<?= $patients['patient_id']?>" name="id">

		<input type="submit" value="Verzenden">

	</form>