<?php $this->load->view('templates/User/header'); ?>
<form action="<?php echo $action; ?>" method="post">
	<div class="form-group">
		<label>id transaksi</label>
		<input type="text" class="form-control" name="id_transaksi" required placeholder="Masukkan id transaksi" value="<?php echo $id_transaksi;?>" />
	</div>

	<div class="form-group">
		<label>id member</label>
		<input type="text" class="form-control" name="id_customer" required placeholder="Masukkan id customer" value="<?php echo $id_customer;?>" />
	</div>

	<div class="form-group">
		<label>id tiket</label>
		<input type="text" class="form-control" name="id_paket" required placeholder="Masukkan id paket" value="<?php echo $id_paket;?>" />
	</div>

	<div class="form-group">
		<label>keterangan</label>
		<input type="text" class="form-control" name="keterangan" required placeholder="Masukkan keterangan" value="<?php echo $keterangan;?>" />
	</div>

	<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
	<a href="<?php echo site_url('shellauts') ?>" class="btn btn-default">Cancel</a>
</form>
<?php $this->load->view('templatesMember/footer') ?>