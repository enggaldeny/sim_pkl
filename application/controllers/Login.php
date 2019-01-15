<?php
class Login extends CI_Controller{    
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('M_pkl');
    }
    public function index(){
       $this->MainPage();
    }
     public function MainPage(){
       $this->load->view('login');
    }
    
    function authPgw(){
        $username=htmlspecialchars($this->input->post('usmk',TRUE),ENT_QUOTES);
        $password=htmlspecialchars($this->input->post('psmk',TRUE),ENT_QUOTES);
        
        $where = array('pgw_username'=>$username, 'pgw_password'=>md5($password));
        $cek_user=$this->M_pkl->getData('prk_pegawai',$where, '', '', '1' );
       
        if($cek_user->num_rows() == 1){
            $data=$cek_user->row_array();
            $this->session->set_userdata('masuk',TRUE);
            $this->session->set_userdata('pn',$data['PGW_NAMA']);
            $this->session->set_userdata('pt',$data['PGW_TELEPON']);
            $this->session->set_userdata('pa',$data['PGW_ALAMAT']);
            $this->session->set_userdata('pu',$data['PGW_USERNAME']);
            $this->session->set_userdata('as','PEGAWAI');
            $this->session->set_userdata('pv',$data['PGW_ID']);
            redirect(base_url("index.php/Home"));    
           
           
        }else{
            ?>
            <script type="javascript">
            alert("username dan password salah !");
            </script>
            <?php 
            $this->MainPage();
        }
    }
    
    function authDudi(){
        $username=htmlspecialchars($this->input->post('ududi',TRUE),ENT_QUOTES);
        $password=htmlspecialchars($this->input->post('pdudi',TRUE),ENT_QUOTES);
        
        $where = array('dudi_username'=>$username, 'dudi_password'=>md5($password));
        $cek_user=$this->M_pkl->getData('prk_dudi',$where, '', '', '1' );
       
        if($cek_user->num_rows() == 1){
            $data=$cek_user->row_array();
            $this->session->set_userdata('masuk',TRUE);
            $this->session->set_userdata('dn',$data['DUDI_NAMA']);
            $this->session->set_userdata('du',$data['DUDI_USERNAME']);
            $this->session->set_userdata('as','DUDI');
            $this->session->set_userdata('pv',$data['DUDI_ID']);
            redirect(base_url("index.php/Home"));    
        }else{
            ?>
            <script type="javascript">
            alert("username dan password salah !");
            </script>
            <?php 
            $this->index();
        }
    }
    
    /**/
    
    function Logout(){
        $this->session->sess_destroy();
        redirect(base_url('index.php/Login/MainPage'));
    }
}
?>