<?php

namespace App\Models;

use CodeIgniter\Model;

class PraticiensModel extends Model
{
    protected $table = 'praticien';

    public function getPraticiens()
    {
             
        $results = $this -> orderby('nom_praticien','ASC');
        $results = $this ->find();

    return $results;
    }

    public function getPraticiensBySpecialite($id_specialite)
    {
        $results = $this-> join ('praticien_specialite','praticien.id_praticien = praticien_specialite.praticien_id')
                         -> join ('specialite','praticien_specialite.specialite_id = specialite.id_specialite')
                         -> where ('specialite.id_specialite',$id_specialite)
                         -> orderby('nom_praticien','ASC')
                         -> findAll();

        return $results;
    }

}