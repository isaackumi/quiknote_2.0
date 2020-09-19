<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;
class Note extends Model
{


//    use SearchableTrait, Searchable;

    protected $fillable = [
        "note_title","note_thumbnail","note_description","note_type","note_pdf","note_pdf_image_sample",
        "note_creator_achievements","note_price","user_id","course_name"
    ];

    protected $searchable = [
        /**
         * Columns and their priority in search results.
         * Columns with higher values are more important.
         * Columns with equal values have equal importance.
         *
         * @var array
         */
        'columns' => [
            'notes.note_type' => 10,
            'notes.note_title' => 10,
            'notes.price' => 9,
            'notes.note_description' =>7 ,
            'notes.course_name' => 6,
        ],
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
