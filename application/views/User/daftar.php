<?php $this->load->view('templates/user/header'); ?>

<div class="wrapper">
	<div class="header header-filter" style="background-image: url('../assets/img/city.jpg'); background-size: cover; background-position: top center;">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
					<div class="card card-signup">
						<form class="form" method="post" action="<?php echo site_url('member/daftar_aksi')?>">
							<div class="header header-primary text-center">
								<h4>Daftar</h4>								
							</div>
							
							<div class="content">

								<div class="input-group">
									<span class="input-group-addon">
										<i class="material-icons">face</i>
									</span>
									<input type="text" class="form-control" placeholder="Nama..." name="nama">
								</div>

								<div class="input-group">
									<span class="input-group-addon">
										<i class="material-icons">email</i>
									</span>
									<input type="email" class="form-control" placeholder="Email..." name="email">
								</div>

								<div class="input-group">
									<span class="input-group-addon">
										<i class="material-icons">lock_outline</i>
									</span>
									<input type="password" placeholder="Password..." class="form-control" name="password" />
								</div>

								<div class="input-group">
									<span class="input-group-addon">
										<i class="material-icons">my_location</i>
									</span>
									<input type="text" placeholder="Alamat..." class="form-control" name="alamat" />
								</div>

									<!-- If you want to add a checkbox to this form, uncomment this code

									<div class="checkbox">
										<label>
											<input type="checkbox" name="optionsCheckboxes" checked>
											Subscribe to newsletter
										</label>
									</div> -->
								</div>
								<div class="footer text-center">
									<button class="btn btn-primary" type="submit">Daftar</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>		
			<?php $this->load->view('templates/user/footer'); ?>	