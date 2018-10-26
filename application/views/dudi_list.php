        <div class="content">
            <div class="container-fluid">
                <div class="row">                        
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <div class="col-md-6">
                                <h4 class="title">Daftar DU/DI Periode 2017/2018 </h4>
                                </div><br><br>
                                <div class="row"></div>
                                <div class="col-md-4">
                                    <a href="<?php echo base_url()?>index.php/Dudi/Dudi_in">
                                        <button type="button" class="btn btn-success">Tambah DU/DI</button>
                                    </a>
                                </div>
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
                                            ?>
                                        <tr>
                                        	<td><?php echo $no;?></td>
                                        	<td><?php echo $d->DUDI_NAMA;?></td>
                                        	<td><?php echo $d->DUDI_PIMPINAN;?></td>
                                            <td><?php echo $d->DUDI_ALAMAT;?></td>
                                            <td><?php echo $d->DUDI_TELEPON;?> <br> <?php echo $d->DUDI_EMAIL;?></td>
                                            <td><a href="<?php echo base_url()?>index.php/Dudi/Dudi_ed/<?php echo $d->DUDI_ID;?>" class="btn btn-xs btn-info"> Edit</a>
                                                <a href="#" data-toggle="modal" data-target="#dudiDel" class="tbl-delDudi" di="<?php echo $d->DUDI_ID;?>">
                                                    <button class="btn btn-xs btn-danger"> Hapus</button></a>&nbsp;&nbsp;
                                                </td>
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
<div id="dudiDel" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Hapus DU/DI</h4>
      </div>
        <form action="<?php echo base_url()?>index.php/Dudi/del_dudi" method="post">
      <div class="modal-body">
          <input type="hidden" name="di" id="del_di">
          <p>Apakah Anda yakin meNONAKTIFKAN data ini ?</p>   
      </div>
      <div class="modal-footer">
          <button type="submit" class="btn btn-danger">Hapus</button>
        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
      </div>
            </form>
    </div>

  </div>
</div>

