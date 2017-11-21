<?php $this->load->view('templates/admin/Headerr'); ?>
<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header"><?php echo $button; ?> Data Member</h1>
		</div>
		<?php $this->session->flashdata('pesan') ?>
		<form action="<?php echo $aksi; ?>" method="POST" enctype="multipart/form-data">

		<div class="form-group">
				<label>Nama </label>
				<input type="text" name="nama" class="form-control" placeholder="Masukkan Nama"
				required value="<?php echo $nama; ?>">
			</div>

			
			<div class="form-group">
				<label>Alamat </label>
				<input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat"
				required value="<?php echo $alamat; ?>">
			</div>	

			<div class="form-group">
				<label>No Hp </label>
				<input type="text" name="nohp" class="form-control" placeholder="Masukkan No Hp"
				required value="<?php echo $nohp; ?>">
			</div>		

			<div class="form-group">
				<label>Status </label>
				<input type="text" name="status" class="form-control" placeholder="Masukkan Status"
				required value="<?php echo $status; ?>">
			</div>		

			<input type="hidden" name="id_supir" value="<?php echo $id_supir; ?>">
			<button class="btn btn-primary" type="submit"><?php echo $button; ?></button>
			<a href="<?php echo site_url('supir/data_supir')?>" class="btn btn-default">Cancel</a>
		</form>
	</div>
</div>
<?php $this->load->view('templates/admin/Footerr'); ?>