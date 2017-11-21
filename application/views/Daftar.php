<?php $this->load->view('templates/admin/header'); ?>
<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Daftar</h1>
		</div>
		<?php $this->session->flashdata('pesan') ?>
		<form action="<?php echo site_url('User/member/daftar_aksi')?>" method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label>Email </label>
				<input type="email" name="email" class="form-control" placeholder="Masukkan Email" >
			</div>
			<div class="form-group">
				<label>Password </label>
				<input type="password" name="password" class="form-control" placeholder="Masukkan Password" >
			</div>
			<div class="form-group">
				<label>Nama </label>
				<input type="text" name="nama" class="form-control" placeholder="Masukkan Nama">
			</div>
			<div class="form-group">
				<label>Alamat </label>
				<input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat">
			</div>
			<button class="btn btn-primary" type="submit">Submit</button>
			<a href="<?php echo site_url('login')?>" class="btn btn-default">Cancel</a>
		</form>
	</div>
</div>
<?php $this->load->view('templates/admin/footer'); ?>