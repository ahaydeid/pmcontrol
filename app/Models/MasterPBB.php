<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterPBB extends Model
{
    use HasFactory;
    protected $table = 'master_pbb';
    protected $guarded = ['id'];

}