<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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

    public function view_send_mail()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('v_send_mail');
        $this->load->view('template/footer');
    }

    public function view_approval()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('v_approval');
        $this->load->view('template/footer');
    }

    public function view_laporan()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('v_laporan');
        $this->load->view('template/footer');
    }

    public function jsonLaporan()
    {
        $fetch_data = $this->m_admin->useDatatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($fetch_data as $row) {
            $no++;
            $sub_array = array(); 
            $sub_array[] = $no;        
            $sub_array[] = $row->no_reservasi;
            $sub_array[] = $row->booking_order;
            $sub_array[] = $row->profit_center;
            $sub_array[] = $row->pic_sales;
            $sub_array[] = $row->date_created;
            $sub_array[] = '<a class="btn btn-primary pull-right btn-xs" id="reportModal" data-toggle="modal" data-target="#modal-lg"
                            data-booking="' . $row->booking_order . '" data-idreservasi="' . $row->no_reservasi . '" data-picsales="' . $row->pic_sales . '" data-profit="' . $row->profit_center . '"
                            data-namacmd="' . $row->nama_cmd . '" data-nama-instansi="' . $row->nama_instansi . '" data-order-type="' . $row->order_type . '" data-jenisbayar="' . $row->jenis_bayar . '"
                            data-invoice="' . $row->invoice . '" data-spek="' . $row->spesifikasi . '" data-type-customer="' . $row->type_customer . '"
                            data-source="' . $row->source_data . '" data-type-group="' . $row->group . '"
                            data-cmd="' . $row->cmd . '" data-pic-customer="' . $row->pic_customer . '"
                            data-pic-cont="' . $row->pic_contact . '" data-type-unit="' . $row->type_unit . '"
                            data-kategori="' . $row->kategori . '" data-nopol="' . $row->nopol . '"
                            data-seat="' . $row->seat . '" data-driver="' . $row->driver . '"
                            data-maksudsewa="' . $row->maksud_sewa . '" data-rute="' . $row->rute . '"
                            data-alamat="' . $row->alamat . '"
                            data-provinsi="' . $row->provinsi . '" data-ord-start="' . $row->order_start . '"
                            data-ord-end="' . $row->order_end . '" data-day="' . $row->order_day . '"
                            data-toll="' . $row->toll_parkir . '" data-revenueunit="' . $row->revenue_unit . '"
                            data-addcharge="' . $row->addcharge . '" data-ket-addcharge="' . $row->addcharge_ket . '"
                            data-totalrevenue="' . $row->revenue_total . '" data-pricelist="' . $row->price_list . '"
                            data-diskon="' . $row->diskon . '"  data-totalpay="' . $row->total_payment . '"
                            data-pph="' . $row->pph_23 . '" data-selpay="' . $row->sel_payment . '"
                            data-ketpay="' . $row->ket_payment . '" data-upload1="' . $row->upload_1 . '"
                            data-upload2="' . $row->upload_2 . '" data-upload3="' . $row->upload_3 . '"
                            data-upload4="' . $row->upload_4 . '" data-upload5="' . $row->upload_5 . '"
                            data-upload7="' . $row->upload_7 . '" data-upload7="' . $row->upload_7 . '"
                            data-upload8="' . $row->upload_8 . '" data-upload9="' . $row->upload_9 . '"
                            data-upload10="' . $row->upload_10 . '" data-payment1="' . $row->pay_1 . '"
                            data-tglpay1="' . $row->pay_tgl_1 . '" data-nompay1="' . $row->pay_nom_1 . '"
                            data-payment2="' . $row->pay_2 . '" data-tglpay2="' . $row->pay_tgl_2 . '" 
                            data-nompay2="' . $row->pay_nom_2 . '" data-payment3="' . $row->pay_3 . '"
                            data-tglpay3="' . $row->pay_tgl_3 . '" data-nompay3="' . $row->pay_nom_3 . '"
                            data-payment4="' . $row->pay_4 . '" data-tglpay4= "' . $row->pay_tgl_4 . '"
                            data-nompay4="' . $row->pay_nom_4 . '" data-payment5= "' . $row->pay_5 . '" 
                            data-tglpay5="' . $row->pay_tgl_5 . '" data-nompay5= "' . $row->pay_nom_5 . '" 
                            ><i class="fa fa-eye"></i> View Data</a>';
            $data[] = $sub_array;
        }

        $output = array(
            "draw" => intval($_POST["draw"]),
            "recordsTotal" => $this->m_admin->get_all_datatables(),
            "recordsFiltered" => $this->m_admin->get_filtered_datatables(),
            "data" => $data
        );
        echo json_encode($output);
    }

    public function printData(){
        $tgl_awal = $this->input->get('tgl_awal');
        $tgl_akhir = $this->input->get('tgl_akhir');

        $sales = $this->m_admin->useDatatables($tgl_awal, $tgl_akhir);
    }

    public function view_login()
    {
        $this->load->view('v_login');
    }

    public function view_pengaturan()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('v_pengaturan');
        $this->load->view('template/footer');
    }
}
