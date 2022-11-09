<?php

namespace App\metier;

use Illuminate\Database\Eloquent\Model;
use DB;

class Genre extends Model
{
    protected $table = 'genre';
    protected $primaryKey = 'id_genre';
    public $timestamps = false;
    protected $fillable = [
        'id_genre',
        'lib_genre'
    ];


}
