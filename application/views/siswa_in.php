<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-11">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Tambah Siswa | <a href="<?php echo base_url()?>index.php/Siswa">
                                      << Kembali Ke List Siswa
                                    </a></h4>
                            </div>
                            <div class="content">
                                <form action="<?php echo base_url()?>index.php/Siswa/add_siswa" method="post">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>NIS</label>
                                                <input type="text" required class="form-control" onkeypress="return hanyaAngka(event)" maxlength="20" name="si" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>KELAS</label>
                                                <select name="sk" required class="form-control">
                                                    <?php
                                                    foreach($kelas as $k){
                                                        ?>
                                                    <option value="<?php echo $k->JURKEL_ID; ?>"> <?php echo $k->JURKEL_ID; ?> </option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nama </label>
                                                <input type="text" required name="sn" onkeypress="return huruf(event)" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Jenis Kelamin</label>
                                                
                                                <select name="sj" required class="form-control">
                                                    <option value="L"> LAKI - LAKI </option>
                                                    <option value="P"> PEREMPUAN </option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>HP Pribadi</label>
                                                <input type="text" required class="form-control" onkeypress="return hanyaAngka(event)" maxlength="12" name="sh">
                                             
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>HP Ortu</label>
                                                <input type="text" required class="form-control" onkeypress="return hanyaAngka(event)" maxlength="12" name="so" placeholder="HP Orang Tua Siswa">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Alamat</label>
                                                <textarea id="ckeditor_full" required name="sa" class="form-control"></textarea>
                                                
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