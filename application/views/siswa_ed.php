<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-11">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Siswa | <a href="<?php echo base_url()?>index.php/Siswa">
                                      << Kembali Ke List Siswa
                                    </a></h4>
                            </div>
                            <div class="content">
                                <form action="<?php echo base_url()?>index.php/Siswa/upd_siswa" method="post">
                                    <?php
                                        foreach($siswa as $s);
                                            ?>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>NIS</label>
                                                <input type="text" onkeypress="return hanyaAngka(event)" maxlength="20" class="form-control" READONLY name="si" value="<?php echo $s->SW_NIS ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>KELAS</label>
                                                <input type="text" class="form-control" READONLY name="sk" value="<?php echo $s->JURKEL_ID ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nama </label>
                                                <input type="text" name="sn" onkeypress="return huruf(event)" value="<?php echo $s->SW_NAMA ?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Jenis Kelamin</label>
                                                
                                                <select name="sj" class="form-control">
                                                    <option <?php if($s->SW_JK=='L'){ echo "selected";} ?>value="L"> LAKI - LAKI </option>
                                                    <option <?php if($s->SW_JK=='P'){ echo "selected";} ?>value="P"> PEREMPUAN </option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>HP Pribadi</label>
                                                <input type="text" class="form-control" name="sh" onkeypress="return hanyaAngka(event)" maxlength="12" value="<?php echo $s->SW_HP ?>"placeholder="Judul Berita">
                                             
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>HP Ortu</label>
                                                <input type="number" class="form-control" onkeypress="return hanyaAngka(event)" maxlength="12" name="so" value="<?php echo $s->SW_HP_ORTU ?>" placeholder="HP Orang Tua Siswa">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Alamat</label>
                                                <textarea id="ckeditor_full" name="sa" class="form-control"><?php echo $s->SW_ALAMAT ?></textarea>
                                                
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