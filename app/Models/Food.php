<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $table='foods';
    protected $guarded='=f_id';
    protected $primaryKey='f_id';
    protected $fillable=['r_id', 'name', 'image', 'price', 'stock', 'details', 'delivery_free'];
}