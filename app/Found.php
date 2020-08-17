<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Found extends Model
{
    protected $table='founds';
    protected $primaryKey='id';
    protected $fillable = ['categorys_id','title', 'description','places_id','name','gmail','numberphone'];
    protected $dates =['created_at','updated_at'];

    public function Category()
    {
        return $this->belongsTo(Category::class,'categorys_id','id');
    }

    public function Place()
    {
        return $this->belongsTo(Place::class,'places_id','id');
    }
}
