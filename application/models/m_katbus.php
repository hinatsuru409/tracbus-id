<?php

class m_katbus extends CI_Model{
    var $table = "sales_unit";  //table yang ingin di tampilkan
    var $select_column = array("id_unit", "nopol", "type", "kategori", "seat" );  //sesuaikan dengan nama field table
    var $order_column = array(null, "nopol", "type", "kategori", "seat");

    public function getDatatables($postData=null){
        $this->db->select($this->select_column);  
        $this->db->from($this->table);  
        if(isset($_POST["search"]["value"])){  
            $this->db->like("nopol", $_POST["search"]["value"]); 
            $this->db->or_like("type", $_POST["search"]["value"]);  
            $this->db->or_like("kategori", $_POST["search"]["value"]);
            $this->db->or_like("seat", $_POST["search"]["value"]);
        }  
        
        if(isset($_POST["order"])){  
                $this->db->order_by($this->order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
        } 
        else{  
                $this->db->order_by('id_unit', 'DESC');  
        }  
    }

    public function useDatatables(){  
        $this->getDatatables();  
        if($_POST["length"] != -1)  
        {  
             $this->db->limit($_POST['length'], $_POST['start']);  
        }  
        $query = $this->db->get();  
        return $query->result();  
    }
      
    public function get_filtered_datatables(){  
        $this->getDatatables();  
        $query = $this->db->get();  
        return $query->num_rows();  
    }
          
    public function get_all_datatables(){  
        $this->db->select("*");  
        $this->db->from($this->table);  
        return $this->db->count_all_results();  
    }

    public function insertExcel_batch($data) {
        $this->db->insert_batch($this->table, $data);
        if ($this->db->affected_rows() > 0) {
            return 1;
        } else {
            return 0;
        }
    }

    public function add_data($data){
        //$this->db->trans_begin();
        $this->db->insert_batch($this->table, $data);
        $insert_id = $this->db->insert_id();

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return 0;
        } else {
            $this->db->trans_commit();
            return $insert_id;
        }
    }

    public function get_editBus($where, $table){
        return $this->db->get_where($table,$where);
    }

    public function delete_data($where, $table){
        $this->db->where($where);
		$this->db->delete($table);
    }

    public function delete_all_data()
    {
        return $this->db->empty_table($this->table);
    }

}

?>