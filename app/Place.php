<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $table='places';
    protected $primaryKey='id';
    protected $fillable = ['name_place'];
    protected $dates =['created_at','updated_at'];

    public function losts()
    {
        return $this->hasMany(Lost::class,'places_id','id','foreign_key');
        
    }
    public function founds()
    {
        return $this->hasMany(Found::class,'places_id','id','foreign_key');
    }
}
