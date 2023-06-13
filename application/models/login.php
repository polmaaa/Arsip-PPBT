<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Login extends CI_Model {
    
    function set_login($username,$password){        
    $sql = "SELECT * FROM POLMASIHOTANG.WEB_USERTAB@AP2T_PROD.LOCALDOMAIN WHERE ID_USER=UPPER('$username') AND PASSWD=LOWER(F_MD5('$password')) AND DISABLE_USER=0";
        $query = $this->db->query($sql);
        return $query->result();
    } 

    function save_log_user($save) {
        $results = '';
        $this->pblmig_db = $this->load->database('pblmig', true);

        if (!$this->pblmig_db) {
          $m = oci_error();
          trigger_error(htmlentities($m['message']), E_USER_ERROR);
        }    

        $id_user = $save['id_user'];
        $ip_address = $save['ip_address'];
        $user_agent = $save['user_agent'];
        $level_user = $save['level_user'];        
        $id_session = $save['id_session'];  

        $stid = oci_parse($this->pblmig_db->conn_id, 'BEGIN  :RetVal := WEB_LOGIN.FUNC_SAVELOGUSER( :in_id_user, :in_ip_address, :in_user_agent, :in_level_user, :in_id_session); END;');

        //Send parameters variable  value  lenght
        oci_bind_by_name($stid, ':in_id_user', $id_user) or die('Error binding string1');
        oci_bind_by_name($stid, ':in_ip_address', $ip_address) or die('Error binding string2');
        oci_bind_by_name($stid, ':in_user_agent', $user_agent) or die('Error binding string3');
        oci_bind_by_name($stid, ':in_level_user', $level_user) or die('Error binding string4');
        oci_bind_by_name($stid, ':in_id_session', $id_session) or die('Error binding string5');
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

    function save_log_out($id_user, $ip_address, $id_session) {
        $results = '';
        $this->pblmig_db = $this->load->database('pblmig', true);

        if (!$this->pblmig_db) {
          $m = oci_error();
          trigger_error(htmlentities($m['message']), E_USER_ERROR);
        }    

        $id_user = $id_user;
        $ip_address = $ip_address;   
        $id_session = $id_session;  

        $stid = oci_parse($this->pblmig_db->conn_id, 'BEGIN  :RetVal := WEB_LOGIN.FUNC_SAVELOGOUT( :in_id_user, :in_ip_address,  :in_id_session); END;');

        //Send parameters variable  value  lenght
        oci_bind_by_name($stid, ':in_id_user', $id_user) or die('Error binding string1');
        oci_bind_by_name($stid, ':in_ip_address', $ip_address) or die('Error binding string2');
        oci_bind_by_name($stid, ':in_id_session', $id_session) or die('Error binding string3');
        oci_bind_by_name($stid, ':RetVal', $RetVal,100, SQLT_CHR) or die('Error binding string4');

        if(oci_execute($stid)){
          // $results = $MSGERROR;
            $results = $RetVal;
        }else{
          $results = oci_error();
          // trigger_error(htmlentities($results['message']), E_USER_ERROR);
          $results = 'GAGAL LOGOUT';
        }
        oci_free_statement($stid);
        oci_close($this->pblmig_db->conn_id);

        return $results;
   }     

    function save_update_log($save) {
        $results = '';
        $this->pblmig_db = $this->load->database('pblmig', true);

        if (!$this->pblmig_db) {
          $m = oci_error();
          trigger_error(htmlentities($m['message']), E_USER_ERROR);
        }    

        $id_user = $save['id_user'];
        $ip_address = $save['ip_address'];      
        $id_session = $save['id_session'];     

        $stid = oci_parse($this->pblmig_db->conn_id, 'BEGIN  :RetVal := POLMA_PKG_MENU.FUNC_UPDATELOG(:in_id_user, :in_ip_address,  :in_id_session); END;');

        //Send parameters variable  value  lenght
        oci_bind_by_name($stid, ':in_id_user', $id_user) or die('Error binding string1');
        oci_bind_by_name($stid, ':in_ip_address', $ip_address) or die('Error binding string2');
        oci_bind_by_name($stid, ':in_id_session', $id_session) or die('Error binding string5');
        oci_bind_by_name($stid, ':RetVal', $RetVal,100, SQLT_CHR) or die('Error binding string6');

        if(oci_execute($stid)){
          // $results = $MSGERROR;
            $results = $RetVal;
        }else{
          $results = oci_error();
          // trigger_error(htmlentities($results['message']), E_USER_ERROR);
          //$results = 'GAGAL UPDATE';
        }
        oci_free_statement($stid);
        oci_close($this->pblmig_db->conn_id);

        return $results;
   }     
}
 
/* End of file Auth_model.php */
/* Location: ./application/models/Mlogin.php */