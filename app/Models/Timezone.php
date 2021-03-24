<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Timezone extends Model
{
    protected $table = 'time_zone';

    protected $fillable = [
        'list_value','list_text','list_utc'
    ];

}
