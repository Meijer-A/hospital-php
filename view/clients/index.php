<h1>clients</h1>

	<table>
		<thead>
			<tr>
				<th>Firstname</th>
				<th>Lastname</th>
				<th>Phone</th>
				<th>Email</th>
				<th>Action</th>
			</tr>
		</thead>
		</tbody>
 		<?php foreach ($clients as $client) { ?>
			<tr>
				<td><?= $client['client_firstname']; ?></td>
				<td><?= $client['client_lastname']; ?></td>
				<td><?= $client['client_phone']; ?></td>
				<td><?= $client['client_email']; ?></td>
				<td class="center">
					<a href="<?= URL ?>clients/edit/<?= $client['client_id']; ?>">edit</a>
					<a href="<?= URL ?>clients/delete/<?= $client['client_id']; ?>">delete</a>
				</td>
			</tr>
		<?php } ?> 
		</tbody>
	</table>
	<p><a href="<?= URL ?>/clients/create">create</a></p>