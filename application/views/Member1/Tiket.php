<table border="2">
<center>Pemesanan</center>
	<thead>
		<tr>
			<th>id_tiket </th>
			<th>nama</th>
			<th>tgl_berangkat </th>
			<th>tujuan </th>
			<th>nohp </th>
			<th>alamat</th>


		</tr>
	</thead>
	</center>
	<tbody>
	<?php foreach ($data_tiket as $key => $row) { ?>
		<tr>
			<td><?php echo $row->id_tiket; ?></td>
			<td><?php echo $row->nama; ?> </td>
			<td><?php echo $row->tgl_berangkat; ?> </td>
			<td><?php echo $row->tujuan; ?> </td>
			<td><?php echo $row->nohp; ?> </td>
			<td><?php echo $row->alamat; ?> </td>

		</tr>

<?php } ?>

	</tbody>
</table>