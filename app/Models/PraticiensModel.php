<?php

namespace App\Models;

use CodeIgniter\Model;

class PraticiensModel extends Model
{
    protected $table      = 'praticien';
    protected $primaryKey = 'id_praticien';

    /**
     * Récupère la liste de toutes les spécialités pour le menu déroulant
     */
    public function getSpecialites()
    {
        return $this->db->table('specialite')
                        ->orderBy('libelle', 'ASC')
                        ->get()
                        ->getResultArray();
    }

    /**
     * Récupère tous les praticiens avec toutes leurs coordonnées et leur spécialité
     */
    public function getPraticiens()
    {
        return $this->select('praticien.*, specialite.libelle')
                    ->join('praticien_specialite', 'praticien.id_praticien = praticien_specialite.praticien_id', 'left')
                    ->join('specialite', 'praticien_specialite.specialite_id = specialite.id_specialite', 'left')
                    ->orderBy('nom_praticien', 'ASC')
                    ->findAll();
    }

    /**
     * Récupère les praticiens filtrés par une spécialité précise
     */
    public function getPraticiensBySpecialite($id_specialite)
    {
        return $this->select('praticien.*, specialite.libelle')
                    ->join('praticien_specialite', 'praticien.id_praticien = praticien_specialite.praticien_id')
                    ->join('specialite', 'praticien_specialite.specialite_id = specialite.id_specialite')
                    ->where('specialite.id_specialite', $id_specialite)
                    ->orderBy('nom_praticien', 'ASC')
                    ->findAll();
    }
}