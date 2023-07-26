<?php
namespace App\Controllers;
use App\Models\PertanyaanModel;
use App\Models\IkmModel;
use App\Models\LayananModel;
use App\Models\LembagaModel;
use App\Models\ResponModel;
// use App\Libraries\Igen_lib_ui;

class UserController extends BaseController
{
   protected $PertanyaanModel;
   protected $IkmModel;
   protected $ResponModel;
   protected $LayananModel;
   protected $LembagaModel;

   public function __construct()
   {
        $this->PertanyaanModel = new PertanyaanModel();
        $this->ResponModel = new ResponModel();
        $this->IkmModel = new IkmModel();
        $this->LayananModel = new LayananModel();
        $this->LembagaModel = new LembagaModel();
        // $x = new Igen_lib_ui(); // create an instance of Library
   }

    // Home Page
    public function index()
    {
        $data = [
            'root' => 'assets/dist/',
        ];

        return view('user/index', $data);
    }

    // Form Survei Page
    public function survei()
    {   
        $id_unsur = 'U7';
        $data = [
            'lembaga' => $this->LembagaModel->getLembaga(),
            'layanan' => $this->LayananModel->getLayanan(),
            'unsur' => $this->IkmModel->getUnsur(),
            'id_unsur' => $id_unsur,
            // 'pertanyaan' => $this->PertanyaanModel->getPertanyaan(),
            'pertanyaan' => $this->PertanyaanModel->getPertanyaan(array('id_unsur' => $id_unsur)),
            // 'indikator' => array(2,1,1,2,1,3,4,2,1),
            // 'total_pertanyaan' => $this->PertanyaanModel->getTotalPertanyaan(),
            // 'button' => $x->button($a=null),
        ];

        // print_r($data["pertanyaan"]);
        // die();
        
        return view('user/form-survei', $data);
    }

    //identitasResponden
    public function responden() {
        $data = [
            'heading' => 'Form Survei Kepuasan Masyarakat (SKM)',
        ];
        return view('user/identitas-responden', $data);
    }

    public function insertResponden() {
        $data_responden = [
            'nama' => $this->request->getVar('nama'),
            'usia' => $this->request->getVar('usia'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'pendidikan' => $this->request->getVar('pendidikan'),
            'pekerjaan' => $this->request->getVar('pekerjaan'),
        ];

        $this->ResponModel->insertResponden($data_responden);
        
        return redirect()->to('/kuesioner-survei');
    }

    //kuesionerSurvei
    public function pertanyaan() {
        // $jml_pertanyaan = 3;//$_GET[''];
        // print_r($_GET('jml_pertanyaan'));

        $id_unsur = 'U7';
        $id_pertanyaan = 11;
        $text = 'Hasil Isian Survei';
        $data = [
            'heading' => 'Form Survei Kepuasan Masyarakat (SKM)',
            'id_unsur' => $id_unsur,
            'unsur' => $this->IkmModel->getUnsur(),
            'pertanyaan' => $this->PertanyaanModel->getPertanyaan2(array('id_unsur' => $id_unsur, 'id_pertanyaan' => $id_pertanyaan)),
            'indikator' => array(2,1,1,2,1,3,4,2,1),

        ];
        return view('user/form-pertanyaan', $data);
    }

    // Insert Respon 
    public function insertRespon()
    {
        $data_responden = [
            'nama' => $this->request->getVar('nama'),
            'usia' => $this->request->getVar('usia'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'pendidikan' => $this->request->getVar('pendidikan'),
            'pekerjaan' => $this->request->getVar('pekerjaan'),
        ];
        
        $data_respon = [
            // 'id_responden' => $id_responden,//add last insert id to ms_responden table 
            'waktu' => $this->request->getVar('waktu'),
            'jawaban' => $this->request->getVar('jawaban'),
        ];

        $this->ResponModel->insertRespon($data_responden, $data_respon);

        // $insert = $this->ResponModel->insertRespon('ms_responden',$data_responden);
        // $id_responden = $this->$insert->getInsertID();
        // $id_responden = $this->ResponModel->insertRespon('ms_responden',$data1);
        // $insert_respon = $this->ResponModel->insertRespon('respon',$data_responden);  
      
        return redirect()->to('/');
    }

    public function rekapitulasi()
    {
        $kategori = [];
        foreach($this->IkmModel->getKategoriNilai() as $row){
        $kd=$row['kode'];
        $kategori[$kd]['min']=$row['interval_konversi_min'];
        $kategori[$kd]['max']=$row['interval_konversi_max'];
        $kategori[$kd]['mutu']=$row['mutu_pelayanan'];
        $kategori[$kd]['kinerja']=$row['kinerja_pelayanan'];
        }

        $data = [
            'lembaga' => $this->LembagaModel->getLembaga(),
            'layanan' => $this->LayananModel->getLayanan(),
            'respon' => $this->IkmModel->respon(),
            'total_bobot' => 0,
            'total_nrr' => 0,
            'total_nrrtetimbang' => 0,
            'total_konversi' => 0,
            'desimal' => 2,
            'kategori_nilai' => $kategori,
        ];

        foreach($data["respon"] as $row){
            $data['total_bobot'] += $row["jumlah_bobot"];
            $data['total_nrr'] += $row["nrr"];
            $data['total_nrrtetimbang'] += $row["nrr_tetimbang"];
            $data['total_konversi'] += $row["nilai_konversi"];
        };
        
        return view('user/rekapitulasi-survei', $data);
    }
    
    public function kontak()
    {
        $data = [
            'root' => 'assets/dist/',
         ];
        return view('user/kontak', $data);
    }

    public function faq()
    {
        return view('user/faq');
    }

    public function error()
    {
        return view('error-page');
    }
}
