<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransactionHistory extends Model
{
    protected $fillable = [
        "user_id","note_id"
    ];

    public function user(){

        return $this->belongsTo(User::class);

    }

    public function note(){

        return $this->belongsTo(Note::class);

    }
}
