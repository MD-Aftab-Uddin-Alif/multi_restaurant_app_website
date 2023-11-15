<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $table='restaurants';
    protected $guarded='r_id';
    protected $primaryKey='r_id';
    protected $fillable=['a_id', 'name', 'image', 'address'];
}