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

    public function view_app_aprove()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('v_app_aprove');
        $this->load->view('template/footer');
    }

    public function view_app_all()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('v_app_all');
        $this->load->view('template/footer');
    }

    public function view_laporan()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('v_laporan');
        $this->load->view('template/footer');
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

    public function jsonSales()
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
            $sub_array[] = '<a class="btn btn-primary pull-right btn-xs" id="salesModal" data-toggle="modal" data-target="#modal-lg"
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
                                      ><i class="fa fa-eye"></i> View Data</a>
                            <a href="'.base_url().'index.php/control_admin/edit_sales/'.$row->id.'" class="btn btn-warning pull-right btn-xs" style="padding-left: 10px; padding-right: 10px;" role="button"><i class="fas fa-edit"></i> <b>Edit</b></a>
                            <a href="#" class="btn btn-danger pull-right btn-xs delete-record" data-toggle="modal" data-target="#DeleteModal" data-id="'.$row->id.'"><i class="fa fa-trash"></i> Hapus</a>'; 
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

    function jsonUnitAutocomplete()
    {
        if (isset($_GET['term'])) {
            $result = $this->m_admin->getUnit_all_data($_GET['term']);
            if (count($result) > 0) {
                foreach ($result as $row)
                $data[] = array(
                    'nopol' => $row->nopol,
                    'type' => $row->type,
                    'kategori' => $row->kategori,
                    'seat' => $row->seat,
                    'value' => $row->nopol,
                    'label' => $row->nopol
                );
                
                echo json_encode($data);
            }
        }
        
    }

    /*public function jsonUnitOnChange()
    {
        $postData = $this->input->post('postData');
        $data = $this->m_admin->getUnit($postData);
        echo json_encode($data);
    }*/

    public function add_sales()
    {
        $data = $this->m_admin->getSelect_data();
        $this->load->view('v_add_sales', $data);
    }

    public function getAddSales()
    {
        $rules = $this->m_admin->validationForm();
        $this->form_validation->set_rules($rules);

        if ($this->form_validation->run() == FALSE) {
            return $this->add_sales();
        }

        $postData = $this->input->post();

        $data1 = array(
            'upload_1' => $postData['upl-1'],                   'upload_2' => $postData['upl-2'],
            'upload_3' => $postData['upl-3'],                   'upload_4' => $postData['upl-4'],
            'upload_5' => $postData['upl-5'],                   'upload_6' => $postData['upl-6'],
            'upload_7' => $postData['upl-7'],                   'upload_8' => $postData['upl-8'],
            'upload_9' => $postData['upl-9'],                   'upload_10' => $postData['upl-10'],
        );
        $id_upload = $this->m_admin->insert_data('sales_upload', $data1);

        $data2 = array(
            'pay_1' => $postData['py1'],            'pay_tgl_1'=> $postData['tgl_py1'],
            'pay_nom_1' => $postData['nom_py1'],         'pay_2' => $postData['py2'],
            'pay_tgl_2' => $postData['tgl_py2'],         'pay_nom_2' => $postData['nom_py2'],
            'pay_3' => $postData['py3'],            'pay_tgl_3' => $postData['tgl_py3'],
            'pay_nom_3' => $postData['nom_py3'],         'pay_4' => $postData['py4'],
            'pay_tgl_4' => $postData['tgl_py4'],         'pay_nom_4' => $postData['nom_py4'],
            'pay_5' => $postData['py5'],            'pay_tgl_5' => $postData['tgl_py5'],
            'pay_nom_5' => $postData['nom_py5'],             
        );

        $id_payment = $this->m_admin->insert_data('sales_payment', $data2);

        $data = array(
            'no_reservasi' => $postData['rsv'],                 'booking_order' => $postData['bko'],
            'pic_sales' => $postData['pic'],                    'profit_center' => $postData['profit'],
            'nama_cmd' => $postData['nama_cmd'],                'nama_instansi' => $postData['ins'],
            'order_type' => $postData['ord'],                   'jenis_bayar' => $postData['jpm'],
            'invoice' => $postData['invo'],                     'spesifikasi' => $postData['sp'],
            'type_customer' => $postData['tycus'],              'source_data' => $postData['sd'],
            'group' => $postData['grp'],                        'cmd' => $postData['cmd'],
            'pic_customer' => $postData['pcus'],                'pic_contact' => $postData['picc'],
            'type_unit' => $postData['tyunit'],                 'kategori' => $postData['kg'],
            'nopol' => $postData['npl'],                        'seat' => $postData['seat'],
            'driver' => $postData['drv'],                       'maksud_sewa' => $postData['sw'],
            'rute' => $postData['rt'],                          'provinsi' => $postData['pr'],
            'alamat' => $postData['address'],
            'order_start' => date("Y-m-d", strtotime($postData['tgl_mulai_p'])),
            'order_end' => date("Y-m-d", strtotime($postData['tgl_akhir_p'])),
            'order_day' => $postData['wkts'],                   'toll_parkir' => $postData['toll'],
            'revenue_unit' => $postData['rvnu'],                'addcharge' => $postData['addc'],
            'addcharge_ket' => $postData['ket_addc'],           'revenue_total' => $postData['total_rvnu'],
            'price_list' => $postData['prcl'],                  'diskon' => $postData['dsk'],
            'id_payment' => $id_payment,                        'total_payment' => $postData['total_py'],
            'pph_23' => $postData['pph'],                       'sel_payment' => $postData['slpy'],
            'ket_payment' => $postData['note'],                 'id_upload' => $id_upload
        );

        $this->m_admin->insert_data('sales', $data);
        redirect('control_admin/view_sales');
    }

    public function check_default($data)
    {
        if ($data == "") {
            $this->form_validation->set_message('check_default', 'You need to select something other than the default');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function delete_sales()
    {
        $id = $this->input->post('delete_id', TRUE);
        $this->m_admin->delete_data($id);
        redirect('control_admin/view_sales');
    }

    public function edit_sales($id)
    {
        $where = array('id' => $id);
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

        $where = array('id' => $id);

        $this->m_admin->update_data($where, $data, 'sales');
        redirect('control_admin/view_sales');
    }
    
    public function add_sales_more()
    {
        $this->load->view("v_add_bookingorder");
    }

}

