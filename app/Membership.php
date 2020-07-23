<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


//when u start creating models like this, then we want to use eloquent
class Membership extends Model
{
    //1. we have to declar the field we will accept from the html form. like so
    protected $fillable = [
        "momo","package_name", "user_id", "network"
    ]; // what we need from the frontend


    //now we have to define the model relationships, in other for us to get data from db

    //relationship type = membership belongs to a user
    public function user(){
        //return $this->belongsTo("App\User"); // or
        return $this->belongsTo(User::class);

        // they are all the same
    }
}
