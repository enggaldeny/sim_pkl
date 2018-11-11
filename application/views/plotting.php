        <div class="content">
            <div class="container-fluid">
                <?php 
	if (isset($_SESSION['alert_sales_type'])) { ?>
    <div class="alert alert-<?php echo $_SESSION['alert_sales_type'];?>">
                    <span><?php echo $_SESSION['alert_sales_msg'];?></span>
                </div>
	<?php }
	unset($_SESSION['alert_sales_type']);
	unset($_SESSION['alert_sales_show']);
	unset($_SESSION['alert_sales_msg']);
	 ?>
                <div class="row">                        
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <div class="col-md-6">
                                <h4 class="title">Daftar DU/DI Periode 2017/2018 </h4>
                                </div><br><br>
                            </div>
                            <br><br>
                            <div class="content table-responsive table-full-width">
                                
                                <table class="table table-hover table-striped" id="tabel_data">
                                    <thead>
                                        <th>No.</th>
                                    	<th>DU/DI</th>
                                    	<th>Penanggung Jawab</th>
                                        <th>Alamat</th>
                                        <th>Kontak</th>
                                        <th>Opsi</th>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach($dudi as $d){
                                            $button;
                                            if ($d->PGW_ID==0){
                                                $button="<a href='".base_url()."index.php/Plotting/plot_siswa/$d->DUDI_ID' class='btn btn-xs btn-success'> Plotting Siswa</a>";
                                            }else{
                                                $button="<a href='".base_url()."index.php/Plotting/ed_plot_siswa/$d->DUDI_ID' class='btn btn-xs btn-info'> Lihat</a>";
                                            }
                                            ?>
                                        <tr>
                                        	<td><?php echo $no;?></td>
                                        	<td><?php echo $d->DUDI_NAMA;?></td>
                                        	<td><?php echo $d->DUDI_PIMPINAN;?></td>
                                            <td><?php echo $d->DUDI_ALAMAT;?></td>
                                            <td><?php echo $d->DUDI_TELEPON;?> <br> <?php echo $d->DUDI_EMAIL;?></td>
                                            <td><?php echo $button?></td>
                                        </tr>
                                        <?php $no++; } ?>
                                      
                                    </tbody>
                                </table>
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

<div id="siswaDudi" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Siswa Magang - CV Mitra Maya Mandiri</h4>
      </div>
      <div class="modal-body">
          <P>Pendamping</P>
          <table class="table table-hover table-striped">
            <tbody>
                <tr>
                    <th>Nama</th><td>:</td><td id="sn_edit"></td>
                </tr>                
                <tr>
                    <th>HP</th><td>:</td><td id="sh_edit"></td>
                </tr>
                
           </tbody>
          </table>
       <table class="table table-hover table-striped">
            <thead>
                <th>Jurusan</th>
                <th>Nama</th>
                <th>Kontak</th>
            </thead>
            <tbody>
                
                <tr>
                    <td>RPL</td>
                    <td>Annisa Fitia</td>
                    <td>087615789100</td>
                </tr>
                <tr>
                    <td>RPL</td>
                    <td>Annisa Fitia</td>
                    <td>087615789100</td>
                </tr>
                <tr>
                    <td>MM</td>
                    <td>Roni Siahaan</td>
                    <td>087615789100</td>
                </tr>
                <tr>
                    <td>MM</td>
                    <td>Annisa Fitia</td>
                    <td>087615789100</td>
                </tr>
           </tbody>
          </table>
                
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

