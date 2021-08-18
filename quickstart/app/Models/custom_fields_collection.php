<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class custom_fields_collection extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'custom_fields_collections';

    protected $fillable = [
        'user_id', 'position', 'additional_info', 'experience'
    ];
}
