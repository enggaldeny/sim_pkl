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
                $menu['class']="nilai_sis";
                $this->load->view('header_dudi',$menu);
                $dudi=$this->session->userdata('pv');
                $data['guru'] = $this->M_pkl->getQuery("select * from prk_dudi d, prk_pegawai g where d.PGW_ID=g.PGW_ID and d.DUDI_ID='$dudi'")->result();
                $data['nilai'] = $this->M_pkl->getQuery("SELECT prk_siswa.*,prk_nilai.* FROM prk_siswa LEFT JOIN prk_nilai ON prk_siswa.SW_NIS = prk_nilai.NL_NIS where prk_siswa.DUDI_ID='$dudi'")->result();
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
                $menu['class']="nilai_sis";
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
        $nk=$this->input->post('ket');
         date_default_timezone_set("Asia/Bangkok");
         $now=date("Y-m-d H:i:s");
         $data_nilai=array(
            'NL_ID'=>$ni,
            'NL_TGL'=>$now,
            'NL_NIS'=>$sn,
            'NL_TAHUN'=>'2018'
            );
        $this->M_Nilai->insertnilai($data_nilai,'prk_nilai');
         
        $x=1;$hsl=0;
         $nl_jujur=0;$nl_jwb=0;$nl_dsp=0;$nl_stn=0;
        for ($x;$x<$jml;$x++){   
            $ktg=$this->input->post('ktg'.$x);
            $dk=$this->input->post('dk'.$x);
            $rt=$this->input->post('nilai'.$x);
            $dn=$this->input->post('dn'.$x);
            if (empty($rt)){
                $dn=0;
            }
            
            if($ktg=='1'){
                $nl_jujur+=$dn;
            }elseif($ktg=='2'){
                $nl_jwb+=$dn;
            }elseif($ktg=='3'){
                $nl_dsp+=$dn;
            }elseif($ktg=='4'){
                $nl_stn+=$dn;
            }
         $data_det_nilai=array(
            'NL_ID'=>$ni,
            'DK_ID'=>$dk,
            'NILAI'=>$dn,
            );
           //echo $dk." ".$dn."<br>";
        $this->M_Nilai->insertdetnilai($data_det_nilai,'prk_det_nilai');
        }
        
         $nilai = array($nl_jujur,$nl_jwb,$nl_dsp,$nl_stn);
         
         $mds;
         $a=array_count_values($nilai);
         foreach ($a as $key => $val) {
            if($val==max($a)){
            //echo "MODUSNYA ADALAH [ $key ] dengan banyak data     $val<br/>";
                $mds=$key;
            }
         }
       /* echo "nl_jujur = ".$nl_jujur;
        echo "<br>nl_jwb = ".$nl_jwb;
        echo "<br>nl_dsp = ".$nl_dsp;
        echo "<br>nl_stn = ".$nl_stn;
        echo "<br>------<br>".$mds;*/
        
        $fields=array(
            'NL_JUJUR'=>$nl_jujur,
            'NL_TGGJAWAB'=>$nl_jwb,
            'NL_DISIPLIN'=>$nl_dsp,
            'NL_SANTUN'=>$nl_stn,
            'NL_HASIL'=>$mds,
            'NL_KETERANGAN'=>$nk
            );
         $where=array(
            'NL_ID'=>$ni
             );
         
        $this->M_pkl->updateData('prk_nilai',$fields,$where);
        redirect('Nilai');
    }
    
    public function Nilai_ed($id){
        if(empty($this->session->userdata('pv'))){
             redirect(base_url('index.php/Login'));
         }else{
            if($this->session->userdata('as') == "PEGAWAI"){
                redirect(base_url('index.php/Login'));
            }elseif($this->session->userdata('as') == "DUDI"){
                $menu['class']="nilai_sis";
                $this->load->view('header_dudi',$menu);
               // $no=$this->M_Nilai->ceknomor();
                $sw=$this->M_pkl->getQuery("SELECT * FROM `prk_nilai` n, prk_siswa s WHERE n.nl_nis=s.SW_NIS and n.nl_id=$id")->result();
                $nl=$this->M_pkl->getQuery("SELECT * FROM `prk_det_nilai` d, v_kategori dk WHERE d.dk_id=dk.DK_ID and d.nl_id=$id")->result();
                $data=['nomor'=>$id,'siswa'=>$sw,'nilai'=>$nl];
                $this->load->view('nilai_ed2',$data);
                $this->load->view('footer');   
            }else{
                redirect(base_url('index.php/Login'));
            }
             
         }
        
    }
    public function upd_nilai(){
        $sn=$this->input->post('sn');
        $di=$this->input->post('dudi');
        $jml=$this->input->post('jml');
        $ni=$this->input->post('no');
        $nk=$this->input->post('ket');
     
        $this->M_Nilai->deletenilai('prk_det_nilai',$ni);
        $x=1;$hsl=0;
         $nl_jujur=0;$nl_jwb=0;$nl_dsp=0;$nl_stn=0;
        for ($x;$x<$jml;$x++){   
            $ktg=$this->input->post('ktg'.$x);
            $dk=$this->input->post('dk'.$x);
            $rt=$this->input->post('nilai'.$x);
            $dn=$this->input->post('dn'.$x);
            if (empty($rt)){
                $dn=0;
            }
            
            if($ktg=='1'){
                $nl_jujur+=$dn;
            }elseif($ktg=='2'){
                $nl_jwb+=$dn;
            }elseif($ktg=='3'){
                $nl_dsp+=$dn;
            }elseif($ktg=='4'){
                $nl_stn+=$dn;
            }
         $data_det_nilai=array(
            'NL_ID'=>$ni,
            'DK_ID'=>$dk,
            'NILAI'=>$dn,
            );
            $this->M_Nilai->insertdetnilai($data_det_nilai,'prk_det_nilai');
        }
         $nilai = array($nl_jujur,$nl_jwb,$nl_dsp,$nl_stn);
        $mds;$tpg=0;
         $a=array_count_values($nilai);
         foreach ($a as $key => $val) {
            if($val==max($a)){
               // $mds=$key;
                if($tpg <= $key){
                    $tpg=$key;
                }
                $mds=$tpg;
                
            }
             //echo "MODUSNYA ADALAH [ $mds ] dengan banyak data     $val<br/>";
         }
//        echo "nl_jujur = ".$nl_jujur;
//        echo "<br>nl_jwb = ".$nl_jwb;
//        echo "<br>nl_dsp = ".$nl_dsp;
//        echo "<br>nl_stn = ".$nl_stn;
//         echo "<br>------<br>".$mds;
         date_default_timezone_set("Asia/Bangkok");
         $now=date("Y-m-d H:i:s");
        $data_nilai=array(
            'NL_TGL'=>$now,
            'NL_NIS'=>$sn,
            'NL_TAHUN'=>'2018',
            'NL_JUJUR'=>$nl_jujur,
            'NL_TGGJAWAB'=>$nl_jwb,
            'NL_DISIPLIN'=>$nl_dsp,
            'NL_SANTUN'=>$nl_stn,
            'NL_HASIL'=>$mds,
            'NL_KETERANGAN'=>$nk
            );
        $where=array('NL_ID'=>$ni);
        $upd=$this->M_pkl->updateData('prk_nilai',$data_nilai,$where);
        redirect('Nilai');
    }
}
?>