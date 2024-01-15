<?php

namespace App\Controllers;

use App\Models\HamburguerModel;
use App\Models\IngredientesModel;
use App\Models\HamburguerIngredientesModel;

class MainController extends BaseController
{
    public function index()
    {
        $hamburguersModel = new hamburguerModel();
        $hamburguers = $hamburguersModel->findAll();

        return view('index', compact('hamburguers'));
    }

    public function ingredientes()
    {
    $ingredientesModel = new IngredientesModel();
    $ingredientes = $ingredientesModel->findAll();

    return view('ingredientes', compact('ingredientes'));
    }

    public function remover($id)
{
    $hamburguerModel = new HamburguerModel();
    $hamburguer = $hamburguerModel->find($id);

    if ($hamburguer) {
        $hamburguerModel->delete($id);

        return redirect()->to('/');
    } else {
        return redirect()->to('/')->with('error', 'Hambúrguer não encontrado.');
    }
}
    
    public function removerIngredientes($id)
    {
    $ingredientesModel = new IngredientesModel();
    $ingrediente = $ingredientesModel->find($id);

    if ($ingrediente) {
        if ($ingrediente['quantidade'] > 1) {
            $ingredientesModel->update($id, ['quantidade' => $ingrediente['quantidade'] - 1]);
        } else {
            $ingredientesModel->delete($id);
        }

        return redirect()->to('ingredientes');
    } else {
        return redirect()->to('ingredientes')->with('error', 'Ingrediente não encontrado.');
    }
    }

    public function editarHamburguer($id)
{
    $hamburguerModel = new HamburguerModel();
    $hamburguer = $hamburguerModel->find($id);

    if ($hamburguer) {
        return view('editarHamburguer', ['hamburguer' => $hamburguer]);
    } else {
        return redirect()->to('/')->with('error', 'Hambúrguer não encontrado.');
    }
}

public function salvarEdicaoHamburguer($id)
{
    $hamburguerModel = new HamburguerModel();
    $hamburguer = $hamburguerModel->find($id);

    if ($hamburguer) {
        $dadosHamburguer = $this->request->getPost();
        $hamburguerModel->update($id, $dadosHamburguer);

        return redirect()->to('/');
    } else {
        return redirect()->to('/')->with('error', 'Hambúrguer não encontrado.');
    }
}

    public function editarIngrediente($id)
    {
    $ingredientesModel = new IngredientesModel();
    $ingrediente = $ingredientesModel->find($id);

    if ($ingrediente) {
        return view('editarIngrediente', ['ingrediente' => $ingrediente]);
    } else {
        return redirect()->to('ingredientes')->with('error', 'Ingrediente não encontrado.');
    }
    }

    public function salvarEdicaoIngrediente($id)
{
    $ingredientesModel = new IngredientesModel();
    $ingrediente = $ingredientesModel->find($id);

    if ($ingrediente) {
        $dadosIngrediente = $this->request->getPost();
        $ingredientesModel->update($id, $dadosIngrediente);

        return redirect()->to('ingredientes');
    } else {
        return redirect()->to('ingredientes')->with('error', 'Ingrediente não encontrado.');
    }
}

public function desativarHamburguer($id)
    {
        $hamburguerModel = new HamburguerModel();
        $hamburguer = $hamburguerModel->find($id);

        if ($hamburguer) {
            $hamburguerModel->update($id, ['ativo' => false]);

            return redirect()->to('/');
        } else {
            return redirect()->to('/')->with('error', 'Hambúrguer não encontrado.');
        }
    }

    public function reativarHamburguer($id)
    {
        $hamburguerModel = new HamburguerModel();
        $hamburguer = $hamburguerModel->find($id);

        if ($hamburguer) {
            $hamburguerModel->update($id, ['ativo' => true]);

            return redirect()->to('/');
        } else {
            return redirect()->to('/')->with('error', 'Hambúrguer não encontrado.');
        }
    }

    public function criarHamburguer()
    {
        return view('criarHamburguer');
    }
    

    public function salvarHamburguer()
    {
        $hamburguerModel = new HamburguerModel();
        $dadosHamburguer = $this->request->getPost();
        $hamburguerModel->salvarHamburguer($dadosHamburguer);
    
        return redirect()->to('/');
    }

    public function criarIngrediente()
    {
        return view('criarIngrediente');
    }

    public function salvarIngrediente()
    {
        $ingredientesModel = new IngredientesModel();
        $dadosIngrediente = $this->request->getPost();
        $ingredientesModel->criarIngrediente($dadosIngrediente);
    
        return redirect()->to('ingredientes');
    }

}