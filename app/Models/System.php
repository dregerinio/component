<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class System extends Model
{    
    protected $table = 'component_status';
    public $timestamps = false;
}
