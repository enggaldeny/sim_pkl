<div id="dudiEd" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Update Akun</h4>
      </div>
      <div class="modal-body">
          <table class="table table-hover table-striped">
            <tbody>
               
                <tr>
                    <th>Username</th><td>:</td><td><input type="text" class="form-control" name="unm" <?php echo $this->session->userdata('du');?>></td>
                </tr>  
                <tr>
                    <th>Password</th><td>:</td><td><input type="passowrd" class="form-control" name="pw" placeholder="Password Baru"></td>
                </tr>                
                <tr>
                    <th>Ketik Ulang Password</th><td>:</td><td><input type="password" class="form-control" name="konfirm" placeholder="Ketik Ulang Password Baru"></td>
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

<div id="pokjaEd" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->

</body>

    <!--   Core JS Files   -->
    <script src="<?php echo base_url()?>assets/js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>assets/js/jquery.dataTables.min.js"></script> 
	<script src="<?php echo base_url()?>assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>assets/js/dataTables.bootstrap.js"></script>
     
	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="<?php echo base_url()?>assets/js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src="<?php echo base_url()?>assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="<?php echo base_url()?>assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="<?php echo base_url()?>assets/js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="<?php echo base_url()?>assets/js/demo.js"></script>
<script>
    $( document ).ready(function() {
        demo.initChartist();
    $(".tbl-detail").click(function(event){
        //alert ("Haii");
        $("#si_edit").val($(this).attr("si"));
        document.getElementById('sn_edit').innerHTML =$(this).attr("sn");
        document.getElementById('sk_edit').innerHTML =$(this).attr("sk");
        document.getElementById('sj_edit').innerHTML =$(this).attr("sj");
        document.getElementById('sa_edit').innerHTML =$(this).attr("sa");
        document.getElementById('sh_edit').innerHTML =$(this).attr("sh");
        document.getElementById('so_edit').innerHTML =$(this).attr("so");
        document.getElementById('dn_edit').innerHTML =$(this).attr("dn");
        document.getElementById('dp_edit').innerHTML =$(this).attr("dp");
        document.getElementById('da_edit').innerHTML =$(this).attr("da");
        document.getElementById('dt_edit').innerHTML =$(this).attr("dt");
        document.getElementById('de_edit').innerHTML =$(this).attr("de");
        
        
    });
        
    });
</script>
<script>
$(function(){
	$('#tabel_data').DataTable();
});
    $(function(){
$(".tbl-delDudi").click(function(event){
       // alert ("Haii");
        $("#del_di").val($(this).attr("di"));
    });
    });
   $(function(){  
$(".tbl-edPgw").click(function(event){
       // alert ("Haii");
        $("#pi_ed").val($(this).attr("pi"));
    $("#pnip_ed").val($(this).attr("pnip"));
        $("#pn_ed").val($(this).attr("pn"));
        $("#ph_ed").val($(this).attr("ph"));
        $("#pa_ed").val($(this).attr("pa"));
    });
    });
    
    $(function(){
$(".tbl-delPgw").click(function(event){
       //alert ("Haii");
        $("#del_pi").val($(this).attr("pi"));
    });
    });
    
    $(function() {
        $("#ceklvl").click(function() {
            if ($(this).is(":checked")) {
                $("#akun").show();
            } else {
                $("#akun").hide();
            }
        });
    });
</script>
</html>
