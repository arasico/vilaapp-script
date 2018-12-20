<?php

namespace App;

use App\Inside\Constants;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    protected $table = Constants::CONTACT_US_DB;
    protected $fillable = ['name', 'email', 'phone', 'message', 'ipAddress'];
}
