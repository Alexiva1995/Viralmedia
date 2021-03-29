<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;


class Config extends Model implements HasMedia
{
    use HasMediaTrait;

    protected $table = 'config';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'description', 'keyword', 'status', 'term', 
        // 'politic'
    ];


    public function getPhotoUrlAttribute()
    {
        if($this->getMedia('photo')->isEmpty())
        {
            return $this->role == "completion specialist" ?  "/img/completion_photo.png" : "/img/user_photo.jpg";
        } else {
            return $this->getMedia('photo')->first()->file;
        }
    }

    public function getIconUrlAttribute()
    {
        if($this->getMedia('icon')->isEmpty())
        {
            return $this->role == "completion specialist" ?  "/img/completion_icon.png" : "/img/user_icon.jpg";
        } else {
            return $this->getMedia('icon')->first()->file;
        }
    }

}
