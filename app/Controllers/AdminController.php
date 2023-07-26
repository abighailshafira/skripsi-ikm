<?php
namespace App\Controllers;
use App\Models\UnsurModel;
use App\Models\IndikatorModel;
use App\Models\LembagaModel;
use App\Models\LayananModel;
use App\Models\IkmModel;
use App\Models\PertanyaanModel;
use App\Models\PilihanJawabanModel;
use App\Models\ResponModel;

class AdminController extends BaseController
{
    protected $UnsurModel;
    protected $IndikatorModel;
    protected $LembagaModel;
    protected $LayananModel;
    protected $IkmModel;
    protected $PertanyaanModel;
    protected $PilihanJawabanModel;
    protected $ResponModel;

    public function __construct()
    {
        $this->UnsurModel = new UnsurModel();
        $this->IndikatorModel = new IndikatorModel();
        $this->LembagaModel = new LembagaModel();
        $this->LayananModel = new LayananModel();
        $this->IkmModel = new IkmModel();
        $this->PertanyaanModel = new PertanyaanModel();
        $this->PilihanJawabanModel = new PilihanJawabanModel();
        $this->ResponModel = new ResponModel();
    }

    // Dashboard atau Hasil Rekapitulasi
    public function index()
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
            // 'root' => 'assets/dist/',
            'respon' => $this->IkmModel->hitungNilaiIKM(), // nilai ikm perunsur
            'total_bobot' => 0,
            'total_nrr' => 0,
            'total_nrrtetimbang' => 0,
            'total_konversi' => 0,
            'jumlah_layanan' => $this->IkmModel->getLayanan(),
            'jumlah_responden' => $this->IkmModel->getResponden(),
            'desimal' => 2,
            'kategori_nilai' => $kategori,
        ];

        //  print_r($data);
        //  die();

        foreach($data["respon"] as $row){
            $data['total_bobot'] += $row["jumlah_bobot"];
            $data['total_nrr'] += $row["nrr"];
            $data['total_nrrtetimbang'] += $row["nrr_tetimbang"];
            $data['total_konversi'] += $row["nilai_konversi"];
        };
        return view('admin/dashboard', $data);
    }

    // Lembaga 
    public function lembaga()
    {
        $data = [
            'lembaga' => $this->LembagaModel->getLembaga(),
            'profil' => $this->LembagaModel->lembagaById(),//ganti
        ];

        return view('admin/lembaga', $data);
    }

    // public function insertLembaga()
    // {
    //     // Ambil gambar
    //     $fileLogo = $this->request->getFile('logo');

    //     // Generate random name 
    //     $namaLogo = $fileLogo->getRandomName();
        
    //     // Pindahkan gambar
    //     $fileLogo->move('assets/media/lembaga', $namaLogo);

    //     $data = [
    //         'id_bidang' => $this->request->getVar('bidang'),
    //         'lembaga' => $this->request->getVar('lembaga'),
    //         'logo' => $namaLogo,
    //         'alamat' => $this->request->getVar('alamat'),
    //         'pic' => $this->request->getVar('pic'),
    //         'kontak' => $this->request->getVar('kontak'),
    //         'email' => $this->request->getVar('email'),
    //     ];

    //     $this->LembagaModel->createLembaga($data);

    //     return redirect()->to('/lembaga');
    // }

    public function updateLembaga($id)
    {
        // Ambil gambar
        $fileLogo = $this->request->getFile('logo');

        // Cek gambar
        if($fileLogo->getError() == 4){ // Jika user tidak mengubah gambar
            $namaLogo = $this->request->getVar('logoLama');
        } else { // Jika user mengubah gambar
            // Generate random name 
            $namaLogo = $fileLogo->getRandomName();
            
            // Pindahkan gambar
            $fileLogo->move('assets/media/lembaga', $namaLogo);

            // Hapus gambar lama
            unlink('assets/media/lembaga/'.$this->request->getVar('logoLama'));
        }

        $data = [
            'id' => $id,
            'lembaga' => $this->request->getVar('lembaga'),
            'logo' => $namaLogo,
            'alamat' => $this->request->getVar('alamat'),
            'pic' => $this->request->getVar('pic'),
            'kontak' => $this->request->getVar('kontak'),
            'email' => $this->request->getVar('email'),
        ];

        $this->LembagaModel->updateLembaga($id, $data);

        return redirect()->to('/lembaga');
    }
    
    // Layanan
    public function getLayanan()
    {     
        $data = [
        // 'title' => 'Layanan',
        'layanan' => $this->LayananModel->getLayanan()
        ];

        return view('admin/layanan', $data);
    }

    public function insertLayanan()
    {
        $data = [
            'layanan' => $this->request->getVar('layanan'),
        ];

        $this->LayananModel->createLayanan($data);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/layanan');
    }

    public function updateLayanan($id)
    {
        $data = [
            'id' => $id,
            'layanan' => $this->request->getVar('layanan'),
        ];
 
        $this->LayananModel->updateLayanan($id, $data);

        // $this->LayananModel->createLayanan($id, $data); > bisa menggunakan method create

        session()->setFlashdata('pesan', 'Data berhasil diubah.');

        return redirect()->to('/layanan');
    }

    public function deleteLayanan($id) {
        $this->LayananModel->delete($id);

        session()->setFlashdata('pesan', 'Data berhasil dihapus.');

        return redirect()->to('/layanan');
    }

    // Unsur
    public function unsur()
    {
        $data = [
            'heading' => 'Unsur Survei',
            'unsur' => $this->UnsurModel->getUnsur()
        ];
    
        return view('admin/unsur', $data);
    }

    public function insertUnsur()
    {
        $data = [
            'id_unsur' => $this->request->getVar('kode'),
            'unsur' => $this->request->getVar('unsur'),
        ];

        $this->UnsurModel->createUnsur($data);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/unsur');
    }

    public function updateUnsur($id)
    {
        $data = [
            'id' => $id,
            'id_unsur' => $this->request->getVar('kode'),
            'unsur' => $this->request->getVar('unsur'),
        ];
    
        $this->UnsurModel->updateUnsur($id, $data);

        session()->setFlashdata('pesan', 'Data berhasil diubah.');

        return redirect()->to('/unsur');
    }

    public function deleteUnsur($id) {
        $this->UnsurModel->delete($id);

        session()->setFlashdata('pesan', 'Data berhasil dihapus.');

        return redirect()->to('/unsur');
    }

    //Indikator
    public function indikator()
    {
        $data = [
            'heading' => 'Indikator Unsur',
            'indikator' => $this->IndikatorModel->getIndikator(),
            'unsur' => $this->UnsurModel->getUnsur(),
        ];
    
        return view('admin/indikator', $data);
    }

    public function insertIndikator()
    {
        $data = [
            'heading' => 'Indikator',
            'id_unsur' => $this->request->getVar('unsur'),
            'id_indikator' => $this->request->getVar('kode'),
            'indikator' => $this->request->getVar('indikator'),
        ];

        $this->IndikatorModel->createIndikator($data);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/indikator');
    }

    public function updateIndikator($id)
    {
        $data = [
            'id' => $id,
            // 'id_unsur' => $this->request->getVar('unsur'),
            'id_indikator' => $this->request->getVar('kode'),
            'indikator' => $this->request->getVar('indikator'),
        ];
    
        $this->IndikatorModel->updateIndikator($id, $data);

        session()->setFlashdata('pesan', 'Data berhasil diubah.');

        return redirect()->to('/indikator');
    }

    public function deleteIndikator($id) {
        $this->IndikatorModel->delete($id);

        session()->setFlashdata('pesan', 'Data berhasil dihapus.');

        return redirect()->to('/indikator');
    }

    // Pertanyaan
    public function getPertanyaan()
    {     
        $data = [
            'heading' => 'Pertanyaan',
            'pertanyaan' => $this->PertanyaanModel->getPertanyaan(),
            'unsur' => $this->UnsurModel->getUnsur(),
            'indikator' => $this->IndikatorModel->getIndikator(),
        ];

        return view('admin/pertanyaan', $data);
    }

    public function insertPertanyaan()
    {
        $data = [
            'id_unsur' => $this->request->getVar('unsur'),
            'id_indikator' => $this->request->getVar('indikator'),
            'kode' => $this->request->getVar('kode'),
            'pertanyaan' => $this->request->getVar('pertanyaan'),
        ];

        $this->PertanyaanModel->createPertanyaan($data);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/pertanyaan');

        // dd($this->request->getVar());
    }

    public function updatePertanyaan($id)
    {
        $data = [
            'id' => $id,
            'id_unsur' => $this->request->getVar('unsur'),
            'id_indikator' => $this->request->getVar('indikator'),
            'kode' => $this->request->getVar('kode'),
            'pertanyaan' => $this->request->getVar('pertanyaan'),
        ];
    
        $this->PertanyaanModel->updatePertanyaan($id, $data);

        session()->setFlashdata('pesan', 'Data berhasil diubah.');
    
        return redirect()->to('/pertanyaan');
    }

    public function deletePertanyaan($id) {
        $this->PertanyaanModel->deletePertanyaan($id);

        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        
        return redirect()->to('/pertanyaan');
    }

    // Pilihan Jawaban
    public function pilihanJawaban()
    {
        $data = [
            'heading'=> 'Pilihan Jawaban',
            'pilihan_jawaban' => $this->PilihanJawabanModel->getPilihanJawaban()
        ];

        return view('admin/pilihan-jawaban', $data);
    }

    // Pilihan Jawaban
    public function updatePilihanJawaban($id)
    {
        $data = [
            'id' => $id,
            'bobot_nilai' => $this->request->getVar('bobot_nilai'),
            'skala_kualitas' => $this->request->getVar('skala_kualitas'),
        ];

        $this->PilihanJawabanModel->updatePilihanJawaban($id, $data);

        session()->setFlashdata('pesan', 'Data berhasil diubah.');
    
        return redirect()->to('/pilihan-jawaban');
    }

    // Respon
    public function respon()
    {
        $data = [
            'heading' => 'Respon',
            'responden' => $this->ResponModel->getResponden(),
        ];

        return view('admin/respon', $data);
    }

    // Setting Kuesioner
    public function kuesioner()
    {
        $data = [
            'layanan' => $this->LayananModel->getLayanan(),
            'setting' => [
                1 => ['login'=>0,'user'=>0,'status'=>0],
                2 => ['login'=>0,'user'=>1,'status'=>1],
                3 => ['login'=>1,'user'=>1,'status'=>0],
            ],
        ];

        return view('admin/kuesioner', $data);
    }

    // Admin Profile
    public function profil()
    {
        return view('admin/profil');
    }

    public function updateProfil($id)
    {
        // dd($id);
        $db      = \Config\Database::connect();
        $builder = $db->table('users'); 
        
        // Ambil gambar
        $fileGambar = $this->request->getFile('profile_picture');

        // Cek gambar
        if($fileGambar->getError() == 4){ // Jika user tidak mengubah gambar
            $namaGambar = $this->request->getVar('gambarLama');
        } else { // Jika user mengubah gambar
            // if($komik['gambar'] == !'default.jpg') { // jika gambar default
            //     // hapus data hanya pada tabel 
            // }
    
            // Generate random name 
            $namaGambar = $fileGambar->getRandomName();
            
            // Pindahkan gambar
            $fileGambar->move('assets/media/avatar', $namaGambar);

            // Hapus gambar lama
            unlink('assets/media/avatar/'.$this->request->getVar('gambarLama'));
        }

        $data = [
            'username' => strip_tags($this->request->getVar('username')),
            'email' => strip_tags($this->request->getVar('email')),
            'profile_picture' => $namaGambar,
            // 'bidang' => strip_tags($this->request->getVar('bidang')),
        ];
        
        $builder->where('id', $id);
        $builder->update($data);

        return redirect()->to('/profil');
    }

    // Kelola Akun Admin
    public function admin()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('users');

        $builder->select('users.id as userid, username, email, name, created_at');
        $builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $query = $builder->get();

        $data = [
            'heading' => 'Admin',
            'users' => $query->getResultArray(), 
        ];

        return view('admin/admin', $data);
    }

    public function updateAdmin($id)
    {
        // dd($id);
        $db      = \Config\Database::connect();
        $builder = $db->table('users');

        $data = [
            'username' => strip_tags($this->request->getVar('username')),
            'email' => strip_tags($this->request->getVar('email')),
        ];

        $builder->where('id',$id);
        $builder->update($data);

        session()->setFlashdata('pesan', 'Data berhasil diubah.');

        return redirect()->to('/admin');
    }

    public function deleteAdmin($id)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('users');

        $builder->delete(['id' => $id]);

        session()->setFlashdata('pesan', 'Data berhasil dihapus.');

        return redirect()->to('/admin');
    }
}
