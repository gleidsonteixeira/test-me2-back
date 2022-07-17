<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModMotorista extends Model
{

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $primaryKey = 'motorista_id';
    protected $table = 'mod_motorista';
    protected $fillable = [
        'motorista_id',
        'motorista_nome',
        'motorista_telefone',
        'motorista_cnh',
        'carro_id'
    ];

    public function carro()
    {
        return $this->hasOne("App\Models\ModCarro", "carro_id", "carro_id");
    }
}
