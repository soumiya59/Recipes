<?php

namespace App\Models;

use App\Models\unit as ModelsUnit;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use SebastianBergmann\CodeCoverage\Report\Xml\Unit;

class ingredient extends Model
{
    use HasFactory;
    protected $fillable = [
        'ingredient' , 
        'unit_id' , 
        'recipe_id' , 
        'quantity'
    ];

    public function unit()
    {
        return $this->belongsTo(ModelsUnit::class,  'unit_id');
    }

}
