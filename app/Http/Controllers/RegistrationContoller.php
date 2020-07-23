<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;

class RegistrationContoller extends Controller
{

  protected function validator(array $data)
  {
      return Validator::make($data, [
          'name' => ['required', 'string', 'max:255'],
          'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
          'password' => ['required', 'string', 'min:8', 'confirmed'],
      ]);
  }



    public function store()
    {
      $this->validate(request(), [
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required|comfirmed',
            'major' => 'required',
            'university' => 'required'
        ]);

        $user = User::create(request(['username', 'email', 'password','university','major']));
        dd($user);
        // auth()->login($user);

        return redirect()->to('/login');

    }
}
