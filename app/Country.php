<?php

namespace App;

use App\Inside\Constants;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Country extends Model
{
    use SoftDeletes;
    protected $table = Constants::COUNTRY_DB;
    protected $fillable = [
        'country_en', 'city_en', 'country_fa', 'city_fa'
    ];

    protected $dates = ['deleted_at'];

}
