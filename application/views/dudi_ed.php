<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-11">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit DU/DI | <a href="<?php echo base_url()?>index.php/Dudi/Dudi">
                                      << Kembali Ke List DU/DI
                                    </a></h4>
                            </div>
                            <div class="content">
                                <form action="<?php echo base_url()?>index.php/Dudi/upd_dudi" method="post">
                                    <?php
                                        $no = 1;
                                        foreach($dudi as $d);
                                            ?>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Kode DU/DI</label>
                                                <input type="text" class="form-control" READONLY name="di" value="<?php echo $d->DUDI_ID ?>">
                                            </div>
                                        </div>
                                    
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Nama DU/DI</label>
                                                <input type="text" name="dn" value="<?php echo $d->DUDI_NAMA ?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nama Penanggung Jawab</label>
                                                <input type="text" name="dp" value="<?php echo $d->DUDI_PIMPINAN ?>" class="form-control">
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Telepon Kantor / Penanggung Jawab</label>
                                                <input type="text" class="form-control" name="dt" value="<?php echo $d->DUDI_TELEPON ?>"placeholder="Judul Berita">
                                             
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Email Kantor / Penanggung Jawab</label>
                                                <input type="text" class="form-control" name="de" value="<?php echo $d->DUDI_EMAIL ?>" placeholder="Judul Berita">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Alamat Kantor</label>
                                                <textarea id="ckeditor_full" name="da"  class="form-control"><?php echo $d->DUDI_ALAMAT ?></textarea>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" class="form-control" name="du" value="<?php echo $d->DUDI_USERNAME; ?>">
                                             
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" class="form-control" name="dpw">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Ketik Ulang Password Baru</label>
                                                <input type="password" class="form-control" name="dpwk">
                                             
                                            </div>
                                        </div>
                                    </div>

                                    
                                    <button type="submit" class="btn btn-info btn-fill pull-right">Simpan</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                SIM PKL versi 1.0
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; 2018 <a href="http://www.creative-tim.com">TIF Polije Tim</a>, SMK Negeri 6 Jember
                </p>
            </div>
        </footer>

    </div>
</div>