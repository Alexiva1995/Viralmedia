<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';

    protected $fillable = [
        'package_name', 'categories_id', 'minimum_amount', 'maximum_amount', 'price',
        'status', 'type_services', 'drip_feed', 'type', 'api_provide_name',
        'api_service_id', 'description', 'input_adicionales'
    ];

    /**
     * Permite obtener la informacion de la categoria asociada a este servicio
     *
     * @return void
     */
    public function getCategories()
    {
        return $this->belongsTo('App\Models\Category', 'id', 'categories_id');
    }

    /**
     * Permite obtener las ordenes de servicio asociada a un servicio
     *
     * @return void
     */
    public function getServiceOrden()
    {
        return $this->hasMany('App\Models\OrdenService', 'services_id');
    }

}
