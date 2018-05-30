<h1>species</h1>


	<table>
		<thead>
			<tr>
				<th>#</th>
				<th>Description</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		</tbody>
 		<?php foreach ($species as $specie) { ?>
			<tr>
				<td><?= $specie['species_id']; ?></td>
				<td><?= $specie['species_description']; ?></td>
				<td class="center">
					<a href="<?= URL ?>species/edit/<?= $specie['species_id']; ?>">edit</a>
					<a href="<?= URL ?>species/delete/<?= $specie['species_id']; ?>">delete</a>
				</td>
			</tr>
		<?php } ?> 
		</tbody>
	</table>
	<p><a href="<?= URL ?>species/create">create</a></p>