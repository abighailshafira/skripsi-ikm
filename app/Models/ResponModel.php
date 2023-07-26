<?php

namespace App\Models;

use CodeIgniter\Model;

class ResponModel extends Model
{
  protected $table      = 'ms_responden';
  protected $primaryKey = 'id_responden';

  protected $allowedFields = ['lembaga','layanan','waktu','nama','usia','jenis_kelamin','pendidikan','pekerjaan','jawaban']; 

  public function insertRespon($data_responden,$data_respon)
  {
      $this->db->table('ms_responden')->insert($data_responden);
      $data_respon['id_responden'] = $this->db->insertID(); //last id
      return $this->db->table('respon')->insert($data_responden);

      // $sql = 'INSERT INTO ms_responden (id_responden,nama,usia,jenis_kelamin,pendidikan,pekerjaan)
      // VALUES ("100",'."John Doe".', "", "L", "","")';
      // $sql2 = 'INSERT INTO respon (id_responden, id_unsur,id_indikator,id_lembaga,id_layanan,jawaban,waktu,catatan)
      // VALUES (id_responden,"","","","","","","")';
     
      // $query = $this->db->query($sql,$sql2);

      // return($query->getResultArray());
  }

  public function insertResponden($data_responden)
  {
    return $this->insert($data_responden);
  }

  //getRespon
  public function getResponden(){
    $sql = 'SELECT * FROM ms_responden a ORDER BY a.id_responden';
    $query = $this->db->query($sql);

    return($query->getResultArray());
  }

  }
?>