<?php

namespace App\dao;

use Illuminate\Support\Facades\DB;
use App\Exceptions\MonException;

class ServiceScenariste
{
    public function getListeScenaristes(){
        try {
            $query = DB::table('scenariste')->get();
            return $query;
        }catch (QueryException $e){
            throw new MonException($e->getMessage(),5);
        }
    }
}
