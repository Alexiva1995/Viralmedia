<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'countries';

    protected $fillable = [
        'name', 'slug', 'phone_prefix', 'status'
    ];

    /**
     * Permite obtener a todos los usuarios asociado a un pais
     *
     * @return void
     */
    public function getUsers()
    {
        return $this->hasMany('App\Models\User', 'id_pais');
    }
    
}
