<?php
defined('BASEPATH') or exit('No direct script access allowed');

class control_admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_admin');
        $this->load->model('m_auth');
    }

    public function dashboard()
    {
        if (empty($this->session->userdata('logged_in'))) {
            echo $this->session->set_flashdata(
                'msg',
                '<div>
                     <div class="text-center" style="border: 1px solid red;"><p class="m-2">Silahkan login terlebih dahulu !</p></div>
                </div><br>'
            );
            redirect('control_admin/view_login');
        }
        $data = $this->m_admin->getTables()->result();
        $post['data'] = json_encode($data);
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('v_index', $post);
        $this->load->view('template/footer');
    }

    public function view_login()
    {
        $this->load->view('v_login');
    }

    public function AuthValidation()
    {
        $this->form_validation->set_rules('post-user', 'Username', 'trim|required');
        $this->form_validation->set_rules('post-pass', 'Password', 'trim|required');

        if ($this->form_validation->run() == TRUE) {
            $username = $this->input->post('post-user', TRUE);
            $password = $this->input->post('post-pass', TRUE);
            $validate = $this->m_auth->loginUser($username, $password);
            if ($validate->num_rows() > 0) {
                $data = $validate->row_array();
                $username = $data['username'];
                $password = $data['password'];
                $level = $data['level'];
                $name = $data['name'];
                $session_data = array(
                    'username' => $username,
                    'password' => $password,
                    'level'    => $level,
                    'name'     => $name,
                    'logged_in' => TRUE
                );
                $this->session->set_userdata($session_data);
                redirect(base_url('index.php/control_admin/dashboard'));
            } else {
                echo $this->session->set_flashdata(
                    'msg',
                    '<div>
			 	        <div class="text-center" style="border: 1px solid red;"><p class="m-2">Username dan Password salah !</p></div>
			        </div><br>'
                );
                redirect('control_admin/view_login');
            }
        } else {
            return $this->view_login();
        }
    }

    public function view_logout()
    {
        $this->session->sess_destroy();
        redirect('control_admin/view_login');
    }

    public function view_billing()
    {
        if (empty($this->session->userdata('logged_in'))) {
            echo $this->session->set_flashdata(
                'msg',
                '<div>
                     <div class="text-center" style="border: 1px solid red;"><p class="m-2">Silahkan login terlebih dahulu !</p></div>
                </div><br>'
            );
            redirect('control_admin/view_login');
        }
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('v_billing');
        $this->load->view('template/footer');
    }

    public function view_laporan()
    {
        if (empty($this->session->userdata('logged_in'))) {
            echo $this->session->set_flashdata(
                'msg',
                '<div>
                     <div class="text-center" style="border: 1px solid red;"><p class="m-2">Silahkan login terlebih dahulu !</p></div>
                </div><br>'
            );
            redirect('control_admin/view_login');
        }
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
            $sub_array[] = $row->profit_center;
            $sub_array[] = $row->pic_sales;
            $sub_array[] = $row->no_reservasi;
            $sub_array[] = $row->nama_cmd;
            $sub_array[] = $row->nama_instansi;
            $sub_array[] = $row->booking_order;
            $sub_array[] = $row->booking_order;
            $sub_array[] = $row->order_type;
            $sub_array[] = $row->jenis_bayar;
            $sub_array[] = $row->invoice;
            $sub_array[] = $row->spesifikasi;
            $sub_array[] = $row->type_customer;
            $sub_array[] = $row->source_data;
            $sub_array[] = $row->group;
            $sub_array[] = $row->cmd;
            $sub_array[] = $row->pic_customer;
            $sub_array[] = $row->pic_contact;
            $sub_array[] = $row->type_unit;
            $sub_array[] = $row->kategori;
            $sub_array[] = $row->nopol;
            $sub_array[] = $row->seat;
            $sub_array[] = $row->driver;
            $sub_array[] = $row->maksud_sewa;
            $sub_array[] = $row->rute;
            $sub_array[] = $row->provinsi;
            $sub_array[] = $row->alamat;
            $sub_array[] = $row->order_start;
            $sub_array[] = $row->order_end;
            $sub_array[] = $row->order_day;
            $sub_array[] = $row->toll_parkir;
            $sub_array[] = $row->revenue_unit;
            $sub_array[] = $row->addcharge;
            $sub_array[] = $row->addcharge_ket;
            $sub_array[] = $row->revenue_total;
            $sub_array[] = $row->price_list;
            $sub_array[] = $row->diskon;
            $sub_array[] = $row->pay_1;
            $sub_array[] = $row->pay_tgl_1;
            $sub_array[] = $row->pay_nom_1;
            $sub_array[] = $row->pay_2;
            $sub_array[] = $row->pay_tgl_2;
            $sub_array[] = $row->pay_nom_2;
            $sub_array[] = $row->pay_3;
            $sub_array[] = $row->pay_tgl_3;
            $sub_array[] = $row->pay_nom_3;
            $sub_array[] = $row->pay_4;
            $sub_array[] = $row->pay_tgl_4;
            $sub_array[] = $row->pay_nom_4;
            $sub_array[] = $row->pay_5;
            $sub_array[] = $row->pay_tgl_5;
            $sub_array[] = $row->pay_nom_5;
            $sub_array[] = $row->total_payment;
            $sub_array[] = $row->pph_23;
            $sub_array[] = $row->sel_payment;
            $sub_array[] = $row->ket_payment;
            $sub_array[] = $row->upload_1;
            $sub_array[] = $row->upload_2;
            $sub_array[] = $row->upload_3;
            $sub_array[] = $row->upload_4;
            $sub_array[] = $row->upload_5;
            $sub_array[] = $row->upload_6;
            $sub_array[] = $row->upload_7;
            $sub_array[] = $row->upload_8;
            $sub_array[] = $row->upload_9;
            $sub_array[] = $row->upload_10;
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

    public function printData()
    {
        $tgl_awal = $this->input->get('tgl_awal');
        $tgl_akhir = $this->input->get('tgl_akhir');

        $sales = $this->m_admin->useDatatables($tgl_awal, $tgl_akhir);
    }


    public function view_register()
    {
        $this->load->view('v_register');
    }

    public function view_pengaturan()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('v_pengaturan');
        $this->load->view('template/footer');
    }
}
