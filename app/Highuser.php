<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class highuser extends Model
{
    //
    
    use SoftDeletes;
    protected $primaryKey = 'id' ;
    protected $date=['deleted_at'];



}
