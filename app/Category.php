<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table='categorys';
    protected $primaryKey='id';
    protected $fillable = ['name_category'];
    protected $dates =['created_at','updated_at'];

    public function losts()
    {
        return $this->hasMany(Lost::class,'categorys_id','id','foreign_key');
    }
    public function founds()
    {
        return $this->hasMany(Found::class,'categorys_id','id','foreign_key');
    }

    
}
