        <div class="content">
            <div class="container-fluid">
                <?php 
	if (isset($_SESSION['alert_sales_type'])) { ?>
    <div class="alert alert-<?php echo $_SESSION['alert_sales_type'];?>">
                    <button type="button" aria-hidden="true" class="close">×</button>
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
                                <h4 class="title">Daftar Guru Pendamping PKL Periode 2018/2019 </h4>
                                </div><br><br>
                                <div class="row"></div>
                                <div class="col-md-4">
                                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#pendampingIn">Tambah Guru</button>
                                </div>
                            </div>
                            <br><br>
                            <div class="content table-responsive table-full-width">
                                
                                <table class="table table-hover table-striped" id="tabel_data">
                                    <thead>
                                        <th>Kode</th>
                                    	<th>NIP</th>
                                        <th>Nama</th>
                                        <th>HP</th>
                                        <th>Alamat</th>
                                        <th>Level</th>
                                        <th>Opsi</th>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach($pendamping as $pd){
                                            $lvl;
                                            if($pd->PGW_LEVEL==0){
                                                $lvl="Guru Pendamping";
                                            }else{
                                                $lvl="POKJA";
                                            }
                                            ?>
                                        <tr>
                                        	<td><?php echo $pd->PGW_ID;?></td>
                                            <td><?php echo $pd->PGW_NIP ;?></td>
                                            <td><?php echo $pd->PGW_NAMA;?></td>
                                        	<td><?php echo $pd->PGW_TELEPON;?></td>
                                        	<td><?php echo $pd->PGW_ALAMAT;?></td>
                                            <td><?php echo $lvl;?></td>
                                            <td>
                                                <a href="#" data-toggle="modal" data-target="#pendampingEd" 
                                                   pi="<?php echo $pd->PGW_ID;?>"
                                                   pnip="<?php echo $pd->PGW_NIP;?>"
                                                   pn="<?php echo $pd->PGW_NAMA;?>"
                                                   ph="<?php echo $pd->PGW_TELEPON;?>"
                                                   pa="<?php echo $pd->PGW_ALAMAT;?>"
                                                   pl="<?php echo $pd->PGW_LEVEL;?>"
                                                    pu="<?php echo $pd->PGW_USERNAME;?>"
                                                   
                                                   class="tbl-edPgw"> <button class="btn btn-xs btn-info"> Edit</button></a>
                                                &nbsp;&nbsp;
                                                <a href="#" data-toggle="modal" data-target="#pendampingDel" class="tbl-delPgw" pi="<?php echo $pd->PGW_ID;?>">
                                                    <button class="btn btn-xs btn-danger"> Hapus</button></a>&nbsp;&nbsp;
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
<div id="pendampingEd" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Pendamping PKL</h4>
      </div>
        <form action="<?php echo base_url()?>index.php/Pendamping/ed_pgw" method="post">
      <div class="modal-body">
          <table class="table table-hover table-striped">
              <input type="hidden" class="form-control" required id="pi_ed" name="pi" >
            <tbody>
                <tr>
                    <th>NIP</th><td>:</td><td><input type="text" onkeypress="return hanyaAngka(event)" maxlength="20" required class="form-control" required id="pnip_ed" name="pnip" ></td>
                </tr>
                <tr>
                    <th>Nama</th><td>:</td><td><input type="text" onkeypress="return huruf(event)" required class="form-control" required id="pn_ed" name="pn" ></td>
                </tr>                
                <tr>
                    <th>Alamat</th><td>:</td><td><input type="text" required class="form-control" required id="pa_ed" name="pa" ></td>
                </tr>
                <tr>
                    <th>HP</th><td>:</td><td><input type="text" maxlength="15" onkeypress="return hanyaAngka(event)" required class="form-control" required id="ph_ed" name="ph"></td>
                </tr>
                <tr>
                    <th>Level</th><td>:</td><td><input type="checkbox" name="pl" id="ceklvl" value="1">&nbsp;POKJA PKL</td>
                </tr>
                </tbody>
          </table> 
               <div class="row" id="akun" style="display: none">
                    <div class="col-md-12">
                    <h5>Akun POKJA PKL</h5>
                    </div>
                    
                    <div class="col-md-12">
                <label>Username</label><input type="text" class="form-control" name="pu" id="pu_ed">
                        </div>
                     <div class="col-md-12">
                <label>Password</label><input type="password" class="form-control" name="pp">
                    </div>
                </div>         
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success" >Simpan</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
      </div>
            </form>
    </div>

  </div>
</div>


<div id="pendampingIn" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Pendamping PKL</h4>
      </div>
        <form action="<?php echo base_url()?>index.php/Pendamping/add_pgw" method="post">
      <div class="modal-body">
          <table class="table table-hover table-striped">
            <tbody>
                <tr>
                    <th>NIP</th><td>:</td><td><input type="text" maxlength="20" onkeypress="return hanyaAngka(event)" required class="form-control" required name="pi" ></td>
                </tr>
                <tr>
                    <th>Nama</th><td>:</td><td><input type="text" onkeypress="return huruf(event)" required class="form-control" required name="pn" ></td>
                </tr>                
                <tr>
                    <th>Alamat</th><td>:</td><td><input type="text" required class="form-control" required name="pa" ></td>
                </tr>
                <tr>
                    <th>HP</th><td>:</td><td><input type="text" maxlength="15" onkeypress="return hanyaAngka(event)" required class="form-control" required name="ph"></td>
                </tr>
                <tr>
                    <th>Level</th><td>:</td><td><input type="checkbox" name="pl" id="ceklvl" value="1">&nbsp;POKJA PKL</td>
                </tr>
                </tbody>
          </table> 
                <div class="row" id="akun" style="display: none">
                    <div class="col-md-12">
                    <h5>Akun POKJA PKL</h5>
                    </div>
                    
                    <div class="col-md-12">
                <label>Username</label><input type="text" class="form-control" name="pu">
                        </div>
                     <div class="col-md-12">
                <label>Password</label><input type="password" class="form-control" name="pp">
                    </div>
                </div>
                                
                          
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success" >Simpan</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
      </div>
            </form>
    </div>

  </div>
</div>


<div id="pendampingDel" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Pendamping PKL</h4>
      </div>
      <form action="<?php echo base_url()?>index.php/Pendamping/del_pgw" method="post">
      <div class="modal-body">
          <input type="hidden" name="pi" id="del_pi">
          Apakah Anda yakin meNONAKTIFKAN data ini ?        
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-danger" >Nonaktifkan</button>
          <button type="button" class="btn btn-success" data-dismiss="modal">Tutup</button>
      </div>
        </form>
    </div>

  </div>
</div>

