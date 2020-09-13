<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use Image;

class UserProfileController extends Controller
{
    //
    public function profile(){
        return view('user-profile', array('user' => Auth::user()) );
    }

    public function update_avatar(Request $request){

//        dd($request);

        $this->validate($request, [

            'avatar'=>'required | image|max:1999',


        ]);

        // Handle the user upload of avatar
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filename ) );

            $user = Auth::user();
            $user->photo_url = $filename;
            $user->save();
        }

        return view('user-profile', array('user' => Auth::user()) );

    }
}
