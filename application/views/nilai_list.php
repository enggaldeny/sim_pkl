        <div class="content">
            <div class="container-fluid">
                <div class="row">                        
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <div class="col-md-12">
                                <h4 class="title">Daftar Siswa Prakerin Periode 2017/2018 di : <b><?php echo $this->session->userdata('dn'); ?></b></h4>
                                </div>
                                <div class="col-md-12">
                                    <?php
                                        foreach($guru as $g);
                                            ?>
                                <h5>Guru Pendamping : <b><?php echo $g->PGW_NAMA;?></b> &nbsp;&nbsp; | &nbsp;&nbsp;<a href="#" class='btn btn-xs btn-info tbl-detGr'
                                gnip="<?php echo $g->PGW_NIP;?>"  gnm="<?php echo $g->PGW_NAMA;?>"
                                ghp="<?php echo $g->PGW_TELEPON;?>"
                                gal="<?php echo $g->PGW_ALAMAT;?>"
                                data-toggle="modal" data-target="#guruDudi"> Detail</a></h5>
                                    
                                </div>
                            </div>
                            <br><br>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>NIS</th>
                                        <th>Kelas</th>
                                    	<th>Nama</th>
                                    	<th>JK</th>                                        
                                        <th>Kontak</th>
                                        <!--<th>Skor (Max. 145)</th>-->
                                        <th>Opsi</th>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach($nilai as $s){
                                            ?>
                                        <tr>
                                        	<td><?php echo $s->SW_NIS;?></td>
                                            <td><?php echo $s->JURKEL_ID;?></td>
                                        	<td><?php echo $s->SW_NAMA;?></td>
                                        	<td><?php echo $s->SW_JK;?></td>
                                           
                                            <td><?php echo $s->SW_HP;?> <br> <?php echo $s->SW_HP_ORTU;?></td>
                                            <td><a href="#"
                                                   snis="<?php echo $s->SW_NIS;?>"
                                                   snm="<?php echo $s->SW_NAMA;?>"
                                                   skl="<?php echo $s->JURKEL_ID;?>"
                                                   sjk="<?php echo $s->SW_JK;?>"
                                                   shp="<?php echo $s->SW_HP;?>"
                                                   shpo="<?php echo $s->SW_HP_ORTU;?>"
                                                   sal="<?php echo $s->SW_ALAMAT;?>"
                                                   data-toggle="modal" data-target="#siswaDet" class='btn btn-xs btn-info tbl-detSw'> Detail</a>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                      
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

<div id="siswaDet" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" onclick="delGbr()">&times;</button>
        <h4 class="modal-title">Siswa PKL <?php echo $this->session->userdata('dn'); ?></h4>
      </div>
      <div class="modal-body">
          <div class="row">
         <div class="col-sm-4">
          <div id="gbrSw"></div>
          </div>
            <div class="col-sm-8">
          <table class="table table-hover table-striped">
            <tbody>
                <tr>
                    <th>NIS</th><td>:</td><td><label id="sd_nis"></label></td>
                </tr>
                <tr>
                    <th>Nama</th><td>:</td><td><label id="sd_nm"></label></td>
                </tr>
                <tr>
                    <th>Kelas</th><td>:</td><td><label id="sd_kl"></label></td>
                </tr>
                <tr>
                    <th>JK</th><td>:</td><td><label id="sd_jk"></label></td>
                </tr>
                <tr>
                    <th>Alamat</th><td>:</td><td><label id="sd_al"></label></td>
                </tr>
                <tr>
                    <th>HP</th><td>:</td><td><label id="sd_hp"></label></td>
                </tr>
                <tr>
                    <th>HP Ortu</th><td>:</td><td><label id="sd_hpo"></label></td>
                </tr>
           </tbody>
          </table>
              </div>
            </div>          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="delGbr()">Close</button>
      </div>
    </div>

  </div>
</div>
<div id="guruDudi" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" onclick="delGbr()">&times;</button>
        <h4 class="modal-title">Guru Pendamping <?php echo $this->session->userdata('dn'); ?> </h4>
      </div>
      <div class="modal-body">
       <div class="row">
         <div class="col-sm-4">
          <div id="gbrGr"></div>
          </div>
            <div class="col-sm-8">
          <table class="table table-hover table-striped">
            <tbody>
                <tr>
                    <th>NIP</th><td>:</td><td><label id="gd_nip"></label></td>
                </tr>
                <tr>
                    <th>Nama</th><td>:</td><td><label id="gd_nm"></label></td>
                </tr>
                <tr>
                    <th>Alamat</th><td>:</td><td><label id="gd_al"></label></td>
                </tr>
                <tr>
                    <th>HP</th><td>:</td><td><label id="gd_hp"></label></td>
                </tr>
           </tbody>
          </table>
              </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="delGbr()">Close</button>
      </div>
    </div>

  </div>
</div>

