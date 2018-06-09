<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoleSeller extends Model
{
     protected $table='role_sellers';
     protected $fillable=['role_id','seller_id'];
     protected $primaryKey='id';
}
