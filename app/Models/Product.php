<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    protected $appends = [
        'total_quantity',
        'image_path',
    ];

    public function units()
    {
        //
    }

    public function Productunit()
    {
        return $this->hasMany('App\Models\Productunit');
    }


    public function getTotalQuantityAttribute()
    {
        $total=0 ;
           $productunit = productUnit::where('product_id', $this->id)->get();
           foreach( $productunit as $pd){
            $unit = Unit::find($pd->unit_id);
         $total=$total+ $pd->amount*$unit->modifier;
           }
            return $total;
    }


    public function TotalQuantityByUnitIdAttribute($unit_id)
    {
        $total=0 ;
        $unit = Unit::find($unit_id);
        $t=$this->getTotalQuantityAttribute();
        $total=$t/($unit->modifier);
        $this->total_quantity_by_unit_id=$total;
    }



    public function getImagePathAttribute()
    {
        $image=Image::where('o_id',$this->id)->where('o_type','product')->first();
        if($image!=null)
        return $image->path;
        else
        return ;
    }

}
