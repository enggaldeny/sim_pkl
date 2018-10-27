<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-5">
                        <div class="card">
                              <div class="header">
                                <h4 class="title">+ Parameter Penilaian</h4>
                            </div>
                            <div class="content">
                                <div class="row">
                                  <form action="<?php echo base_url()?>index.php/Parameter/add_prm" method="post">
                                      <div class="col-md-12">
                                          <label>Nama Parameter </label>
                                      <input type="text" class="form-control" placeholder="Nama Kategori Penilaian" name="kn">
                                      </div>
                                      <div class="col-md-12">
                                      <button type="submit" class="btn btn-info btn-fill pull-right">Tambah</button>
                                      </div>
                                    </form>                                   
                            </div>
                            <hr>
                            <div class="row">
                                <div class="content table-responsive table-full-width">
                                
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>ID</th>
                                    	<th>Nama</th>
                                        <th>Opsi</th>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach($parameter as $p){
                                            
                                            ?>
                                        <tr>
                                        	<td><?php echo $p->KTG_ID;?></td>
                                            <td><?php echo $p->KTG_NAMA;?></td>
                                            <td>
                                                <a href="#" data-toggle="modal" data-target="#parameterEd" class="tbl-edPrm"
                                                   ki="<?php echo $p->KTG_ID;?>"
                                                   kn="<?php echo $p->KTG_NAMA;?>"><button class="btn btn-xs btn-success"> Edit</button></a>
                                                &nbsp;&nbsp;
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
                    <div class="col-md-7">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">+ Detail Parameter Penilaian</h4>
                            </div>
                            <div class="content">
                                <form action="<?php echo base_url()?>index.php/Parameter/add_detprm" method="post">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Nama Detail Kategori</label>
                                                <input type="text" class="form-control" name="dk" placeholder="Poin dari setiap kategori" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Kategori</label>
                                                <select name="kt" class="form-control">
                                                    <?php
                                        foreach($parameter as $p){
                                            
                                            ?>
                                                    <option value="<?php echo $p->KTG_ID;?>"><?php echo $p->KTG_NAMA;?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Bobot</label>
                                                <input type="number" name="bb" class="form-control" placeholder="1-100">
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-success btn-fill pull-right">Simpan</button>
                                    <div class="clearfix"></div>
                                </form>
                                <hr>
                                <div class="row">
                                <div class="content table-responsive table-full-width">
                                
                                <table class="table table-hover table-striped" id="tabel_data2">
                                    <thead>
                                        <th>Kategori</th>
                                    	<th>Detail</th>
                                        <th>Bobot</th>
                                        <th>Opsi</th>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach($det_par as $d){
                                            
                                            ?>
                                        <tr>
                                        	<td><?php echo $d->KTG_NAMA;?></td>
                                            <td><?php echo $d->DK_NAMA;?></td>
                                            <td><?php echo $d->BOBOT;?></td>
                                            <td>
                                                <a href="#" data-toggle="modal" data-target="#detParameterEd" class="tbl-edDetPrm"
                                                   dki="<?php echo $d->DK_ID;?>"
                                                   dk="<?php echo $d->DK_NAMA;?>"
                                                   kt="<?php echo $d->KTG_NAMA;?>"
                                                   bb="<?php echo $d->BOBOT;?>"><button class="btn btn-xs btn-success"> Edit</button></a>
                                                &nbsp;&nbsp;
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

<div id="parameterEd" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Parameter Penilaian</h4>
      </div>
        <form action="<?php echo base_url()?>index.php/Parameter/ed_prm" method="post">
      <div class="modal-body">
          <div class="row">
              <input type="hidden" class="form-control" id="ki_ed" name="ki">
                                      <div class="col-md-12">
                                          <label>Nama Parameter </label>
                                      <input type="text" class="form-control" id="kn_ed" name="kn">
                                      </div>                                   
                            </div>          
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Simpan</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
      </div>
            </form>
    </div>

  </div>
</div>

<div id="detParameterEd" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Detail Parameter Penilaian</h4>
      </div>
        <form action="<?php echo base_url()?>index.php/Parameter/ed_detprm" method="post">
      <div class="modal-body">
          <div class="row"><input type="hidden" class="form-control" name="dki" id="dki_ed">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Nama Detail Kategori</label>
                                                <input type="text" class="form-control" name="dk" id="dk_ed">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Kategori</label>
                                                <input type="text" readonly class="form-control" name="kt" id="kt_ed">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Bobot</label>
                                                <input type="number" name="bb" class="form-control" id="bb_ed">
                                            </div>
                                        </div>
                                    </div>
    
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Simpan</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
      </div>
            </form>
    </div>

  </div>
</div>
