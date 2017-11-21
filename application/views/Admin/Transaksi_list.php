<?php $this->load->view('templates/admin/Headerr');?>
<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Data Konfirmasi</h1>
		</div>
	</div>
	<div class="row">
		<table id="example" class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>ID Transaksi</th>
					<th>ID Manager</th>
					<th>Nama </th>
					<th>Transfer Via</th>
					<th style="width: 96px">Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($transaksi as $key => $value) { ?>
				<tr>
					<td><?php echo $value->id_transaksi; ?></td>
					<td><?php echo $value->id_manager ?></td>
					<td><?php echo $value->nama; ?></td>
					<td><?php echo $value->transfer_via; ?></td>
						<td>
						<a href="<?php echo site_url('transaksi/delete/'.$value->id_transaksi); ?>"
							class="btn btn-danger">
							<i class="fa fa-trash"></i>
						</a>
						<a href="<?php echo site_url('transaksi/update/'.$value->id_transaksi); ?>"
							class="btn btn-warning">
							<i class="fa fa-pencil-square"></i>
						</a>
					</td>	
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
	<?php $this->load->view('templates/admin/Footerr'); ?>
	<script type="text/javascript">
	$(document).ready(function () {
		$('#example').DataTable();
	});
</script>