<?php $this->load->view('templates/admin/Headerr'); ?>
<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Data Tiket</h1>
		</div>
		<?php $this->session->flashdata('pesan') ?>
		<form action="<?php echo $aksi; ?>" method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label>Nama : </label>
				<input type="text" name="nama" class="form-control" placeholder="Inputkan Nama " 
				required value="<?php echo $nama; ?>">
			</div>

			<div class="form-group">
				<label>Tanggal Berangkat: </label>
				<input type="text" name="tgl_berangkat" class="form-control" placeholder="Inputkan Tanggal Berangkat"
				required value="<?php echo $tgl_berangkat; ?>">
			</div>

			<div class="form-group">
				<label>Tujuan: </label>
				<input type="text" name="tujuan" class="form-control" placeholder="Inputkan Tujuan" 
				required value="<?php echo $tujuan; ?>">
			</div>

			<div class="form-group">
				<label>Harga: </label>
				<input type="text" name="harga" class="form-control" placeholder="Inputkan Harga" 
				required value="<?php echo $harga; ?>">
			</div>

			<div class="form-group">
				<label>No hp: </label>
				<input type="text" name="nohp" class="form-control" placeholder="Inputkan No hp" 
				required value="<?php echo $nohp; ?>">
			</div>

			<div class="form-group">
				<label>Alamat: </label><br/>
				<input type="text" name="alamat" class="form-control" placeholder="Inputkan Alamat" 
				required value="<?php echo $alamat; ?>">
			</div>

			<div class="form-group">
				<label>No pol: </label>
				<input type="text" name="no_pol" class="form-control" placeholder="Inputkan no Pol" required value="<?php echo $no_pol; ?>">
			</div>

			
			<input type="hidden" name="id_tiket" value="<?php echo $id_tiket; ?>">
			<button class="btn btn-primary" type="submit"><?php echo $button; ?></button>
			<a href="<?php echo site_url('tiket')?>" class="btn btn-default">Cancel</a>

		</form>
	</div>
</div>
<?php $this->load->view('templates/admin/Footerr'); ?>

