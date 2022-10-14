<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require FCPATH.'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class control_katbus extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('m_katbus');
        $this->load->library('session');
    }

    function view_katbus(){
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
        $this->load->view('v_datakategori_bus');
		$this->load->view('template/footer');
    }

    function jsonBus(){
        $fetch_data = $this->m_katbus->useDatatables();  
        $data = array();
        $no = $_POST['start'];  
        foreach($fetch_data as $row){
            $no++;
            $sub_array = array();
            $sub_array[] = $no;                
            $sub_array[] = $row->nopol;  
            $sub_array[] = $row->type;
            $sub_array[] = $row->kategori;
            $sub_array[] = $row->seat;
            $data[] = $sub_array;
        }
        $output = array(  
            "draw" => intval($_POST["draw"]),  
            "recordsTotal" => $this->m_katbus->get_all_data(),  
            "recordsFiltered" => $this->m_katbus->get_filtered_data(),  
            "data" => $data
       );  
       echo json_encode($output);
    }

	public function spreadsheetFormat_download() //Create Xlsx file
	{
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="data-bus.xlsx"'); // Name of file
		$spreadsheet = new Spreadsheet();
		$sheet = $spreadsheet->getActiveSheet(); // Sheet for title
		$sheet->setCellValue('A1', 'No.'); // title No. in column A1
		$sheet->setCellValue('B1', 'Tipe Unit'); // title Tipe Unit in column C1
		$sheet->setCellValue('C1', 'Kategori'); // title Kategori in column D1
		$sheet->setCellValue('D1', 'Nomor Polisi'); // title Nomor Polisi in column B1
		$sheet->setCellValue('E1', 'Seat'); // title Seat in column E1

		$writer = new Xlsx($spreadsheet);
		$writer->save("php://output");
	}

    public function spreadsheetImport()
    {
        $upload_file = $_FILES['upload_file']['name'];
        $extension = pathinfo($upload_file, PATHINFO_EXTENSION);
        if ($extension == 'csv') {
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv(); // Detect format csv
        } elseif ($extension == 'xls') {
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls(); // Detect format xls
        } else {
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx(); // Detect format xlsx
        }
        $spreadsheet = $reader->load($_FILES['upload_file']['tmp_name']);
        $sheetdata = $spreadsheet->getActiveSheet()->toArray();
        $sheetcount = count($sheetdata);
        if ($sheetcount > 1) {
            $data = array();
            for ($i=1; $i < $sheetcount; $i++) { 
                $type = $sheetdata[$i][1]; // Every excel data start in Zero (0)
                $kategori = $sheetdata[$i][2];
                $nopol = $sheetdata[$i][3];
                $seat = $sheetdata[$i][4];
                $data[] = array( // pass data into database
                    'nopol' => $nopol, 
                    'type' => $type, 
                    'kategori' => $kategori, 
                    'seat' => $seat
                );
            }
            $insertdata = $this->m_katbus->add_batch($data);
            if ($insertdata) {
                $this->session->set_flashdata('message', '<div class="alert alert-success">Data Berhasil Ditambahkan</div>');
                redirect('control_katbus/view_katbus');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal untuk Menambahkan Data</div>');
                redirect('control_katbus/view_katbus');
            }
        }
    }

    public function remove_allData()
    {
        $this->m_katbus->delete_all_data();
        redirect('control_katbus/view_katbus');
    }
}   
?>