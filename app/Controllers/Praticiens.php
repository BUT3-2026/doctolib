<?php

namespace App\Controllers;

use App\Models\PraticiensModel;
use CodeIgniter\Controller;

class Praticiens extends Controller
{
    public function index($id_specialite = null)
    {
        $model = model(PraticiensModel::class);

        // Récupération de l'ID via GET s'il n'est pas transmis directement
        if ($id_specialite === null) {
            $id_specialite = $this->request->getGet('specialite');
        }

        // Récupérer la liste complète des spécialités
        $specialites = $model->getSpecialites();

        // Filtrage des praticiens
        if ($id_specialite !== null && $id_specialite !== '') {
            $praticiens = $model->getPraticiensBySpecialite($id_specialite);
            
            $libelle_specialite = !empty($praticiens) ? $praticiens[0]['libelle'] : '';
            $title = $libelle_specialite 
                ? "Visualisation des praticiens dont la spécialité est : $libelle_specialite"
                : "Aucun praticien trouvé pour cette spécialité";
        } else {
            $praticiens = $model->getPraticiens();
            $title = "Visualisation de tous les praticiens";
        }

        $data = [
            'praticiens'       => $praticiens,
            'specialites'      => $specialites,
            'selected_spec_id' => $id_specialite,
            'title'            => $title,
        ];

        echo view('templates/header', $data);
        echo view('praticiens/view', $data);
        echo view('templates/footer', $data);
    }
}