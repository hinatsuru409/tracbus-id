<?php

class m_admin extends CI_Model
{
    var $sales_table = "sales";
    var $payment_table = "sales_payment";
    var $upload_table = "sales_upload";
    var $unit_table = "sales_unit";

    var $order_column = array(null, "no_reservasi", 'booking_order', "pic_sales", "profit_center", "date_created");
    var $search_column = array("no_reservasi", "booking_order", "pic_sales", "profit_center", "date_created");
    var $order_date = array("date_created" => 'DESC');

    // Initialize Datatables
    public function getDatatables()
    {
        $this->db->select("*");
        $this->db->from($this->sales_table);
        $this->db->join($this->upload_table, 'sales_upload.id_upload=sales.id_upload', 'left');
        $this->db->join($this->payment_table, 'sales_payment.id_payment=sales.id_payment', 'left');
        if ($this->input->post('tgl_awal')) {
            $tgl_awal = $this->input->post('tgl_awal');
            $tgl_akhir = $this->input->post('tgl_akhir');
            $tgl_a = substr($tgl_awal, 0, 10);
            $tgl_b = substr($tgl_akhir, 14, 11);
            //echo $tgl_awal;
            $this->db->where('date_created >=', $tgl_a);
            $this->db->where('date_created <=', $tgl_b);
        }

        $i = 0;
        foreach ($this->search_column as $item) // loop column 
        {
            if ($_POST['search']['value']) // if datatable send POST for search
            {
                if ($i === 0) // first loop
                {
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like($item, $_POST['search']['value']);
                }

                if (count($this->search_column) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }

        if (isset($_POST['order'])) // here order processing
        {
            $this->db->order_by($this->order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else if (isset($this->order_date)) {
            $order = $this->order_date;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    public function useDatatables()
    {
        $this->getDatatables();
        if ($_POST["length"] != -1) {
            $this->db->limit($_POST['length'], $_POST['start']);
        }
        $query = $this->db->get();
        return $query->result();
    }
    public function get_filtered_datatables()
    {
        $query = $this->db->get($this->sales_table);
        return $query->num_rows();
    }

    public function get_all_datatables()
    {
        $this->db->select("*");
        $this->db->from($this->sales_table);
        return $this->db->count_all_results();
    }

    public function getTables(){
        return $this->db->get($this->sales_table);
    }
}
