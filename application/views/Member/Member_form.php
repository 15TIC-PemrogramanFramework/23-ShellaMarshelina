<?php $this->load->view('templatesMember/header'); ?>
<form action="<?php echo $action; ?>" method="post">
	<div class="form-group">
		<label>ID Member</label>
		<input type="text" class="form-control" name="id_member" required placeholder="Masukkan ID Member" value="<?php echo $id; ?>">
	</div>

	<div class="form-group">
		<label>Nama</label>
		<input type="text" class="form-control" name="nama" required placeholder="Masukkan nama" value="<?php echo $nama; ?>">
	</div>

	<div class="form-group">
		<label>Alamat</label>
		<input type="text" class="form-control" name="alamat" required placeholder="Masukkan Alamat" value="<?php echo $alamat; ?>">
	</div>

	<div class="form-group">
		<label>No Hp</label>
		<input type="text" class="form-control" name="nohp" required placeholder="Masukkan No HP" value="<?php echo $nohp; ?>">
	</div>

	<input type="hidden" name="id" value=" <?php echo $id; ?>" />

	<button type="submit" class="btn btn-primary"><?php echo $button ?></button>

	<a href="<?php echo site_url('member') ?>" class="btn btn-primary">Cancel</a>
		</form>

		<?php $this->load->view('templatesMember/footer'); ?>