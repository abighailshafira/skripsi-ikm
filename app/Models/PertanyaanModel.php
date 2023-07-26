<?php

namespace App\Models;

use CodeIgniter\Model;

class PertanyaanModel extends Model
{
  protected $table      = 'pertanyaan';
  protected $primaryKey = 'id_pertanyaan';

  protected $allowedFields = ['id_unsur','id_indikator','id_pertanyaan','pertanyaan']; 
//   protected $returnType = 'array';

  public function getPertanyaan()
  {
    $sql = 'SELECT * 
    FROM pertanyaan a, ms_unsur b, ms_indikator c
    WHERE a.id_unsur=b.id_unsur AND a.id_indikator=c.id_indikator
    ORDER BY c.id_indikator';
    $query = $this->db->query($sql);

    // print_r($sql);

    return($query->getResultArray());
  }

  // Get pertanyaan (form pertanyaan user)
  public function getPertanyaan2($option=[])
  {
    $sql = 'SELECT * 
    FROM pertanyaan a, ms_unsur b, ms_indikator c
    WHERE a.id_unsur=b.id_unsur AND a.id_indikator=c.id_indikator AND a.id_unsur="'.$option["id_unsur"].'" AND a.id_pertanyaan="'.$option["id_pertanyaan"].'"
    ORDER BY c.id_indikator';
    $query = $this->db->query($sql);

    // print_r($sql);

    return($query->getResultArray());
  }

  public function getPertanyaanById($id)
  {
      return $this->find($id);
  }

  public function createPertanyaan($data)
  {
      return $this->insert($data);
  }

  public function updatePertanyaan($id, $data)
  {
      return $this->update($id, $data);
  }

  public function deletePertanyaan($id)
  {
      return $this->delete($id);
  }
  }
?>