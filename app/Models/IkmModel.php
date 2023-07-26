<?php
//Latihan Query
namespace App\Models;

use CodeIgniter\Model;

class IkmModel extends Model
{
  protected $table      = array(
                            1=>'ms_bidang',
                            2=>'ms_lembaga',
                            3=>'ms_layanan',
                            4=>'ms_responden',
                            5=>'ms_unsur',
                            6=>'ms_indikator',
                            // 7=>'view_rekap',
                            8=>'respon',
                            9=>'view_unsur_nilai',
                            10=>'pertanyaan',
                          );               
  
  /* Dashboard */
  // Nilai IKM Perunsur
  public function hitungNilaiIKM() {
    // $sql = 'SELECT a.id_unsur, b.unsur, SUM(a.jawaban) AS jumlah_bobot, FORMAT(AVG(a.jawaban),2) AS nrr, FORMAT(AVG(a.jawaban)*(0.11),2) AS nrr_tetimbang, 
    // FORMAT(AVG(a.jawaban)*(0.11),2)*25 AS nilai_konversi 
    $sql = 'SELECT a.id_unsur, b.unsur, SUM(a.jawaban) AS jumlah_bobot, AVG(a.jawaban) AS nrr, AVG(a.jawaban)*(0.11) AS nrr_tetimbang, 
    AVG(a.jawaban)*(0.11)*25 AS nilai_konversi 
    FROM respon a, ms_unsur b 
    WHERE a.id_lembaga="0003" AND a.id_layanan="0001" AND a.id_unsur=b.id_unsur 
    GROUP BY a.id_unsur';
    $query = $this->db->query($sql);

    return($query->getResultArray());
  }

  // Total Layanan
  public function getLayanan() {
    $sql = 'SELECT COUNT(id_layanan) AS jumlah_layanan FROM ms_layanan';
    $query = $this->db->query($sql);

    return($query->getResultArray());
  }

  // Total Responden
  public function getResponden() {
    $sql = 'SELECT COUNT(id_responden) AS jumlah_responden FROM ms_responden';
    $query = $this->db->query($sql);

    return($query->getResultArray());
  }

  // get unsur 
  public function getUnsur(){
    $sql = 'SELECT DISTINCT b.unsur FROM pertanyaan a, ms_unsur b WHERE a.id_unsur=b.id_unsur;';
    $query = $this->db->query($sql);
    return($query->getResultArray());
  }

  // Kategori Nilai
  public function getKategoriNilai(){
    $sql = 'SELECT * FROM kategori_nilai';
    $query = $this->db->query($sql);

    return($query->getResultArray());
  }

  public function bobot_nilai(){
    // return $this->findAll();
  }
}


?>