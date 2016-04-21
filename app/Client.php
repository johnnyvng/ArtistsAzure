<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //
    protected $guarded = ['clients_name','address','city','zipcode','phone_number'];
}
