<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table='banners';
    protected $guarded='=b_id';
    protected $primaryKey='b_id';
    protected $fillable=['image'];
}