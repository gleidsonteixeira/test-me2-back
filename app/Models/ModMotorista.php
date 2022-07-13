<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModMotorista extends Model
{

    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'updated_date';

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
        return $this->hasOne("App\Models\ModCarro", "carro_id");
    }
}
