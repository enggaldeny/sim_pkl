<?php
class Plotting extends CI_Controller{    
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('M_Dudi');  
        $this->load->model('M_pkl');  
        $this->load->model('M_Siswa');       
    }
    public function index(){
        $this->Plotting();
        
    }
    public function Plotting(){
        if(empty($this->session->userdata('pv'))){
             redirect(base_url('index.php/Login'));
         }else{
            if($this->session->userdata('as') == "DUDI"){
                redirect(base_url('index.php/Login'));
            }elseif($this->session->userdata('as') == "PEGAWAI"){
                $menu['class']="plotting";
                $this->load->view('header',$menu);
                $data['dudi'] = $this->M_Dudi->dudi_list()->result();
                $this->load->view('plotting',$data);
                $this->load->view('footer'); 
            }else{
                redirect(base_url('index.php/Login'));
            }
             
         }   
    }
    public function plot_siswa($id){
        if(empty($this->session->userdata('pv'))){
             redirect(base_url('index.php/Login'));
         }else{
            if($this->session->userdata('as') == "DUDI"){
                redirect(base_url('index.php/Login'));
            }elseif($this->session->userdata('as') == "PEGAWAI"){
                $menu['class']="plotting";
                $this->load->view('header',$menu);
                $where = $id;
                $data['dudi'] = $this->M_Dudi->dudi_ed($where)->result();
                $data['gr'] = $this->M_pkl->getQuery('select * from PRK_PEGAWAI')->result();
                $data['sw'] = $this->M_pkl->getQuery('select * from PRK_SISWA WHERE DUDI_ID IS NULL')->result();
                $this->load->view('plot_siswa',$data);
                $this->load->view('footer');  
            }else{
                redirect(base_url('index.php/Login'));
            }
             
         }
         
    }
    public function in_plot_siswa(){
        if(empty($this->session->userdata('pv'))){
             redirect(base_url('index.php/Login'));
         }else{
            if($this->session->userdata('as') == "DUDI"){
                redirect(base_url('index.php/Login'));
            }elseif($this->session->userdata('as') == "PEGAWAI"){
                $di=$this->input->post('di');
                $gr=$this->input->post('gr');
                $posisiGr1=strpos($gr,"(")+1;
                    $posisiGr2=strpos($gr,")");
                    $cekGr=$posisiGr2-$posisiGr1;
                    $gi=substr($gr,$posisiGr1,$cekGr);
                $data=array(
                    'PGW_ID'=>$gi
                );
                 $where=array('DUDI_ID'=>$di);
                $this->M_pkl->updateData('prk_dudi',$data,$where);
                
                $kalimat = $_POST['sw'];
                $arr_kalimat = explode (",",$kalimat);
                //var_dump ($arr_kalimat);
                
                for($x=0;$x<count($arr_kalimat);$x++){
                    //echo $arr_kalimat[$x]."<br/>";
                    $posisi1=strpos($arr_kalimat[$x],"(")+1;
                    $posisi2=strpos($arr_kalimat[$x],"-");
                    $cek=$posisi2-$posisi1;
                    $nis=substr($arr_kalimat[$x],$posisi1,$cek);
                    $data=array('DUDI_ID'=>$di);
                    $where=array('SW_NIS'=>$nis);
                    $this->M_Siswa->updatesiswa($where,$data,'prk_siswa');
                }
                 redirect(base_url('index.php/Plotting'));
            }else{
                redirect(base_url('index.php/Login'));
            }
             
         }
    }
    
    public function ed_plot_siswa($id){
        if(empty($this->session->userdata('pv'))){
             redirect(base_url('index.php/Login'));
         }else{
            if($this->session->userdata('as') == "DUDI"){
                redirect(base_url('index.php/Login'));
            }elseif($this->session->userdata('as') == "PEGAWAI"){
                $menu['class']="plotting";
                $this->load->view('header',$menu);
                $where = $id;
                $data['dudi'] = $this->M_Dudi->dudi_ed($where)->result();
                $data['gr'] = $this->M_pkl->getQuery('select * from PRK_PEGAWAI')->result();
                $data['sw'] = $this->M_pkl->getQuery('select * from PRK_SISWA WHERE DUDI_ID IS NULL')->result();
                $data['swd'] = $this->M_pkl->getQuery("select * from PRK_SISWA WHERE DUDI_ID=$id")->result();
                $this->load->view('plot_siswa_ed',$data);
                $this->load->view('footer');  
            }else{
                redirect(base_url('index.php/Login'));
            }
             
         }  
    }
    
    public function upd_plot_siswa(){
        if(empty($this->session->userdata('pv'))){
             redirect(base_url('index.php/Login'));
         }else{
            if($this->session->userdata('as') == "DUDI"){
                redirect(base_url('index.php/Login'));
            }elseif($this->session->userdata('as') == "PEGAWAI"){
                $di=$this->input->post('di');
                $gr=$this->input->post('gr');
                $jum=$this->input->post('count');
                $tbh=$this->input->post('cektbhSw');
                $posisiGr1=strpos($gr,"(")+1;
                    $posisiGr2=strpos($gr,")");
                    $cekGr=$posisiGr2-$posisiGr1;
                    $gi=substr($gr,$posisiGr1,$cekGr);
                $data=array(
                    'PGW_ID'=>$gr
                );
                 $where=array('DUDI_ID'=>$di);
                $this->M_pkl->updateData('prk_dudi',$data,$where);
                //------------------------------------------------
                for($i=0;$i<$jum;$i++){
                    //echo $i."<br>";
                    //echo "Nis : ".$this->input->post('hps'.$i)."<br>";
                    if($this->input->post('hps'.$i)!='NULL'){
                        //echo $this->input->post('hps'.$i);
                        $data=array(
                            'DUDI_ID'=>NULL
                        );
                 $where=array('SW_NIS'=>$this->input->post('hps'.$i));
                $this->M_pkl->updateData('prk_siswa',$data,$where);
                    }
                }
                //------------------------------------------------
                if($tbh!='NULL'){
                $kalimat = $_POST['sw'];
                $arr_kalimat = explode (",",$kalimat);
                //var_dump ($arr_kalimat);
                
                for($x=0;$x<count($arr_kalimat);$x++){
                    //echo $arr_kalimat[$x]."<br/>";
                    $posisi1=strpos($arr_kalimat[$x],"(")+1;
                    $posisi2=strpos($arr_kalimat[$x],"-");
                    $cek=$posisi2-$posisi1;
                    $nis=substr($arr_kalimat[$x],$posisi1,$cek);
                    $data=array('DUDI_ID'=>$di);
                    $where=array('SW_NIS'=>$nis);
                   $this->M_Siswa->updatesiswa($where,$data,'prk_siswa');
                }
                }
                 redirect(base_url('index.php/Plotting'));
            }else{
                redirect(base_url('index.php/Login'));
            }
             
         }
    }
}
?>