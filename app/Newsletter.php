<?php

namespace App;

use App\Inside\Constants;
use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    protected $table = Constants::NEWSLETTER_DB;
    protected $fillable = ['email'];
}
