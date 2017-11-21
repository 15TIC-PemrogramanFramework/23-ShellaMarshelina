<?php $this->load->view('templates/User/header'); ?>
<div class="row">
	<div class="col-md-12 text-right">
		<div style="margin-top:20px;margin-bottom:10px;">
			<?php echo anchor(site_url('shellauts/tambah'),
			'<i class="fa fa-plus-circle"></i> Tambah Data',
			'class="btn btn-primary"');?>
		</div>
	</div>
</div>
<table id="example" class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>id transaksi </th>
			<th>id member </th>
			<th>id tiket </th>
			<th>keterangan </th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($data_pesanan as $key => $row) { ?>
		<tr>
			<td><?php echo $row->id_transaksi; ?> </td>
			<td><?php echo $row->id_member; ?></td>
			<td><?php echo $row->id_tiket; ?> </td>
			<td><?php echo $row->keterangan; ?> </td>
				<td>
				<?php echo anchor(site_url('shellauts/edit/'.$row->id_transaksi),
					'<i class="fa fa-pencil" ></i>',
					'class="btn btn-warning"'); ?>
				<?php echo anchor(site_url('shellauts/delete/'.$row->id_transaksi),
					'<i class="fa fa-trash" ></i>',
					'class="btn btn-danger"'); ?>
			</td>
		</tr>
<?php } ?>

	</tbody>
</table>
<?php $this->load->view('templatesMember/footer');  ?>
<script type="text/javascript">
	$(document).ready(function() {
		$('#example').DataTable();
	});

</script>

