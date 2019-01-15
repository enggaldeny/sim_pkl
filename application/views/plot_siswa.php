<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Plotting Siswa Ke Tempat DU/DI | <a href="<?php echo base_url()?>index.php/Plotting">
                                      << Kembali Ke List DU/DI
                                    </a></h4>
                            </div>
                            <div class="content">
                                    <?php
                                        $no = 1;
                                        foreach($dudi as $d);
                                            ?>
                                    <div class="row">
                                                <input type="hidden" class="form-control" READONLY name="di" value="<?php echo $d->DUDI_ID ?>">
                                        <div class="col-md-4">
                                                <label>Nama DU/DI :</label>
                                                <p><?php echo $d->DUDI_NAMA ?></p>
                                        </div>
                                        <div class="col-md-4">
                                                <label>Nama Penanggung Jawab</label>
                                                <p><?php echo $d->DUDI_PIMPINAN ?></p>
                                        </div>
                                        <div class="col-md-4">
                                                <label>Telepon Kantor / Penanggung Jawab</label>
                                                <p><?php echo $d->DUDI_TELEPON ?></p>
                                        </div>
                                    </div>
                                        
                                        <div class="row">
                                        <div class="col-md-6">
                                                <label>Email Kantor / Penanggung Jawab</label>
                                                <p><?php echo $d->DUDI_EMAIL ?></p>
                                        </div>
                                            <div class="col-md-6">
                                                <label>Alamat Kantor</label>
                                                <p><?php echo $d->DUDI_ALAMAT ?></p>
                                        </div>
                                    </div>
                                <form action="<?php echo base_url()?>index.php/Plotting/in_plot_siswa" method="post">
                                    <input type="hidden" name="di" value="<?php echo $d->DUDI_ID ?>">
                                    <hr>
                                    <h4>Tambahkan Siswa dan Guru Pendamping</h4>
                                    <div class="row">
                                    <div class="col-sm-6">
                                    <label>Guru Pendamping:</label>&nbsp;&nbsp;
                                        <input type='text' placeholder='Nama Guru' required class='flexdatalist form-control' id="flex_gr" data-min-length='1' list='guru' name='gr'>
                                        <datalist id="guru">
                                        <?php foreach($gr as $gr){?>
                                        <option value="<?php echo $gr->PGW_ID ?>"><?php echo $gr->PGW_NAMA ?> (<?php echo $gr->PGW_ID ?>)</option>
                                        <?php } ?>
                                        </datalist>
                                    </div>
                                    </div><hr>
                                    <div class="col-12">
                                    <label>Daftar Siswa PKL</label>
                                    <input type='text' placeholder='Nama Siswa' required class='flexdatalist form-control' id="flex_sw" data-min-length='1'       multiple='multiple' list='siswa' name='sw'>
                                    <datalist id="siswa">
                                        <?php foreach($sw as $sw){?>
                                        <option value="<?php echo $sw->SW_NIS ?>"><?php echo $sw->SW_NAMA ?> (<?php echo $sw->SW_NIS ?>-<?php echo $sw->JURKEL_ID ?>)</option>
                                        <?php } ?>
                                    </datalist> 
                                    </div>
                                    <button type="submit" class="btn btn-info btn-fill pull-right">Simpan</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
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
                 <script>
$('.flex_sw').flexdatalist({
     minLength: 1
});
$('#flex_gr').flexdatalist({
     minLength: 1
});
                     
            </script> 