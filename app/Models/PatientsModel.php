<?php

namespace App\Models;

use CodeIgniter\Model;

class PatientsModel extends Model
{
    protected $table = 'patient';

    public function getPatients()
    {
             
        $results = $this -> orderby('nom_patient','ASC');
        $results = $this ->find();

    return $results;
    }

}