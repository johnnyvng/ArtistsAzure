<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    //
     protected $fillable = ['file_name', 'mime_type', 'file_size', 'file_path', 'status', 'type'];
}
