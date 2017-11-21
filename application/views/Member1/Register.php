<?php $this->load->view('templates/User/Header'); ?>
<br>
<br>
<br>
<br>
<br>
<div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <center><h3 class="panel-title">Register</h3></center>
                    </div>
                    <div class="panel-body">
                       <form action="<?php echo base_url(). 'Member/daftar_aksi'; ?>" method="post">
                         
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Nama" name="nama" type="nama" autofocus="">
                                </div>

                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="pass" type="pass" autofocus="">
                                </div>

                                <div class="form-group">
                                    <input class="form-control" placeholder="Alamat" name="alamat" type="alamat" autofocus="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="NoHp" name="nohp" type="nohp" autofocus="">
                                </div>

                                 <div class="form-group">
                                <center><input type="submit" class="" value="Login" /></center>
                               
                                </div>

                                