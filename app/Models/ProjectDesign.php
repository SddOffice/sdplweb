<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectDesign extends Model
{
    use HasFactory;
    protected $table = 'project_designs';
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
