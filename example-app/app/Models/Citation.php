<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citation extends Model
{
    use HasFactory;

    protected $table = 'citation';
    protected $primaryKey = 'id_citation';
    public $timestamps = false;

    protected $fillable = [
        'id_citation',
        'auteur_citation',
        'valeur_citation',
        'image_auteur',
        'fonction_auteur'
    ];
}
