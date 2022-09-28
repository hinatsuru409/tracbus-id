<?php

class control_admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_admin');
        $this->load->helper('url', 'date');
    }

    public function dashboard()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('v_index');
        $this->load->view('template/footer');
    }

    public function view_billing()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('v_billing');
        $this->load->view('template/footer');
    }

    public function view_sales()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('v_sales');
        $this->load->view('template/footer');
    }

    public function jsonSales(){
        $fetch_data = $this->m_admin->useDatatables();  
        $data = array();
        $no = $_POST['start'];  
        foreach($fetch_data as $row){
            $no++;
            $sub_array = array();
            $sub_array[] = $no;
            $sub_array[] = $row->no_reservasi;               
            $sub_array[] = $row->booking_order;  
            $sub_array[] = $row->pic_sales;
            $sub_array[] = $row->profit_center;
            $sub_array[] = '<a class="btn btn-success pull-right btn-xs" id="salesModal" data-toggle="modal" data-target="#modal-lg"
                                      data-booking="'.$row->booking_order.'" data-idreservasi="'.$row->no_reservasi.'" data-picsales="'.$row->pic_sales.'" data-profit="'.$row->profit_center.'"
                                      data-namacmd="'.$row->nama_cmd.'" data-nama-instansi="'.$row->nama_instansi.'" data-order-type="'.$row->order_type.'" data-jenisbayar="'.$row->jenis_bayar.'"
                                      data-invoice="'.$row->invoice.'" data-spek="'.$row->spesifikasi.'" data-type-customer="'.$row->type_customer.'"
                                      data-source="'.$row->source_data.'" data-type-group="'.$row->group.'"
                                      data-cmd="'.$row->cmd.'" data-pic-customer="'.$row->pic_customer.'"
                                      data-pic-cont="'.$row->pic_contact.'" data-type-unit="'.$row->type_unit.'"
                                      data-kategori="'.$row->kategori.'" data-nopol="'.$row->nopol.'"
                                      data-seat="'.$row->seat.'" data-driver="'.$row->driver.'"
                                      data-maksudsewa="'.$row->maksud_sewa.'" data-rute="'.$row->rute.'"
                                      data-provinsi="'.$row->provinsi.'" data-ord-start="'.$row->order_start.'"
                                      data-ord-end="'.$row->order_end.'" data-day="'.$row->order_day.'"
                                      data-toll="'.$row->toll_parkir.'" data-revenueunit="'.$row->revenue_unit.'"
                                      data-addcharge="'.$row->addcharge.'" data-ket-addcharge="'.$row->addcharge_ket.'"
                                      data-totalrevenue="'.$row->revenue_total.'" data-pricelist="'.$row->price_list.'"
                                      data-diskon="'.$row->diskon.'"
                                      ><i class="fa fa-eye"></i> View Data</a>
                            <a href="'.base_url().'index.php/control_admin/delete_sales/'.$row->id_sales.'" class="btn btn-danger pull-right btn-xs" role="button">Hapus</a>
                            <a href="'.base_url().'index.php/control_admin/edit_sales/'.$row->id_sales.'" class="btn btn-secondary pull-right btn-xs" style="padding-left: 10px; padding-right: 10px;" role="button">Edit</a>'; 
            $data[] = $sub_array;
        }
        $output = array(  
            "draw" => intval($_POST["draw"]),  
            "recordsTotal" => $this->m_admin->get_all_data(),  
            "recordsFiltered" => $this->m_admin->get_filtered_data(),  
            "data" => $data
       );  
       echo json_encode($output);
    }

    public function add_sales()
    {
        $data['type_unit'] = $this->m_admin->getUnit();
        $data['maksud_sewa'] = $this->m_admin->getSewa_data()->result();
        $data['spesifikasi'] = $this->m_admin->getSpec_data()->result();
        $data['source_data'] = $this->m_admin->getSc_data()->result();
        $data['rute_tujuan'] = $this->m_admin->getTujuan_data()->result();
        $data['provinsi'] = $this->m_admin->getProvinsi_data()->result();
        $this->load->view('v_add_sales', $data);
    }

    public function jsonKategori()
    {
        $postData = $this->input->post();
        $data = $this->m_admin->fetchKategori_unit($postData);
        echo json_encode($data);
    }

    public function jsonSeat()
    {
        $postData = $this->input->post();
        $data = $this->m_admin->fetchSeat_unit($postData);
        echo json_encode($data);
    }

    public function jsonPlat()
    {
        $postData = $this->input->post();
        $data = $this->m_admin->fetchNopol_unit($postData);
        echo json_encode($data);
    }

    public function getAddSales()
    {
        $reservasi      = $this->input->post('rsv');
        $picsales       = $this->input->post('pic');
        $profit         = $this->input->post('prfc');
        $nama_cmd       = $this->input->post('nama_cmd');
        $nama_instansi  = $this->input->post('ins');
        $book_order     = $this->input->post('bko');
        $type_order     = $this->input->post('ord');
        $jenis_bayar    = $this->input->post('jpm');
        $invoice        = $this->input->post('invo');
        $spek           = $this->input->post('sp');
        $type_cus       = $this->input->post('tycus');
        $sc_data        = $this->input->post('sd');
        $group          = $this->input->post('grp');
        $cmd            = $this->input->post('cmd');
        $costumer_pic   = $this->input->post('pcus');
        $contact_pic    = $this->input->post('picc');
        $type_unit      = $this->input->post('tyunit');
        $kategori       = $this->input->post('kg');
        $nopol          = $this->input->post('npl');
        $seat           = $this->input->post('seat');
        $driver         = $this->input->post('drv');
        $maksud_sewa    = $this->input->post('sw');
        $rute           = $this->input->post('rt');
        $provinsi       = $this->input->post('pr');
        $order_start    = $this->input->post('tgl_mulai_p');
        $order_end      = $this->input->post('tgl_akhir_p');
        $day            = $this->input->post('wkts');
        $toll_parkir    = $this->input->post('toll');
        $revenue_unit   = $this->input->post('rvnu');
        $add_charge     = $this->input->post('addc');
        $ket_add_charge = $this->input->post('ket_addc');
        $total_revenue  = $this->input->post('total_rvnu');
        $price_list     = $this->input->post('prcl');
        $diskon         = $this->input->post('dsk');

        $data = array(
            'no_reservasi' => $reservasi,
            'pic_sales' => $picsales,
            'profit_center' => $profit,
            'nama_cmd' => $nama_cmd,
            'nama_instansi' => $nama_instansi,
            'booking_order' => $book_order,
            'order_type' => $type_order,
            'jenis_bayar' => $jenis_bayar,
            'invoice' => $invoice,
            'spesifikasi' => $spek,
            'type_customer' => $type_cus,
            'source_data' => $sc_data,
            'group' => $group,
            'cmd' => $cmd,
            'costumer_pic' => $costumer_pic,
            'pic_contact' => $contact_pic,
            'type_unit' => $type_unit,
            'kategori' => $kategori,
            'nopol' => $nopol,
            'seat' => $seat,
            'driver' => $driver,
            'maksud_sewa' => $maksud_sewa,
            'rute' => $rute,
            'provinsi' => $provinsi,
            'order_start' => date("Y-m-d", strtotime($order_start)),
            'order_end' => date("Y-m-d", strtotime($order_end)),
            'day' => $day,
            'toll_parkir' => $toll_parkir,
            'revenue_unit' => $revenue_unit,
            'additional_charge' => $add_charge,
            'ket_additionalcharge' => $ket_add_charge,
            'total_revenue' => $total_revenue,
            'price_list' => $price_list,
            'diskon' => $diskon
        );
        $this->m_admin->input_data($data, 'sales');
        redirect('control_admin/view_sales');
    }

    public function delete_sales($id)
    {
        $where = array('id_sales' => $id);
        $this->m_admin->delete_data($where, 'sales');
        redirect('control_admin/view_sales');
    }

    public function edit_sales($id)
    {
        $where = array('id_sales' => $id);
        $data['sales'] = $this->m_admin->edit_data($where, 'sales')->result();
        $this->load->view('v_edit_sales', $data);
    }

    public function updateSales()
    {
        $id = $this->input->post('id');
        $reservasi = $this->input->post('rsv');
        $picsales = $this->input->post('pic');
        $profit = $this->input->post('prfc');

        $data = array(
            'no_reservasi' => $reservasi,
            'pic_sales' => $picsales,
            'profit_center' => $profit
        );

        $where = array('id_sales' => $id);

        $this->m_admin->update_data($where, $data, 'sales');
        redirect('control_admin/view_sales');
    }
}
