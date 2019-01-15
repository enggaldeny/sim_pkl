                                <div>
                                    <h5>Nilai PKL Siswa Per DUDI</h5>
                                    <form class="form-horizontal" action="<?php echo base_url()?>index.php/laporan" method="GET">
                                    <div class="col-sm-4">
                                    <select name="dudi" class="form-control"> ?>
                                        <option>PILIH DUDI</option>
                                        <?php foreach($dudi as $d){ ?>
                                        <option value="<?php echo $d->DUDI_ID?>"><?php echo $d->DUDI_NAMA?></option> 
                                        <?php } ?>
                                    </select>
                                    </div>
                                        <div class="col-sm-8">
                                        <button type="submit" class="btn btn-md btn-primary">Cari</button></div>
                                       
                                    </form>
                                    
                                </div>
                            <br><br><br>
                            <div class="content table-responsive table-full-width">
                                <?php if(!isset($_GET['dudi'])){?>
                               
                                    <div class="alert alert-warning">
                                    <button type="button" aria-hidden="true" class="close">!</button>
                                    <center><span><b> PERHATIAN - </b> &uuarr; Piih DUDI terlebih dahulu &uuarr;</span></center>
                                </div>
                                <?php }else{ ?>
                                <div class="col-sm-6">
                                    <?php foreach($dudi_pilih as $d){
                                    //echo $d->DUDI_NAMA;
                                    ?>
                                    <a href="<?php echo base_url()?>index.php/cetaknilai/printPDF/<?php echo $d->DUDI_ID; ?>" target="_blank" class='btn btn-sm btn-success'> Cetak Nilai Siswa</a>
                                <h5>Pendamping PKL : <?php echo $d->PGW_NAMA?></h5>
                                </div>
                            <div class="col-sm-6">
                                
                                <h5>DUDI : <?php echo $d->DUDI_NAMA?></h5>
                                <h6>Alamat :<?php echo $d->DUDI_ALAMAT?></h6>
                                <?php } ?>
                                </div>
                                <br><br>
                                <div class="col-sm-12">
                                    <br>
                                    <h6>Keterangan Nilai : 0 = Sangat Kurang; 25 = Kurang; 50 = Cukup; 75 = Baik; 100 = Sangat Baik; &nbsp;&nbsp;&nbsp;| &nbsp;&nbsp;&nbsp;<i>Syarat minimal lulus adalah : 50 / cukup</i></h6>
                                   
                                </div>
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>NIS</th>
                                        <th>Kelas</th>
                                    	<th>Nama</th>
                                    	<th>JK</th>                                        
                                        <th>Kontak</th>
                                        <th>Nilai Akhir</th>
                                        <th>Opsi</th>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach($nilai as $s){
                                            $btn;$poin;$ktr;$cls="default";
                                            if($s->NL_ID==0){
                                                $ktr="";
                                                $btn="<a href='".base_url()."/index.php/Nilai/nilai_in/".$s->SW_NIS."'><button class='btn btn-xs btn-success'>Penilaian</button></a>";
                                                $poin="Belum Penilaian";
                                            }else{
                                                $btn="<a href='".base_url()."/index.php/Nilai/nilai_ed/".$s->NL_ID."'><button class='btn btn-xs btn-warning'>Edit Penilaian</button></a>";
                                                $poin=$s->NL_HASIL;
                                                if ($poin==100){
                                                $ktr = "| SANGAT BAGUS";
                                                $cls = "success";
                                            }elseif ($poin==75){
                                                $ktr = "| BAIK";
                                                $cls = "info";
                                            }elseif ($poin==50){
                                                $ktr = "| CUKUP";
                                                $cls = "default";
                                            }elseif ($poin==25){
                                                $ktr = "| KURANG";
                                                $cls = "warning";
                                            }else{
                                                $ktr = "| SANGAT KURANG";
                                                $cls = "danger";
                                            }
                                            }
                                            
                                            ?>
                                        <tr class="<?php echo $cls;?>">
                                        	<td><?php echo $s->SW_NIS;?></td>
                                            <td><?php echo $s->JURKEL_ID;?></td>
                                        	<td><?php echo $s->SW_NAMA;?></td>
                                        	<td><?php echo $s->SW_JK;?></td>
                                            <td><?php echo $s->SW_HP;?> <br> <?php echo $s->SW_HP_ORTU;?></td>
                                            <td><?php echo $poin." ".$ktr;?></td>
                                            <td>
                                                <a href="<?php echo base_url()."/index.php/laporan/laporan_detail/".$s->NL_ID?>"><button class='btn btn-sm btn-info'>Detail Nilai</button></a>                                                 
                                            </td>
                                        </tr>
                                        <?php } ?>
                                      
                                    </tbody>
                                </table>
                                <?php } ?>
                    </div> 
                            
                    
                        </div>
                        </div>
                    </div>
                           
                </div>
            <div>
        <div>


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                SIPRAKERIN versi 1.0
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