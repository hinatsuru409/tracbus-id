<?php

class m_admin extends CI_Model
{

    var $sales_table = "sales";
    var $payment_table = "sales_payment";
    var $upload_table = "sales_upload";
    var $unit_table = "sales_unit";
    var $order_column = array(null, "no_reservasi", 'booking_order', "pic_sales", 'profit_center');

    public function getData()
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
            $this->db->order_by('id_sales', 'DESC');
        }
    }

    public function useDatatables()
    {
        $this->getData();
        if ($_POST["length"] != -1) {
            $this->db->limit($_POST['length'], $_POST['start']);
        }
        $query = $this->db->get();
        return $query->result();
    }
    public function get_filtered_data()
    {
        $this->getData();
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function get_all_data()
    {
        $this->db->select("*");
        $this->db->from($this->sales_table);
        return $this->db->count_all_results();
    }

    // Get tables for Select2
    public function getUnit_all_data($searchTerm)
    {
        $this->db->like('nopol', $searchTerm, 'both');
        $this->db->order_by('nopol', 'ASC');
        $this->db->limit(10);
        return $this->db->get($this->unit_table)->result();
    }

    public function getUnit($postData)
    {
        $result = $this->db->query("SELECT * FROM sales_unit WHERE nopol='$postData'");
        if ($result->num_rows() > 0) {
            foreach ($result->result() as $row) {
                $data = array(
                    'nopol' => $row->nopol,
                    'type' => $row->type,
                    'kategori' => $row->kategori,
                    'seat' => $row->seat
                );
            }
        }
        return $data;
    }

    public function getModalData($postSales)
    {
        if (isset($postSales['id_sales'])) {
            $this->db->select('*');
            $this->db->join($this->upload_table, 'sales_upload.id_upload=sales.id_upload', 'left');
            $this->db->join($this->payment_table, 'sales_payment.id_payment=sales.id_payment', 'left');
            $this->db->where("id_sales like '%".$postSales['id_sales']."%'");
        }
        return $this->db->get($this->sales_table)->result();
    }

    public function getSewa_data()
    {
        return $this->db->get('maksud_sewa');
    }

    public function getSc_data()
    {
        return $this->db->get('source_data');
    }

    public function getSpec_data()
    {
        return $this->db->get('spesifikasi');
    }

    public function getProvinsi_data()
    {
        return $this->db->get('provinsi');
    }

    public function getTujuan_data()
    {
        return $this->db->get('rute_tujuan');
    }
    // END

    public function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function delete_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
