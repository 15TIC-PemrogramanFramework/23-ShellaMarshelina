<?php $this->load->view('templates/admin/Headerr'); ?>
<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header"><?php echo $button; ?> Data Pesanan</h1>
		</div>
		<?php $this->session->flashdata('transaksi') ?>
		<form action="<?php echo $aksi; ?>" method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label>Nama : </label>
				<input type="text" name="nama" class="form-control" placeholder="Inputkan Nama " 
				required value="<?php echo $status; ?>" >
			</div>
			<div class="form-group">
				<label>Transfer Via</label>
				<input type="text" name="tujuan" class="form-control" placeholder="Inputkan Tujuan" 
				required value="<?php echo $status; ?>" >
			</div>
						
			<input type="hidden" name="id_transaksi" value="<?php echo $id_transaksi; ?>">
			<button class="btn btn-primary" type="submit"><?php echo $button; ?></button>
			<a href="<?php echo site_url('transaksi')?>" class="btn btn-default">Cancel</a>
		</form>
	</div>
</div>
<?php $this->load->view('templates/admin/Footerr'); ?>