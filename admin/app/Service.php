<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Service extends Model
{

    protected $table = 'services';
    protected $primaryKey = 'id';
    protected $fillable = ['nom', 'description', 'image'];
}
