<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class unit extends Model
{
    use HasFactory;

    public function ingredients()
    {
        return $this->hasMany(ingredients::class, 'unit_id');
    }
}
