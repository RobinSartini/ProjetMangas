<?php

namespace App\dao;

use Illuminate\Support\Facades\DB;
use App\Exceptions\MonException;

class ServiceDessinateur
{
    public function getIdDessinateur(){
        return $this->getKey();
    }

    public function getListeDessinateur(){
        try {
            $query = DB::table('dessinateur')->get();
            return $query;
        }catch (QueryException $e){
            throw new MonException($e->getMessage(),5);
        }
    }

    public function getAuteur($id){
        $query = DB::table('dessinateur')
            ->select()
            ->where('id_dessinateur', '=', $id)
            ->first();
        return $query;
    }
}
