<?php
class Siswa extends CI_Controller{    
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('M_Siswa');
        $this->load->model('M_Dudi'); 
    }
    public function index(){
         if(empty($this->session->userdata('pv'))){
             redirect(base_url('index.php/Login'));
         }else{
            $this->Siswa(); 
         }
        
    }
    public function Siswa(){
        if(empty($this->session->userdata('pv'))){
             redirect(base_url('index.php/Login'));
         }else{
            if($this->session->userdata('as') == "DUDI"){
                redirect(base_url('index.php/Login'));
            }elseif($this->session->userdata('as') == "PEGAWAI"){
                $menu['class']="siswa";
                $this->load->view('header',$menu);
                $data['siswa'] = $this->M_Siswa->siswa_list()->result();
                $this->load->view('siswa_list',$data);
                $this->load->view('footer'); 
            }else{
                redirect(base_url('index.php/Login'));
            }
             
         }
        
    }
    
     public function Siswa_in(){
        if(empty($this->session->userdata('pv'))){
             redirect(base_url('index.php/Login'));
         }else{
            if($this->session->userdata('as') == "DUDI"){
                redirect(base_url('index.php/Login'));
            }elseif($this->session->userdata('as') == "PEGAWAI"){
                $menu['class']="siswa";
                $this->load->view('header',$menu);
                $this->load->view('siswa_in');
                $this->load->view('footer');   
            }else{
                redirect(base_url('index.php/Login'));
            }
             
         }
        
    }
    
    public function Siswa_ed($id){
        if(empty($this->session->userdata('pv'))){
             redirect(base_url('index.php/Login'));
         }else{
            if($this->session->userdata('as') == "DUDI"){
                redirect(base_url('index.php/Login'));
            }elseif($this->session->userdata('as') == "PEGAWAI"){
                $menu['class']="siswa";
                $this->load->view('header',$menu);
                $where = $id;
                $sw=$this->M_Siswa->siswa_ed($where)->result();
                $di=$this->M_Dudi->dudi_list()->result();
                $where = $id;
                $data=['siswa'=>$sw,'dudi'=>$di];
                $this->load->view('siswa_ed',$data);
                $this->load->view('footer');   
            }else{
                redirect(base_url('index.php/Login'));
            }
             
         }
        
    }
    public function upd_siswa(){
        $si=$this->input->post('si');
        $sn=$this->input->post('sn');
        $sj=$this->input->post('sj');
        $sa=$this->input->post('sa');
        $sh=$this->input->post('sh');
        $so=$this->input->post('so');
        $di=$this->input->post('di');

        $data=array(
            'SW_NAMA'=>$sn,
            'SW_JK'=>$sj,
            'SW_ALAMAT'=>$sa,
            'SW_HP'=>$sh,
            'SW_HP_ORTU'=>$so,
            'DUDI_ID'=>$di            
            );
        $where=array('SW_NIS'=>$si);
        $this->M_Siswa->updatesiswa($where,$data,'prk_siswa');
        redirect('Siswa');
    }
}
?>