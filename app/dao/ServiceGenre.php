<?php

namespace App\dao;

use Illuminate\Support\Facades\DB;
use App\Exceptions\MonException;

class ServiceGenre
{
    public function getIdGenre(){
        return $this->getKey();
    }

    public function getListeGenres(){
        try {
            $query = DB::table('genre')->get();
            return $query;
        }catch (QueryException $e){
            throw new MonException($e->getMessage(),5);
        }
    }
}
