<?php

class m_sales extends CI_Model{
    var $sales_table = "sales";
    var $payment_table = "sales_payment";
    var $upload_table = "sales_upload";
    var $unit_table = "sales_unit";
    var $order_column = array(null, "no_reservasi", 'booking_order', "pic_sales", 'profit_center');

    // Initialize Datatables
    public function getDatatables()
    {
        $this->db->select("*");
        $this->db->from($this->sales_table);
        $this->db->join($this->upload_table, 'sales_upload.id_upload=sales.id_upload', 'left');
        $this->db->join($this->payment_table, 'sales_payment.id_payment=sales.id_payment', 'left');
        if (isset($_POST["search"]["value"])) {
            $this->db->like("no_reservasi", $_POST["search"]["value"]);
            $this->db->or_like("booking_order", $_POST["search"]["value"]);
            $this->db->or_like("pic_sales", $_POST["search"]["value"]);
            $this->db->or_like("profit_center", $_POST["search"]["value"]);
        }

        if (isset($_POST["order"])) {
            $this->db->order_by($this->order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else {
            $this->db->order_by('id', 'DESC');
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
    // End Datatables

    public function getSales_all_data(){
        return $this->db->get($this->sales_table);
    }

    // Get Unit tables for Select2
    public function getUnit_all_data($searchTerm)
    {
        $this->db->like('nopol', $searchTerm, 'both');
        $this->db->order_by('nopol', 'ASC');
        $this->db->limit(5);
        return $this->db->get($this->unit_table)->result();
    }

    // Get tables for select2 dropdown
    public function getSelect_data()
    {
        $data['maksud_sewa'] = $this->db->get('maksud_sewa')->result();
        $data['source_data'] = $this->db->get('source_data')->result();
        $data['spesifikasi'] = $this->db->get('spesifikasi')->result();
        $data['provinsi'] = $this->db->get('provinsi')->result();
        $data['rute_tujuan'] = $this->db->get('rute_tujuan')->result();

        return $data;
    }

    // Form Validation arguments
    public function validationForm()
    {
        return [
            ['field' => 'rsv',      'label' => 'Nomor Reservasi',           'rules' => 'required|max_length[25]'],
            ['field' => 'bko',      'label' => 'Booking Order',             'rules' => 'required|max_length[25]'],
            ['field' => 'pic',      'label' => 'PIC Sales',                 'rules' => 'required|max_length[25]'],
            ['field' => 'profit',   'label' => 'Profit Center',             'rules' => 'required|callback_check_default'],
            ['field' => 'nama_cmd', 'label' => 'Nama Customer Master Data', 'rules' => 'required'],
            ['field' => 'ins',      'label' => 'Nama Instansi',             'rules' => 'required'],
            ['field' => 'ord',      'label' => 'Tipe Order',                'rules' => 'required|callback_check_default'],
            ['field' => 'jpm',      'label' => 'Jenis Pembayaran',          'rules' => 'required|callback_check_default'],
            ['field' => 'invo',     'label' => 'Invoice',                   'rules' => 'required|callback_check_default'],
            ['field' => 'sp',       'label' => 'Spesifikasi',               'rules' => 'required|callback_check_default'],
            ['field' => 'tycus',    'label' => 'Tipe Customer',             'rules' => 'required|callback_check_default'],
            ['field' => 'sd',       'label' => 'Source Data',               'rules' => 'required|callback_check_default'],
            ['field' => 'grp',      'label' => 'Group',                     'rules' => 'required|callback_check_default'],
            ['field' => 'cmd',      'label' => 'Customer Master Data',      'rules' => 'required'],
            ['field' => 'pcus',     'label' => 'PIC Customer',              'rules' => 'required'],
            ['field' => 'picc',     'label' => 'PIC Contact',               'rules' => 'required'],
            ['field' => 'tyunit',   'label' => 'Tipe Unit',                 'rules' => 'required'],
            ['field' => 'kg',       'label' => 'Kategori Unit',             'rules' => 'required'],
            ['field' => 'npl',      'label' => 'Nomor Polisi',              'rules' => 'required|callback_check_default'],
            ['field' => 'seat',     'label' => 'Seat',                      'rules' => 'required'],
            ['field' => 'drv',      'label' => 'Driver',                    'rules' => 'required'],
            ['field' => 'sw',       'label' => 'Maksud Sewa',               'rules' => 'required|callback_check_default'],
            ['field' => 'rt',       'label' => 'Rute',                      'rules' => 'required'],
            ['field' => 'pr',       'label' => 'Provinsi',                  'rules' => 'required'],
            ['field' => 'address',  'label' => 'Alamat Tujuan',             'rules' => 'required'],
            ['field' => 'tgl_mulai_p', 'label' => 'Tanggal mulai Pemesanan', 'rules' => 'required'],
            ['field' => 'tgl_akhir_p', 'label' => 'Tanggal akhir Pemesanan', 'rules' => 'required'],
            ['field' => 'wkts',     'label' => 'Waktu Sewa',                'rules' => 'required|numeric'],
        ];
    }

    public function insert_data($table, $data)
    {
        $this->db->trans_begin();
        $this->db->insert($table, $data);
        $insert_id = $this->db->insert_id();

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return 0;
        } else {
            $this->db->trans_commit();
            return $insert_id;
        }
    }

    public function delete_data($id)
    {
        $this->db->trans_start();
        $this->db->delete('sales', array('id' => $id));
        $this->db->delete('sales_upload', array('id_upload' => $id));
        $this->db->delete('sales_payment', array('id_payment' => $id));
        $this->db->trans_complete();
    }

    public function edit_data($where, $table)
    {
        $this->db->trans_start();
        return $this->db->get_where($table, $where);
        $this->db->trans_complete();
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function useSales_bookOrd($where, $table){
        return $this->db->get_where($table, $where);
    }

}


?>