<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-11">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Tambah DU/DI | <a href="<?php echo base_url()?>index.php/Dudi/Dudi">
                                      << Kembali Ke List DU/DI
                                    </a></h4>
                                
                            </div>
                            <div class="content">
                                <form action="<?php echo base_url()?>index.php/Dudi/ins_dudi" method="post">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nama DU/DI</label>
                                                <input type="text" required name="dn" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nama Penanggung Jawab</label>
                                                <input type="text" required name="dp" onkeypress="return huruf(event)" class="form-control">
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Telepon</label>
                                                <input type="text" maxlength="15" onkeypress="return hanyaAngka(event)" required name="dt" class="form-control" placeholder="No HP Perusahaan atau Penanggung Jawab">
                                             
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="text" required name="de" id="email" onchange="cekEmail();" class="form-control" placeholder="Email Perusahaan atau Penanggung Jawab">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Wilayah</label>
                                                <input type="text" onkeypress="return huruf(event)" required name="dw" class="form-control" placeholder="Kecamatan / Wilayah, ex : Semboro / Jember / Lumajang">
                                                
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <label>Alamat</label>
                                                <textarea id="ckeditor_full" required name="da" class="form-control"></textarea>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" class="form-control" required name="du" placeholder="Username">
                                             
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" class="form-control" required name="dpw" placeholder="Password">
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

