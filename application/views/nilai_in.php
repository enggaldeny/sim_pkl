        <div class="content">
            <div class="container-fluid">
                <div class="row">                        
                    <div class="col-md-12">
                        <form action="<?php echo base_url()?>index.php/Nilai/ins_nilai" method="post">
                        <div class="card">
                            <div class="header">
                                <div class="col-md-6">
                                <h4 class="title">Input Nilai Siswa PKL : </h4>
                                </div><br>
                                <div class="row"></div>
                                <div class="col-md-6">
                                    <table class="table table-hover table-striped">
                                        <tbody>
                                            <?php
                                            $sn='';
                                            $dudi='';
                                            foreach($siswa as $s){
                                            ?>
                                            <tr>
                                                <th>Nama</th><td>:</td><td><?php echo $s->SW_NAMA;?></td>
                                            </tr>
                                            <tr>
                                                <th>Kelas</th><td>:</td><td><?php echo $s->JURKEL_ID;?></td>
                                            </tr>
                                            <tr>
                                                <th>JK</th><td>:</td><td><?php echo $s->SW_JK;?></td>
                                            </tr>
                                            <tr>
                                                <th>Alamat</th><td>:</td><td><?php echo $s->SW_ALAMAT;?></td>
                                            </tr>
                                            <tr>
                                                <th>HP</th><td>:</td><td><?php echo $s->SW_HP;?></td>
                                            </tr>
                                            <?php
                                             $sn=$s->SW_NIS;
                                            $dudi=$s->DUDI_ID;
                                            } ?>
                                       </tbody>
                                    </table>
                                </div>
                                
                                <div class="col-sm-6">
                                    <label>Keterangan / Catatan Tambahan Siswa selama PKL :</label>
                                    <textarea rows="5" class="form-control" name="ket" placeholder="Tulis catatan tambahan terhadap siswa ini disini..."></textarea>
                                </div>
                            </div>
                            <div class="row"></div>
                            <div class="content table-responsive table-full-width">
                                <h4 class="title">Penilaian Siswa Selama PKL</h4>
                                <h6>Keterangan : Nilai akhir sikap siswa didapat dari modus nilai per kategori</h6><br>
                                <h6><i>Contoh : Jujur = 50; Tanggung Jawab = 50; Disiplin = 75; Santun = 50;</i>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;Nilai Akhir = 50 / Cukup</h6>
                                    <?php foreach ($nomor as $no){
                                    $no=$no+1;
                                    ?>
                                    
                                    <input type="hidden" value="<?php echo $no; ?>" name="no">
                                    <?php } ?>
                                    <input type="hidden" name="sn" value="<?php echo $sn; ?>">
                                    <input type="hidden" name="dudi" value="<?php echo $dudi; ?>">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>No</th>
                                        <th>Keterangan</th>
                                    	<th>Centang Jika Iya</th>
                                    </thead>
                                   <tbody>
                                <?php
                                $no=1;
                                $ktg='D1';
                                $sktg='';
                                    foreach($nilai as $n){
                                        $kn=$n->KTG_ID;
                                        if($ktg!=$kn){
                                            ?>                                    
                                     <tr><th colspan="2">KATEGORI : <?php echo $n->KTG_NAMA;?></th><th>BOBOT</th></tr>
                                    <?php } ?>
                                        <tr>
                                        	<td><?php echo $no;?> 
                                                <input type="hidden" name="ktg<?php echo $no;?>" value="<?php echo $n->KTG_ID;?>">
                                                <input type="hidden" name="dk<?php echo $no;?>" value="<?php echo $n->DK_ID;?>">
                                                <input type="hidden" name="dn<?php echo $no;?>" value="<?php echo $n->BOBOT;?>">
                                            </td>
                                            <td><?php echo $n->DK_NAMA;?></td>
                                        	<td><input type="checkbox" name="nilai<?php echo $no;?>"> &nbsp; <?php echo $n->BOBOT;?> POIN</td>
                                        </tr>
                                        <?php $no++; $ktg=$kn;
                                    } ?>
                                      
                                    </tbody>
                                    <input type="hidden" value="<?php echo $no;?>" name="jml">
                                    <tfoot>
                                        <th colspan="2"></th><th><input type="submit" class="btn btn-info btn-fill" value="SIMPAN"></th>
                                    </tfoot>
                                </table>
                                    
                                </div>
                                </div>
                                </form>
                    </div>
                           
                </div>
            </div>
        </div>
