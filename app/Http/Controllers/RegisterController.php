<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
    public function show()
    {
        return view('Auth.registesr');

    }
    public function register(RegisterRequest $request)
    {
        $imageName = time().'.'.$request->img->extension();
        $request->img->move(public_path('img'), $imageName);

        $lastId = User::latest('id')->value('id');
        $genId = $lastId + 1;
        $empid = str_pad($genId, 3, '0', STR_PAD_LEFT);

        $user=User::create([
            'name'=>$request->username,
            'email'=>$request->email,
            'emp_code'=>$empid,
            'img'=>$imageName,
            'password'=>Hash::make($request->password)
        ]);
        auth()->login($user);
        return redirect('/')->with('success','Account created successful');
    }
}
