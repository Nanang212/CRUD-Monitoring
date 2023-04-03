<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class monitoring extends Model
{
    use HasFactory;
    protected $table = "monitoring";
    public $timestamps = false;
    protected $fillable = [
        'project_name',
        'client',
        'project_leader',
        'start_date',
        'end_date',
        'progress',
    ];
}
