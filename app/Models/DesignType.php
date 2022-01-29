<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DesignType extends Model
{
    use HasFactory;
    protected $table = "design_types";
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
