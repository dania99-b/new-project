<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productunit extends Model
{
    use HasFactory;
    public $table = "product_unit";

    protected $fillable = [
        'amount',
        'product_id',
        'unit_id'
    ];

    public function Unit()
    {
        return $this->belongsTo('App\Models\Unit');
    }

    public function Product()
    {
        return $this->belongsTo('App\Models\Product');
    }

}
