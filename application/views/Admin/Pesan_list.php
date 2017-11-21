<?php $this->load->view('templates/admin/Headerr');?>
<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Data Pesanan</h1>
		</div><?=$this->session->flashdata('pesan')?>	
	</div>
	<div class="row">
		<table id="example" class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>ID Pesan</th>
					<th>ID Tiket</th>
					<th>Nama Member</th>
					<th>Status</th>
					<th style="width: 96px">Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($pesan as $key => $value) { ?>
				<tr>
					<td><?php echo $value->id_pesan; ?></td>
					<td><?php echo $value->id_tiket; ?> 
					<td><?php echo $value->nama; ?></td>
					<td><?php echo $value->status; ?></td>
					<td>
						<a href="<?php echo site_url('pesan/delete/'.$value->id_pesan); ?>"
							class="btn btn-danger">
							<i class="fa fa-trash"></i>
						</a>
						<a href="<?php echo site_url('pesan/update/'.$value->id_pesan); ?>"
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