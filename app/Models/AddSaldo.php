<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AddSaldo extends Model
{
    protected $table = 'add_saldos';

    protected $fillable = [
        'iduser', 'saldo', 'metodo_pago', 'id_transacion', 'estado',
        'fecha_creacion', 'fecha_procesado'
    ];

    /**
     * Permite obtener la informacion de un usuario asociado a una orden de saldo
     *
     * @return void
     */
    public function getUser()
    {
        return $this->belongsTo('App\Models\User', 'iduser', 'id');
    }
}
