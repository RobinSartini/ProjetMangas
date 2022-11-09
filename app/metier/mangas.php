<?php

namespace App\metier;

use App\Exceptions\MonException;
use Illuminate\Database\Eloquent\Model;
use DB;
use Illuminate\Database\QueryException;


class mangas extends Model
{
    protected $table = 'manga';
    protected $primaryKey = 'id_manga';
    public $timestamps = false;
    protected $fillable = [
        'id_manga',
        'id_dessinateur',
        'id_scenariste',
        'id_genre',
        'prix',
        'titre',
        'couverture',
        ''
    ];


}
