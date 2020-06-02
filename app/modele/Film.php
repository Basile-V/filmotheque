<?php

namespace App\modele;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    public $timestamps = false;
    protected $fillable = ['titre', 'anneeSortie', 'description', 'categorie_id'];


    public function categorie()
    {
        return $this->belongsTo(Categorie::class,'categorie_id');
    }
}
