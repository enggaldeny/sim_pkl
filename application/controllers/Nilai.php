<?php
class Nilai extends CI_Controller{    
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('M_Nilai');
        $this->load->model('M_Siswa');
        $this->load->model('M_pkl');
    }
    public function index(){
         if(empty($this->session->userdata('pv'))){
             redirect(base_url('index.php/Login'));
         }else{
            $this->Nilai(); 
         }
        
    }
    public function Nilai(){
        if(empty($this->session->userdata('pv'))){
             redirect(base_url('index.php/Login'));
         }else{
            if($this->session->userdata('as') == "PEGAWAI"){
                redirect(base_url('index.php/Login'));
            }elseif($this->session->userdata('as') == "DUDI"){
                $menu['class']="nilai";
                $this->load->view('header_dudi',$menu);
                $dudi=$this->session->userdata('pv');
                $data['guru'] = $this->M_pkl->getQuery("select * from prk_plotting p, prk_dudi d, prk_pegawai g where p.PGW_ID=g.PGW_ID and p.DUDI_ID = d.DUDI_ID and d.DUDI_ID='$dudi'")->result();
                $data['nilai'] = $this->M_Nilai->siswa_list($dudi)->result();
                $this->load->view('nilai_list',$data);
                $this->load->view('footer'); 
            }else{
                redirect(base_url('index.php/Login'));
            }
             
         }
        
    }
    public function Nilai_in($id){
        if(empty($this->session->userdata('pv'))){
             redirect(base_url('index.php/Login'));
         }else{
            if($this->session->userdata('as') == "PEGAWAI"){
                redirect(base_url('index.php/Login'));
            }elseif($this->session->userdata('as') == "DUDI"){
                $menu['class']="nilai";
                $this->load->view('header_dudi',$menu);
                $no=$this->M_Nilai->ceknomor();
                $where = $id;
                $sw=$this->M_Siswa->siswa_ed($where)->result();
                $nl=$this->M_Nilai->nilai_list()->result();
                $data=['nomor'=>$no,'siswa'=>$sw,'nilai'=>$nl];
                $this->load->view('nilai_in',$data);
                $this->load->view('footer');   
            }else{
                redirect(base_url('index.php/Login'));
            }
             
         }
        
    }
     public function ins_nilai(){
        $sn=$this->input->post('sn');
        $di=$this->input->post('dudi');
        $jml=$this->input->post('jml');
        $ni=$this->input->post('no');
         $data_nilai=array(
            'NL_ID'=>$ni,
            'DUDI_ID'=>$di,
            'SW_NIS'=>$sn,
            'NL_TAHUN'=>'2017',
            'NL_GELOMBANG'=>'1',
            'NL_KETERANGAN'=>'SELESAI PRAKERIN'
            );
        $this->M_Nilai->insertnilai($data_nilai,'prk_nilai');
        $x=1;
        for ($x;$x<$jml;$x++){            
            $dk=$this->input->post('dk'.$x);
            $rt=$this->input->post('rating'.$x);
            if (empty($rt)){
                $rt=0;
            }            
         $data_det_nilai=array(
            'NL_ID'=>$ni,
            'DK_ID'=>$dk,
            'NILAI'=>$rt,
            );
           echo $dk." ".$rt."<br>";
        $this->M_Nilai->insertdetnilai($data_det_nilai,'prk_det_nilai');
        } 
        redirect('Nilai');
    }
    public function Nilai_ed($id){
        if(empty($this->session->userdata('pv'))){
             redirect(base_url('index.php/Login'));
         }else{
            if($this->session->userdata('as') == "PEGAWAI"){
                redirect(base_url('index.php/Login'));
            }elseif($this->session->userdata('as') == "DUDI"){
                $menu['class']="nilai";
                $this->load->view('header_dudi',$menu);
                $where = $id;
                $sw=$this->M_Siswa->siswa_ed($where)->result();
                $nl=$this->M_Nilai->nilai_ed($where)->result();
                $where = $id;
                $data=['siswa'=>$sw,'nilai'=>$nl];
                $this->load->view('nilai_ed',$data);
                $this->load->view('footer');   
            }else{
                redirect(base_url('index.php/Login'));
            }
             
         }
        
    }
    public function upd_nilai(){
         $jml=$this->input->post('jml');
    $ni=$this->input->post('ni');
     $this->M_Nilai->deletenilai('prk_det_nilai',$ni);
     $x=1;
        for ($x;$x<$jml;$x++){            
            $dk=$this->input->post('dk'.$x);
            $rt=$this->input->post('rating'.$x);
            if (empty($rt)){
                $rt=0;
            }            
         $data_det_nilai=array(
            'NL_ID'=>$ni,
            'DK_ID'=>$dk,
            'NILAI'=>$rt,
            );
           echo $dk." ".$rt."<br>";
        $this->M_Nilai->insertdetnilai($data_det_nilai,'prk_det_nilai');
        }
        redirect('Nilai');
    }
}
?>