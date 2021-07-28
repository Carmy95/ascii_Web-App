<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membre extends Model
{
    use HasFactory;

    protected $fillable = ['nom','prenom','sexe','date2naissance','lieu2naissance','poste','adresse','nationnalite','permis','competence','biographie','etat_id','photo','cv'];
}
