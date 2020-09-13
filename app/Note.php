<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{



    protected $fillable = [
        "note_title","note_thumbnail","note_description","note_type","note_pdf","note_pdf_image_sample",
        "note_creator_achievements","note_price","user_id","course_name"
    ];

    public function user(){

        return $this->belongsTo(User::class);

    }

    public function cart()
    {
        // you always have to return the relationship as instance
        return $this->hasMany(Cart::class);
    }

    public function comment()
    {
        // you always have to return the relationship as instance
        return $this->hasMany(Comment::class);
    }

    public function transaction()
    {
        // you always have to return the relationship as instance
        return $this->hasMany(TransactionHistory::class);
    }
}
