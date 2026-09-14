<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {

        $data = [

            'title' => 'Liste des fonctionnalités de l\'application "Doctolib"'

        ];

        echo view('templates/header',$data);
        echo view('welcome');
        echo view('templates/footer');
    }

    public function test(): string
    {
        return view('page_statique');
    }
}
