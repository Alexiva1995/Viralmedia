<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;


class User extends Authenticatable implements HasMedia

{
    use Notifiable;
    use HasMediaTrait;




    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'last_name', 'email', 'password', 'whatsapp',
        'fullname', 'referred_id', 'admin', 'balance', 'status',
        'wallet', 'id_pais','utc','address','website',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ]; 

    /**
     * Permite obtener la informacion del pais asociado a este usuario
     *
     * @return void
     */
    public function getCountry()
    {
        return $this->belongsTo('App\Models\Country', 'id', 'id_pais');
    }

    /**
     * Permite obtener todas las ordenes de compra de saldo realizadas
     *
     * @return void
     */
    public function getSaldos()
    {
        return $this->hasMany('App\Models\AddSaldo', 'iduser');
    }

    /**
     * Permite obtener todas las ordenes de compra de saldo realizadas
     *
     * @return void
     */
    public function getWallet()
    {
        return $this->hasMany('App\Models\Wallet', 'iduser');
    }

    /**
     * Permite obtener las ordenes de servicio asociada a una categoria
     *
     * @return void 
     */
    public function getUserOrden()
    {
        return $this->hasMany('App\Models\OrdenService', 'iduser');
    }


    public function getPhotoUrlAttribute()
    {
        if($this->getMedia('photo')->isEmpty())
        {
            return $this->role == "completion specialist" ?  "/img/completion_photo.png" : "/img/user_photo.jpg";
        } else {
            return $this->getMedia('photo')->first()->file;
        }
    }

}
