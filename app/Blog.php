<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //table name
    protected $table = 'blogs';

    //primary key
    public $primaryKey = 'id';

    //Timestamps
    public $timestamps = 'true';
}
