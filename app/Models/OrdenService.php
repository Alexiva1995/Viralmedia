<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class OrdenService extends Model
{
    //
    protected $table = 'orden_services';

    protected $dates = ['created_at','updated_at'];

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

    public function getCreatedAtTimezoneAttribute()
    {
        if ($this->created_at != null) {
            return $this->created_at;
        //return Carbon::createFromTimeString($this->created_at, 'America/Edmonton')->setTimezone('America/Caracas')->format('Y-m-d');
    }
    
    return null;
    }

    public function getUpdateAtTimezoneAttribute()
    {
        if ($this->updated_at != null) {
            return $this->updated_at;
        // return Carbon::createFromTimeString($this->updated_at, 'America/Edmonton')->setTimezone('America/Caracas')->format('Y-m-d H:i:s');
    }
    
    return null;
    }
}
