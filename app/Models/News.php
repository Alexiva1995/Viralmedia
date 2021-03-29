<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class News extends Model implements HasMedia

{
    use HasMediaTrait;

    protected $table = 'news';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'description', 'type', 'status', 'date_start', 'date_end'
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

}
