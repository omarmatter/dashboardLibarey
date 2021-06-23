<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{

    protected  $guarded=[];

    public function categories(){
        return $this->belongsTo(categorey::class,'categories_id','id');
    }
    public function author(){
        return $this->belongsTo(author::class,'author_id','id');
    }
    public function publishing(){
        return $this->belongsTo(publish::class,'publishing_id','id');
    }
}
