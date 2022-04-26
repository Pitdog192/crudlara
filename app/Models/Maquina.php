<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\MaquinaController;

class Maquina extends Model
{
    use HasFactory;

    public function scopeProcesador($query,$procesador){
        if($procesador){
            return $query->where('procesador','like',"%$procesador%");
        }
    }

    public function scopeRam($query,$ram){
        if($ram){
            return $query->where('ram','like',"%$ram%");
        }
    }

    public function scopeWindows($query,$windows){
        if($windows){
            return $query->where('windows','like',"%$windows%");
        }
    }

    public function scopeArea($query,$area){
        if($area){
            return $query->where('area','like',"%$area%");
        }
    }

    public function scopeSector($query,$sector){
        if($sector){
            return $query->where('sector','like',"%$sector%");
        }
    }

    public function scopeUsuario($query,$usuario){
        if($usuario){
            return $query->where('usuario','like',"%$usuario%");
        }
    }
    
    public function scopeInventario($query,$inventario){
        if($inventario){
            return $query->where('inventario','like',"%$inventario%");
        }
    }
}


