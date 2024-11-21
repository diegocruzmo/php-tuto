<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    protected $table = "notes";
    protected $fillable = ["title", "description", "done"];
    // protected $guarded = ["id", "created_at", "updated_at"];
    // protected $casts = ["description" => "string"];
    // protected $hidden = ["password"];
}
