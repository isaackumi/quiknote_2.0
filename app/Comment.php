<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    protected $fillable = [
        'note_id','photo_url','comment_name','comment_university','comment_message'
    ];
    public function note(){

        return $this->belongsTo(Note::class);


    }
}
