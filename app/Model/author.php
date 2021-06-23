<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class author extends Model
{
    protected  $guarded=[];
        public function books(){
        return $this->hasMany(books::class);
    }

}
