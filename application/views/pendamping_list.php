        <div class="content">
            <div class="container-fluid">
                <div class="row">                        
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <div class="col-md-6">
                                <h4 class="title">Daftar Guru Pendamping Prakerin Periode 2017/2018 </h4>
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
                                    	<th>Nama</th>
                                        <th>HP</th>
                                        <th>Alamat</th>
                                        <th>Opsi</th>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach($pendamping as $pd){
                                            ?>
                                        <tr>
                                        	<td><?php echo $pd->PGW_ID;?></td>
                                            <td><?php echo $pd->PGW_NAMA;?></td>
                                        	<td><?php echo $pd->PGW_TELEPON;?></td>
                                        	<td><?php echo $pd->PGW_ALAMAT;?></td>
                                            <td>
                                                <a href="#" data-toggle="modal" data-target="#pendampingEd"  class="btn btn-xs btn-info"> Edit</a>
                                                &nbsp;&nbsp;
                                                <a href="#" data-toggle="modal" data-target="#pendampingDel" class="btn btn-xs btn-danger"> Hapus</a>
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
        <h4 class="modal-title">Pendamping Prakerin</h4>
      </div>
      <div class="modal-body">
          <table class="table table-hover table-striped">
            <tbody>
                <tr>
                    <th>Kode</th><td>:</td><td><input type="readonly" class="form-control" name="nm"  id="nm_edit"></td>
                </tr>  
                <tr>
                    <th>Nama</th><td>:</td><td><input type="text" class="form-control" name="nm"  id="nm_edit"></td>
                </tr>                
                <tr>
                    <th>Alamat</th><td>:</td><td><input type="text" class="form-control" name="al"  id="al_edit"></td>
                </tr>
                <tr>
                    <th>HP</th><td>:</td><td><input type="text" class="form-control" name="hp" id="hp_edit"></td>
                </tr>
                
           </tbody>
          </table>                
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success"  data-dismiss="modal">Simpan</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
      </div>
    </div>

  </div>
</div>

<div id="pendampingIn" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Pendamping Prakerin</h4>
      </div>
      <div class="modal-body">
          <table class="table table-hover table-striped">
            <tbody>
                <tr>
                    <th>Kode</th><td>:</td><td><input type="readonly" class="form-control" name="nm" ></td>
                </tr>  
                <tr>
                    <th>Nama</th><td>:</td><td><input type="text" class="form-control" name="nm" ></td>
                </tr>                
                <tr>
                    <th>Alamat</th><td>:</td><td><input type="text" class="form-control" name="al" ></td>
                </tr>
                <tr>
                    <th>HP</th><td>:</td><td><input type="text" class="form-control" name="hp"></td>
                </tr>
                
           </tbody>
          </table>                
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success"  data-dismiss="modal">Simpan</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
      </div>
    </div>

  </div>
</div>


<div id="pendampingDel" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Pendamping Prakerin</h4>
      </div>
      <div class="modal-body">
          Apakah Anda yakin meNONAKTIFKAN data ini ?        
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-danger"  data-dismiss="modal">Nonaktifkan</button>
          <button type="button" class="btn btn-success" data-dismiss="modal">Tutup</button>
      </div>
    </div>

  </div>
</div>

