<?php

namespace App\Controllers;

use App\Models\PraticiensModel;
use CodeIgniter\Controller;

class Praticiens extends Controller
{
    public function index($id_specialite)
    {
        $model = model(PraticiensModel::class);

        $praticiens = $model->getPraticiensBySpecialite($id_specialite);

        $libelle_specialite = $praticiens[0]['libelle'];

        $data = [

            'praticiens' => $praticiens,

            'title' => "Visualisation de tous les praticiens de la BDD dont la spécialité est : $libelle_specialite",
        ];

        echo view('templates/header', $data);
        echo view('praticiens/view', $data);
        echo view('templates/footer', $data);

    }

}