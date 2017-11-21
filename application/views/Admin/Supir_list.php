<?php $this->load->view('templates/admin/Headerr');?>
<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Data Supir</h1>
		</div><?=$this->session->flashdata('pesan')?>	
	</div>
	<div class="row">
		<table id="example" class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>ID Supir</th>
					<th>Nama </th>
					<th>Alamat</th>
					<th>No Hp</th>
					<th>Status</th>
					<th style="width: 96px">Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($supir as $key => $value) { ?>
				<tr>
					<td><?php echo $value->id_supir; ?></td>
					<td><?php echo $value->nama; ?></td>
					<td><?php echo $value->alamat; ?></td>
					<td><?php echo $value->nohp; ?></td>
					<td><?php echo $value->status; ?></td>
					<td>
						<a href="<?php echo site_url('supir/delete/'.$value->id_supir); ?>"
							class="btn btn-danger">
							<i class="fa fa-trash"></i>
						</a>
						<a href="<?php echo site_url('supir/update/'.$value->id_supir); ?>"
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