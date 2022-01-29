<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectGroup extends Model
{
    use HasFactory;
    protected $table = "project_groups";
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
