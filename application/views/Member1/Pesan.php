<?php $this->load->view('templates/User/Header'); ?>
<br>
<br>
<br>

<div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <center><h3 class="panel-title">Pemesanan</h3></center>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="tambah_aksi" method="POST">
                            <fieldset>
                                <div class="form-group">
                       <form action="<?php echo $action; ?>" method="post">
                            <fieldset>
                                <div class="form-group">
                               
                                Id Tiket
                                <div class="form-group">
                                    <input class="form-control" name="no_seri" type="no_seri" autofocus="">
                                </div>

                                Nama  
                                 <input class="form-control" name="nama" type="nama" autofocus="">
                                   
                                </div>


                                Tanggal Berangkat
                                <div class="form-group">
                                    <input class="form-control" name="tgl_berangkat" type="tgl_berangkat" autofocus="">
                                </div>

                                Tujuan
                                <div class="form-group">
                                    <input class="form-control" name="tujuan" type="tujuan" autofocus="">
                                </div>


                                 No HP
                                <div class="form-group">
                                    <input class="form-control" name="nohp" type="nohp" autofocus="">
                                </div>

                                 Alamat
                                <div class="form-group">
                                    <input class="form-control" name="alamat" type="alamat" autofocus="">
                                </div>

                                </div>
                                <input type="submit" class="btn btn-lg btn-success btn-block" value="Kirim"><br/>