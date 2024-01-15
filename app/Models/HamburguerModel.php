<?php

namespace App\Models;

use CodeIgniter\Model;

class HamburguerModel extends Model
{
    protected $table = 'Hamburguers';
    protected $primaryKey = 'id_hamb';
    protected $allowedFields = ['nome', 'valor', 'ativo'];

    public function desativarHamburguer($id_hamb)
    {
        $this->update($id_hamb, ['ativo' => false]);
    }

    public function reativarHamburguer($id_hamb)
    {
        $this->update($id_hamb, ['ativo' => true]);
    }

    public function salvarHamburguer($data)
    {
        $this->protect(false);
        $this->insert($data);
        $this->protect(true);
    }
}
