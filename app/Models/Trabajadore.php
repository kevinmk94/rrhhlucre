<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trabajadore extends Model
{
    protected $fillable = [
        'dni',
        'nombres',
        'apellido_p',
        'apellido_m',
        'cargos_id',
        'regimenes_id',
        

    ];

    public function Cargos()
    {
        return $this->hasOne(Cargo::class,'id','cargos_id');
    }
    public function Regimenes()
    {
        return $this->hasOne(Regimene::class,'id','regimenes_id');
    }
    
}
