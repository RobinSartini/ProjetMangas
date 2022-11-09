<?php

namespace App\metier;

use Illuminate\Database\Eloquent\Model;
use DB;

class Dessinateur extends Model
{
    protected $table = 'dessinateur';
    protected $primaryKey = 'id_dessinateur';
    public $timestamps = false;
    protected $fillable = [
        'id_dessinateur',
        'nom_dessinateur',
        'prenom_dessinateur'
    ];


}
