<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    public function getUniversity()
    {
        return $this->belongsTo(university::class,'university_id','id');
    }

}
