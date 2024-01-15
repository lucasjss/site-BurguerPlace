<?php
namespace App\Models;

use CodeIgniter\Model;

class HamburguerIngredientesModel extends Model
{
    protected $table = 'Hamburguer_Ing';
    protected $primaryKey = ['id_Hamburguer', 'id_ingrediente']; 
    protected $allowedFields = ['id_Hamburguer', 'id_ingrediente', 'quantidade_usada'];
}