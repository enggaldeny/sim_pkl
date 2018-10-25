
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
</script>
</html>
