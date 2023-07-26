<?php

namespace App\Models;

use CodeIgniter\Model;

class PilihanJawabanModel extends Model
{
    protected $table      = 'pilihan_jawaban';
    protected $primaryKey = 'kode';
    protected $allowedFields = ['bobot_nilai','skala_kualitas'];

    public function getPilihanJawaban()
    {
        return $this->findAll();
    }

    public function updatePilihanJawaban($id, $data) {
      return $this->update($id, $data);
    }
  }
?>