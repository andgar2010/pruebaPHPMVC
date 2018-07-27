<table>

	<?php foreach ($data as $r): ?>
		<tr>
			<td><?php echo  $r->id_usuario ?></td>
			<td><?php echo  $r->dni ?></td>
			<td><?php echo  $r->nombre ?></td>
			<td><?php echo  $r->apellido ?></td>
			<td><?php echo  $r->contrasena ?></td>
			<td><?php echo $r->email ?></td>
		</tr>
	<?php endforeach ?>
</table>