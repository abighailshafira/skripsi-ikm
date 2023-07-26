<?php

namespace App\Models;

use CodeIgniter\Model;

class UnsurModel extends Model
{
    protected $table      = 'ms_unsur';
    protected $primaryKey = 'id_unsur';

    protected $allowedFields = ['id_unsur','unsur']; 

    public function getUnsur()
    {
        return $this->findAll();
    }

    public function getUnsurById($id)
    {
        return $this->find($id);
    }

    public function createUnsur($data)
    {
        return $this->insert($data);
    }

    public function updateUnsur($id, $data)
    {
        return $this->update($id, $data);
    }
  }
?>