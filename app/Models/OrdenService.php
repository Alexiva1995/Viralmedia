<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrdenService extends Model
{
    //
    protected $table = 'orden_services';

    protected $fillable = [
        'iduser', 'categories_id', 'service_id', 'cantidad', 'link', 
        'usuario', 'email', 'email_respaldo', 'whatsapp', 'total', 
        'status'
    ];


    /**
     * Permite obtener la categoria de una orden de servicio
     *
     * @return void
     */
    public function getOrdenCategorie()
    {
        return $this->belongsTo('App\Models\Category', 'categories_id', 'id');
    }

    /**
     * Permite obtener el servicio de una orden de servicio
     *
     * @return void
     */
    public function getOrdenService()
    {
        return $this->belongsTo('App\Models\Service', 'service_id', 'id');
    }

    /**
     * Permite obtener al usuario de una orden de servicio
     *
     * @return void
     */
    public function getOrdenUser()
    {
        return $this->belongsTo('App\Models\User', 'iduser', 'id');
    }
}
