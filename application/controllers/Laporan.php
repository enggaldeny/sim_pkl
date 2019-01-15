<?php
class Laporan extends CI_Controller{    
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        //$this->load->model('M_Siswa');
        $this->load->model('M_Dudi'); 
         $this->load->model('M_Nilai');
        $this->load->model('M_Siswa');
        $this->load->model('M_pkl');
        
    }
    public function index(){
         if(empty($this->session->userdata('pv'))){
             redirect(base_url('index.php/Login'));
         }else{
            $this->Laporan(); 
         }
        
    }
    public function Laporan(){
        if(empty($this->session->userdata('pv'))){
             redirect(base_url('index.php/Login'));
         }else{
            if($this->session->userdata('as') == "DUDI"){
                redirect(base_url('index.php/Login'));
            }elseif($this->session->userdata('as') == "PEGAWAI"){
                $menu['class']="laporan";
                
                $data['dudi'] = $this->M_pkl->getQuery("SELECT * from PRK_DUDI")->result();                
                if(isset($_GET['dudi'])){
                $d=$_GET['dudi'];
                $data['dudi_pilih']=$this->M_pkl->getQuery("select d.DUDI_ID, d.DUDI_NAMA, d.DUDI_ALAMAT, p.PGW_NAMA from prk_dudi d, prk_pegawai p where d.pgw_id=p.pgw_id and d.DUDI_ID='$d'")->result();
                $data['nilai'] = $this->M_pkl->getQuery("SELECT prk_siswa.*,prk_nilai.* FROM prk_siswa LEFT JOIN prk_nilai ON prk_siswa.SW_NIS = prk_nilai.NL_NIS where prk_siswa.DUDI_ID='$d'")->result();
                $this->load->view('header',$menu);
                $this->load->view('laporan');
                $this->load->view('lap_nilai',$data);
                $this->load->view('footer'); 
                }else{
                $data['nilai']="kosong";
                $this->load->view('header',$menu);
                $this->load->view('laporan');
                $this->load->view('lap_nilai',$data);
                $this->load->view('footer'); 
                }
               
            }else{
                redirect(base_url('index.php/Login'));
            }
             
         }
        
    }
    public function Laporan_detail($id){
        if(empty($this->session->userdata('pv'))){
             redirect(base_url('index.php/Login'));
         }else{
                $menu['class']="laporan";
                $this->load->view('header',$menu);
                $sw=$this->M_pkl->getQuery("SELECT * FROM `prk_nilai` n, prk_siswa s WHERE n.nl_nis=s.SW_NIS and n.nl_id=$id")->result();
                $nl=$this->M_pkl->getQuery("SELECT * FROM `prk_det_nilai` d, v_kategori dk WHERE d.dk_id=dk.DK_ID and d.nl_id=$id")->result();
                $data=['nomor'=>$id,'siswa'=>$sw,'nilai'=>$nl];
                $this->load->view('det_nilai',$data);
                $this->load->view('footer');                
         }
        
    }
    public function Grafik(){
        if(empty($this->session->userdata('pv'))){
             redirect(base_url('index.php/Login'));
         }else{
            if($this->session->userdata('as') == "DUDI"){
                redirect(base_url('index.php/Login'));
            }elseif($this->session->userdata('as') == "PEGAWAI"){
                $menu['class']="laporan";
                $this->load->view('header',$menu);
                
                //-----rpl----//
                $data['nl_krg_rpl'] = $this->M_pkl->getQuery("SELECT COUNT(n.NL_NIS) AS NL_KRG_RPL FROM `prk_nilai` n, prk_siswa s WHERE n.NL_HASIL <=25 AND s.JURKEL_ID LIKE '%RPL%' AND n.NL_NIS=s.SW_NIS")->result();
                $data['nl_ckp_rpl'] = $this->M_pkl->getQuery("SELECT COUNT(n.NL_NIS) AS NL_CKP_RPL FROM `prk_nilai` n, prk_siswa s WHERE n.NL_HASIL =50 AND s.JURKEL_ID LIKE '%RPL%' AND n.NL_NIS=s.SW_NIS")->result();
                $data['nl_baik_rpl'] = $this->M_pkl->getQuery("SELECT COUNT(n.NL_NIS) AS NL_BAIK_RPL FROM `prk_nilai` n, prk_siswa s WHERE n.NL_HASIL =75 AND s.JURKEL_ID LIKE '%RPL%' AND n.NL_NIS=s.SW_NIS")->result();
                $data['nl_sbk_rpl'] = $this->M_pkl->getQuery("SELECT COUNT(n.NL_NIS) AS NL_SBK_RPL FROM `prk_nilai` n, prk_siswa s WHERE n.NL_HASIL =100 AND s.JURKEL_ID LIKE '%RPL%' AND n.NL_NIS=s.SW_NIS")->result();
                //------------//
                
                 //-----mm----//
                $data['nl_krg_mm'] = $this->M_pkl->getQuery("SELECT COUNT(n.NL_NIS) AS NL_KRG_MM FROM `prk_nilai` n, prk_siswa s WHERE n.NL_HASIL <=25 AND s.JURKEL_ID LIKE '%MM%' AND n.NL_NIS=s.SW_NIS")->result();
                
                $data['nl_ckp_mm'] = $this->M_pkl->getQuery("SELECT COUNT(n.NL_NIS) AS NL_ckp_MM FROM `prk_nilai` n, prk_siswa s WHERE n.NL_HASIL =50 AND s.JURKEL_ID LIKE '%MM%' AND n.NL_NIS=s.SW_NIS")->result();
                
                $data['nl_baik_mm'] = $this->M_pkl->getQuery("SELECT COUNT(n.NL_NIS) AS NL_BAIK_MM FROM `prk_nilai` n, prk_siswa s WHERE n.NL_HASIL =75 AND s.JURKEL_ID LIKE '%MM%' AND n.NL_NIS=s.SW_NIS")->result();
                $data['nl_sbk_mm'] = $this->M_pkl->getQuery("SELECT COUNT(n.NL_NIS) AS NL_SBK_MM FROM `prk_nilai` n, prk_siswa s WHERE n.NL_HASIL =100 AND s.JURKEL_ID LIKE '%MM%' AND n.NL_NIS=s.SW_NIS")->result();
                //------------//
                
                 //-----AK----//
                $data['nl_krg_ak'] = $this->M_pkl->getQuery("SELECT COUNT(n.NL_NIS) AS NL_KRG_AK FROM `prk_nilai` n, prk_siswa s WHERE n.NL_HASIL <=25 AND s.JURKEL_ID LIKE '%AK%' AND n.NL_NIS=s.SW_NIS")->result();
                $data['nl_ckp_ak'] = $this->M_pkl->getQuery("SELECT COUNT(n.NL_NIS) AS NL_CKP_AK FROM `prk_nilai` n, prk_siswa s WHERE n.NL_HASIL =50 AND s.JURKEL_ID LIKE '%AK%' AND n.NL_NIS=s.SW_NIS")->result();
                $data['nl_baik_ak'] = $this->M_pkl->getQuery("SELECT COUNT(n.NL_NIS) AS NL_BAIK_AK FROM `prk_nilai` n, prk_siswa s WHERE n.NL_HASIL =75 AND s.JURKEL_ID LIKE '%AK%' AND n.NL_NIS=s.SW_NIS")->result();
                $data['nl_sbk_ak'] = $this->M_pkl->getQuery("SELECT COUNT(n.NL_NIS) AS NL_SBK_AK FROM `prk_nilai` n, prk_siswa s WHERE n.NL_HASIL =100 AND s.JURKEL_ID LIKE '%AK%' AND n.NL_NIS=s.SW_NIS")->result();
                //------------//
                
                 //-----OTKP----//
                $data['nl_krg_otkp'] = $this->M_pkl->getQuery("SELECT COUNT(n.NL_NIS) AS NL_KRG_OTKP FROM `prk_nilai` n, prk_siswa s WHERE n.NL_HASIL <=25 AND s.JURKEL_ID LIKE '%OTKP%' AND n.NL_NIS=s.SW_NIS")->result();
                $data['nl_ckp_otkp'] = $this->M_pkl->getQuery("SELECT COUNT(n.NL_NIS) AS NL_CKP_OTKP FROM `prk_nilai` n, prk_siswa s WHERE n.NL_HASIL =50 AND s.JURKEL_ID LIKE '%OTKP%' AND n.NL_NIS=s.SW_NIS")->result();
                $data['nl_baik_otkp'] = $this->M_pkl->getQuery("SELECT COUNT(n.NL_NIS) AS NL_BAIK_OTKP FROM `prk_nilai` n, prk_siswa s WHERE n.NL_HASIL =75 AND s.JURKEL_ID LIKE '%OTKP%' AND n.NL_NIS=s.SW_NIS")->result();
                $data['nl_sbk_otkp'] = $this->M_pkl->getQuery("SELECT COUNT(n.NL_NIS) AS NL_SBK_OTKP FROM `prk_nilai` n, prk_siswa s WHERE n.NL_HASIL =100 AND s.JURKEL_ID LIKE '%OTKP%' AND n.NL_NIS=s.SW_NIS")->result();
                //------------//
                
                 //-----BDP----//
                $data['nl_krg_bdp'] = $this->M_pkl->getQuery("SELECT COUNT(n.NL_NIS) AS NL_KRG_BDP FROM `prk_nilai` n, prk_siswa s WHERE n.NL_HASIL <=25 AND s.JURKEL_ID LIKE '%BDP%' AND n.NL_NIS=s.SW_NIS")->result();
                $data['nl_ckp_bdp'] = $this->M_pkl->getQuery("SELECT COUNT(n.NL_NIS) AS NL_CKP_BDP FROM `prk_nilai` n, prk_siswa s WHERE n.NL_HASIL =50 AND s.JURKEL_ID LIKE '%BDP%' AND n.NL_NIS=s.SW_NIS")->result();
                $data['nl_baik_bdp'] = $this->M_pkl->getQuery("SELECT COUNT(n.NL_NIS) AS NL_BAIK_BDP FROM `prk_nilai` n, prk_siswa s WHERE n.NL_HASIL =75 AND s.JURKEL_ID LIKE '%BDP%' AND n.NL_NIS=s.SW_NIS")->result();
                $data['nl_sbk_bdp'] = $this->M_pkl->getQuery("SELECT COUNT(n.NL_NIS) AS NL_SBK_BDP FROM `prk_nilai` n, prk_siswa s WHERE n.NL_HASIL =100 AND s.JURKEL_ID LIKE '%BDP%' AND n.NL_NIS=s.SW_NIS")->result();
                //------------//
                
                //$data['siswa'] = $this->M_Siswa->siswa_list()->result();
                $this->load->view('laporan');
                $this->load->view('grafik',$data);
                $this->load->view('footer'); 
            }else{
                redirect(base_url('index.php/Login'));
            }
             
         }
        
    }
}
?>