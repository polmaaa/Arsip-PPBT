<?php if(!defined('BASEPATH')) exit('No direct script allowed');

class mdata1 extends CI_Model{

    public function __construct(){
        parent::__construct();
    }

    function get_pelanggan($id = NULL){
        // $data = array();
        $sql = "SELECT * FROM bill52.dil_main where idpel='".$id."'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function getidpel_haha($id = NULL){
        $this->db->flush_cache();
        $this->db->select("IDPEL, NAMA, NIK");
        $this->db->select("TRIM(NAMAPNJ)||''||TRIM(NOBANG)||''||DECODE(DECODE(TRIM(RT),NULL,'0',RT),'0','','RT.'||RT)||DECODE(DECODE(TRIM(RW),NULL,'0',RW),'0','','RW.'||RW) AS ALAMAT");
        $this->db->from('OPHARAPP.DIL_INFO_PELANGGAN');
        $this->db->where('IDPEL', $id);
        $query = $this -> db -> get();
        return $query->result_array();
        // $query = $this->db->get('OPHARAPP.DIL_INFO_PELANGGAN');
        // return $query->result_array();
    }


    public function getidpel_haha_backup($id = NULL){
        $this->db->where('IDPEL', $id);
        $query = $this->db->get('OPHARAPP.DIL_INFO_PELANGGAN');
        return $query->result_array();
    }

    function get_profile(){
        $username = $this->session->userdata('id_user');
        $password = $this->session->userdata('password');

        $sql = "SELECT * FROM p_usertab WHERE UNAME=UPPER('$username') AND PWORD=LOWER(F_MD5('$password'))";
        $query = $this->db->query($sql);
        return $query->result();
    }

    function ambil_pelanggan($p_idpel=NULL){
        $results = '';
        $this->pblmig_db = $this->load->database('pblmig', true);
        if (!$this->pblmig_db) {
            $m = oci_error();
            trigger_error(htmlentities($m['message']), E_USER_ERROR);
        }

        $stid = oci_parse($this->pblmig_db->conn_id, 'BEGIN  :RetVal := OPHARAPP.PKG_INFO_DEBITUR.get_info_dil(:p_idpel,:OUT_DATA, :OUT_MESSAGE); END;');

        $OUT_DATA = oci_new_cursor($this->pblmig_db->conn_id);

        oci_bind_by_name($stid, ':p_idpel', $p_idpel, 12) or die('Error binding string1');
        oci_bind_by_name($stid, ':OUT_DATA', $OUT_DATA,-1, OCI_B_CURSOR) or die('Error binding string4');
        oci_bind_by_name($stid, ':OUT_MESSAGE', $OUT_MESSAGE,100, SQLT_CHR) or die('Error binding string5');
        oci_bind_by_name($stid, ':RetVal', $RetVal) or die('Error binding string6');

        if(oci_execute($stid)){
            oci_execute($OUT_DATA, OCI_DEFAULT);
            oci_fetch_all($OUT_DATA, $cursor, null, null, OCI_FETCHSTATEMENT_BY_ROW);
            $results = $cursor;
        }else{
            $e = oci_error($stid);
            $results =  $e['message'];
        }

        oci_free_statement($stid);
        oci_close($this->pblmig_db->conn_id);

        return $results;
    }


    function proses_mohon($in_id_user=NULL, $in_idpel=NULL, $in_lama_tenor=NULL, $in_plafon_mohon=NULL){
        $results = '';
        $this->pblmig_db = $this->load->database('pblmig', true);

        if (!$this->pblmig_db) {
            $m = oci_error();
            trigger_error(htmlentities($m['message']), E_USER_ERROR);
        }     

        $stid = oci_parse($this->pblmig_db->conn_id, 'BEGIN  :RetVal := PKG_INFO_DEBITUR.P_SIMPAN_PERMOHONAN( :in_id_user, :in_idpel, :in_lama_tenor, :in_plafon_mohon); END;');

//Send parameters variable  value  lenght
        oci_bind_by_name($stid, ':in_id_user', $in_id_user) or die('Error binding string1');
        oci_bind_by_name($stid, ':in_idpel', $in_idpel) or die('Error binding string2');
        oci_bind_by_name($stid, ':in_lama_tenor', $in_lama_tenor) or die('Error binding string3');
        oci_bind_by_name($stid, ':in_plafon_mohon', $in_plafon_mohon) or die('Error binding string4');
        oci_bind_by_name($stid, ':RetVal', $RetVal,100, SQLT_CHR) or die('Error binding string6');

        if(oci_execute($stid)){
// $results = $MSGERROR;
            $results = $RetVal;
        }else{
            $results = oci_error();
// trigger_error(htmlentities($results['message']), E_USER_ERROR);
            $results = 'GAGAL INSERT';
        }
        oci_free_statement($stid);
        oci_close($this->pblmig_db->conn_id);

        return $results;
    }

    function ambil_data_permohonan($idpel = NULL){
        $sql = "SELECT * FROM OPHARAPP.TRANS_MOHON_INFO_DEBITUR A WHERE A.TGLENTRI=(SELECT MAX(TGLENTRI) TGLENTRI FROM OPHARAPP.TRANS_MOHON_INFO_DEBITUR WHERE IDPEL=A.IDPEL) AND A.IDPEL='".$idpel."'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function ambil_tanggal_bayar($idpel = NULL){
        $sql = "SELECT to_char(to_date(BLTH,'YYYYMM'), 'YYYY-MM') BLTH,substr(tglbayar,7,2)tglbayar from OPHARAPP.CEK_INFO_DPP  WHERE IDPEL='".$idpel."' and rownum < 7";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    // function ambil_tagihan_bulan($idpel = NULL){
    //     $sql = "SELECT to_char(to_date(BLTH,'YYYYMM'), 'YYYY-MM') BLTH,rptag from OPHARAPP.CEK_INFO_DPP  WHERE IDPEL='".$idpel."' and rownum < 7";
    //     $query = $this->db->query($sql);
    //     return $query->result_array();
    // }

    function ambil_tenornya(){
        $sql = "SELECT * FROM OPHARAPP.REF_TENOR";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function cek_ada($in_idpel = NULL){
        $sql = "SELECT * FROM OPHARAPP.TRANS_MOHON_INFO_DEBITUR WHERE IDPEL='".$in_idpel."'";
        $query = $this->db->query($sql);
        return $query->num_rows();
    }

    function cobaaa_histo($P_IDPEL=NULL){
        $results = '';
        $this->pblmig_db = $this->load->database('pblmig', true);
        if (!$this->pblmig_db) {
            $m = oci_error();
            trigger_error(htmlentities($m['message']), E_USER_ERROR);
        }

        $stid = oci_parse($this->pblmig_db->conn_id, 'BEGIN  :RetVal := OPHARAPP.PKG_INFO_DEBITUR.get_histo_tagihan(:P_IDPEL, :OUT_DATA, :OUT_MESSAGE); END;');

        $OUT_DATA = oci_new_cursor($this->pblmig_db->conn_id);

        oci_bind_by_name($stid, ':P_IDPEL', $P_IDPEL, 20) or die('Error binding string1');
        oci_bind_by_name($stid, ':OUT_DATA', $OUT_DATA,-1, OCI_B_CURSOR) or die('Error binding string2');
        oci_bind_by_name($stid, ':OUT_MESSAGE', $OUT_MESSAGE,100, SQLT_CHR) or die('Error binding string3');
        oci_bind_by_name($stid, ':RetVal', $RetVal) or die('Error binding string4');

        if(oci_execute($stid)){
            oci_execute($OUT_DATA, OCI_DEFAULT);
            oci_fetch_all($OUT_DATA, $cursor, null, null, OCI_FETCHSTATEMENT_BY_ROW);
            $results = $cursor;
        }else{
            $e = oci_error($stid);
            $results =  $e['message'];
        }

        oci_free_statement($stid);
        oci_close($this->pblmig_db->conn_id);

        return $results;
    }



    

    public function cek_histo($in_idpel){
        $results = '';
        $this->pblmig_db = $this->load->database('pblmig', true);
        if (!$this->pblmig_db) {
            $m = oci_error();
            trigger_error(htmlentities($m['message']), E_USER_ERROR);
        }

        $p_idpel = $in_idpel;
        $OUT_DATA = '';
        $OUT_MESSAGE = '';

        $stid = oci_parse($this->pblmig_db->conn_id, 'BEGIN  :RetVal:=PKG_INFO_DEBITUR.get_histo_tagihan( :p_idpel, :OUT_DATA, :OUT_MESSAGE ); END;');
        $OUT_DATA = oci_new_cursor($this->pblmig_db->conn_id);


        oci_bind_by_name($stid, ':p_idpel', $p_idpel, 20) or die('Error binding string1');
        oci_bind_by_name($stid, ':OUT_DATA', $OUT_DATA,-1, OCI_B_CURSOR) or die('Error binding string2');
        oci_bind_by_name($stid, ':OUT_MESSAGE', $OUT_MESSAGE,100, SQLT_CHR) or die('Error binding string5');
        oci_bind_by_name($stid, ':RetVal', $RetVal) or die('Error binding string6');

        if(oci_execute($stid)){
            oci_execute($OUT_DATA, OCI_DEFAULT);
            oci_fetch_all($OUT_DATA, $cursor, null, null, OCI_FETCHSTATEMENT_BY_ROW);

            $results = $cursor;
        }else{
            $e = oci_error($stid);
            $results =  $e['message'];
        }
        oci_free_statement($stid);
        oci_close($this->pblmig_db->conn_id);
        return $results;
    }

    function ambil_info_kredibel($p_idpel=NULL){
        $sql = "SELECT count(*) status FROM TRANS_MOHON_INFO_DEBITUR WHERE STATUS_BAYAR_LISTRIK = 'LANCAR'
        AND STATUS_601 = 'Tidak Pernah dilakukan Pemutusan'
        AND STATUS_603 = 'Tidak Pernah dilakukan Pembongkaran'
        AND STATUS_P2TL = 'Tidak Pernah Melakukan Pelanggaran'
        AND RPPLAFON_MAKS > RPPLAFON_MOHON
        AND IDPEL='".$p_idpel."'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

}