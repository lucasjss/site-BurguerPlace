<?php

namespace App\Models;

use CodeIgniter\Model;

class IngredientesModel extends Model
{
    protected $table = 'ingredientes';
    protected $primaryKey = 'id_ing';
    protected $allowedFields = ['nome', 'quantidade'];

    public function criarIngrediente($data)
    {
        $this->insert($data);
    }
}