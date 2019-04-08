<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require FCPATH . '/vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
class Data extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('query');
		$this->load->helper('url');
	}

	public function getdata(){
		
		$project = $this->query->get();
		$data = array();

		foreach($project->result() as $res) {
			$data[] = array(
				$res->kode_buku,
				'<a href="'.base_url()."home/project/".$res->id.'">'.$res->nama_proyek.'</a><br><i>'.$res->alamat_proyek.'</i>',
				'<center>'.$res->tahun.'</center>',
				'<center>'.$res->lokasi.'</center>',
				$res->pemberi_kerja,
				$res->lingkup_pekerjaan,
			);
		}

		$output = array(
			"data" => $data
		);
		echo json_encode($output);
	}

	public function getdatafile($id){
		
		$file = $this->query->getfile($id);
		$data = array();

		foreach($file->result() as $res) {
			$data[] = array(
				'<b>'.$res->jenis_file.'</b>',
				'<a href="'.base_url()."data/".$res->nama_file.'">'.$res->nama_file.'</a>',
				'<i>'.$res->ket.'</i>',
				'<center><a type="button" id="delete" no="'.$res->no.'" file="'.$res->nama_file.'" ><i class="material-icons" style="color: red" >delete</i></a></center>',
			);
		}

		$output = array(
			"data" => $data
		);
		echo json_encode($output);
	}

	public function delete()	{
		$no = $this->input->post('nomor');
		$file = $this->input->post('namafile');

		$where = array(
			'no' => $no,
			'nama_file' => $file
		);

		$path =FCPATH."data/".$file;
		unlink($path);
		$result = $this->query->delete($where,'file-proyek');
		echo json_encode($path);
	}

	public function batchdelete($id){
		$where = array(
			'id' => $id
		);
		$user = $this->query->getfilewhere($where)->result();
		foreach ($user as $file) {
			unlink(FCPATH."data/".$file->nama_file);
		}
		$this->query->delete($where,'file-proyek');
		$this->query->delete($where,'pengalaman-proyek');
		echo json_encode('success');
	}

	public function add(){
		$id = uniqid();
		$nama = $this->input->post('nama');
		$alamatproyek = $this->input->post('alamatproyek');
		$kode = $this->input->post('kode');
		$tahun = $this->input->post('tahun');
		$jenis = $this->input->post('jenis');
		$lokasi = $this->input->post('lokasi');
		$volume = $this->input->post('volume');
		$pt = $this->input->post('pt');
		$alamatpt = $this->input->post('alamatpt');
		$no = $this->input->post('no');
		$spk = $this->input->post('spk');
		$status = $this->input->post('status');
		$nonppn = $this->input->post('nonppn');
		$final = $this->input->post('final');
		$tglkontrak = date("Y-m-d", strtotime($this->input->post('tglkontrak')));
		$mulai = date("Y-m-d", strtotime($this->input->post('mulai')));
		$selesai = date("Y-m-d", strtotime($this->input->post('selesai')));
		$pj = $this->input->post('pj');
		$konsultan = $this->input->post('konsultan');
		$ket = $this->input->post('ket');

		$isilingkup = $this->input->post('lingkupkerja');
		$lingkup = implode(", ",$isilingkup);

		$data = array(
			'id' => $id,
			'nama_proyek' => $nama,
			'alamat_proyek' => $alamatproyek,
			'kode_buku' => $kode,
			'tahun' => $tahun,
			'jenis_pekerjaan' => $jenis,
			'lokasi' => $lokasi,
			'lingkup_pekerjaan' => $lingkup,
			'volume_pekerjaan' => $volume,
			'pemberi_kerja' => $pt,
			'alamat_pemberi_kerja' => $alamatpt,
			'no_kontrak' => $no,
			'tanggal_kontrak' => $tglkontrak,
			'nilai_kontrak' => $spk,
			'nilai_kontrak_nonppn' => $nonppn,
			'nilai_final' => $final,
			'status' => $status,
			'mulai' => $mulai,
			'selesai' => $selesai,
			'konsultan' => $konsultan,
			'penanggung_jawab' => $pj,
			'keterangan' => $ket
		);

		$result = $this->query->add($data,'pengalaman-proyek');
		echo json_encode($result);
	}

	public function update($id)	{
		$nama = $this->input->post('nama');
		$alamatproyek = $this->input->post('alamatproyek');
		$kode = $this->input->post('kode');
		$tahun = $this->input->post('tahun');
		$jenis = $this->input->post('jenis');
		$lokasi = $this->input->post('lokasi');
		$volume = $this->input->post('volume');
		$pt = $this->input->post('pt');
		$alamatpt = $this->input->post('alamatpt');
		$no = $this->input->post('no');
		$spk = $this->input->post('spk');
		$status = $this->input->post('status');
		$nonppn = $this->input->post('nonppn');
		$final = $this->input->post('final');
		$tglkontrak = date("Y-m-d", strtotime($this->input->post('tglkontrak')));
		$mulai = date("Y-m-d", strtotime($this->input->post('mulai')));
		$selesai = date("Y-m-d", strtotime($this->input->post('selesai')));
		$pj = $this->input->post('pj');
		$konsultan = $this->input->post('konsultan');
		$ket = $this->input->post('ket');

		$isilingkup = $this->input->post('lingkupkerja');
		$lingkup = implode(", ",$isilingkup);

		$where = array(
			'id' => $id
		);

		$data = array(
			'nama_proyek' => $nama,
			'alamat_proyek' => $alamatproyek,
			'kode_buku' => $kode,
			'tahun' => $tahun,
			'jenis_pekerjaan' => $jenis,
			'lokasi' => $lokasi,
			'lingkup_pekerjaan' => $lingkup,
			'volume_pekerjaan' => $volume,
			'pemberi_kerja' => $pt,
			'alamat_pemberi_kerja' => $alamatpt,
			'no_kontrak' => $no,
			'tanggal_kontrak' => $tglkontrak,
			'nilai_kontrak' => $spk,
			'nilai_kontrak_nonppn' => $nonppn,
			'nilai_final' => $final,
			'status' => $status,
			'mulai' => $mulai,
			'selesai' => $selesai,
			'konsultan' => $konsultan,
			'penanggung_jawab' => $pj,
			'keterangan' => $ket
		);

		$result = $this->query->update($where,$data,'pengalaman-proyek');
		echo json_encode($result);
	}

	public function upload($id)	{
		$config['upload_path']="./data";
		$config['allowed_types']='pdf|doc|docx|gif|jpg|png';
		$config['encrypt_name'] = FALSE;

		$this->load->library('upload',$config);

		if($this->upload->do_upload("datafile")){
			$data = array('upload_data' => $this->upload->data());

			$file= $this->input->post('file');
			$ket= $this->input->post('keterangan');
			$datafile= $data['upload_data']['file_name'];

			$data = array(
				'id' => $id,
				'jenis_file' => $file,
				'nama_file' => $datafile,
				'ket' => $ket
			);
			$result = $this->query->add($data,'file-proyek');
			echo json_encode('success');
		}

		else{
			echo json_encode('failed');
		}

	}

	public function download(){
		$spreadsheet = new Spreadsheet();
		$sheet = $spreadsheet->getActiveSheet();

		$spreadsheet->getProperties()->setCreator('mana')
		->setLastModifiedBy('mana')
		->setTitle('Pengalaman proyek')
		->setSubject('Pengalaman proyek NRC')
		->setDescription('export data ke excel');

		foreach(range('A', 'Z') as $columnID) {
			$spreadsheet->getActiveSheet()->getColumnDimension($columnID)->setAutoSize(true);
		}

		$sheet->setCellValue('A1', 'nama_proyek');
		$sheet->setCellValue('B1', 'alamat_proyek');
		$sheet->setCellValue('C1', 'kode_buku');
		$sheet->setCellValue('D1', 'tahun');
		$sheet->setCellValue('E1', 'jenis_pekerjaan');
		$sheet->setCellValue('F1', 'lokasi');
		$sheet->setCellValue('G1', 'lingkup_pekerjaan');
		$sheet->setCellValue('H1', 'volume_pekerjaan');
		$sheet->setCellValue('I1', 'pemberi_kerja');
		$sheet->setCellValue('J1', 'alamat_pemberi_kerja');
		$sheet->setCellValue('K1', 'no_kontrak');
		$sheet->setCellValue('L1', 'tanggal_kontrak');
		$sheet->setCellValue('M1', 'nilai_kontrak');
		$sheet->setCellValue('N1', 'nilai_kontrak_nonppn');
		$sheet->setCellValue('O1', 'nilai_final');
		$sheet->setCellValue('P1', 'status');
		$sheet->setCellValue('Q1', 'mulai');
		$sheet->setCellValue('R1', 'selesai');
		$sheet->setCellValue('S1', 'konsultan');
		$sheet->setCellValue('T1', 'penanggung_jawab');
		$sheet->setCellValue('U1', 'keterangan');

		$getdata = $this->query->get()->result();

		$x = 2;
		foreach($getdata as $get){
			$sheet->setCellValue('A'.$x, $get->nama_proyek);
			$sheet->setCellValue('B'.$x, $get->alamat_proyek);
			$sheet->setCellValue('C'.$x, $get->kode_buku);
			$sheet->setCellValue('D'.$x, $get->tahun);
			$sheet->setCellValue('E'.$x, $get->jenis);
			$sheet->setCellValue('F'.$x, $get->lokasi);
			$sheet->setCellValue('G'.$x, $get->lingkup_pekerjaan);
			$sheet->setCellValue('H'.$x, $get->volume_pekerjaan);
			$sheet->setCellValue('I'.$x, $get->pemberi_kerja);
			$sheet->setCellValue('J'.$x, $get->alamat_pemberi_kerja);
			$sheet->setCellValue('K'.$x, $get->no_kontrak);
			$sheet->setCellValue('L'.$x, $get->tanggal_kontrak);
			$sheet->setCellValue('M'.$x, $get->nilai_kontrak);
			$sheet->setCellValue('N'.$x, $get->nilai_kontrak_nonppn);
			$sheet->setCellValue('O'.$x, $get->nilai_final);
			$sheet->setCellValue('P'.$x, $get->status);
			$sheet->setCellValue('Q'.$x, $get->mulai);
			$sheet->setCellValue('R'.$x, $get->selesai);
			$sheet->setCellValue('S'.$x, $get->konsultan);
			$sheet->setCellValue('T'.$x, $get->penanggung_jawab);
			$sheet->setCellValue('U'.$x, $get->keterangan);
			$x++;
		}

		$writer = new Xlsx($spreadsheet);
		// $date = date("Ymdhi");
		$filename = 'data.xlsx';
		$writer->save('./data/'.$filename);
		redirect(base_url()."data/".$filename); 
	}

}