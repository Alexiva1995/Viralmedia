<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = [
        'name', 'sorting_number', 'status', 'description'
    ];

    /**
     * Permite obtener a todos los servicios de una categoria asociada
     *
     * @return void
     */
    public function getServices()
    {
        return $this->hasMany('App\Models\Service', 'categories_id');
    }

    /**
     * Permite obtener las ordenes de servicio asociada a una categoria
     *
     * @return void
     */
    public function getCategorieOrden()
    {
        return $this->hasMany('App\Models\OrdenService', 'categories_id');
    }
}
