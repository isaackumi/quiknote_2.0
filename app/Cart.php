<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'note_id','user_id'
    ];

    public function user(){

        return $this->belongsTo(User::class);

    }


    public function note(){

        return $this->belongsTo(Note::class);

    }
}
