<?php $this->load->view('templates/admin/Headerr');?>
<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Data Tiket</h1>
		</div><?=$this->session->flashdata('pesan')?>	
		<div class="col-md-12 text-right">
		<a href="<?php echo site_url('tiket/tambah'); ?>" class="btn btn-primary" 
		style="margin-top:20px; margin-bottom:20px">
		<i class="fa fa-plus-circle"></i> Insert</a>
		</div>	

	</div>
	<div class="row">
		<table id="example" class="table table-striped table-bordered">
			<thead>
				<tr>
					<th style="width: 10px">ID</th>
					<th>Nama</th>
					<th>Tanggal Berangkat</th>
					<th>Tujuan</th>
					<th>Harga</th>
					<th>No Hp</th>
					<th>Alamat</th>
					<th>No Pol</th>
					
					<th style="width: 96px">Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($tiket as $key => $value) { ?>
				<tr>
					<td><?php echo $value->id_tiket; ?></td>
					<td><?php echo $value->nama; ?></td>
					<td><?php echo $value->tgl_berangkat; ?></td>
					<td><?php echo $value->tujuan; ?></td>
					<td><?php echo $value->harga; ?></td>
					<td><?php echo $value->nohp; ?></td>
					<td><?php echo $value->alamat; ?></td>
					<td><?php echo $value->no_pol; ?></td>
					
					<td>
						<a href="<?php echo site_url('tiket/delete/'.$value->id_tiket); ?>"
							class="btn btn-danger">
							<i class="fa fa-trash"></i>
						</a>
						<a href="<?php echo site_url('tiket/update/'.$value->id_tiket); ?>"
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