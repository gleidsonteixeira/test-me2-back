<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModCarro extends Model
{

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $primaryKey = 'carro_id';
    protected $table = 'mod_carro';
    protected $fillable = [
        'carro_id',
        'carro_modelo',
        'carro_marca',
        'carro_placa',
        'carro_cor',
    ];

    public function motorista()
    {
        return $this->hasOne("App\Models\ModMotorista", "carro_id", "carro_id");
    }
}
