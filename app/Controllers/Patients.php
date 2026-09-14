<?php

namespace App\Controllers;

use App\Models\PatientsModel;
use CodeIgniter\Controller;

class Patients extends Controller
{
    public function index()
    {
        $model = model(PatientsModel::class);

        $data = [

            'patients' => $model->getPatients(),

            'title' => "Visualisation de tous les patients de la BDD",
        ];

        echo view('templates/header', $data);
        echo view('patients/view', $data);
        echo view('templates/footer', $data);

    }

}