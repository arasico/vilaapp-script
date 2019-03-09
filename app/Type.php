<?php

namespace App;

use App\Inside\Constants;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Type extends Model
{
    use SoftDeletes;
    protected $table = Constants::TYPE_DB;
    protected $fillable = [
        'title_en', 'title_fa'
    ];

    protected $dates = ['deleted_at'];
}
