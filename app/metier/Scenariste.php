<?php


namespace App\metier;

use Illuminate\Database\Eloquent\Model;
use DB;

class Scenariste extends Model
{
    protected $table = 'dessinateur';
    protected $primaryKey = 'id_dessinateur';
    public $timestamps = false;
    protected $fillable = [
        'id_scenariste',
        'nom_scenariste',
        'prenom_scenariste'
    ];


}
