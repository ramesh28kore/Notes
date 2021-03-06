<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    //
    protected $fillable = [
        'title' , 'description'
    ];


    public function user(){
        return $this->belongsTo(\App\User::class);
    }
}
