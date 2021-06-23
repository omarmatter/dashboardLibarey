<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class publish extends Model
{
    protected  $guarded=[];

    public function books(){
        return $this->hasMany(books::class);
    }
}
